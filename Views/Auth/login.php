<?php ob_start(); ?>

<div class="container-fluid bg-danger bg-gradient vh-100 d-flex align-items-center justify-content-center">
    <div class="row w-100">
        <!-- Logo và slogan bên trái -->
        <div class="col-md-6 d-none d-md-flex flex-column align-items-center justify-content-center text-white">
            <a href="" target="_blank">
                <img src="/Images/logo.png" alt="Shop Kawaii" style="width: 250px; height: auto;">
            </a>
            <h4 class="text-center fw-bold ">Nền tảng thương mại điện tử<br>yêu thích ở Đông Nam Á & Đài Loan</h4>
        </div>

        <!-- Form đăng nhập bên phải -->
        <div class="col-md-6 d-flex align-items-center justify-content-center">
            <div class="bg-white rounded-3 shadow p-4" style="width: 100%; max-width: 400px;">
                <h4 class="text-center text-danger fw-bold mb-4">Đăng nhập</h4>
                <form method="POST" action="../../Public/login.php">
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Mật khẩu" required>
                    </div>
                    <button type="submit" class="btn btn-danger w-100" name="login">Đăng nhập</button>
                  
                </form>

          <div class="text-center mt-3">
                    <a href="#" class="text-decoration-none text-primary small">Quên mật khẩu</a> |
                    <a href="#" class="text-decoration-none text-primary small">Đăng nhập với SMS</a>
                </div>

                <div class="text-center mt-4">
                    <hr>
                    <span class="text-muted small">HOẶC</span>
                    <hr>
                </div>

                <div class="d-flex justify-content-between gap-2 mt-3">
                    <a href="#" class="btn btn-outline-primary w-50 d-flex align-items-center justify-content-center gap-2">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook" width="20" height="20">
                        <span>Facebook</span>
                    </a>
                    <a href="#" class="btn btn-outline-danger w-50 d-flex align-items-center justify-content-center gap-2">
                        <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" alt="Google" width="20" height="20">
                        <span>Google</span>
                    </a>
                </div>



                <div class="text-center mt-4">
                    <small>Bạn mới biết đến Shopee? <a href="/Views/Auth/register.php" class="text-danger">Đăng ký</a></small>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
include_once(__DIR__ . '/../Layouts/main.php');

?>