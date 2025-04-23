<?php

require_once __DIR__ . '/../Config/database.php';
class Product {
    private $conn;
    private $table = "Products";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllActiveProducts() {
        $query = "SELECT * FROM " . $this->table . " WHERE status = 'active'";
        return $this->conn->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE product_id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $query = "INSERT INTO " . $this->table . "
        (shop_id, category_id, name, description, brand, origin, warranty, price, stock, weight, unit) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([
            $data['shop_id'], $data['category_id'], $data['name'], $data['description'],
            $data['brand'], $data['origin'], $data['warranty'], $data['price'],
            $data['stock'], $data['weight'], $data['unit']
        ]);
    }
}
