<?php
require_once __DIR__ . '/../Config/database.php';
class Order {
    private $conn;
    private $table = "Orders";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create($data) {
        $query = "INSERT INTO " . $this->table . "
        (user_id, order_code, total_amount, payment_method, shipping_address, note)
        VALUES (?, ?, ?, ?, ?, ?)";
        
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([
            $data['user_id'], $data['order_code'], $data['total_amount'],
            $data['payment_method'], $data['shipping_address'], $data['note']
        ]);
    }

    public function getOrdersByUser($userId) {
        $query = "SELECT * FROM " . $this->table . " WHERE user_id = ? ORDER BY order_date DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
