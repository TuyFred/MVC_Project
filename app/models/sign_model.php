<?php

class Sign_Model extends Model {
    private $usersTable = "Users";
    private $rolesTable = "Roles";
    private $userRolesTable = "UserRoles";

    public function __construct() {
        parent::__construct();
    }

    // Register user and assign a default role (Customer) unless specified
    public function register($data, $roleName = "Customer") {
        try {
            // Insert user data into Users table
            $userId = parent::save($this->usersTable, $data);
            
            if ($userId) {
                // Get the role_id for the specified role
                $roleId = $this->getRoleId($roleName);

                if ($roleId) {
                    // Assign role to the user
                    $userRoleData = [
                        "user_id" => $userId,
                        "role_id" => $roleId
                    ];
                    parent::save($this->userRolesTable, $userRoleData);
                }
            }

            return $userId;
        } catch (Exception $e) {
            error_log("Registration Error: " . $e->getMessage());
            return false;
        }
    }

    // Get role_id by role name
    private function getRoleId($roleName) {
        $role = parent::findOne($this->rolesTable, "role_name", $roleName);
        return $role ? $role["role_id"] : null;
    }

    public function getUserWithRole($email) {
        $sql = "SELECT Users.*, Roles.role_name 
                FROM Users
                JOIN UserRoles ON Users.user_id = UserRoles.user_id
                JOIN Roles ON UserRoles.role_id = Roles.role_id
                WHERE Users.email = :email";
    
        $stmt = $this->db->prepare($sql);  // Use $this->db->prepare()
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();
        
        return $stmt->fetch(PDO::FETCH_ASSOC); // Fetch as associative array
    }
    
}

?>

