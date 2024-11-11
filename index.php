<?php
session_start();
include ("model/category.php");
include ("model/pdo.php");
include ("model/product.php");
include ("model/user.php");
include ("model/cart.php");

if(!isset($_SESSION['mycart'])) $_SESSION['mycart'] =[];

$spnew = loadall_product_new();
$spsale = loadall_product_sale();
$sptop = loadall_product_top();
$allcate=loadall_category();
$aonam=loadall_product_aonam();
$quannam=loadall_product_quannam();
include ("view/header.php");


if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangky':
            if ((isset($_POST['dangky']) && ($_POST['dangky']))) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                if (empty($name) || empty($email) || empty($password)) {
                    echo "<script>alert('Không được để trống tên, email, password'); window.history.back();</script>";
                    exit;
                }else{
                    echo "<script>alert('Thêm thành công'); window.history.back();</script>";
                    insert_user($name, $email, $password);
                    header('location: index.php?act=dangnhap');
                }
            }
            include('view/dangky.php');
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $checkuser = checkuser($email, $password);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('Location: index.php');  
                } else {
                    ?>
                    <script>
                        alert('Sai thông tin đăng nhập')
                    </script>
                    <?php
                }
            }
            include ("view/dangnhap.php");
            break;
        case 'capnhattaikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $tel = $_POST['tel'];
                $address = $_POST['address'];
                $id_user = $_POST['id_user'];
                update_user($name, $email, $password, $tel, $address, $id_user);
                $_SESSION['user'] = checkuser($email, $password);
                header('Location: index.php?act=capnhattaikhoan');
            }
            include ('view/thongtin.php');
            break;
        case 'quenmk':
            if (isset($_POST['quenmk']) && ($_POST['quenmk'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    ?>
                    <script>
                        alert('Pass của bạn là:<?php echo $checkemail['password'] ?>');
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        alert('Sai email');
                    </script>
                    <?php
                }
            }
            include ("view/quenmk.php");
            break;
        case 'dangxuat':
            session_destroy();
            header('Location: index.php');
            break;
        case 'productdetail':
            if($_GET['idproduct']&&($_GET['idproduct']>0)){
                $id_pro = $_GET['idproduct'];
                $allprodetail=loadall_product_detail($id_pro);
                $pro = loadone_product($id_pro);
                $onepro=loadone_product_dt($id_pro);
            }
            include('view/productdetail.php');
            break;
        case 'sale':
            include ("view/sale.php");
            break;
        case '1':
            include ("view/aonam.php");
            break;
        case '2':
            include ("view/quannam.php");
            break;
        case 'giohang':
            include('view/giohang.php');
            break;
        case 'themvaogio':
            if (isset($_POST['themvaogio'])) {
                $id_pro = $_POST['id_pro'];
                $name_pro = $_POST['name_pro'];
                $img = $_POST['img'];
                $color = $_POST['color'];
                $size = $_POST['size'];
                $quantity = $_POST['quantity'];

                if (empty($color) || empty($size)) {
                    echo "<script>alert('Chọn màu sắc và size'); window.history.back();</script>";
                    exit;
                }
                
                if ($_POST['discount'] != "") {
                    $new_price = $_POST['new_price'];
                    $ttien = $new_price * $quantity;
                    $spadd = [$id_pro, $name_pro, $new_price, $img, $color, $size, $quantity, $ttien];
                } else {
                    $old_price = $_POST['old_price'];
                    $ttien = $old_price * $quantity;
                    $spadd = [$id_pro, $name_pro, $old_price, $img, $color, $size, $quantity, $ttien];
                }
                // Thêm sản phẩm vào giỏ hàng
                array_push($_SESSION['mycart'], $spadd);
                header('Location: index.php?act=giohang');
            }
            break;
        case 'delcart':
            if(isset($_GET['idcart'])){
                array_splice($_SESSION['mycart'],$_GET['idcart'],1);
            }else{  
                $_SESSION['mycart']=[];
            }
            header('location: index.php?act=giohang');
            break;
        case 'checkoutconfirm':
            include('view/checkoutconfirm.php');
            break;
        case 'billconfirm':
            if(isset($_POST['dathang'])&&($_POST['dathang'])){
                if(isset($_SESSION['user'])) $id_user=$_SESSION['user']['id_user'];
                else $id_user=0;
                $name = $_POST['name'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $address = $_POST['address'];
                $payment_method = $_POST['payment_method'];
                $tong = $_POST['tong'];

                $idbill=insert_bill($id_user,$name,$email,$tel,$address,$tong,$payment_method);

                foreach($_SESSION['mycart'] as $cart){
                    insert_cart($id_user,$cart[0],$cart[1],$cart[2],$cart[3],$cart[4],$cart[5],$cart[6],$cart[7],$idbill);
                }
                $_SESSION['mycart']=[];
            }
            $onebill=loadone_bill($idbill);
            $allcart=loadall_cart($idbill);
            include('view/checkoutconfirm.php');
            break;
        case 'checkout':    
            include ('view/checkout.php');
            break;  
        case 'mybill':
            if(isset($_SESSION['user'])) $id_user=$_SESSION['user']['id_user'];
            else $id_user=0;
            $allbill = loadall_bill($id_user);
            include('view/mybill.php');
            break;
        default:
            include ("view/home.php");
            break;
    }
} else {
    include ("view/home.php");
}
include ("view/footer.php");
?>e