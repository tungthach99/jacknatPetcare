<?php 
include_once("ketnoi.php");

if(!session_start())
    session_start();
  
  //Nếu chưa đăng nhập thì tự động điều hướng đến trang đăng nhập
  if(!isset($_SESSION['tk']))
    header("location:dangnhap.php")

 ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>QUẢN TRỊ - JACK&NAT PETCARE</title>
  <!-- Favicon -->
  <link href="./assets/img/brand/logo.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="./assets/css/argon.css?v=1.0.0" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <!-- Sidenav -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="../../home.php">
        <img src=".././assets/media/lienhe/logo.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="./assets/img/theme/Cell.png">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Xin chào!</h6>
            </div>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>Thông tin cá nhân</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Cài đặt</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Hoạt động</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Hỗ trợ</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Đăng xuất</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="./assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="ni ni-tv-2 text-primary"></i> Trang chủ
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="?ql=danhmuc/ds">
              <i class="ni ni-align-left-2  text-blue"></i> Danh mục
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="?ql=nhanvien/ds">
              <i class="ni ni-circle-08 text-red"></i> Nhân viên
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="?ql=sanpham/ds">
              <i class="ni ni-shop text-green"></i> Sản phẩm
            </a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="?ql=khachhang/ds">
              <i class="ni ni-single-02 text-yellow"></i> Khách hàng

            </a>
          </li>

			<li class="nav-item">
            <a class="nav-link" href="?ql=magiamgia/ds">
              <i class="fa fa-tags text-yellow"></i> Mã giảm giá

            </a>
          </li>
			
          <li class="nav-item">
            <a class="nav-link" href="?ql=donhang/dsdonhang">
              <i class="ni ni-box-2 text-blue"></i> Đơn hàng
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="?ql=binhluansp/ds">
            <i class="fa fa-comment text-blue"></i> Bình luận sản phẩm
            </a>
          </li>
			
			<li class="nav-item">
            <a class="nav-link" href="?ql=baocao/ds">
            <i class="fa fa-list-alt text-blue"></i> Báo cáo
            </a>
          </li>

        </ul>
      
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex ml-lg-auto">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="./assets/img/theme/Cell.png">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">
					  <a style="color: #fff;" href="dangxuat.php"><?php if(isset($_SESSION['tk'])) echo $_SESSION['tk']['tenhienthi']?>\&nbsp;Đăng xuất</a></span>
                </div>
					
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              
          
              <a href="dangxuat.php" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Đăng xuất</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div class="noidung">
    <?php
           if (isset($_GET['ql']))
           
            include_once "quanly/".$_GET['ql'].".php"; 
    ?>
  </div>
<!--
  <?php 
	//Hiển thị danh sách đơn hàng
      $sql="SELECT t1.id_don_hang, t1.ngay_dat, t1.tong_tien, t2.ten_khach_hang, t3.ten_nhan_vien 
      FROM tbl_don_hang t1 JOIN tbl_khach_hang t2 ON t1.id_khach_hang = t2.id_khach_hang 
      					LEFT JOIN tbl_nhan_vien t3 ON t1.id_nhan_vien = t3.id_nhan_vien";
      $query=$connection->query($sql);
 ?>

<div>
     <div class="table-responsive">
     <div class="col-mt-5">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Đơn hàng</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Ngày đặt</th>
                    <th scope="col">Tổng tiền</th>
                    <th scope="col">Tên khách hàng</th>
                    <th scope="col">Tên nhân viên</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                    $stt = 1;
                    while ($row=$query->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $stt; ?></td>
                        <td><?php echo $row['ngay_dat']; ?></td>
                        <td><?php echo $row['tong_tien']; ?></td>
                        <td><?php echo $row['ten_khach_hang']; ?></td>
                        <td><?php echo $row['ten_nhan_vien']; ?></td>
                    </tr>
                <?php $stt++; } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</div>
-->
<div>
<h1>Quản trị viên</h1>
<div class="row">
                                    <div class="col-md-3">
                                        <div class="year-1970">
                                            <div class="col-md-7 " style="margin:auto;">
                                                <div class="image-his right"><img style="width: 200px;height: 250px"
                                                        src=".././assets/media/lienhe/ly.jpg" />
                                                </div>
                                            </div>
                                            <div class="text-his" style="margin-left: 95px;">
                                                <h3>Hồ Đoàn Trúc Ly</h3>
                                                <LI>Số điện thoại: 0976656989</LI>
                                                <LI>Email: lycoi210@gmail.com</LI>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="year-1970">
                                            <div class="col-md-7 " style="margin:auto;">
                                                <div class="image-his right"><img style="width: 200px;height: 250px"
                                                        src=".././assets/media/lienhe/tung.jpg" />
                                                </div>
                                            </div>
                                            <div class="text-his" style="margin-left: 95px;">
                                                <h3>Thạch Thọ Tùng</h3>
                                                <LI>Số điện thoại: 08984290</LI>
                                                <LI>Email: tungthach@gmail.com</LI>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="year-1970">
                                            <div class="col-md-7 " style="margin:auto;">
                                                <div class="image-his right"><img style="width: 250px;height: 250px"
                                                        src=".././assets/media/lienhe/tuan.png" />
                                                </div>
                                            </div>
                                                <div class="text-his" style="margin-left: 95px;">
                                                    <h3>Nguyễn Anh Tuấn</h3>
                                                    <LI>Số điện thoại: 044024024</LI>
                                                    <LI>Email: nguyenanhtuan@gmail.com</LI>
                                                </div>
                                          </div>
                                    </div>
                                 
                                       
</div>
  </div>
  
    
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Optional JS -->
  <script src="./assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="./assets/js/argon.js?v=1.0.0"></script>
</body>

</html>