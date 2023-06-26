<?php
    if (isset($bill)&&(is_array($bill))) {
        extract($bill);
    }

?>
<div class="bill">
            <div class="alert alert-success text-center">
                <h2>Cảm ơn quý khách đã đặt hàng !</h2>
            </div>
    
    <div class="phuongthuctt">
        
        <div class="tieudecart text-center pt-5 mb-5">
            <h2 class="fw-bold mb-5">Thông tin đơn hàng</h2>
        </div>
        <div class="ttdh fs-5 fw-bold mt-5">
            <p>Mã đơn hàng: DH-<?=$bill['id']?></p>
            <p>Người đặt hàng: <?=$bill['bill_name']?></p>
            <p>Địa chỉ: <?=$bill['bill_address']?></p>
            <p>Số điện thoại: <?=$bill['bill_phone']?></p>
            <p>Email: <?=$bill['bill_email']?></p>
            <p>Ngày đặt hàng: <?=$bill['ngaydathang']?></p>
            <p>Tổng đơn hàng: <?=$bill['tonghang']?></p>
            <p>Phương thức thanh toán: <?=$bill['bill_pttt']?></p>
        </div>     
    </div>

    <div class="ttdonhang mt-5">
        <table class="table ">
            <?=ct_bill($ctbill)?>
            
        </table>
    </div>
</div>