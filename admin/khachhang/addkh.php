




<?php if(isset($thongbao)) : ?>
            <div class="alert alert-success">
                <?= $thongbao ?>
            </div>
        <?php endif ?>
<div class="adddm">
    <div class="tieudeadddm" >
        <h2>Thêm mới khách hàng</h2>
    </div>
    <form action="index.php?act=addkh" method="post" enctype="multipart/form-data">
        <p>Mã khách hàng</p>
        <div class="input-group flex-nowrap">
            <input type="text" class="form-control me-3" name="makh" disabled>
        </div>
        <p>Họ và tên</p>
        <div class="input-group flex-nowrap mb-4" >
            <input type="text" class="form-control me-3" name="ho_ten" value="<?= isset($ho_ten) ? $ho_ten :''?>">
                <span style="color: red;">
                    <?= isset($error['name']) ? $error['name'] : '' ?>
                </span>
        </div>
        <p>Email</p>
        <div class="input-group flex-nowrap mb-4" >
            <input type="email" class="form-control me-3" name="email" value="<?= isset($email) ? $email :''?>">
                <span style="color: red;">
                    <?= isset($error['email']) ? $error['email'] : '' ?>
                </span>
        </div>
        <p>Mật khẩu</p>
        <div class="input-group flex-nowrap mb-4" >
            <input type="text" class="form-control me-3" name="mat_khau" value="<?= isset($mat_khau) ? $mat_khau :''?>">
                <span style="color: red;">
                    <?= isset($error['pass']) ? $error['pass'] : '' ?>
                </span>
        </div>
        <p>Xác nhận mật khẩu</p>
        <div class="input-group flex-nowrap mb-4" >
            <input type="text" class="form-control me-3" name="repass" value="<?= isset($repass) ? $repass :''?>">
                <span style="color: red;">
                    <?= isset($error['repass']) ? $error['repass'] : '' ?>
                </span>
        </div>
        <p>Hình</p>
        <div class="input-group flex-nowrap mb-4" >
            <input type="file" class="form-control me-3" name="hinh">
                <span style="color: red;">
                    <?= isset($error['hinh']) ? $error['hinh'] : '' ?>
                </span>
        </div>
        <p>Địa chỉ</p>
        <div class="input-group flex-nowrap mb-4" >
            <input type="text" class="form-control me-3" name="address" value="<?= isset($address) ? $address :''?>">
        </div>
        <p>Số điện thoại</p>
        <div class="input-group flex-nowrap mb-4" >
            <input type="text" class="form-control me-3" name="phone" value="<?= isset($phone) ? $phone :''?>">
        </div>
        <p>Vai trò</p>
        <div class="input-group flex-nowrap mb-4" >
            <div class="">
                <input class="form-check-input me-3"  type="radio" name="vai_tro" value="Người dùng" checked>Người dùng  
            </div>
            <div class="">
                <input class="form-check-input me-3 ms-3" type="radio" name="vai_tro" value="Quản trị" >Quản trị
            </div>
        </div>
        
        <div class="gui">
            <input class="btn btn-primary"  type="submit" name="themmoi" value="Thêm mới">
            <input class="btn btn-primary"  type="reset" value="Nhập lại" >
            <a href="index.php?act=listkh"><button type="button" class="btn btn-primary">Danh sách khách hàng</button></a>
        </div>
        
    </form>
</div>