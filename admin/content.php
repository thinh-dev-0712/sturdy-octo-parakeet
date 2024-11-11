<?php 
$sl_choxacnhan = $donhang_choxacnhan ? $donhang_choxacnhan[0]['sl'] : 0;
$sl_dangxuly = $donhang_dangxuly ? $donhang_dangxuly[0]['sl'] : 0;
$sl_danggiaohang = $donhang_danggiaohang ? $donhang_danggiaohang[0]['sl'] : 0;
$sl_dagiaohang = $donhang_dagiaohang ? $donhang_dagiaohang[0]['sl'] : 0;
$sl_tongdonhang = $tongdonhang ? $tongdonhang[0]['sl'] : 0;
$sl_tongsanpham = $tongsanpham ? $tongsanpham[0]['sl'] : 0;
$sl_aonam = $aonam ? $aonam[0]['sl'] : 0;
$sl_quannam = $quannam ? $quannam[0]['sl'] : 0;
$sl_tongaccount = $tongaccount ? $tongaccount[0]['sl'] : 0;
?>

<div id="contain-content">
            <div  style="width: 550px;"id="content">
                <div   id="content3">
                    <h2>Thống kê đơn hàng</h2>
                    <table style="width: 500px;" border="1">
                        <tr>
                            <th style="text-align : left;">Tổng số đơn hàng</th>
                            <th style="text-align : left;">Đơn hàng đang chờ xử lý</th>
                            <th style="text-align : left;">Đơn hàng đang xử lý</th>
                            <th style="text-align : left;">Đơn hàng đang được giao</th>
                            <th style="text-align : left;">Đơn hàng đã giao</th>
                        </tr>
                        <tr>
                        <td><?php echo $sl_tongdonhang; ?></td>
                        <td><?php echo $sl_choxacnhan; ?></td>
                        <td><?php echo $sl_dangxuly; ?></td>
                        <td><?php echo $sl_danggiaohang; ?></td>
                        <td><?php echo $sl_dagiaohang; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div style="width: 350px;" id="content">
                <div id="content3">
                    <h2>Thống kê sản phẩm</h2>
                    <table style="width: 300px;" border="1">
                        <tr>
                            <th style="text-align : left;">Tổng số sản phẩm</th>
                            <th style="text-align : left;">Áo nam</th>
                            <th style="text-align : left;">Quần nam</th>
                        </tr>
                        <tr>
                        <td><?php echo $sl_tongsanpham; ?></td>
                        <td><?php echo $sl_aonam; ?></td>
                        <td><?php echo $sl_quannam; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div style="width: 250px;" id="content">
                <div  id="content3">
                    <h2>Thống kê tài khoản</h2>
                    <table style="width: 150px;" border="1">
                        <tr>
                            <th style="text-align : left;">Tổng số tài khoản</th>
                        </tr>
                        <tr>
                        <td><?php echo $sl_tongaccount; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
<script>
</script>

</body>
</html>