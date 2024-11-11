<?php 

function insert_bill($id_user,$name,$email,$tel,$address,$tong,$payment_method){
    $sql="insert into bill(id_user,bill_name,bill_email,bill_tel,bill_address,bill_tong,bill_payment_method) values ('$id_user','$name','$email','$tel','$address','$tong','$payment_method')";
    return pdo_execute_return_lastInsertId($sql);
}

function insert_cart($id_user,$id_pro,$name,$price,$img,$color,$size,$quantity,$total,$id_bill){
    $sql="insert into cart(id_user,id_pro,name,price,img,color,size,quantity,total,id_bill) values ('$id_user','$id_pro','$name','$price','$img','$color','$size','$quantity','$total','$id_bill')";
    return pdo_execute($sql);
}

function loadone_bill($idbill){
    $sql = "select *from bill where id_bill=" . $idbill;
    $pro = pdo_query_one($sql);
    return $pro;
}

function loadall_cart($idbill)
{
    $sql = "SELECT * from cart WHERE id_bill=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}

function loadall_bill($id_user){
    $sql = "select *from bill where id_user=".$id_user;
    $bill = pdo_query($sql);
    return $bill;
}

function loadall_bill_withoutuser(){
    $sql = "select *from bill where id_user= 0";
    $bill = pdo_query($sql);
    return $bill;
}

function loadall_bill_admin()
{
    $sql = "SELECT bill.*, COUNT(cart.id_bill) AS sldh
            FROM bill
            LEFT JOIN cart ON bill.id_bill = cart.id_bill
            GROUP BY bill.id_bill;";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function update_bill($id_bill,$bill_status){
    $sql= "update bill set bill_status='".$bill_status."' WHERE id_bill=".$id_bill;
    pdo_execute($sql);
}

function get_ttdh($n){
    switch($n){
        case '0':
            $tt = "Chờ xử lý";
            break;
        case '1':
            $tt = "Đang xử lý";
            break;
        case '2':
            $tt = "Đang giao hàng";
            break;
        case '3':
            $tt = "Đã giao hàng";
            break;
        default:
            $tt = "Lỗi trạng thái";
            break;
    }
    
    return $tt;
}


?>