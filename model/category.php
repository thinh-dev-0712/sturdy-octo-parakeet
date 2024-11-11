<?php 

// function loadall_category(){
//     $sql = "SELECT
//     category.id_catedetail,
//     MIN(category_detail.id_catedetail) AS id_catedetail,
//     GROUP_CONCAT(category.name_cate) AS name_cate,
//     category_detail.name
//     FROM
//         category
//     INNER JOIN
//         category_detail ON category.id_catedetail = category_detail.id_catedetail
//     GROUP BY
//         category.id_catedetail";
//     $listdanhmuc = pdo_query($sql);
//     return $listdanhmuc;
// }

function loadall_category(){
    $sql = "select *from category";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function loadone_category($id_cate){
    $sql = "select *from category where id_cate=".$id_cate;
    $cate = pdo_query_one($sql);
    return $cate;
}

function update_category($id_cate,$name_cate,$status){
    $sql= "update category set name_cate='".$name_cate."' , status='".$status."' WHERE id_cate=".$id_cate;
    pdo_execute($sql);
}

function insert_category($name_cate){
    $sql="insert into category(name_cate) values ('$name_cate')";
    pdo_execute($sql);
}


?>