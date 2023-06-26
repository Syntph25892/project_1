<?php

    function loadallkh(){
        $sql = "select*from khach_hang";
        $khachhang = pdo_query($sql);
        return $khachhang;
    }
    function insertkhadmin($ho_ten,$mat_khau,$email,$hinh,$address,$phone,$vai_tro){
        $sql = "INSERT INTO `khach_hang`(`ho_ten`, `mat_khau`, `email`, `hinh`,`address`,`phone`, `vai_tro`) VALUES ('$ho_ten','$mat_khau','$email','$hinh','$address','$phone','$vai_tro')";
        pdo_execute($sql);
    }
    function insertkh($ho_ten,$mat_khau,$email,$hinh,$vai_tro){
        $sql = "INSERT INTO `khach_hang`(`ho_ten`, `mat_khau`, `email`, `hinh`, `vai_tro`) VALUES ('$ho_ten','$mat_khau','$email','$hinh','$vai_tro')";
        pdo_execute($sql);
    }
    function deletekh($id){
        $sql = "delete from khach_hang where id=$id";
        pdo_execute($sql);
    }
    function loadonekh($id){
        $sql = "select*from khach_hang where id=$id";
        $khachhang = pdo_query_one($sql);
        return $khachhang;
    }
    function editkh($id,$ho_ten,$mat_khau,$email,$hinh,$address,$phone,$vai_tro){
        $sql = "UPDATE `khach_hang` SET `ho_ten`='$ho_ten',`mat_khau`='$mat_khau',`email`='$email',`hinh`='$hinh',`address`='$address',`phone`='$phone',`vai_tro`='$vai_tro' WHERE id=$id ";
        pdo_execute($sql);
    }
    function checkdn($email,$mat_khau){
        $sql = "select*from khach_hang where email='$email' and mat_khau='$mat_khau' ";
        $khachhang = pdo_query_one($sql);
        return $khachhang;
    }
    function quenmk($email,$ho_ten){
        $sql = "select*from khach_hang where email='$email' AND ho_ten='$ho_ten' ";
        $khachhang = pdo_query_one($sql);
        return $khachhang;
    }
    function doimk($id,$passmoi){
        $sql = "UPDATE `khach_hang` SET `mat_khau`='$passmoi' WHERE id=$id";
        pdo_execute($sql);
    }
    function loadoneemail($email){
        $sql = "SELECT email FROM `khach_hang` WHERE email ='$email';";
        $email = pdo_query_one($sql);
        return $email;
    }
?>
