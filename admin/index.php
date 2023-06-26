<?php
    session_start();
    if (isset($SESSION['dangnhap']) && ($SESSION['dangnhap']['vai_tro'] =="Quản trị")) {
        header('http://localhost/duanmau/admin/index.php');
    }else{
        header('http://localhost/duanmau/index.php?act=dangnhap');
    }
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/hanghoa.php";
    include "../model/khachhang.php";
    include "../model/binhluan.php";
    include "../model/cart.php";
    include "header.php";
    

    //controller

    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {

            //danh mục 



            case 'listdm':
                $loaihang = loadalldm();
                include "danhmuc/listdm.php";
                break;
            case 'adddm':
                
                if (isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai = $_POST['tenloai'];
                    $error = [];
                    if ($tenloai == "") {
                        $error['tenloai'] = "Tên loại không được bỏ trống"; 
                    }
                    if (!$error) {
                        insertdm($tenloai);
                        $thongbao="Thêm thành công";
                    }
                }
                include "danhmuc/adddm.php";
                break;
            case 'deletedm':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    $id = $_GET['id'];
                    deletedm($id);
                }
                $loaihang = loadalldm();
                include "danhmuc/listdm.php";
                break;
            case 'editdm':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    $id = $_GET['id'];
                    $loaihangone = loadonedm($id);
                }
                include "danhmuc/editdm.php";
                break;
            case 'updatedm':
                if (isset($_POST['editdm'])&&($_POST['editdm'])) {
                    $id = $_POST['id'];
                    $tenloai = $_POST['tenloai'];
                    $error = [];
                    if ($tenloai == "") {
                        $error['tenloai'] = "Tên loại không được bỏ trống"; 
                    }
                    if (!$error) {
                        editdm($id,$tenloai);
                        $thongbao = "Cập nhật thành công";
                        $loaihang = loadalldm();
                        include "danhmuc/listdm.php";
                    }else{
                        $loaihangone = loadonedm($id);
                        include "danhmuc/editdm.php";
                    }
                }
                
                
                
                break;


                // hàng hóa



                case 'listhh':
                    if (isset($_POST['listgo'])&&($_POST['listgo'])){
                        $kw = $_POST['keyword'];
                        $idloai = $_POST['idloai'];
                    }else{
                        $kw = '';
                        $idloai = 0;
                    }
                    
                    $hanghoa = loadallhh($kw,$idloai);
                    $loaihang = loadalldm();
                    include "hanghoa/listhh.php";
                    break;
                case 'addhh':
                    
                    //kiểm tra ng dung có click vàonút add k
                    if (isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $tenhh = $_POST['tenhh'];
                        $dongia = $_POST['dongia'];
                        $loaihang = $_POST['loaihang'];
                        $dacbiet = $_POST['dac_biet'];
                        $mota = $_POST['mota'];
                        $file = $_FILES['hinh'];
                        $hinh = $file['name'];

                        $error = [];

                        if ($tenhh == "") {
                            $error['name'] = "Tên hàng hóa không được bỏ trống";
                        }
                        if ($dongia<=0) {
                            $error['don_gia'] = "Đơn giá phải là số dương";
                        }
    

                        if ($file['size'] <= 0) {
                            $error['hinh'] = "Bạn chưa thêm ảnh";
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
                            inserthh($tenhh,$dongia,$hinh,$loaihang,$dacbiet,$mota);
                            move_uploaded_file($file['tmp_name'],'../image/'.$hinh);
                            $thongbao="Thêm thành công";
                        }
                    }
                    $loaihang = loadalldm();
                    $hanghoa = loadallhh("",0);
                    include "hanghoa/addhh.php";
                    break;
                case 'deletehh':
                    if (isset($_GET['id'])&&($_GET['id']>0)) {
                        $id = $_GET['id'];
                        deletehh($id);
                    }
                    $hanghoa = loadallhh("",0);
                    include "hanghoa/listhh.php";
                    break;
                case 'edithh':
                    $loaihang = loadalldm();
                    if (isset($_GET['id'])&&($_GET['id']>0)) {
                        $id = $_GET['id'];
                        $hanghoa = loadonehh($id);
                        
                    }
                    
                    include "hanghoa/edithh.php";
                    break;
                case 'updatehh':
                    $loaihang = loadalldm();
                    if (isset($_POST['edithh'])&&($_POST['edithh'])) {
                        $id = $_POST['id'];
                        $tenhh = $_POST['tenhh'];
                        $dongia = $_POST['dongia'];
                        $loaihang = $_POST['loaihang'];
                        $dacbiet = $_POST['dac_biet'];
                        $mota = $_POST['mota'];

                        // lấy ảnh cũ
                        $hinh = $_POST['hinhcu'];
                        $file = $_FILES['hinh'];

                        $error = [];

                        if ($tenhh == "") {
                            $error['name'] = "Tên hàng hóa không được bỏ trống";
                        }
                        if ($dongia <=0) {
                            $error['dongia'] = "Đơn giá phải là số dương";
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
                            edithh($id,$tenhh,$dongia,$hinh,$loaihang,$dacbiet,$mota);
                            move_uploaded_file($file['tmp_name'],'../image/'.$hinh);
                            $thongbao="Cập nhật thành công";
                            $hanghoa = loadallhh("",0);
                            include "hanghoa/listhh.php";
                        }else{
                            $loaihang = loadalldm();
                            $hanghoa = loadonehh($id);
                            include "hanghoa/edithh.php";
                        }
                    }
                    
                    break;



                    // khách hàng



                case 'listkh':
                    $khachhang = loadallkh();
                    include "khachhang/listkh.php";
                    break;
                case 'addkh':
                    
                    //kiểm tra ng dung có click vàonút add k
                    if (isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $ho_ten = $_POST['ho_ten'];
                        $email = $_POST['email'];
                        $mat_khau = $_POST['mat_khau'];
                        $repass = $_POST['repass'];
                        $address = $_POST['address'];
                        $phone = $_POST['phone'];
                        $vai_tro = $_POST['vai_tro'];

                        $file = $_FILES['hinh'];
                        $hinh = $file['name'];

                        $error = [];
                        $emailcheck=loadoneemail($email);
                        if (is_array($emailcheck)) {
                            if ($email==$emailcheck['email']) {
                            $error['email'] = "Email này đã được đăng ký vui lòng nhập một email mới";
                            }
                        }
                        if ($ho_ten == "") {
                            $error['name'] = "Họ và tên không được bỏ trống";
                        }
                        if ($email == "") {
                            $error['email'] = "Email không được bỏ trống";
                        }
                        if ($mat_khau == "") {
                            $error['pass'] = "Mật khẩu không được bỏ trống";
                        }
                        if ($repass == "") {
                            $error['repass'] = "Mật khẩu không được bỏ trống";
                        }
                        if ($mat_khau != $repass) {
                            $error['repass'] = "Mật khẩu và Xác nhận mật khẩu không khớp";
                        }
    

                        if ($file['size'] <= 0) {
                            $error['hinh'] = "Bạn chưa thêm ảnh";
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
                            insertkhadmin($ho_ten,$mat_khau,$email,$hinh,$address,$phone,$vai_tro);
                            move_uploaded_file($file['tmp_name'],'../image/'.$hinh);
                            $thongbao="Thêm thành công";
                        }
                    }
                    $khachhang = loadallkh();
                    include "khachhang/addkh.php";
                    break;
                case 'deletekh':
                    if (isset($_GET['id'])&&($_GET['id']>0)) {
                        $id = $_GET['id'];
                        deletekh($id);
                    }
                    $khachhang = loadallkh("",0);
                    include "khachhang/listkh.php";
                    break;
                case 'editkh':
                    if (isset($_GET['id'])&&($_GET['id']>0)) {
                        $id = $_GET['id'];
                        $khachhang = loadonekh($id);
                    }
                    include "khachhang/editkh.php";
                    break;
                case 'updatekh':
                    if (isset($_POST['editkh'])&&($_POST['editkh'])) {
                        $id = $_POST['id'];
                        $ho_ten = $_POST['ho_ten'];
                        $email = $_POST['email'];
                        $mat_khau = $_POST['mat_khau'];
                        $repass = $_POST['repass'];
                        $address = $_POST['address'];
                        $phone = $_POST['phone'];
                        $vai_tro = $_POST['vai_tro'];
                        
                        // lấy ảnh cũ
                        $hinh = $_POST['hinhcu'];
                        $file = $_FILES['hinh'];

                        $error = [];

                        if ($ho_ten == "") {
                            $error['name'] = "Tên hàng hóa không được bỏ trống";
                        }
                        if ($email == "") {
                            $error['email'] = "Email không được bỏ trống";
                        }
                        if ($mat_khau == "") {
                            $error['pass'] = "Mật khẩu không được bỏ trống";
                        }
                        if ($repass == "") {
                            $error['repass'] = "Mật khẩu không được bỏ trống";
                        }
                        if ($mat_khau != $repass) {
                            $error['repass'] = "Mật khẩu và Xác nhận mật khẩu không khớp";
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
                            move_uploaded_file($file['tmp_name'],'../image/'.$hinh);
                            $thongbao="Cập nhật thành công";
                            $khachhang = loadallkh();
                            include "khachhang/listkh.php";
                        }else {
                            $khachhang = loadonekh($id);
                            include "khachhang/editkh.php";
                        }
                    }
                    
                    break;


                    //binhluan
                    case 'listbl':
                        $binhluan = loadallbl();
                        include "binhluan/listbl.php";
                        break;
                    case 'deletebl':
                        if (isset($_GET['id'])&&($_GET['id']>0)) {
                            $id = $_GET['id'];
                            deletebl($id);
                        }
                        $binhluan = loadallbl();
                        include "binhluan/listbl.php";
                        break;

                        // bill
                    case 'listbill':
                        $listbill = loadallbilladmin();
                        include "listbill/listbill.php";
                        break;
                    $bill = loadallbilladmin();
                    include "listbill/listbill.php";
                    break;
                    case 'editbill':
                    if (isset($_GET['id'])&&($_GET['id']>0)) {
                        $id = $_GET['id'];
                        $bill = loadonebill($id);
                    }
                    
                    include "listbill/editbill.php";
                    break;
                    case 'updatebill':
                    if (isset($_POST['editbill'])&&($_POST['editbill'])) {
                        $id = $_POST['id'];
                        $ho_ten = $_POST['ho_ten'];
                        $email = $_POST['email'];
                        $address = $_POST['address'];
                        $phone = $_POST['phone'];
                        $ttdh = $_POST['ttdh'];


                        $error = [];

                        if ($ho_ten == "") {
                            $error['name'] = "Tên khách hàng không được bỏ trống";
                        }
                        if ($email == "") {
                            $error['email'] = "Email không được bỏ trống";
                        }
                        if ($address == "") {
                            $error['address'] = "Địa chỉ không được bỏ trống";
                        }
                        if ($phone == "") {
                            $error['phone'] = "Số điện thoại không được bỏ trống";
                        }

                        if (!$error) {
                            editbill($id,$ho_ten,$address,$phone,$email,$ttdh);
                            $thongbao="Cập nhật thành công";
                            $listbill = loadallbilladmin();
                            include "listbill/listbill.php";
                        }else{
                            $bill = loadonebill($id);
                            include "listbill/editbill.php";
                        }
                    }
                    case 'thongke':
                        $listthongke = loadall_thongke();
                        include "thongke/list.php";
                    break;

                    case 'bieudo':
                        $listthongke = loadall_thongke();
                        include "thongke/bieudo.php";
                    break;
            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";
    }

    include "footer.php";
?>
        
