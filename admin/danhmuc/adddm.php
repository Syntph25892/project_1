




<?php if(isset($thongbao)) : ?>
            <div class="alert alert-success">
                <?= $thongbao ?>
            </div>
        <?php endif ?>
<div class="adddm">
    <div class="tieudeadddm" >
        <h2>Thêm mới loại hàng</h2>
    </div>
    <form action="index.php?act=adddm" method="post">
        <p>Mã loại</p>
        <div class="input-group flex-nowrap">
            <input type="text" class="form-control" name="maloai" disabled>
        </div>
        <p>Tên loại</p>
        <div class="input-group flex-nowrap mb-4" >
            <input type="text" class="form-control" name="tenloai">
        </div>
        <?php if (isset($error['tenloai'])): ?>
            <span style="color: red; font-size: 20px;">
                <?= $error['tenloai']?>
            </span>
        <?php endif?>
        <div class="gui">
            <input class="btn btn-primary"  type="submit" name="themmoi" value="Thêm mới">
            <input class="btn btn-primary"  type="reset" value="Nhập lại" >
            <a href="index.php?act=listdm"><button type="button" class="btn btn-primary">Danh sách loại hàng</button></a>
        </div>
        
    </form>
</div>