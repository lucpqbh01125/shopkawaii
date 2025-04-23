<?php
require_once '../Controllers/AuthController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $auth = new AuthController();
    $result = $auth->login($_POST);

    if ($result['success']) {
        echo "<script>alert('{$result['message']}'); window.location.href='dashboard.php';</script>";
    } else {
        echo "<script>alert('{$result['message']}'); history.back();</script>";
    }
}


require_once '../Config/config.php';

$auth = new AuthController();
$auth->showLogin(); // method showLogin() sẽ load Views/Auth/login.php