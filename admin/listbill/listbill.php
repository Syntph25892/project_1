
        <div class="dsdm">
                <div class="tieudeds">
                    <h2>Danh sách đơn hàng</h2>
                </div>
                <div class="bangds">
                    <table class="table table-striped">
                            <tr>
                                <th>Mã đơn hàng</th>
                                <th>Thông tin khách hàng</th>
                                <th>Số lượng mặt hàng</th>
                                <th>Gía trị đơn hàng</th>
                                <th>Tình trạng đơn hàng</th>
                                <th>ACTION</th>
                            </tr>
                            <?php foreach($listbill as $bill) :?>
                                
                                <tr>
                                    <td>DH-<?= $bill['id']?></td>
                                    <td><?= $bill['bill_name']?> <br>
                                        <?= $bill['bill_address']?> <br>
                                        <?= $bill['bill_email']?> <br>
                                        <?= $bill['bill_phone']?>
                                    </td>
                                    <td><?= loadallcart_count($bill['id'])?></td>
                                    <td><?= $bill['tonghang']?></td>
                                    <td><?= get_ttdh($bill['bill_status']) ?></td>
                                    <td>
                                        <a href="index.php?act=editbill&id=<?= $bill['id']?>"><button class="btn btn-primary">Sửa</button></a>
                                        
                                    </td>
                                </tr>
                            <?php endforeach ?>
                            
                            
                            
                        
                    </table>

                </div>
        </div>