<div id="name">
        <span class="trangchu">Trang chủ </span>
        <i>|</i>
        <span class="from">Sale</span>
    </div>
<div id="content">
    <div id="product">
        <div id="contain-sp">
            <h1>Sản phẩm khuyến mãi</h1>
            <div class="contain-pro">
                <?php

                foreach ($spsale as $sp) {
                    extract($sp);   
                    $linkproduct = "index.php?act=productdetail&idproduct=" . $id_pro;
                    $img_path = "./upload/";
                    $hinh = $img_path . $img;
                    echo '<div class="box-pro">
                                    <div class="img">
                                        <span class="sale">-' . $discount . '%</span>
                                        <a href="' . $linkproduct . '"><img src="' . $hinh . '" alt=""></a>
                                    </div>
                                    <div class="sp-title">
                                        <div class="t1">
                                            <p>+ ' . $color_count . ' Màu sắc</p>
                                            <p>+ ' . $size_count . ' Kích thước</p>
                                        </div>
                                         <div class="name"><a href="' . $linkproduct . '" class="t2">' . $name_pro . '</a></div>
                                        <div class="t3">
                                            <span class="new-price">' . $new_price . 'đ</span>
                                            <span class="old-price">' . $old_price . 'đ</span>
                                        </div>
                                    </div>
                                 </div>';
                }

                ?>
            </div>
        </div>
    </div>
</div>