
        <div class="dsdm">
                <div class="tieudeds">
                    <h2>Danh sách bình luận</h2>
                </div>
                <div class="bangds">
                    <table class="table table-striped">
                            <tr>
                                <th></th>
                                <th>Mã bình luận</th>
                                <th>Nội dung</th>
                                <th>ID khách hàng</th>
                                <th>ID sản phẩm</th>
                                <th>Ngày bình luận</th>
                                <th>ACTION</th>
                            </tr>
                            <?php foreach($binhluan as $bl) :?>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td><?= $bl['id']?></td>
                                    <td><?= $bl['noi_dung']?></td>
                                    <td><?= $bl['id_kh']?></td>
                                    <td><?= $bl['id_hh']?></td>
                                    <td><?= $bl['ngay_bl']?></td>
                                    <td>
                                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa khách hàng này không')"  href="index.php?act=deletebl&id=<?= $bl['id']?>"><button class="btn btn-danger">Xóa</button></a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                            
                            
                            
                        
                    </table>
                 
                </div>
        </div>
