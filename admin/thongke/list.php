        <div class="dsdm">
                <div class="tieudeds">
                    <h2>Thống kê theo danh mục</h2>
                </div>
                <div class="bangds">
                    <table class="table table-striped">
                            <tr>
                                <th>STT</th>
                                <th>Loại hàng</th>
                                <th>Số lượng</th>
                                <th>Giá cao nhất</th>
                                <th>Giá thấp nhất</th>
                                <th>Gía trung bình</th>
                            </tr>
                            <?php 
                                $stt = 1;
                                foreach($listthongke as $thongke) {
                                extract($thongke);
                                
                                echo '<tr>
                                    <td>'.$stt.'</td>
                                    <td>'.$ten_loai.'</td>
                                    <td>'.$countsp.'</td>
                                    <td>'.$maxprice.'</td>
                                    <td>'.$minprice.'</td>
                                    <td>'.$avgprice.'</td>
                                </tr>';
                                $stt +=1;
                                }
                                
                                
                                ?>
                    </table>
                    <a href="index.php?act=bieudo"><button class="btn btn-primary">Xem biểu đồ</button></a>                    
                </div>
        </div>