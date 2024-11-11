<hr>
<div id="contain-content">
    <div id="content">
        <div id="content3">
            <h2>Đơn hàng</h2>
            <table border="1">
                <tr>
                    <th style="text-align : left;">Name</th>
                    <th style="text-align : left;">Email</th>
                    <th style="text-align : left;">Tel</th>
                    <th style="text-align : left;">Address</th>
                    <th style="text-align : left;">Tổng tiền</th>
                    <th>Trạng thái đơn hàng</th>
                </tr>
                <?php 
                    if(is_array($allbill)){
                        foreach ($allbill as $bill) {
                            extract($bill);
                            $ttdh = get_ttdh($bill_status);
                            $ttdhClass = ($bill_status == 0 || $bill_status == 1 || $bill_status == 2) ? 'bill-active' : 'bill-non-active';
                            echo '<tr>
                                    <td>'.$bill_name.'</td>
                                    <td>'.$bill_email.'</td>
                                    <td>'.$bill_tel.'</td>
                                    <td>'.$bill_address.'</td>
                                    <td>'.$bill_tong.'đ</td>
                                    <td  style="text-align : center;"><span class="'.$ttdhClass.'">'.$ttdh.'</span></td>
                                </tr>';
                        }
                    }
                ?>
                
            </table>
        </div>
    </div>
</div>
<br>

</body>

</html>