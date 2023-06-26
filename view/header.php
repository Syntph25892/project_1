<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/css/index.css">
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
</head>
<body>
    <div class="ccontainer">
    <header class="p-3 mb-3 border-bottom bg-dark">
    <div class="container ">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="index.php?act=trangchu" class="d-flex align-items-center mb-2 me-3 mb-lg-0 text-dark text-decoration-none">
          <img src="image/FPT_Polytechnic.png" alt="" width="200px">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php?act=trangchu" class="nav-link px-2 text-white">Trang chủ</a></li>
          <li><a href="index.php?act=sanpham" class="nav-link px-2 text-white">Sản phẩm</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Giới thiệu</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Góp ý</a></li>
        </ul>

        
        <form action="index.php?act=sanpham" method="post" class="d-flex me-5" role="search">
          <input class="form-control form-control-dark text-bg-dark me-2" type="text" name="keyword" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit" name="listgo"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        
        <?php
            if (isset($_SESSION['dangnhap'])) {
              extract($_SESSION['dangnhap']);
            
        ?>
          <a class="text-white" href="index.php?act=viewcart"><div class="cart text-white me-5">
            <i class="fa-solid fa-cart-shopping"></i>
          </div></a>
          <div class="dropdown text-end">
            <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="image/<?=$hinh?>" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small">
              <li><a class="dropdown-item" >Xin chào <?=$ho_ten?></a></li>
              <li><a class="dropdown-item" href="index.php?act=capnhattaikhoan">Cập nhật tài khoản</a></li>
              <li><a class="dropdown-item" href="index.php?act=thongtintaikhoan">Thông tin tài khoản</a></li>
              <li><a class="dropdown-item" href="index.php?act=doimk">Đổi mật khẩu</a></li>
              <li><a class="dropdown-item" href="index.php?act=mybill">Đơn hàng của tôi</a></li>
              <?php 
                if ($vai_tro == "Quản trị") {
              ?>
              <li><a class="dropdown-item" href="admin/index.php">Đăng nhập admin</a></li>
              <?php } ?>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="index.php?act=thoat">Sign out</a></li>
            </ul>
          </div>
        <?php 
          }else{
        ?>

          <div class="text-end">
            <button type="button" class="btn btn-outline-secondary me-2"><a class="text-decoration-none text-white" href="index.php?act=dangnhap">Đăng nhập</a></button>
            <button type="button" class="btn btn-outline-warning"><a class="text-decoration-none text-white" href="index.php?act=dangky">Đăng ký</a></button>
          </div>

        <?php } ?>
      </div>
    </div>
  </header>
  <div class="fulltrang">
  