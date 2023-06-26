<?php 
    session_start();
    
    
    $idhh = $_REQUEST['idhh'];
    include "../../model/khachhang.php";
    include "../../model/binhluan.php";
    include "../../model/pdo.php";
    $dsbl = loadblctsp($idhh);
    extract($dsbl);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
        
    <?php foreach ($dsbl as $bl) : ?>
        <?php 
        $idnbl = $bl['id_kh'];
        $kh = loadonekh($idnbl);
        extract($kh) ;
        ?>
        <div class="mb-5 ndbl">
            <div class="ttkh">
                <img src="image/<?= $hinh?>" alt="" width="50px"><p><?= $ho_ten?></p>
            </div>
            <div class="noidungbl">
                <p><b>Nội dung:  </b> <?=$bl['noi_dung']?></p>
                <p class="text text-secondary">Ngày bình luận: <?=$bl['ngay_bl']?></p>
            </div>
        </div>
    <?php endforeach ?>
        
    <?php
    if (isset($_SESSION['dangnhap'])) {
        $idkh = $_SESSION['dangnhap']['id'];
    
    ?>   
        <div class="guibl">
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
                
                    <input type="hidden" name="idkh" value="<?=$idkh?>">
                    <input type="hidden" name="idhh" value="<?=$idhh?>">
                    <div class="row g-3">
                        
                        <input class="form-control col-auto" type="text" name="noidung">
                        
                        <button class="mt-5 btn btn-primary col-auto" name="guibinhluan" type="submit">Gửi bình luận</button>
                    </div>
            </form>
                
        </div>
        <?php 
        if (isset($_POST['guibinhluan'])) {
            $noi_dung = $_POST['noidung'];
            $idkh = $_SESSION['dangnhap']['id'];
            $idhh = $_POST['idhh'];
            if ($noi_dung == "") {
                header("location:".$_SERVER['HTTP_REFERER']);
            }else{
                insertbl($noi_dung,$idkh,$idhh);
                header("location:".$_SERVER['HTTP_REFERER']);
            }
            
        }
        ?>
    <?php }else{ ?>
    <h2 class="text-center text-danger">Bạn cần đăng nhập để gửi bình luận</h2>
    <?php } ?>
    
</body>
</html>