<?php
    session_start();
    include "model/pdo.php";
    include "model/hanghoa.php";
    include "model/danhmuc.php";
    include "model/khachhang.php";
    include "model/cart.php";

    $sanphamdb = loadallhh_home_spdacbiet();
    $danhmuc = loadalldm();
    $sanphamtop10 = loadallhh_home_sptop10();

    include "view/header.php";
    if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] =[];
    //noidungtrang
    if (isset($_GET['act'])&&($_GET['act']!="")) {
        $act = $_GET['act'];
        switch ($act) {
            case 'trangchu':
                include "view/home.php";
                break;
            case 'chitietsp':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $onesp = loadonehh($id);
                    $id_loai = $onesp['id_loai'];
                    $spcungloai = loadspcungloai($id,$id_loai);
                    include "view/chitietsp.php";
                }else{
                    include "view/home.php";
                }
                break;
            case 'sanpham':
                if (isset($_GET['id'])) {
                    $idloai = $_GET['id'];  
                }else{
                    $idloai = 0;
                }
                if (isset($_POST['listgo'])){
                    $kw = $_POST['keyword'];
                }else{
                    $kw = '';
                }
                $sanpham = loadallhh($kw,$idloai);

                include "view/sanpham.php";
                break;
            case 'dangky':
                if(isset($_POST['dangky'])) {
                    $ho_ten = $_POST['ho_ten'];
                    $email = $_POST['email'];
                    $mat_khau = $_POST['mat_khau'];
                    $repass = $_POST['repass'];
                    $vai_tro = "Người dùng";

                    $file = $_FILES['hinh'];
                    $hinh = $file['name'];

                    $error = [];
                    $emailcheck=loadoneemail($email);
                    
                    if ($ho_ten == "") {
                        $error['name'] = "Họ và tên không được bỏ trống";
                    }
                    if ($email == "") {
                        $error['email'] = "Email không được bỏ trống";
                    }
                    
                    if (is_array($emailcheck)) {
                        if ($email==$emailcheck['email']) {
                        $error['email'] = "Email này đã được đăng ký vui lòng nhập một email mới";
                        }
                    }
                    
                    if ($mat_khau == "") {
                        $error['pass'] = "Password không được bỏ trống";
                    }
                    if ($repass == "") {
                        $error['repass'] = "Repassword không được bỏ trống";
                    }
                    if ($repass != $mat_khau) {
                        $error['repass'] = "Password và Repassword không giống nhau"; 
                    }

                    if ($file['size'] <= 0) {
                        $hinh = "anhmacdinh.jpg";
                    }
                    if ($file['size'] > 0) {
                        $ext = pathinfo($hinh,PATHINFO_EXTENSION);
                        if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {
                            $error['hinh'] = "File không phải là ảnh vui lòng chọn file khác";
                        }elseif ($file['size'] >= 20000000) {
                            $error['hinh'] = "Ảnh phải dưới 2mb";
                        }
                    }
                    if (!$error) {
                        insertkh($ho_ten,$mat_khau,$email,$hinh,$vai_tro);
                        move_uploaded_file($file['tmp_name'],'image/'.$hinh);
                        $thongbao="Đăng ký thành công đăng nhập để sử dụng các chức năng";
                    }
                }
                
                include "view/taikhoan/dangky.php";
                break;
            
            case 'dangnhap':
                if (isset($_POST['dangnhap'])) {
                    $email = $_POST['email'];
                    $mat_khau = $_POST['mat_khau'];
                    $checkdn = checkdn($email,$mat_khau);
                    if (is_array($checkdn)) {
                        $_SESSION['dangnhap'] = $checkdn;
                        header('location: index.php');
                    }else{
                        $thongbao = "Email hoặc mật khẩu không chính xác vui lòng thử lại !";
                    }
                }
                include "view/taikhoan/dangnhap.php";
                break;
            case 'capnhattaikhoan':
                if (isset($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $ho_ten = $_POST['ho_ten'];
                    $email = $_POST['email'];
                    $mat_khau = $_POST['mat_khau'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                    $vai_tro = "Người dùng";
                    // lấy ảnh cũ
                    $hinh = $_POST['hinhcu'];
                    $file = $_FILES['hinh'];

                    $error = [];

                    if ($ho_ten == "") {
                        $error['name'] = "Họ tên không được bỏ trống";
                    }

                    if ($file['size'] > 0) {
                        $hinh = $file['name'];
                        $ext = pathinfo($hinh,PATHINFO_EXTENSION);
                        if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {
                            $error['hinh'] = "File không phải là ảnh vui lòng chọn file khác";
                        }elseif ($file['size'] >= 20000000) {
                                $error['hinh'] = "Ảnh phải dưới 2mb";
                        }
                    }
                    if (!$error) {
                        editkh($id,$ho_ten,$mat_khau,$email,$hinh,$address,$phone,$vai_tro);
                        move_uploaded_file($file['tmp_name'],'image/'.$hinh);
                        $thongbao="Cập nhật thành công";
                        $_SESSION['dangnhap'] = checkdn($email,$mat_khau);
                        
                    }
                }
                include "view/taikhoan/capnhattaikhoan.php";
                break;
            case 'quenmk':
                if (isset($_POST['quenmk'])) {
                    $email = $_POST['email'];
                    $ho_ten = $_POST['ho_ten'];
                   $quenmk = quenmk($email,$ho_ten);
                   if (is_array($quenmk)) {
                       $thongbao = "Mật khẩu của bạn là :".$quenmk['mat_khau'];
                   }else{
                       $thongbao = "Email hoặc họ tên không chính xác";
                   }
                }
                include "view/taikhoan/quenmk.php";
                break;
            case 'doimk':
                if (isset($_POST['doimk'])) {
                    $email = $_SESSION['dangnhap']['email'];
                    $id = $_SESSION['dangnhap']['id'];
                    $pass = $_SESSION['dangnhap']['mat_khau'];
                    $passcu = $_POST['matkhaucu'];
                    $passmoi = $_POST['matkhaumoi'];
                    $xacnhan = $_POST['xacnhan'];
                    $error = [];
    
                    if ($passcu == "") {
                        $error['matkhaucu'] = "Mật khẩu cũ không được bỏ trống";
                    }
                    if ($passcu!==$pass) {
                        $error['matkhaucu'] = "Mật khẩu cũ không chính xác";
                    }
                    
                    if ($passmoi == "") {
                        $error['matkhaumoi'] = "Mật khẩu mới không được bỏ trống";
                    }
                    if ($xacnhan == "") {
                        $error['xacnhan'] = "Xác nhận mật khẩu mới không được bỏ trống";
                    }
                    if ($xacnhan != $passmoi) {
                        $error['xacnhan'] = "Xác nhận mật khẩu mới và mật khẩu mới không giống nhau !";
                    }
                    if (!$error) {
                        doimk($id,$passmoi);
                        $thongbao = "Đổi mật khẩu thành công";
                        
                    }
                    
                   
                }
                include "view/taikhoan/doimk.php";
                break;
            case 'thongtintaikhoan':
                include "view/taikhoan/thongtintaikhoan.php";
                break;
            case 'thoat':
                session_unset();
                header('location:index.php');
                break;
            
            case 'addtocart':
                if (isset($_POST['addtocart'])) {
                    $id = $_POST['id'];
                    $ten_hh = $_POST['ten_hh'];
                    $hinh = $_POST['hinh'];
                    $don_gia = $_POST['don_gia'];
                    $so_luong = 1;
                    $thanh_tien = $so_luong*$don_gia;
                    $spadd = [$id,$ten_hh,$hinh,$don_gia,$so_luong,$thanh_tien];
                    array_push($_SESSION['mycart'],$spadd);
                }
                include "view/cart/viewcart.php";
                break;
            case 'delcart':
                if (isset($_GET['id'])) {
                    $id = $_GET['id']-1;
                    array_splice($_SESSION['mycart'],$id,1);
                }else{
                    $_SESSION['mycart'] = [];
                }
                header('location:index.php?act=viewcart'); 
                break;
            case 'viewcart':
                include "view/cart/viewcart.php";
                break;
            case 'bill':
                include "view/cart/bill.php";
                break;
            case 'mybill':
                $listbill=loadallbill($_SESSION['dangnhap']['id']);
                include "view/cart/mybill.php";
                break;
            case 'billconfirm':
                if (isset($_POST['dathang'])) {
                    $id_kh = $_SESSION['dangnhap']['id'];
                    $name = $_POST['name'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $pttt = $_POST['pttt'];
                    $tong = tongdonhang();

                    $idbill=insertbill($id_kh,$name,$address,$phone,$email,$tong,$pttt);

                    foreach($_SESSION['mycart'] as $cart){
                        insert_cart($_SESSION['dangnhap']['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
                    }
                    $_SESSION['mycart'] = [];
                }
                $bill = loadonebill($idbill);
                $ctbill = loadallcart($idbill);
                include "view/cart/billconfirm.php";
                break;
            default:
            include "view/home.php";
                break;
        }
    }else{
        include "view/home.php";
    }
    
    include "view/footer.php";

?>
