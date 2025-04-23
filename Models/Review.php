<?php
require_once __DIR__ . '/../Config/database.php';

class Review {
    public static function getReviewsByProduct($product_id) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM Reviews WHERE product_id = ?");
        $stmt->execute([$product_id]);
        return $stmt->fetchAll();
    }

    public static function addReview($data) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO Reviews (product_id, user_id, rating, comment, created_at) VALUES (?, ?, ?, ?, NOW())");
        return $stmt->execute([
            $data['product_id'], $data['user_id'], $data['rating'], $data['comment']
        ]);
    }
}
?>
