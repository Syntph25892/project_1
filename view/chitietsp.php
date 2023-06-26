<div class="mb-5 chitietsp">
    <?php 
        extract($onesp);
    ?>
        <div class="tieudectsp">
            <h1><?= $ten_hh?></h1>
        </div>
        <div class="row mb-5 thongtinsp">
            <div class="col ctleft">
                <img src="image/<?=$hinh?>" alt="">
            </div>
            <div class="col ctright">
                <div class="masp">
                   <p>ID Sản phẩm: <?= $id?></p> 
                </div>
                <div class="tensp">
                    <h2>Tên sản phẩm: <?= $ten_hh?></h2>
                </div>
                <div class="giasp fs-5 fw-bold">
                    <p>Đơn giá: <?= $don_gia?>₫</p>
                </div>
                <div class="mota">
                    <b>Mô tả sản phẩm:</b>  
                    <p><?= $mo_ta?></p>
                </div>
                <div class="thanhtoanss">
                    
                            <form action="index.php?act=addtocart" method="post">
                              <input type="hidden" name="id" value="<?=$id?>">
                              <input type="hidden" name="ten_hh" value="<?=$ten_hh?>">
                              <input type="hidden" name="hinh" value="<?=$hinh?>">
                              <input type="hidden" name="don_gia" value="<?=$don_gia?>">
                              <button class="btn btn-success" type="submit" name="addtocart">Thêm vào giỏ hàng</button>
                            </form>
                </div>
            </div>
        </div>
        
</div>

<div class="hr"><hr class="mt-5"></div>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#binhluan").load("view/binhluan/binhluan.php", {idhh:<?= $id ?>});
        });
    </script>
<div class="binhluan">
    <div class="mt-5 mb-5 tieudebl">
        <h2>Bình luận</h2>
    </div>
    <div class="" id="binhluan">

    </div>
    

</div>

<div class="hr"><hr class="mt-5"></div>


<div class="sanphamcungloai">
    <div class="tieudespcl">
        <h2>Sản phẩm cùng loại</h2>
    </div>
    <div class="row boxspcl">
        <?php foreach($spcungloai as $spcl) :?>
            <div class="col box1sp">
                <div class="imgspdb">
                    <a href="index.php?act=chitietsp&id=<?=$spcl['id']?>"><img src="image/<?= $spcl['hinh'] ?>" alt=""></a>
                </div>
                <div class="textspdb">
                    <div class="namesp">
                        <a href="index.php?act=chitietsp&id=<?=$spcl['id']?>"><?= $spcl['ten_hh'] ?></a>
                    </div>
                    <div class="price">
                        <p><?= $spcl['don_gia'] ?>₫</p>
                    </div>
                    <!-- <a href="">
                        <div class="textspdbphu">
                            <h5>Thêm vào giỏ hàng</h5>
                        </div>
                    </a> -->
                            <form action="index.php?act=addtocart" method="post">
                              <input type="hidden" name="id" value="<?=$spdb['id']?>">
                              <input type="hidden" name="ten_hh" value="<?=$spdb['ten_hh']?>">
                              <input type="hidden" name="hinh" value="<?=$spdb['hinh']?>">
                              <input type="hidden" name="don_gia" value="<?=$spdb['don_gia']?>">
                              <button class="textspdbphu" type="submit" name="addtocart">Thêm vào giỏ hàng</button>
                            </form>
                </div>
                <a href="">
                    <div class="iconspdb">
                        <div class="heart">
                            <i class="fa-regular fa-heart"></i>
                        </div>
                        <div class="eye">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach ?>
    </div>
</div>