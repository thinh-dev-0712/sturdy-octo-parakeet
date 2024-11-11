<?php 
session_start();
include('../model/pdo.php');
include('../model/product.php');
include('../model/category.php');
include('../model/user.php');
include('../model/cart.php');
include('../model/dashboard.php');
$allcate=loadall_category();
$allpro=loadall_product();
$user=loadall_user();
$donhang_choxacnhan=donhang_choxacnhan();
$donhang_dangxuly=donhang_dangxuly();
$donhang_danggiaohang=donhang_danggiaohang();
$donhang_dagiaohang=donhang_dagiaohang();
$tongdonhang=tongdonhang();
$tongsanpham=tongsanpham();
$aonam=aonam();
$quannam=quannam();
$tongaccount=tongaccount();
include('header.php');
include('sidebar.php');

if(isset($_GET['act'])&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch ($act) {
        case 'listcate':
            include('category/list.php');
            break;
        case 'addcate':
            include('category/add.php');
            break;
        case 'themcate':
            if(isset($_POST['add'])&&($_POST['add'])){
                $name_cate = $_POST['name_cate'];
                if (empty($name_cate)) {
                    echo "<script>alert('Không được để trống tên'); window.history.back();</script>";
                    exit;
                }else{
                    echo "<script>alert('Thêm thành công'); window.history.back();</script>";
                    insert_category($name_cate);
                }
            }
            header('location: index.php?act=listcate');
            break;
        case 'updatecate':
            if($_GET['id']&&($_GET['id']>0)){
                $id_cate = $_GET['id'];
                $onecate=loadone_category($id_cate);
            }
            include('category/update.php');
            break;  
        case 'suacate':
            if(isset($_POST['update'])&&($_POST['update'])){
                $name_cate = $_POST['name_cate'];
                $id_cate = $_POST['id_cate'];
                $status = $_POST['status'];
                update_category($id_cate,$name_cate,$status);
            } 
            header('location: index.php?act=listcate');
            break;
        case 'listpro':
            include('product/list.php');
            break;
        case 'addpro':
            include('product/add.php');
            break;
        case 'thempro':
            if(isset($_POST['add'])&&($_POST['add'])){
                $name_pro = $_POST['name_pro'];
                $old_price = $_POST['old_price'];
                $new_price = $_POST['new_price'];
                $discount = $_POST['discount'];
                $id_cate = $_POST['id_cate'];
                $img = $_FILES['img']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                if (empty($name_pro) || empty($old_price) || empty($img)) {
                    echo "<script>alert('Không được để trống tên, old_price và img'); window.history.back();</script>";
                    exit;
                }else{
                    echo "<script>alert('Thêm thành công'); window.history.back();</script>";
                    insert_product($name_pro,$img,$old_price,$new_price,$discount,$id_cate);
                    header('location: index.php?act=listpro');
                }
            }
            break;
        case 'updatepro':
            if($_GET['id']&&($_GET['id']>0)){
                $id_pro = $_GET['id'];
                $onepro = loadone_product($id_pro);
            }
            include('product/update.php');
            break; 
        case 'suaproduct':
            if (isset($_POST['update']) && ($_POST['update'])) {
                $id_pro = $_POST['id_pro'];
                $name_pro = $_POST['name_pro'];
                $old_price = $_POST['old_price'];
                $new_price = $_POST['new_price'];
                $discount = $_POST['discount'];
                $id_cate = $_POST['id_cate'];
                $img = $_FILES['img']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_product($id_pro,$name_pro,$img,$old_price,$new_price,$discount,$id_cate);
            }
            $allpro=loadall_product();
            include 'product/list.php';
            break;
        case 'listprodetail':
            if($_GET['id']&&($_GET['id']>0)){
                $id_pro = $_GET['id'];
                $allpro=loadall_product_from($id_pro);
                $pro = loadone_product($id_pro);
            }
            include('product/listdetail.php');
            break;
        case 'addprodetail':
            if($_GET['id']&&($_GET['id']>0)){
                $id_pro = $_GET['id'];
                $allpro=loadall_product_from($id_pro);
                $pro = loadone_product($id_pro);
            }
            include('product/adddetail.php');
            break;
        case 'themprodetail':
            if (isset($_POST['add']) && $_POST['add']) {
                $color = $_POST['color'];
                $size = $_POST['size'];
                $description = $_POST['description'];
                $id_pro = $_POST['id_pro'];
                $img = $_FILES['img']['name'];
                // Xử lý upload ảnh
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                move_uploaded_file($_FILES["img"]["tmp_name"], $target_file); 
                if (empty($color) || empty($size) || empty($description)) {
                    echo "<script>alert('Không được để trống màu, size, mô tả'); window.history.back();</script>";
                    exit;
                }else{
                    echo "<script>alert('Thêm thành công'); window.history.back();</script>";
                    insert_product_detail($id_pro, $img, $color, $size, $description);
                    header('location: index.php?act=listpro');
                }
            }
            break;
        case 'updateprodetail':
            if($_GET['id']&&($_GET['id']>0)){
                $id_prodetail = $_GET['id'];
                $pro_detail = loadone_product_detail($id_prodetail);
            }
            include('product/updatedetail.php');
            break; 
        case 'suaproductdetail':
            if (isset($_POST['update']) && ($_POST['update'])) {
                $color = $_POST['color'];
                $size = $_POST['size'];
                $description = $_POST['description'];
                $status = $_POST['status'];
                $id_prodetail = $_POST['id_prodetail'];
                $img = $_FILES['img']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_product_detail( $img, $color, $size, $description, $status, $id_prodetail);
            }
            header('location: index.php?act=listpro');
            break;
        case 'listuser':
            include('user/list.php');
            break;
        case 'updateuser':
            if($_GET['id']&&($_GET['id']>0)){
                $id_user = $_GET['id'];
                $user=loadone_user($id_user);
            }
            include('user/update.php');
            break;
        case 'suauser':
            if(isset($_POST['update'])&&($_POST['update'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $tel = $_POST['tel'];
                $address = $_POST['address'];
                $role = $_POST['role'];
                $id_user = $_POST['id_user'];
                $status = $_POST['status'];
                update_user_full($name,$email,$password,$tel,$address,$role,$status,$id_user);
            } 
            header('location: index.php?act=listuser');
            break;
        case 'listorder':
            $listbill=loadall_bill_admin();
            include('order/list.php');
            break;
        case 'updatebill':
            if($_GET['id']&&($_GET['id']>0)){
                $idbill = $_GET['id'];
                $bill=loadone_bill($idbill);
                $listbill=loadall_bill_admin();
            }
            include('order/update.php');
            break;
        case 'suabill':
            if(isset($_POST['update'])&&($_POST['update'])){
                $id_bill = $_POST['id_bill'];
                $bill_status = $_POST['bill_status'];
                update_bill($id_bill,$bill_status);
            } 
            header('location: index.php?act=listorder');
            break;
        case 'thongke':
            include('content.php');
            break;
        default:
            include('content.php');            
            break;
    }
}else{
    include('content.php');
}


?>