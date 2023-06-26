   
        <div class="dsdm">
                <div class="tieudeds">
                    <h2>Danh sách loại hàng</h2>
                </div>
                <div class="bangds">
                    <table class="table table-striped ">
                            <tr>
                                <th></th>
                                <th>MÃ LOẠI</th>
                                <th>Tên loại</th>
                                <th>ACTION</th>
                            </tr>
                            <?php foreach($loaihang as $loai) :?>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td><?= $loai['id']?></td>
                                    <td><?= $loai['ten_loai']?></td>
                                    <td>
                                        <a href="index.php?act=editdm&id=<?= $loai['id']?>"><button class="btn btn-primary">Sửa</button></a>
                                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa loại hàng này không')"  href="index.php?act=deletedm&id=<?= $loai['id']?>"><button class="btn btn-danger">Xóa</button></a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                            
                            
                            
                        
                    </table>
                    
                    <a href="index.php?act=adddm"><button class="btn btn-primary">Thêm loại hàng</button></a>
                </div>
        </div>
