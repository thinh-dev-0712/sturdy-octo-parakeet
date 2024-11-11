<hr style="border: 1px solid #ccc;">
<br>
<div id="content">
    <div id="giohang">
        <div id="content1">
            <h2>Giỏ hàng của bạn</h2>
            <div id="content-table">
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
                    $i = 0;
                    foreach ($_SESSION['mycart'] as $cart) {
                        $img_path = "./upload/";
                        $hinh = $img_path . $cart[3];
                        $tong += $cart[7];
                            echo '<tr>
                        <td  style="text-align : center;position:relative; width: 50px; padding: 10px 10px 10px 20px; ">
                        <img width=55px src="' . $hinh . '" alt="">
                        <a style="position:absolute; left: 15px;
                        top: 0px;" href="index.php?act=delcart&idcart=' . $i . '">
                        <input style="border-radius: 100px;
                        border: none;
                        font-size: 0.7vw;
                        padding: 5px 5px;
                        cursor: pointer;" type="button" value="Xoá">
                        </a>
                        </td>
                        <td style="text-align: left;">' . $cart[1] . ' <br> <span style="color:#ccc;">' . $cart[4] . ' /</span> <span style="color:#ccc;">' . $cart[5] . '</span></td>
                        <td>' . $cart[6] . '</td>
                        <td >' . $cart[7] . 'đ</td>
                        </tr>';
                        $i += 1; 
                    }
                    ?>
                </table>
            </div>
        </div>
        <div id="content2">
            <h2>Thông tin đơn hàng</h2> <br>
            <hr>
            <br>
            <span style="font-weight: bold; font-size: 1.3vw;">Tổng tiền:</span>
            <span style="font-weight: bold; font-size: 1.5vw; color:red;"><?php echo $tong;?>đ</span>
            <br>
            <br>
            <hr><br>
            <div class="thanhtoan">
            <a href="index.php?act=checkout"><input type="button" value="THANH TOÁN"></a>
            </div>
            
        </div>
    </div>
</div>

<br>
<hr style="border: 1px solid #ccc;">