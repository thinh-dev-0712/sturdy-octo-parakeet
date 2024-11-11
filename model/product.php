<?php

function loadall_product_new()
{
    $sql = "SELECT p.*, color.color_count, size.size_count
    FROM product p
    LEFT JOIN 
    (SELECT id_pro, count(distinct color) as color_count
    FROM product_detail
    GROUP BY id_pro) color
    ON p.id_pro = color.id_pro
    LEFT JOIN
    (SELECT id_pro, count(distinct size) as size_count
    FROM product_detail
    GROUP BY id_pro) size
    ON p.id_pro = size.id_pro
    ORDER BY p.add_time DESC
    LIMIT 5";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_product_sale()
{
    $sql = "SELECT 
            p.*, 
            color.color_count, 
            size.size_count, 
            (SELECT COUNT(*) FROM product WHERE discount != '') AS total_id_pro_count
        FROM 
            product p
        LEFT JOIN 
            (SELECT id_pro, COUNT(DISTINCT color) AS color_count
            FROM product_detail
            GROUP BY id_pro) color
        ON 
            p.id_pro = color.id_pro
        LEFT JOIN
            (SELECT id_pro, COUNT(DISTINCT size) AS size_count
            FROM product_detail
            GROUP BY id_pro) size
        ON 
            p.id_pro = size.id_pro
        WHERE 
            p.discount != ''";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_product_top()
{
    $sql = "SELECT p.*, color.color_count, size.size_count
    FROM product p
    LEFT JOIN 
    (SELECT id_pro, count(distinct color) as color_count
    FROM product_detail
    GROUP BY id_pro) color
    ON p.id_pro = color.id_pro
    LEFT JOIN
    (SELECT id_pro, count(distinct size) as size_count
    FROM product_detail
    GROUP BY id_pro) size
    ON p.id_pro = size.id_pro
    ORDER BY p.view desc
    LIMIT 10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_product_aonam(){
    $sql = "SELECT p.*, color.color_count, size.size_count
        FROM product p
        LEFT JOIN 
            (SELECT id_pro, COUNT(DISTINCT color) AS color_count
            FROM product_detail
            GROUP BY id_pro) color
        ON p.id_pro = color.id_pro
        LEFT JOIN
            (SELECT id_pro, COUNT(DISTINCT size) AS size_count
            FROM product_detail
            GROUP BY id_pro) size
        ON p.id_pro = size.id_pro
        WHERE p.id_cate = 1";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_product_quannam(){
    $sql = "SELECT p.*, color.color_count, size.size_count
        FROM product p
        LEFT JOIN 
            (SELECT id_pro, COUNT(DISTINCT color) AS color_count
            FROM product_detail
            GROUP BY id_pro) color
        ON p.id_pro = color.id_pro
        LEFT JOIN
            (SELECT id_pro, COUNT(DISTINCT size) AS size_count
            FROM product_detail
            GROUP BY id_pro) size
        ON p.id_pro = size.id_pro
        WHERE p.id_cate = 2";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadone_danhmuc($id_cate){
    $sql = "select *from product where id_cate=".$id_cate;
    $cate = pdo_query_one($sql);
    return $cate;
}

function loadall_product()
{
    $sql = "select product.*,name_cate from product
    inner join category on product.id_cate 
    = category.id_cate";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function insert_product($name_pro, $img, $old_price, $new_price, $discount, $id_cate)
{
    $sql = "insert into product(name_pro,img,old_price,new_price,discount,id_cate) 
    values
     ('$name_pro','$img','$old_price','$new_price','$discount','$id_cate')";
    pdo_execute($sql);
}

function insert_product_detail($id_pro, $img, $color, $size, $description)
{
    $sql = "insert into product_detail(id_pro,img,color,size,description) 
    values
     ('$id_pro','$img','$color','$size','$description')";
    pdo_execute($sql);
}

function loadall_product_from($id_pro)
{
    $sql = "SELECT product_detail.*,product.name_pro FROM product
    inner join product_detail
    on product_detail.id_pro = product.id_pro
    WHERE product_detail.id_pro=" . $id_pro;
    $listpro = pdo_query($sql);
    return $listpro;
}

function loadone_product($id_pro)
{
    $sql = "select *from product where id_pro=" . $id_pro;
    $pro = pdo_query_one($sql);
    return $pro;
}

function loadone_product_detail($id_prodetail)
{
    $sql = "select *from product_detail where id_prodetail=" . $id_prodetail;
    $pro_detail = pdo_query_one($sql);
    return $pro_detail;
}

function loadall_product_detail($id_pro)
{
    $sql = "SELECT product_detail.*, product.name_pro, product.old_price, product.new_price, product.discount
            FROM product_detail 
            INNER JOIN product ON product_detail.id_pro = product.id_pro
            WHERE product_detail.id_pro = " . $id_pro;
    $pro_detail = pdo_query($sql);
    return $pro_detail;
}

function loadone_product_dt($id_pro)
{
    $sql = "SELECT product_detail.*, product.name_pro, product.old_price, product.new_price, product.discount
            FROM product_detail 
            INNER JOIN product ON product_detail.id_pro = product.id_pro
            WHERE product_detail.id_pro = " . $id_pro;
    $pro_detail = pdo_query_one($sql);
    return $pro_detail;
}

function update_product($id_pro, $name_pro, $img, $old_price, $new_price, $discount, $id_cate)
{
    // Xử lý giá trị NULL cho new_price và discount
    $new_price = $new_price === '' ? 'NULL' : "'$new_price'";
    $discount = $discount === '' ? 'NULL' : "'$discount'";

    if ($img != "") {
        $sql = "UPDATE product SET id_cate='$id_cate', name_pro='$name_pro', old_price='$old_price', new_price=$new_price, discount=$discount, img='$img' WHERE id_pro=$id_pro";
    } else {
        $sql = "UPDATE product SET id_cate='$id_cate', name_pro='$name_pro', old_price='$old_price', new_price=$new_price, discount=$discount WHERE id_pro=$id_pro";
    }
    pdo_execute($sql);
}

function update_product_detail( $img, $color, $size, $description, $status, $id_prodetail)
{
    // Chuyển các chuỗi văn bản thành giá trị an toàn cho SQL
    $description = $description === '' ? 'NULL' : "'$description'";
    $status = $status === '' ? 'NULL' : "'$status'";

    // Nếu có ảnh mới
    if ($img != "") {
        $sql = "UPDATE product_detail SET  color='$color', size='$size', description=$description, status=$status, img='$img' WHERE id_prodetail=$id_prodetail";
    } else {
        $sql = "UPDATE product_detail SET  color='$color', size='$size', description=$description, status=$status WHERE id_prodetail=$id_prodetail";
    }
    pdo_execute($sql);
}

?>