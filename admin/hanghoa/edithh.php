
<?php if(isset($thongbao)) : ?>
            <div class="alert alert-success">
                <?= $thongbao ?>
            </div>
<?php endif ?>
<div class="adddm">
    <div class="tieudeadddm" >
        <h2>Sửa hàng hóa</h2>
    </div>
    <form action="index.php?act=updatehh" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $hanghoa['id']?>">
        <p>Mã Hàng hóa</p>
        <div class="input-group flex-nowrap">
            <input type="text" class="form-control" name="mahh" value="<?=$hanghoa['id']?>" disabled>
        </div>
        <p>Tên hàng hóa</p>
        <div class="input-group flex-nowrap mb-4" >
            <input type="text" class="form-control" name="tenhh" value="<?=$hanghoa['ten_hh']?>">
                <span style="color: red;">
                    <?= isset($error['name']) ? $error['name'] : '' ?>
                </span>
        </div>
        <p>Đơn giá</p>
        <div class="input-group flex-nowrap mb-4" >
            <input type="number" class="form-control" name="dongia" value="<?=$hanghoa['don_gia']?>">
                <span style="color: red;">
                    <?= isset($error['dongia']) ? $error['dongia'] : '' ?>
                </span>
        </div>
        <p>Hình</p>
        <!-- //lấy tên ảnh cũ -->
        <input type="hidden" name="hinhcu" value="<?=$hanghoa['hinh']?>">
        <!-- //hiện ảnh cũ -->
        <img src="../image/<?=$hanghoa['hinh']?>" alt="" width="200px">
        <!-- lấy ảnh mới -->
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
                <option value="<?= $loai['id'] ?>" <?= ($hanghoa['id_loai'] == $loai['id']) ? 'selected' : '' ?>> 
                    <?= $loai['ten_loai'] ?> 
                </option>
            <?php endforeach ?>
            </select>
        </div>
        <p>Đặc biệt</p>
            <div class="input-group flex-nowrap mb-4">
                <div class="">
                    <input class="form-check-input me-3"  type="radio" name="dac_biet" value="0" <?= ($hanghoa['dac_biet'] == 0) ? 'checked' : '' ?>>Bình thường   
                </div>
                <div class="">
                    <input class="form-check-input me-3 ms-3" type="radio" name="dac_biet" value="1" <?= ($hanghoa['dac_biet'] == 1) ? 'checked' : '' ?> >Đặc Biệt
                </div>
            </div>
        <p>Mô tả</p>
        <div class="input-group flex-nowrap mb-4" >
            <textarea name="mota" id="" cols="50" rows="5"><?=$hanghoa['mo_ta']?></textarea>
        </div>


        <div class="gui">
            
            <input class="btn btn-primary"  type="submit" name="edithh" value="Cập nhật">
            <input class="btn btn-primary"  type="reset" value="Nhập lại" >
            <a href="index.php?act=listhh"><button type="button" class="btn btn-primary">Danh sách loại hàng</button></a>
        </div>
        
    </form>
</div>