<?php
$loaihang = loadalldm();
?>
        <div class="dsdm">
                <div class="tieudeds">
                    <h2>Danh sách hàng hóa</h2>
                </div>
                <form class="mb-5" action="index.php?act=listhh" method="post">
                    <input type="text" name="keyword">
                    <select name="idloai">
                        <option value="0" selected>Tất cả</option>
                        <?php foreach ($loaihang as $loai) : ?>
                            <option value="<?= $loai['id'] ?>" > <?= $loai['ten_loai'] ?> </option>
                        <?php endforeach ?>
                    </select>
                    <input type="submit" name="listgo" value="Go">
                </form>
                <div class="bangds">
                    <table class="table table-striped">
                            <tr>
                                <th></th>
                                <th>Mã hàng hóa</th>
                                <th>Tên hàng hóa</th>
                                <th>Đơn giá</th>
                                <th>Hình</th>
                                <th>Ngày nhập</th>
                                <th>Tên loại</th>
                                <th>Đặc biệt</th>
                                <th>Lượt xem</th>
                                <th>Mô tả</th>
                                <th>ACTION</th>
                            </tr>
                            <?php foreach($hanghoa as $hanghoa) :?>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td><?= $hanghoa['id']?></td>
                                    <td><?= $hanghoa['ten_hh']?></td>
                                    <td><?= $hanghoa['don_gia']?></td>
                                    <td>
                                        <img src="../image/<?= $hanghoa['hinh']?>" alt="" width="50px">
                                    </td>
                                    <td><?= $hanghoa['ngay_nhap']?></td>
                                    <td>
                                    <?php foreach ($loaihang as $loai) : ?>
                                        <?php if ($hanghoa['id_loai'] === $loai['id']) : ?>
                                            <?= $loai['ten_loai']  ?>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                    </td>
                                    <td><?= $hanghoa['dac_biet']?></td>
                                    <td><?= $hanghoa['so_luot_xem']?></td>
                                    <td><?= $hanghoa['mo_ta']?></td>
                                    <td>
                                        <a href="index.php?act=edithh&id=<?= $hanghoa['id']?>"><button class="btn btn-primary">Sửa</button></a>
                                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa loại hàng này không')"  href="index.php?act=deletehh&id=<?= $hanghoa['id']?>"><button class="btn btn-danger">Xóa</button></a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                            
                            
                            
                        
                    </table>
                    
                    <a href="index.php?act=addhh"><button class="btn btn-primary">Thêm hàng hóa</button></a>
                </div>
        </div>
