<?php
function viewcart($del){

        if ($del == 1) {
            $xoasp_th = "<th>Thao tác</th>";
            $xoasp_td = "<td></td>";
        }
        else{
            $xoasp_th = "";
            $xoasp_td = "";
        }
        echo '<thead class="bg-secondary">
        <tr>
            <th>STT</th>
            <th>Hình</th>
            <th>Sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            '.$xoasp_th.'
        </tr>
        </thead>';
        
        

            $stt = 1;
            $tong=0;
            foreach($_SESSION['mycart'] as $cart) {
                $hinh = "image/$cart[2]";
                $thanh_tien = $cart[3]*$cart[4];
                if ($del == 1) {
                    $xoasp ='<td><a href="index.php?act=delcart&id='.$stt.'"><button class="btn btn-danger">Xóa</button></a></td>';
                }else{
                    $xoasp = "";
                }
                
               echo '<tr>
               <td>'.$stt.'</td> 
               <td><img src="'.$hinh.'" alt="" width="60px"></td>
               <td>'.$cart[1].'</td>  
               <td>'.$cart[3].'</td>
               <td>'.$cart[4].'</td>
               <td>'.$thanh_tien.'</td>
                '.$xoasp.'
                </tr> ';
                $stt+=1;
                $tong+=$thanh_tien;
            }
            echo '<tr>
                    <td colspan="5">Tổng tiền</td>
                    <td>'.$tong.'</td>
                    '.$xoasp_td.'
                </tr>';
            

}
function ct_bill($listbill){
    
    echo '<thead class="bg-secondary">
    <tr>
        <th>STT</th>
        <th>Hình</th>
        <th>Sản phẩm</th>
        <th>Đơn giá</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
    </tr>
    </thead>';
    
    

        $stt = 1;
        $tong=0;
        foreach($listbill as $cart) {
            $hinh = "image/".$cart['hinh'];
            
           echo '<tr>
           <td>'.$stt.'</td> 
           <td><img src="'.$hinh.'" alt="" width="60px"></td>
           <td>'.$cart['ten_hh'].'</td>  
           <td>'.$cart['don_gia'].'</td>
           <td>'.$cart['so_luong'].'</td>
           <td>'.$cart['thanh_tien'].'</td>
            </tr> ';
            $stt+=1;
            $tong+=$cart['thanh_tien'];
        }
        echo '<tr>
                <td colspan="5">Tổng tiền</td>
                <td>'.$tong.'</td>
                
            </tr>';
}





function tongdonhang(){
    $tong=0;
    foreach($_SESSION['mycart'] as $cart){
        $thanh_tien = $cart[3]*$cart[4];
        $tong+=$thanh_tien;
    }
    return $tong;
}

function insertbill($id_kh,$name,$address,$phone,$email,$pttt,$tong){
    $sql = "INSERT INTO `bill`(`id_kh`,`bill_name`, `bill_address`, `bill_phone`, `bill_email`, `bill_pttt`, `tonghang`) VALUES ('$id_kh','$name','$address','$phone','$email','$tong','$pttt')";
    return pdo_execute_return_lastInsertId($sql);
}

function insert_cart($id_kh,$id_hh,$hinh,$ten_hh,$don_gia,$so_luong,$tong,$idbill){
    $sql = "INSERT INTO `cart`(`id_kh`, `id_hh`, `hinh`, `ten_hh`, `don_gia`, `so_luong`, `thanh_tien`, `id_bill`) VALUES ('$id_kh','$id_hh','$hinh','$ten_hh','$don_gia','$so_luong','$tong','$idbill')";
    return pdo_execute($sql);
}
function loadonebill($idbill){
    $sql = "select*from bill where id=$idbill";
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadallcart($idbill){
    $sql = "select*from cart where id_bill=$idbill";
    $bill = pdo_query($sql);
    return $bill;
}
function loadallcart_count($idbill){
    $sql = "select*from cart where id_bill=$idbill";
    $bill = pdo_query($sql);
    return count($bill);
}
function loadallbill($id_kh){
    $sql = "select*from bill where id_kh=$id_kh";
    $bill = pdo_query($sql);
    return $bill;
}
function loadallbilladmin(){
    $sql = "select*from bill ";
    $bill = pdo_query($sql);
    return $bill;
}
function editbill($id,$ho_ten,$address,$phone,$email,$ttdh){
    $sql = "UPDATE `bill` SET `bill_name`='$ho_ten',`bill_address`='$address',`bill_phone`='$phone',`bill_email`='$email',`bill_status`='$ttdh' WHERE id=$id ";
    pdo_execute($sql);
}
function get_ttdh($a){
    switch ($a) {
        case '0':
            $tt = "Đơn hàng mới";
            break;
        case '1':
            $tt = "Đang xử lý";
            break;
        case '2':
            $tt = "Đang giao hàng";
            break;    
        case '3':
            $tt = "Đã giao";
            break;    
        default:
        $tt = "Đơn hàng mới";
            break;
    }
    return $tt;
}
function loadall_thongke(){
    $sql = "select loai.ten_loai, count(hang_hoa.id) as countsp, min(hang_hoa.don_gia) as minprice, max(hang_hoa.don_gia) as maxprice, avg(hang_hoa.don_gia) as avgprice from hang_hoa inner join loai on loai.id=hang_hoa.id_loai group by loai.id";
    $listtk = pdo_query($sql);
    return $listtk;
}
?>