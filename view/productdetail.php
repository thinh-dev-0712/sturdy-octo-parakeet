<?php
if (is_array($pro)) {
    extract($pro);
    $img_path = "./upload/";
    $hinh = $img_path . $img;
}
?>
<div id="name">
    <span class="trangchu">Trang chủ </span>
    <i>|</i>
    <span class="from"><?php echo $name_pro ?></span>
</div>
<div id="content">
    <div id="box-detail">
        <div class="box-img">
            <img style="width: 500px;" src="<?php echo $hinh; ?>" alt="">
        </div>

        <div class="box-form">
            <h2 style="width: 600px;margin-bottom: 10px;"><?php echo $name_pro ?></h2>
            <div class="formdetail">
                <form action="index.php?act=themvaogio" method="post">
                    <input type="hidden" name="discount" value="<?php echo $discount; ?>">
                    <input type="hidden" name="old_price" value="<?php echo $old_price; ?>">
                    <input type="hidden" name="new_price" value="<?php echo $new_price; ?>">
                    <input type="hidden" name="img" value="<?php echo $img; ?>">
                    <input type="hidden" name="name_pro" value="<?php echo $name_pro; ?>">
                    <input type="hidden" name="id_pro" value="<?php echo $id_pro; ?>">
                    <div class="gia">
                        <strong style="margin-right: 100px; margin-left: 10px;">Giá:</strong>
                        <?php 
                        if($discount!="")
                        echo '<span class="new-gia">'.$new_price.'đ</span>
                        <span class="old-gia">'.$old_price.'đ</span>
                        <span class="giam-gia">'.$discount.'%</span>';
                        else
                        echo '<span class="new-gia">'.$old_price.'đ</span>';
                        ?>
                        
                    </div>
                    <br>
                    <div class="color">
                        <strong style="margin-left: 10px; margin-right: 60px;">Màu sắc:</strong>

                        <?php
                        $seencolors = [];
                        foreach ($allprodetail as $pro) {
                            extract($pro);
                            // Kiểm tra xem màu đã xuất hiện chưa
                            if (!in_array($color, $seencolors)) {
                                // Nếu chưa xuất hiện, thêm vào mảng và in ra màu
                                $seencolors[] = $color;
                                echo '<label class="color-option">
                                                <input type="radio" name="color" value="' . $color . '">
                                                <span>' . $color . '</span>
                                            </label>';
                            }
                        }
                        ?>
                    </div>
                    <br>
                    <div class="size">
                        <strong style="margin-left: 10px; margin-right: 60px;">Size:</strong>
                        <?php
                        $seensize = [];
                        foreach ($allprodetail as $pro) {
                            extract($pro);
                            // Kiểm tra xem màu đã xuất hiện chưa
                            if (!in_array($size, $seensize)) {
                                // Nếu chưa xuất hiện, thêm vào mảng và in ra màu
                                $seensize[] = $size;
                                echo '<label class="size-option">
                                                <input type="radio" name="size" value="' . $size . '">
                                                <span>' . $size . '</span>
                                            </label>';
                            }
                        }
                        ?>
                    </div>
                    <br>
                    <div class="quantity">
                        <strong style="margin-left: 10px; margin-right: 60px;">Số lượng:</strong>
                        <button type="button" id="decrement">-</button>
                        <input type="text" id="quantity" name="quantity" value="1" max="10" readonly>
                        <button type="button" id="increment">+</button>
                    </div>
                    <br>
                    <div class="hanhdong">
                        <input type="submit" name="themvaogio" value="Thêm vào giỏ">
                    </div>
                    <br>
                </form>
            </div>
            <div id="mota">
                <h3>Mô tả sản phẩm</h3>
                <?php
                if (is_array($onepro)) {
                    extract($onepro);
                    echo '<p>' . $description . '</p>';
                }
                ?>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const incrementButton = document.getElementById('increment');
        const decrementButton = document.getElementById('decrement');
        const quantityInput = document.getElementById('quantity');
        let quantity = parseInt(quantityInput.value, 10);

        incrementButton.addEventListener('click', function () {
            quantity += 1;
            quantityInput.value = quantity;
        });

        decrementButton.addEventListener('click', function () {
            if (quantity > 1) {
                quantity -= 1;
                quantityInput.value = quantity;
            }
        });
    });
</script>