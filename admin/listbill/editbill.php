<?php if(isset($thongbao)) : ?>
            <div class="alert alert-success">
                <?= $thongbao ?>
            </div>
<?php endif ?>
<div class="adddm">
    <div class="tieudeadddm" >
        <h2>Cập nhật thông tin đơn hàng</h2>
    </div>
    <form action="index.php?act=updatebill" method="post">
        <input type="hidden" name="id" value="<?= $bill['id']?>">
        <p>Mã đơn hàng</p>
        <div class="input-group flex-nowrap">
            <input type="text" class="form-control" name="mabill" value="<?=$bill['id']?>" disabled>
        </div>
        <div class="ttkh border border-1 p-5 mt-5 mb-5">
            <div class="">
                <h2>Thông tin khách hàng</h2>
            </div>
            <p>Họ và tên</p>
            <div class="input-group flex-nowrap mb-4" >
                <input type="text" class="form-control" name="ho_ten" value="<?=$bill['bill_name']?>">
                <span style="color: red;">
                    <?= isset($error['name']) ? $error['name'] : '' ?>
                </span>
            </div>
            <p>Email</p>
            <div class="input-group flex-nowrap mb-4" >
                <input type="text" class="form-control" name="email" value="<?=$bill['bill_email']?>">
                <span style="color: red;">
                    <?= isset($error['email']) ? $error['email'] : '' ?>
                </span>
            </div>
            <p>Địa chỉ</p>
            <div class="input-group flex-nowrap mb-4" >
                <input type="text" class="form-control" name="address" value="<?=$bill['bill_address']?>">
                <span style="color: red;">
                    <?= isset($error['address']) ? $error['address'] : '' ?>
                </span>
            </div>
            <p>Số điện thoại</p>
            <div class="input-group flex-nowrap mb-4" >
                <input type="text" class="form-control" name="phone" value="<?=$bill['bill_phone']?>">
                <span style="color: red;">
                    <?= isset($error['phone']) ? $error['phone'] : '' ?>
                </span>
            </div>
        </div>
        <p>Số lượng mặt hàng</p>
            <div class="input-group flex-nowrap mb-4" >
            <input type="text" class="form-control" name="soluong" value="<?=loadallcart_count($bill['id'])?>" disabled>
            </div>
        <p>Gía trị đơn hàng</p>
            <div class="input-group flex-nowrap mb-4" >
                <input type="text" class="form-control" name="giatri" value="<?=$bill['tonghang']?>" disabled>
            </div>
        <p>Tình trạng đơn hàng</p>
            <div class="input-group flex-nowrap mb-4">
                <div class="">
                    <input class="form-check-input me-3"  type="radio" name="ttdh" value="0" <?= ($bill['bill_status'] == '0') ? 'checked' : '' ?> >Đơn hàng mới  
                </div>
                <div class="">
                    <input class="form-check-input me-3 ms-3" type="radio" name="ttdh" value="1" <?= ($bill['bill_status'] == '1') ? 'checked' : '' ?> >Đang xử lý
                </div>
                <div class="">
                    <input class="form-check-input me-3 ms-3" type="radio" name="ttdh" value="2" <?= ($bill['bill_status'] == '2') ? 'checked' : '' ?> >Đang giao hàng
                </div>
                <div class="">
                    <input class="form-check-input me-3 ms-3" type="radio" name="ttdh" value="3" <?= ($bill['bill_status'] == '3') ? 'checked' : '' ?> >Đã giao
                </div>
            </div>

        <div class="gui">
            
            <input class="btn btn-primary"  type="submit" name="editbill" value="Cập nhật">
            <input class="btn btn-primary"  type="reset" value="Nhập lại" >
            <a href="index.php?act=listbill"><button type="button" class="btn btn-primary">Danh sách đơn hàng</button></a>
        </div>
        
    </form>
</div>