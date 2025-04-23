<?php
require_once '../Controllers/AuthController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $auth = new AuthController();
    $result = $auth->register($_POST);

    if ($result['success']) {
        echo "<script>alert('{$result['message']}'); window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('{$result['message']}'); history.back();</script>";
    }
}
