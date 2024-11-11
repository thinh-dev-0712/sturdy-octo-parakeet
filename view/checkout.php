<hr>
<div id="contain-checkout">
        <div id="checkout">
        <form action="index.php?act=billconfirm" method="POST">
            <?php 
            if(isset($_SESSION['user'])){
                $name = $_SESSION['user']['name'];
                $email = $_SESSION['user']['email'];
                $tel = $_SESSION['user']['tel'];
                $address = $_SESSION['user']['address'];
            }else{
                $name ="";
                $email ="";
                $tel ="";
                $address ="";
            }
            
            ?>
            
            <img width="50px" src="view/image/logo2.jpg" alt="">
            <h3>Thông tin giao hàng</h3>
            <span>Bạn đã có tài khoản?</span>  
            <a href="index.php?act=dangnhap">Đăng nhập</a>    <br> <br>
            <input type="text" name="name" value="<?php echo $name ?>" placeholder="Họ và tên"> <br> <br>
            <input style="width: 60%; margin-right: 10px;" type="text" name="email" value="<?php echo $email ?>"  placeholder="Email">
            <input style="width: 28%;" type="text" name="tel" value="<?php echo $tel ?>" placeholder="Điện thoại">    <br> <br>
            <input type="text" name="address" value="<?php echo $address ?>" placeholder="Địa chỉ">    <br> <br>
            <h3>Phương thức thanh toán</h3> 
            <table>
                <tr>
                    <td style="width: 220px; padding:0px;"><input  type="radio" value="1" name="payment_method" checked>Thanh toán khi nhận hàng</td>
                    <td style="padding:0px;"><input  type="radio" value="2" name="payment_method" >Chuyển khoản</td>
                </tr>
            </table>
            <br>
            <div  class="confirm">
                <a style="text-decoration: none;" href="index.php?act=giohang">Giỏ hàng</a>
                <a href="index.php?act=checkoutconfirm"><input style="padding: 10px 10px;
                border: none; cursor: pointer;
                background: rgb(0, 0, 0); color:white;" name="dathang" type="submit" value="Hoàn tất đơn hàng"></a>
            </div>
            <?php 
            $tong = 0;
            foreach ($_SESSION['mycart'] as $cart) {
                $tong += $cart[7];
            }
            ?>
            <input type="hidden" name="tong" value="<?php echo$tong; ?>">
        </form> 
        </div> 
        <div id="cart-info">
            <table style="border: 1px solid #ccc;
                    border-radius: 10px; border-collapse: separate;" border="0">
                    <tr>
                        <th style="text-align : center;"></th>
                        <th style="text-align : center;"></th>
                        <th style="text-align : center;"></th>
                        <th style="text-align : center;"></th>
                    </tr>
                    <?php
                    $tong = 0;
                    foreach ($_SESSION['mycart'] as $cart) {
                        $img_path = "./upload/";
                        $hinh = $img_path . $cart[3];
                        $tong += $cart[7];
                            echo '<tr>
                        <td  style="text-align : center;position:relative; width: 50px; ">
                        <img width=55px src="' . $hinh . '" alt="">
                        </td>
                        <td style="text-align: left;">' . $cart[1] . ' <br> <span style="color:#ccc;">' . $cart[4] . ' /</span> <span style="color:#ccc;">' . $cart[5] . '</span></td>
                        <td>' . $cart[6] . '</td>
                        <td >' . $cart[7] . 'đ</td>
                        </tr>';
                    }
                    ?>
                    
                </table>
                <br>
                <hr> <br>
                <div class="info1">
                    <span>Thanh toán:</span>
                    <span><?php echo $tong;  ?>đ</span>
                </div>
                <br>
                <div class="info2">
                    <span>Phí vận chuyển:</span>
                    <span>Miễn phí</span>
                </div>
                <br>
                <hr>
                <br>
                <div class="info3">
                    <span>Tổng cộng:</span>
                    <span style="font-size:x-large"><?php echo $tong;  ?>đ</span>
                </div>
                    
                
        </div>
    </div>