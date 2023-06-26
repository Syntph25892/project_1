<div class="dangky text-center">
    <main class="form-signin w-100 m-auto">
    <form action="index.php?act=dangnhap" method="POST">
        <img class="mb-4" src="image/FPT_Polytechnic.png" alt="" width="100px">
        <h1 class="h3 mb-3 fw-normal">Đăng nhập</h1>
        <?php if(isset($thongbao)) : ?>
            <div class="alert alert-danger">
                <?= $thongbao ?>
            </div>
        <?php endif ?>
        <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="mat_khau" placeholder="Password">
        <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Nhớ tài khoản
        </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" name="dangnhap" type="submit">Đăng nhập</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
        <div class="quenmk">
            <a class="text-decoration-none " href="index.php?act=quenmk">Quên mật khẩu ?</a>
        </div>
    </form>
    </main>
</div>