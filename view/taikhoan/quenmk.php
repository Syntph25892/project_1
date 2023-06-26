<div class="dangky text-center">
    <main class="form-signin w-100 m-auto">
    <form action="index.php?act=quenmk" method="POST">
        <img class="mb-4" src="image/FPT_Polytechnic.png" alt="" width="100px">
        <h1 class="h3 mb-3 fw-normal">Quên mật khẩu</h1>
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
        <input type="text" class="form-control" id="floatingInput" name="ho_ten" placeholder="name@example.com">
        <label for="floatingInput">Họ tên</label>
        </div>
        <button class="mt-5 w-100 btn btn-lg btn-primary" name="quenmk" type="submit">Gửi</button>
        <p class="mt-5 mb-5 text-muted">&copy; 2022</p>
    </form>
    </main>
</div>