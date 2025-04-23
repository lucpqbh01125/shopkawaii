<?php
require_once __DIR__ . '/../Models/User.php';

class AuthController {
    public function register($data) {
        $username = trim($data['username']);
        $password = trim($data['password']);
        $email = trim($data['email']);
        $full_name = trim($data['full_name']);
        $gender = $data['gender'];
        $phone = trim($data['phone']);
        $address = trim($data['address']);
        $role = 'buyer'; // mặc định là người mua

        if (empty($username) || empty($password) || empty($email)) {
            return ['success' => false, 'message' => 'Vui lòng điền đầy đủ thông tin.'];
        }

        $userModel = new User();
        if ($userModel->findByEmail($email)) {
            return ['success' => false, 'message' => 'Email đã được sử dụng.'];
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $created = $userModel->create($username, $hashedPassword, $email, $full_name, $gender, $phone, $address, $role);

        if ($created) {
            return ['success' => true, 'message' => 'Đăng ký thành công!'];
        } else {
            return ['success' => false, 'message' => 'Đăng ký thất bại.'];
        }
    }



    public function login($data) {
        $email = trim($data['email']);
        $password = trim($data['password']);
    
        if (empty($email) || empty($password)) {
            return ['success' => false, 'message' => 'Vui lòng nhập email và mật khẩu.'];
        }
    
        $userModel = new User();
        $user = $userModel->findByEmail($email);
    
        if ($user && password_verify($password, $user['password'])) {
            // Lưu thông tin người dùng vào session
            session_start();
            $_SESSION['user'] = [
                'id' => $user['id'],
                'username' => $user['username'],
                'email' => $user['email'],
                'role' => $user['role'],
                'full_name' => $user['full_name']
            ];
            return ['success' => true, 'message' => 'Đăng nhập thành công!'];
        } else {
            return ['success' => false, 'message' => 'Email hoặc mật khẩu không đúng.'];
        }
    }
    

    public function showLogin() {
        include '../Views/Auth/login.php';
    }


}
