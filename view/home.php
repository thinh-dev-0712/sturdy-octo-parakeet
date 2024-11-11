<div id="banner">
    <img src="./view/image/banner.jpg" alt="">
</div>

<div id="content">
    <div id="new-product">
        <div id="contain-np">
            <h1>SẢN PHẨM MỚI</h1>
            <div class="contain-box">
                <?php
                foreach ($spnew as $sp) {
                    extract($sp);
                    $linkproduct = "index.php?act=productdetail&idproduct=" . $id_pro;
                    $img_path = "view/image/";
                    $hinh = $img_path . $img;
                    echo '<div class="boxsp">
                                    <div class="img">
                                        <span class="new">New</span>
                                        <a href="' . $linkproduct . '"><img src="' . $hinh . '" alt=""></a>
                                    </div>
                                    <div class="sp-title">
                                        <div class="t1">    
                                            <p>+ ' . $color_count . ' Màu sắc</p>
                                            <p>+ ' . $size_count . ' Kích thước</p>
                                        </div>
                                        <div class="name"><a href="' . $linkproduct . '" class="t2">' . $name_pro . '</a></div>
                                        <p class="new price">' . $old_price . 'đ</p>
                                    </div>
                                </div>';
                }
                ?>
            </div>
        </div>
    </div>

    <div id="sale-product">
        <div id="contain-sp">
            <h1>SẢN PHẨM GIÁ TỐT</h1>
            <div class="contain-box">
                <?php

                foreach ($spsale as $sp) {
                    extract($sp);
                    $linkproduct = "index.php?act=productdetail&idproduct=" . $id_pro;
                    $img_path = "view/image/";
                    $hinh = $img_path . $img;
                    echo '<div class="boxsp">
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
            <div class="button">
                <a href="">XEM TẤT CẢ <strong>SẢN PHẨM GIÁ TỐT</strong></a>
            </div>
        </div>
    </div>

    <div id="top-product">
        <div id="contain-tp">
            <h1>SẢN PHẨM NỔI BẬT</h1>
            <div class="contain-box">
                <?php

                foreach ($sptop as $sp) {
                    extract($sp);
                    $linkproduct = "index.php?act=productdetail&idproduct=" . $id_pro;
                    $img_path = "view/image/";
                    $hinh = $img_path . $img;
                    if ($discount != '') {
                        echo '  <div class="boxsp">
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
                    } else {
                        echo '<div class="boxsp">
                                    <div class="img">
                                        <a href="' . $linkproduct . '"><img src="' . $hinh . '" alt=""></a>
                                    </div>
                                    <div class="sp-title">
                                        <div class="t1">    
                                            <p>+ ' . $color_count . ' Màu sắc</p>
                                            <p>+ ' . $size_count . ' Kích thước</p>
                                        </div>
                                        <div class="name"><a href="' . $linkproduct . '" class="t2">' . $name_pro . '</a></div>
                                        <p class="new price">' . $old_price . 'đ</p>
                                    </div>
                                </div>';
                    }

                }

                ?>
                <div class="button">
                    <a href="">XEM TẤT CẢ <strong>SẢN PHẨM NỔI BẬT</strong></a>
                </div>
            </div>
        </div>
    </div>

    <div id="policy">
        <div class="contain-box">
            <div class="box-policy">
                <img width="48x" height="48px" src="view/image/policy1.webp" alt="">
                <div class="text">
                    <p class="t1">Miễn phí vận chuyển</p>
                    <p class="t2">Áp dụng cho mọi đơn hàng từ 500k</p>
                </div>
            </div>
            <div class="box-policy">
                <img width="48x" height="48px" src="view/image/policy2.webp" alt="">
                <div class="text">
                    <p class="t1">Đổi trả dễ dàng</p>
                    <p class="t2">7 ngày đổi trả vì bất kì lý do gì</p>
                </div>
            </div>
            <div class="box-policy">
                <img width="48x" height="48px" src="view/image/policy3.webp" alt="">
                <div class="text">
                    <p class="t1">Hỗ trợ nhanh chóng</p>
                    <p class="t2">HOTLINE 24/7 : 091234567</p>
                </div>
            </div>
            <div class="box-policy">
                <img width="48x" height="48px" src="view/image/policy4.webp" alt="">
                <div class="text">
                    <p class="t1">Thanh toán đa dạng</p>
                    <p class="t2">Thanh toán khi nhận hàng, Napas, Visa, <br> Chuyển khoản</p>
                </div>
            </div>
        </div>
    </div>
</div>