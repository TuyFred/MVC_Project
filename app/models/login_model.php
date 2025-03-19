<?php

class Login_Model extends Model {
    private $usersTable = "Users";
    private $rolesTable = "Roles";
    private $userRolesTable = "UserRoles";

    public function __construct() {
        parent::__construct();
    }

    // Get user by email along with their role
    public function getUserWithRole($email) {
        $sql = "SELECT Users.*, Roles.role_name 
                FROM Users
                JOIN UserRoles ON Users.user_id = UserRoles.user_id
                JOIN Roles ON UserRoles.role_id = Roles.role_id
                WHERE Users.email = :email";
        
        return parent::findOne($sql, [":email" => $email]);
    }
}
?>

