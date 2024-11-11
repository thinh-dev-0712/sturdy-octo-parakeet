<?php 
if(is_array($bill)){
    extract($bill);
}
?>

<div id="contain-content">
            <div id="content">
                <div id="content3">
                <div style="text-align: center;" id="title">
                    <h1>UPDATE ORDER</h1>
                </div>
                <div id="form">
                <form action="index.php?act=suabill" method="post">
                    <div class="status">
                    Status <br> 
                    <?php
                    // Danh sách các trạng thái đơn hàng
                    $statuses = [
                        0 => 'Chờ xử lý',
                        1 => 'Đang xử lý',
                        2 => 'Đang giao hàng',
                        3 => 'Đã giao hàng'
                    ];

                    // Trạng thái hiện tại của đơn hàng (ví dụ từ cơ sở dữ liệu hoặc biến khác)
                    $current_status = $bill_status; // Thay thế bằng giá trị thực tế của trạng thái hiện tại
                ?>
                <select name="bill_status">
                    <?php 
                    foreach ($statuses as $value => $label) {
                        $selected = ($value == $current_status) ? 'selected' : '';
                        echo '<option value="' . $value . '" ' . $selected . '>' . $label . '</option>';
                    }
                    ?>
                </select>
                    </div>
                    <br>
                    <div class="submit">
                    <input type="hidden" name="id_bill" value="<?php echo $id_bill;?>">
                    <input type="submit" name="update" value="UPDATE">
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>