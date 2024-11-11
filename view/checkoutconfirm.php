<hr>
<div id="contain-checkout">
    <?php
        if(is_array($onebill)){
            extract($onebill);
        }
    ?>
        <div id="checkout-confirm">
        <img width="50px" src="view/image/logo2.jpg" alt="">
        <h3>Đặt hàng thành công</h3>
        <span>Mã đơn hàng #<?php echo $id_bill; ?></span><br>
        <span>Cảm ơn bạn đã mua hàng!</span> <br> <br>
        <div id="bill-detail">
            <h3>Thông tin giao hàng</h3>
            <div style="display:flex; justify-content:space-between;" class="billname">
            <span>Họ và tên:</span> 
            <span><?php echo $bill_name; ?></span>
            </div>
            <div style="display:flex; justify-content:space-between;" class="bill_tel">
            <span>Tel:</span>
            <span><?php echo $bill_tel; ?></span>
            </div>
            <div style="display:flex; justify-content:space-between;" class="bill_address">
            <span>Địa chỉ:</span>
            <span><?php echo $bill_address; ?></span>
            </div>
            <div style="display:flex; justify-content:space-between;" class="bill_payment">
            <span>Phương thức thanh toán:</span> <br>
            <span>
                <?php
                 if($bill_payment_method==1){
                    echo 'Thanh toán khi nhận hàng';
                 }else{
                    echo 'Chuyển khoản';
                 }
                 ?>
            </span>
            </div>
        </div>
        <a href="index.php?act=home"><input style="padding: 10px 10px;
                border: none; cursor: pointer;
                background: rgb(0, 0, 0); color:white; margin-top:10px; border-radius:10px;" type="button" value="TIẾP TỤC MUA HÀNG"></a>
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
                        $tong=0;
                        foreach ($allcart as $cart) {
                            $img_path = "./upload/";
                            $hinh = $img_path . $cart['img']; // Sử dụng giá trị từ $cart
                            $name = $cart['name']; // Sử dụng giá trị từ $cart
                            $color = $cart['color']; // Sử dụng giá trị từ $cart
                            $size = $cart['size']; // Sử dụng giá trị từ $cart
                            $quantity = $cart['quantity']; // Sử dụng giá trị từ $cart
                            $price = $cart['price']; // Sử dụng giá trị từ $cart
                            $total = $cart['total']; // Sử dụng giá trị từ $cart
                            $tong+=$total;
                            echo '<tr>
                        <td  style="text-align : center;position:relative; width: 50px; ">
                        <img width=55px src="' . $hinh . '" alt="">
                        </td>
                        <td style="text-align: left;">
                        ' . $name . ' 
                        <br> 
                        <span style="color:#ccc;">' . $color . ' /</span>
                         <span style="color:#ccc;">' . $size . '</span>
                        </td>
                        <td>' . $quantity . '</td>
                        <td >' . $total . 'đ</td>
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