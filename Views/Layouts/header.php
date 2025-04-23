<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>KAWAII</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger py-3">
        <div class="container-fluid">
            <!-- Logo + Tên -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="https://img.icons8.com/ios-filled/50/ffffff/shopping-bag.png" alt="logo" width="30" height="30" class="me-2" />
                <strong>QL KAWAII</strong>
            </a>

            <!-- Hệ thống cửa hàng -->
            <div class="d-flex align-items-center text-white me-4">
                <img src="https://img.icons8.com/ios-filled/24/ffffff/shop.png" alt="store" class="me-2" />
                <div>
                    <small>Hệ thống cửa hàng</small><br>
                    <strong>40 cửa hàng</strong>
                </div>
            </div>

            <!-- Thanh tìm kiếm -->
            <form class="d-flex flex-grow-1 mx-3" role="search">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0">
                        <img src="https://img.icons8.com/ios-glyphs/20/000000/search--v1.png" />
                    </span>
                    <input class="form-control border-start-0 border-end-0" type="search" placeholder="Tìm kiếm sản phẩm..." aria-label="Search">
                    <button class="btn btn-light text-danger" type="submit">Tìm kiếm</button>
                </div>
            </form>

            <!-- Icon yêu thích, tài khoản, giỏ hàng -->
            <div class="d-flex align-items-center text-white">
                <div class="text-center mx-2">
                    <img src="https://img.icons8.com/ios-filled/24/ffffff/like.png" />
                    <div><small>Yêu thích</small></div>
                </div>
                <a href="/Views/Auth/login.php" class="text-decoration-none text-white">
                    <div class="text-center mx-2">
                        <img src="https://img.icons8.com/ios-filled/24/ffffff/user.png" alt="Tài khoản">
                        <div><small>Tài khoản</small></div>
                    </div>
                </a>

                <div class="text-center mx-2 position-relative">
                    <img src="https://img.icons8.com/ios-filled/24/ffffff/shopping-cart.png" />
                    <div><small>Giỏ hàng</small></div>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-light text-danger">
                        0
                    </span>
                </div>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>