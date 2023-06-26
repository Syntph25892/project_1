<div class="bill">
    <form action="index.php?act=billconfirm" method="post">
        <div class="ttdathang">
            <?php
                if (isset($_SESSION['dangnhap'])) {
                    $ho_ten = $_SESSION['dangnhap']['ho_ten'];
                    $address = $_SESSION['dangnhap']['address'];
                    $email = $_SESSION['dangnhap']['email'];
                    $phone = $_SESSION['dangnhap']['phone'];
                }else{
                    $ho_ten = "";
                    $address = "";
                    $email = "";
                    $phone = "";
                }

            ?>
            <div class="tieudecart text-center pt-5">
                <h2 class="fw-bold">Thông tin đặt hàng</h2>
            </div>
            <div class="ttdh">
                <p>Người đặt hàng</p> <input class="form-control" name="name" type="text" value="<?=$ho_ten?>">
                <p>Địa chỉ</p>  <input class="form-control" name="address" type="text" value="<?=$address?>">
                <p>Email</p>  <input class="form-control" name="email" type="text" value="<?=$email?>">
                <p>Điện thoại</p> <input class="form-control" name="phone" type="text" value="<?=$phone?>">
            </div>
        </div>
        <div class="phuongthuctt">
            
            <div class="tieudecart text-center pt-5">
                <h2 class="fw-bold mb-5">Phương thức thanh toán</h2>
            </div>
            <div class="input-group flex-nowrap mb-5" >
                <div class="">
                    <input class="form-check-input me-3"  type="radio" name="pttt" value="Thanh toán trực tiếp"  checked>Trả tiền khi nhận hàng 
                </div>
                <div class="">
                    <input class="form-check-input me-3 ms-3" type="radio" name="pttt" value="Chuyển khoản ngân hàng"  >Chuyển khoản ngân hàng
                </div>
                <div class="">
                    <input class="form-check-input me-3 ms-3" type="radio" name="pttt" value="Thanh toán online" >Thanh toán online
                </div>
            </div>
        </div>
        <div class="ttdonhang mt-5">
            <div class="tieudecart text-center pt-5">
                <h2 class="fw-bold mb-5">Thông tin giỏ hàng</h2>
            </div>
            <table class="table ">
                <?= viewcart(0) ?>
                
            </table>
            <a href="index.php?act=billconfirm"><button class="btn btn-success" name="dathang" >Tiếp tục đặt hàng</button></a> 
        </div>
    </form>
</div>