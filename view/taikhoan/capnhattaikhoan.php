<div class="dangky text-center">

    <main class="form-signin w-100 m-auto">
    <form action="index.php?act=capnhattaikhoan" method="post" enctype="multipart/form-data">
        <img class="mb-4" src="image/FPT_Polytechnic.png" alt="" width="100px">
        <h1 class="h3 mb-3 fw-normal">Cập nhật tài khoản</h1>


        <?php if(isset($thongbao)) : ?>
            <div class="alert alert-success">
                <?= $thongbao ?>
            </div>
        <?php endif ?>
        <?php 
            if (isset($_SESSION['dangnhap'])&&(is_array($_SESSION['dangnhap']))) {
                extract($_SESSION['dangnhap']);
            }
        ?>


        <div class="form-floating">
        <input type="hidden" name="id" value="<?= $id?>">
        <input type="text" class="form-control" id="floatingInput" name="ho_ten" placeholder="Họ tên" value="<?= $ho_ten ?>">
        <label for="floatingInput">Họ tên</label>
        </div>

        <div class="mb-3">
        <label class="anhdaidiendk">Ảnh đại diện</label>
        <input type="hidden" name="hinhcu" value="<?=$hinh?>">
        <img class="m-5" src="image/<?=$hinh?>" alt="" width="200px">
        <input class="form-control" type="file" id="formFileDisabled" name="hinh" >
        </div>

        <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" value="<?= $email ?>">
        <label for="floatingInput">Email address</label>
        </div>

        <div class="form-floating">
        <input type="text" class="form-control" id="floatingPassword" name="mat_khau" placeholder="Password" value="<?= $mat_khau ?>">
        <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" name="address" placeholder="Address" value="<?= $address ?>">
        <label for="floatingInput">Địa chỉ</label>
        </div>
        <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" name="phone" placeholder="Phone" value="<?= $phone ?>">
        <label for="floatingInput">Số điện thoại</label>
        </div>

        
        <button class="w-100 mt-5 btn btn-lg btn-primary" type="submit" name="capnhat">Cập nhật</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
    </form>
    </main>
</div>