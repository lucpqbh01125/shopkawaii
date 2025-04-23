<?php
require_once __DIR__ . '/../Config/database.php';

class User {
    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function findByEmail($email) {
        $stmt = $this->conn->prepare("SELECT * FROM Users WHERE email = ?");
        $stmt->execute([$email]); // Dùng mảng thay cho bind_param
        return $stmt->fetch();    // PDO::FETCH_ASSOC trả về mảng kết quả
    }

    public function create($username, $password, $email, $full_name, $gender, $phone, $address, $role, $verify_token) {
        $stmt = $this->conn->prepare("INSERT INTO Users (username, password, email, full_name, gender, phone, address, role, verify_token) 
                                      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        return $stmt->execute([$username, $password, $email, $full_name, $gender, $phone, $address, $role, $verify_token]);
    }
    
}
