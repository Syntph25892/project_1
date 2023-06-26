        <div class="mybill">
            
            <div class="tieudecart text-center pt-5">
                <h2 class="fw-bold mb-5">Đơn hàng của tôi</h2>
            </div>
            <table class="table">
                <tr>
                    <th>STT</th>
                    <th>Mã đơn hàng</th>
                    <th>Ngày đặt</th>
                    <th>Số lượng mặt hàng</th>
                    <th>Tổng giá trị đơn hàng</th>
                    <th>Tình trạng đơn hàng</th>
                </tr>
                <?php if (is_array($listbill)) {
                    $stt = 1;
                    
                    foreach ($listbill as $bill) {
                        $ttdh = get_ttdh($bill['bill_status']);
                        $count = loadallcart_count($bill['id']);
                        echo '<tr>
                            <td>'.$stt.'</td>
                            <td>DH-'.$bill['id'].'</td>
                            <td>'.$bill['ngaydathang'].'</td>
                            <td>'.$count.'</td>
                            <td>'.$bill['tonghang'].'</td>
                            <td>'.$ttdh.'</td>
                        </tr> ';
                        $stt +=1;
                    }
                } ?>
                
            </table>
        </div>