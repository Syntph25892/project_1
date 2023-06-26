<?php

    function loadallbl(){
        $sql = "select*from binh_luan";
        $binhluan = pdo_query($sql);
        return $binhluan;
    }
    function loadblctsp($idsp){
        $sql = "select*from binh_luan where id_hh=$idsp order by id desc";
        $binhluan = pdo_query($sql);
        return $binhluan;
    }
    
    function deletebl($id){
        $sql = "delete from binh_luan where id=$id";
        pdo_execute($sql);
    }
    function insertbl($noi_dung,$idkh,$idhh){
        $sql = "INSERT INTO `binh_luan`(`noi_dung`, `id_kh`, `id_hh`) VALUES ('$noi_dung','$idkh','$idhh')";
        pdo_execute($sql);
    }
?>
