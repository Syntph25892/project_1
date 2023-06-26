<?php

    function loadalldm(){
        $sql = "select*from loai";
        $loaihang = pdo_query($sql);
        return $loaihang;
    }
    function insertdm($tenloai){
        $sql = "INSERT INTO `loai`(`ten_loai`) VALUES ('$tenloai')";
        pdo_execute($sql);
    }
    function deletedm($id){
        $sql = "delete from loai where id=$id";
        pdo_execute($sql);
    }
    function loadonedm($id){
        $sql = "select*from loai where id=$id";
        $loaihang = pdo_query_one($sql);
        return $loaihang;
    }
    function editdm($id,$tenloai){
        $sql = "UPDATE `loai` SET `ten_loai`='$tenloai' WHERE id=$id";
        pdo_execute($sql);
    }
?>
