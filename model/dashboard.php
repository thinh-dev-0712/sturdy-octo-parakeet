<?php 

function donhang_choxacnhan()
{
    $sql = "select COUNT(bill_status) as sl
            from bill
            where bill_status = 0
            group by bill_status";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function donhang_dangxuly()
{
    $sql = "select COUNT(bill_status) as sl
            from bill
            where bill_status = 1
            group by bill_status";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function donhang_danggiaohang()
{
    $sql = "select COUNT(bill_status) as sl
            from bill
            where bill_status = 2
            group by bill_status";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function donhang_dagiaohang()
{
    $sql = "select COUNT(bill_status) as sl
            from bill
            where bill_status = 3
            group by bill_status";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function tongdonhang()
{
    $sql = "select COUNT(id_bill) as sl
            from bill";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function tongsanpham()
{
    $sql = "select COUNT(id_pro) as sl
            from product";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function aonam()
{
    $sql = "select COUNT(id_cate) as sl
            from product
            where id_cate = 1
            group by id_cate";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function quannam()
{
    $sql = "select COUNT(id_cate) as sl
            from product
            where id_cate = 2
            group by id_cate";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function tongaccount()
{
    $sql = "select COUNT(id_user) as sl
            from user";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
?>