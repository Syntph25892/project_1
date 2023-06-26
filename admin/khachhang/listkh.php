
        <div class="dsdm">
                <div class="tieudeds">
                    <h2>Danh sách khách hàng</h2>
                </div>
                <div class="bangds">
                    <table class="table table-striped">
                            <tr>
                                <th></th>
                                <th>Mã khách hàng</th>
                                <th>Họ và tên</th>
                                <th>Email</th>
                                <th>Mật khẩu</th>
                                <th>Hình</th>
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                <th>Vai trò</th>
                                <th>ACTION</th>
                            </tr>
                            <?php foreach($khachhang as $khach) :?>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td><?= $khach['id']?></td>
                                    <td><?= $khach['ho_ten']?></td>
                                    <td><?= $khach['email']?></td>
                                    <td><?= $khach['mat_khau']?></td>
                                    <td>
                                        <img src="../image/<?= $khach['hinh']?>" alt="" width="50px">
                                    </td>
                                    <td><?=$khach['address']?></td>
                                    <td><?=$khach['phone']?></td>
                                    <td><?= $khach['vai_tro']?></td>
                                    <td>
                                        <a href="index.php?act=editkh&id=<?= $khach['id']?>"><button class="btn btn-primary">Sửa</button></a>
                                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa khách hàng này không')"  href="index.php?act=deletekh&id=<?= $khach['id']?>"><button class="btn btn-danger">Xóa</button></a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                            
                            
                            
                        
                    </table>
                    
                    <a href="index.php?act=addkh"><button class="btn btn-primary">Thêm khách hàng</button></a>
                </div>
        </div>
