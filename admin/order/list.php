<div id="contain-content">
            <div id="content">
                <div id="content3">
                <h2>Order</h2>    
                    <table border="1">
                        <tr>
                            <th style="text-align : left;">Mã đơn hàng</th>
                            <th style="text-align : left;">Khách hàng</th>
                            <th style="text-align : center;">Số lượng sản phẩm</th>
                            <th style="text-align : center;">Giá trị đơn hàng</th>
                            <th style="text-align : center;width: 160px;">Tình trạng đơn hàng</th>
                            <th>Action</th>
                        </tr>
                        <?php 
                       foreach($listbill as $bill){         
                        extract($bill);
                        $ttdh = get_ttdh($bill_status);
                        $ttdhClass = ($bill_status == 0 || $bill_status == 1 || $bill_status == 2) ? 'bill-active' : 'bill-non-active';
                        echo '<tr>
                        <td>'.$id_bill.'</td>
                        <td>'.$bill_name.'<br>
                            '.$bill_email.' <br>
                            '.$bill_tel.' <br>
                            '.$bill_address.'
                        </td>
                        <td style="text-align : center;">'.$sldh.'</td>
                        <td style="text-align : center;">'.$bill_tong.'</td>
                        <td  style="text-align : center;"><span class="'.$ttdhClass.'">'.$ttdh.'</span></td>
                        <td style="text-align : center;">
                        <a href="index.php?act=updatebill&id='.$id_bill.'">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        </td>
                    </tr>';
                    }

                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
<script>
</script>

</body>
</html>