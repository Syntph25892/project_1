        <?php 
            if (isset($_SESSION['dangnhap'])&&(is_array($_SESSION['dangnhap']))) {
                extract($_SESSION['dangnhap']);
            }
        ?>
<div class="dangky text-center">
    <main class="form-signin w-100 m-auto">
    <form action="index.php?act=doimk" method="post">
        <img class="mb-4" src="image/FPT_Polytechnic.png" alt="" width="100px">
        <h1 class="h3 mb-3 fw-normal">Đổi mật khẩu</h1>
        <?php if(isset($thongbao)) : ?>
            <div class="alert alert-danger">
                <?= $thongbao ?>
            </div>
        <?php endif ?>
        <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" value="<?=$email?>" disabled>
        <label for="floatingInput">Email address</label>
                <span style="color: red;">
                    <?= isset($error['email']) ? $error['email'] : '' ?>
                </span>

        </div>
        <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" name="matkhaucu" >
        <label for="floatingInput">Mật khẩu cũ</label>
                <span style="color: red;">
                    <?= isset($error['matkhaucu']) ? $error['matkhaucu'] : '' ?>
                </span>

        </div>
        <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" name="matkhaumoi" placeholder="name@example.com">
        <label for="floatingInput">Mật khẩu mới</label>
                <span style="color: red;">
                    <?= isset($error['matkhaumoi']) ? $error['matkhaumoi'] : '' ?>
                </span>

        </div>
        <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" name="xacnhan" placeholder="name@example.com">
        <label for="floatingInput">Xác nhận mật khẩu mới</label>
                <span style="color: red;">
                    <?= isset($error['xacnhan']) ? $error['xacnhan'] : '' ?>
                </span>

        </div>
        <button class="mt-5 w-100 btn btn-lg btn-primary" name="doimk" type="submit">Đổi mật khẩu</button>
        <p class="mt-5 mb-5 text-muted">&copy; 2022</p>
    </form>
    </main>
</div>
