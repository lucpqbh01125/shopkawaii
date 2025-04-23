<?php
require_once __DIR__ . '/../Config/database.php';

class Transaction {
    public static function create($data) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO Transactions (order_id, amount, payment_method, status) VALUES (?, ?, ?, ?)");
        return $stmt->execute([
            $data['order_id'], $data['amount'], $data['payment_method'], $data['status']
        ]);
    }

    public static function getByOrder($order_id) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM Transactions WHERE order_id = ?");
        $stmt->execute([$order_id]);
        return $stmt->fetch();
    }
}
?>
