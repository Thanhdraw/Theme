<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Sinh viên</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        .nav-link {
            font-weight: 500;
        }
        .navbar-nav {
            flex-direction: row;
        }
        .navbar-nav .nav-item {
            margin-left: 15px;
        }
        .form-inline {
            margin-left: auto;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">QLSV</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fas fa-home"></i> Trang chủ</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="studentDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-list"></i> Danh sách sinh viên
                    </a>
                    <div class="dropdown-menu" aria-labelledby="studentDropdown">
                        <a class="dropdown-item" href="#">Tất cả sinh viên</a>
                        <a class="dropdown-item" href="#">Sinh viên mới</a>
                        <a class="dropdown-item" href="#">Sinh viên cũ</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="courseDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-book"></i> Danh sách Khóa học
                    </a>
                    <div class="dropdown-menu" aria-labelledby="courseDropdown">
                        <a class="dropdown-item" href="#">Tất cả khóa học</a>
                        <a class="dropdown-item" href="#">Khóa học mới</a>
                        <a class="dropdown-item" href="#">Khóa học cũ</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-user-plus"></i> Thêm sinh viên</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
</nav>

<!-- Nội dung trang -->
<div class="container my-5 min-vh-100">
    <h1 class="text-center mb-4">Quản lý Sinh viên</h1>
    <p class="lead text-center mb-5">Chào mừng bạn đến với trang quản lý sinh viên.</p>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-list"></i> Danh sách sinh viên</h5>
                    <p class="card-text">Xem và quản lý danh sách sinh viên hiện tại.</p>
                    <a href="#" class="btn btn-primary">Xem danh sách</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-user-plus"></i> Thêm sinh viên</h5>
                    <p class="card-text">Thêm một sinh viên mới vào danh sách.</p>
                    <a href="#" class="btn btn-success">Thêm sinh viên</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-chart-bar"></i> Báo cáo và thống kê</h5>
                    <p class="card-text">Xem báo cáo và thống kê về sinh viên.</p>
                    <a href="#" class="btn btn-info">Xem báo cáo</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-light py-3">
    <div class="container">
        <p class="text-center mb-0">&copy; 2023 QLSV. All rights reserved.</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
