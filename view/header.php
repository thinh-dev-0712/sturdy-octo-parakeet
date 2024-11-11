<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án 1</title>
    <link rel="stylesheet" href="./view/css/style.css">
    <link rel="stylesheet" href="./view/css/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div id="main">
        <div id="header">
            <div id="contain-header">
                <a href="./index.php"><img class="logo" width="85px" height="72px" src="./view/image/logo2.jpg"
                        alt=""></a>
                <ul class="nav">
                    <li><a href="index.php?act=sale">Sale</a></li>
                    <li>
                        <a href="#">
                            Danh mục
                            <i class="fa-solid fa-angle-down"></i>
                         </a>
                        <ul class="subnav">
                            <?php 
                                foreach($allcate as $cate) {
                                    extract($cate);
                                    if($status == 'Actived')
                                    echo '<li><a href="index.php?act='.$id_cate.'">'.$name_cate.'</a></li>';
                                }
                            ?>
                        </ul>
                    </li>
                    <li>
                    <li><a href="">Liên hệ</a></li>
                </ul>
                <?php 
                    if(isset($_SESSION['user'])){
                        extract($_SESSION['user']);
                        if($role==1){
                            echo '<div id="action">
                        <ul class="action">
                            <li><a href=""><i class="ti-search"></i></a></li>
                            <li>
                                <a href="">
                                    <i class="ti-user"></i>
                                </a>
                                <ul class="subnav2">
                                    <h3 style="text-align: center;">Chào,'.$name.'</h3>
                                    <li><a  href="admin/index.php">Admin</a></li><br>
                                    <li><a  href="index.php?act=capnhattaikhoan">Thông tin tài khoản</a></li><br>
                                    <li><a  href="index.php?act=dangxuat">Đăng xuất</a></li>
                                </ul>
                            </li>
                            <li>
                            <a href="index.php?act=giohang"><i class="ti-shopping-cart"></i></a>
                            <ul class="subnav3">
                                <li><a  href="index.php?act=mybill">Đơn hàng của tôi</a></li><br>
                                <li><a href="index.php?act=giohang">Giỏ hàng của tôi</a></li>
                            </ul>
                        </li>
                        </ul>    
                    </div>';
                        }
                        else{
                            echo '<div id="action">
                        <ul class="action">
                            <li><a href=""><i class="ti-search"></i></a></li>
                            <li>
                                <a href="">
                                    <i class="ti-user"></i>
                                </a>
                                <ul class="subnav2">
                                    <h3 style="text-align: center;">Chào,'.$name.'</h3>
                                    <li><a  href="index.php?act=capnhattaikhoan">Thông tin tài khoản</a></li><br>
                                    <li><a  href="index.php?act=dangxuat">Đăng xuất</a></li>
                                </ul>
                            </li>
                            <li>
                            <a href="index.php?act=giohang"><i class="ti-shopping-cart"></i></a>
                            <ul class="subnav3">
                                <li><a  href="index.php?act=mybill">Đơn hàng của tôi</a></li><br>
                                <li><a href="index.php?act=giohang">Giỏ hàng của tôi</a></li>
                            </ul>
                            </li>
                        </ul>    
                    </div>';
                        }
                    }else{

                ?>
                <div id="action">
                    <ul class="action">
                        <li><a href=""><i class="ti-search"></i></a></li>
                        <li>
                            <a href="">
                                <i class="ti-user"></i>
                            </a>
                            <ul class="subnav1">
                                <li><a href="index.php?act=dangnhap">Đăng nhập</a></li><br>
                                <li><a href="index.php?act=dangky">Đăng ký</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="index.php?act=giohang"><i class="ti-shopping-cart"></i></a>
                            <ul class="subnav3">
                                <li><a  href="index.php?act=mybill">Đơn hàng của tôi</a></li><br>
                                <li><a href="index.php?act=giohang">Giỏ hàng của tôi</a></li>
                            </ul>
                        </li>
                    </ul>    
                </div>
                <?php } ?>
            </div>
        </div>