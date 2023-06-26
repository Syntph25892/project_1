
<div class="dangky text-center">

    <main class="form-signin w-100 m-auto">
    <form action="index.php?act=dangky" method="post" enctype="multipart/form-data">
        <img class="mb-4" src="image/FPT_Polytechnic.png" alt="" width="100px">
        <h1 class="h3 mb-3 fw-normal">Đăng ký tài khoản</h1>
        <?php if(isset($thongbao)) : ?>
            <div class="alert alert-success">
                <?= $thongbao ?>
            </div>
        <?php endif ?>

        <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" name="ho_ten" placeholder="Họ tên" value="<?= isset($ho_ten) ? $ho_ten :''?>">
        <label for="floatingInput">Họ tên</label>
                <span style="color: red;">
                    <?= isset($error['name']) ? $error['name'] : '' ?>
                </span>
        </div>

        <div class="mb-3">
        <label class="anhdaidiendk">Ảnh đại diện</label>
        <input class="form-control" type="file" id="formFileDisabled" name="hinh" >
        </div>

        <div class="form-floating">
        <input type="email" class="form-control mb-3" id="floatingInput" name="email" placeholder="name@example.com" value="<?= isset($email) ? $email :''?>">
        <label for="floatingInput">Email address</label>
                <span style="color: red;">
                    <?= isset($error['email']) ? $error['email'] : '' ?>
                </span>

        </div>

        <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="mat_khau" placeholder="Password" value="<?= isset($mat_khau) ? $mat_khau :''?>">
        <label for="floatingPassword">Password</label>
                <span style="color: red;">
                    <?= isset($error['pass']) ? $error['pass'] : '' ?>
                </span>
        </div>

        <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="repass" placeholder="RePassword" value="<?= isset($repass) ? $repass :''?>">
        <label for="floatingPassword">RePassword</label>
                <span style="color: red;">
                    <?= isset($error['repass']) ? $error['repass'] : '' ?>
                </span>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit" name="dangky">Đăng ký</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
    </form>
    </main>
</div>
    



    
