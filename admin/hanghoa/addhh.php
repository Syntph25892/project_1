




<?php if(isset($thongbao)) : ?>
            <div class="alert alert-success">
                <?= $thongbao ?>
            </div>
        <?php endif ?>

<div class="adddm">
    <div class="tieudeadddm" >
        <h2>Thêm mới hàng hóa</h2>
    </div>
    <form action="index.php?act=addhh" method="post" enctype="multipart/form-data">
        <p>Mã hàng hóa</p>
        <div class="input-group flex-nowrap">
            <input type="text" class="form-control" name="mahh" disabled>
        </div>
        <p>Tên hàng hóa</p>
        <div class="input-group flex-nowrap mb-4" >
            <input type="text" class="form-control" name="tenhh" value="<?= isset($tenhh) ? $tenhh :''?>">
                <span style="color: red;">
                    <?= isset($error['name']) ? $error['name'] : '' ?>
                </span>
        </div>
        <p>Đơn giá</p>
        <div class="input-group flex-nowrap mb-4" >
            <input type="number" class="form-control" name="dongia" value="<?= isset($dongia) ? $dongia :''?>">
                <span style="color: red;">
                    <?= isset($error['don_gia']) ? $error['don_gia'] : '' ?>
                </span>
        </div>
        <p>Hình</p>
        <div class="input-group flex-nowrap mb-4" >
            <input type="file" class="form-control" name="hinh">
                <span style="color: red;">
                    <?= isset($error['hinh']) ? $error['hinh'] : '' ?>
                </span>
        </div>
        <p>Loại sản phẩm</p>
        <div class="input-group flex-nowrap mb-4" >
            <select name="loaihang">   
            <?php foreach ($loaihang as $loai) : ?>
                <option value="<?= $loai['id'] ?>" > <?= $loai['ten_loai'] ?> </option>
            <?php endforeach ?>
            </select>
        </div>
        <p>Đặc biệt</p>
        <div class="input-group flex-nowrap mb-4" >
            <div class="">
                <input class="form-check-input me-3"  type="radio" name="dac_biet" value="0" checked>Bình thường   
            </div>
            <div class="">
                <input class="form-check-input me-3 ms-3" type="radio" name="dac_biet" value="1" >Đặc Biệt
            </div>
        </div>
        <p>Mô tả</p>
        <div class="input-group flex-nowrap mb-4" >
            <input type="text" class="form-control" name="mota" value="<?= isset($mota) ? $mota :''?>">
        </div>
        
        <div class="gui">
            <input class="btn btn-primary"  type="submit" name="themmoi" value="Thêm mới">
            <input class="btn btn-primary"  type="reset" value="Nhập lại" >
            <a href="index.php?act=listhh"><button type="button" class="btn btn-primary">Danh sách hàng hóa</button></a>
        </div>
        
    </form>
</div>