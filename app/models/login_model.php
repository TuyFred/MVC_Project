<?php

class Login_Model extends Model {
    public function __construct() {
        parent::__construct();
    }

    // Get user by email along with their role
    public function getUserWithRole($email) {
        $sql = "SELECT u.user_id, u.username, u.email, p.password, r.role_name 
                FROM users u
                JOIN roles r ON u.role_id = r.role_id
                JOIN passwords p ON u.user_id = p.user_id
                WHERE u.email = :email LIMIT 1";

        $stm = $this->db->prepare($sql);
        $stm->bindParam(':email', $email);
        $stm->execute();

        return $stm->fetch(PDO::FETCH_ASSOC); // Fetch only one record
    }
}
?>
