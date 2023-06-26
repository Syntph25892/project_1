<?php

    function loadallhh($kw,$idloai){
        $sql = "select*from hang_hoa where 1";
        if ($kw != "") {
            $sql.= " and ten_hh like '%".$kw."%'";
        }
        if ($idloai > 0) {
            $sql.= " and id_loai = '".$idloai."'";
        }
        $listhanghoa = pdo_query($sql);
        return $listhanghoa;
    }
    function loadallhh_home_spdacbiet(){
        $sql = "select*from hang_hoa where dac_biet=1";
        
        $sanphamdb = pdo_query($sql);
        return $sanphamdb;
    }
    function loadallhh_home_sptop10(){
        $sql = "select*from hang_hoa where 1 order by so_luot_xem desc limit 0,10";
        $sanphamtop10 = pdo_query($sql);
        return $sanphamtop10;
    }
    function inserthh($tenhh,$dongia,$hinh,$loai,$dacbiet,$mota){
        $sql = "INSERT INTO `hang_hoa`(`ten_hh`, `don_gia`, `hinh`,`id_loai`, `dac_biet`, `mo_ta`) VALUES ('$tenhh','$dongia','$hinh','$loai','$dacbiet','$mota')";
        pdo_execute($sql);
    }
    function deletehh($id){
        $sql = "delete from hang_hoa where id=$id";
        pdo_execute($sql);
    }
    function loadonehh($id){
        $sql = "select*from hang_hoa where id=$id";
        $listhanghoa = pdo_query_one($sql);
        return $listhanghoa;
    }
    function loadspcungloai($id,$id_loai){
        $sql = "select*from hang_hoa where id!=$id and id_loai=$id_loai ";
        $listhanghoa = pdo_query($sql);
        return $listhanghoa;
    }
    function edithh($id,$tenhh,$dongia,$hinh,$loaihang,$dacbiet,$mota){
        $sql = "UPDATE `hang_hoa` SET `ten_hh`='$tenhh',`don_gia`='$dongia',`hinh`='$hinh',`id_loai`='$loaihang',`dac_biet`='$dacbiet',`mo_ta`='$mota' WHERE id=$id";
        pdo_execute($sql);
    }
?>
