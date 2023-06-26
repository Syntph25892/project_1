        <?php 
            if (isset($_SESSION['dangnhap'])&&(is_array($_SESSION['dangnhap']))) {
                extract($_SESSION['dangnhap']);
            }
        ?>
<div class="thongtintaikhoan">
    <div class="tieudett">
        <h2>Xin chào <?= $ho_ten?></h2>
    </div>
    <div class="anhtt">
        <p>Ảnh đại diện</p>
        <img src="image/<?=$hinh?>" alt="" width="200px">
    </div>
        <div class=" mt-5 form-floating">
        <input type="hidden" name="id" value="<?= $id?>">
        <input type="text" class="form-control" id="floatingInput" placeholder="Họ tên" value="<?= $ho_ten ?>" disabled>
        <label for="floatingInput">Họ tên</label>
        </div>

        <div class=" mt-3 form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?= $email ?>" disabled>
        <label for="floatingInput">Email address</label>
        </div>

        <div class="mt-3 form-floating">
        <input type="text" class="form-control" id="floatingPassword"  placeholder="Password" value="<?= $mat_khau ?>" disabled>
        <label for="floatingPassword">Password</label>
        </div>
        <div class="mt-3 form-floating">
        <input type="text" class="form-control" id="floatingInput"  placeholder="Address" value="<?= $address ?>" disabled>
        <label for="floatingInput">Địa chỉ</label>
        </div>
        <div class="mt-3 form-floating">
        <input type="text" class="form-control" id="floatingInput"  placeholder="Phone" value="<?= $phone ?>" disabled>
        <label for="floatingInput">Số điện thoại</label>
        </div>
    
</div>