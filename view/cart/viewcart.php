<div class="tieudecart text-center pt-5">
    <h2 class="fw-bold">Giỏ hàng</h2>
</div>
<div class="spcart">
    <table class="table ">
        <?= viewcart(1); ?>
        
    </table>
    <?php if (isset($_SESSION['dangnhap'])) {
        
    ?>
    <a href="index.php?act=bill"><button class="btn btn-success" >Tiếp tục đặt hàng</button></a> <a href="index.php?act=delcart"><button class="btn btn-danger">Xóa giỏ hàng</button></a>
    <?php }else{ ?>
    <h2 class="fs-5 fw-bold text-danger">Cần đăng nhập để sử dụng chức năng mua hàng</h2>
    <?php } ?>
</div>

