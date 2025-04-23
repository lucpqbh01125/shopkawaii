<?php ob_start(); ?>

<div class="container-fluid bg-danger bg-gradient vh-100 d-flex align-items-center justify-content-center">
    <div class="row w-100">
        <!-- Logo và slogan bên trái -->
        <div class="col-md-6 d-none d-md-flex flex-column align-items-center justify-content-center text-white">
            <a href="" target="_blank">
                <img src="/Images/logo.png" alt="Shop Kawaii" style="width: 250px; height: auto;">
            </a>
            <h4 class="text-center fw-bold">Nền tảng thương mại điện tử<br>yêu thích ở Đông Nam Á & Đài Loan</h4>
        </div>

        <!-- Form đăng ký bên phải -->
        <div class="col-md-6 d-flex align-items-center justify-content-center">
            <div class="bg-white rounded-3 shadow p-4" style="width: 100%; max-width: 400px;">
                <h4 class="text-center text-danger fw-bold mb-4">Đăng ký</h4>
                <form method="POST" action="../../Public/register.php">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="username" placeholder="Tên đăng nhập" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Mật khẩu" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="full_name" placeholder="Họ và tên">
                    </div>
                    <div class="row mb-3">
                        <!-- Giới tính (30%) -->
                        <div class="col-md-5 col-6">
                            <select class="form-select" name="gender">
                                <option value="">Giới tính</option>
                                <option value="male">Nam</option>
                                <option value="female">Nữ</option>
                                <option value="other">Khác</option>
                            </select>
                        </div>

                        <!-- Số điện thoại (70%) -->
                        <div class="col-md-7 col-6">
                            <input type="text" class="form-control" name="phone" placeholder="Số điện thoại">
                        </div>
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" name="address" placeholder="Địa chỉ">
                    </div>
                    <button type="submit" class="btn btn-danger w-100" name="register">Đăng ký</button>
                </form>

                <div class="text-center mt-4">
                    <small>Đã có tài khoản? <a href="/Views/Auth/login.php" class="text-danger">Đăng nhập</a></small>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
include_once '../layouts/main.php';
?>