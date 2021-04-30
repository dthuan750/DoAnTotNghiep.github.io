<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <title>iSchool</title>
</head>
<body>
<!-- Start Navigation -->
<nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top ">
    <a class="navbar-brand" href="index.php">tSchool</a>
    <span class="navbar-text">Learn and Implement</span>
    <button class="navbar-toggler" type="button" 
    data-bs-toggle="collapse" 
    data-bs-target="#navbarNavAltMarkup" 
    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <ul class="navbar-nav custom-nav pl-5">
            <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Trang chủ</a></
            li>
            <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Khóa học</a></
            li>
            <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Thông tin của tôi</a></
            li>
            <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Đăng xuất</a></
            li>
            <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Đăng nhập</a></
            li>
            <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Đăng ký</a></
            li>
            <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Phản hồi</a></
            li>
            <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Liên hệ</a></
            li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<!-- End Navigation -->

<!-- Start Video Background -->
<div class="container-fluid remove-vid-marg">
    <div class="vid-parent">
        <video playsinline autoplay muted loop>
            <source src="video/elearning.mp4">
        </video>
        <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
        <h1 class="my-content">Welcome to tSchool</h1>
        <small class="my-content">Learn and Implement</small> <br />
        <a href="#" class="btn btn-danger">Get Started</a>
    </div>
</div>

<!-- End Video Background -->

<!-- Start Text Banner -->
<div class="container-fluid bg-danger txt-banner">
    <div class="row bottom-banner">
        <div class="col-sm">
            <h5><i class="fas fa-book-open mr-3"></i> 100+ Khóa học</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-users mr-3"></i> Giảng viên chuyên nghiệp</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-keyboard mr-3"></i> Truy cập trọn đời</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-rupee-sign mr-3"></i> Đảm bảo hoàn tiền*</h5>
        </div>
    </div>
</div>

<!-- End Text Banner -->

<!-- Start Most Popular Course -->
<div>
    <h1 class="text-center">Popular Course</h1>
    <!-- Start Most Popular Course 1st Card Deck -->
    <div>
        <a href="#" class="btn" style="text-align: left;
        padding:0px; margin:0px;">
        <div>
            <img src="#" class="card-img-top" alt="Guitar" />
            <div>
                <h5 class="card-title">Learn Guitar Easy Way</h5>
                <p class="card-text">Lorem ipsum dolor sit amet
                    consectetur adipising elit. Facilis, nemo.</p>
            </div>
            <div></div>
        </div></a>
    </div>
</div>

<!-- Jquery and Bootstrap JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Font Awesome JS -->
<script src="js/all.min.js"></script>    
</body>
</html>