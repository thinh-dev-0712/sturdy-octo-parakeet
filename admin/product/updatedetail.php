<?php 
if(is_array($pro_detail)){
    extract($pro_detail);
}
$hinh= "../upload/".$img;
?>

<div id="contain-content">
            <div id="content">
                <div id="content3">
                <div style="text-align: center;" id="title">
                    <h1>UPDATE PRODUCT DETAIL</h1>
                </div>
                <div id="form">
                <form action="index.php?act=suaproductdetail" method="post" enctype="multipart/form-data">
                    <div class="id">
                    ID <br>
                    <input type="text" value="<?php echo $id_prodetail; ?>" disabled placeholder="Auto increment">
                    </div>
                    <div class="name">
                    IMAGE <br>
                    <img style="width: 70px; height: 70px;" src="<?php echo $hinh; ?>" alt=""><br>
                    <input type="file" name="img">  
                    </div>
                    <div class="name">  
                    COLOR <br>
                    <input type="text" value="<?php echo $color; ?>" name="color">
                    </div>
                    <div class="name">
                    SIZE <br>
                    <input type="text" value="<?php echo $size; ?>" name="size">
                    </div>
                    <div class="name">
                    DESCRIPTION <br>
                    <textarea name="description" cols="44" rows="10"><?=$description?></textarea>
                    </div>
                    <div class="status">
                    STATUS <br> 
                    <select name="status">
                        <?php 
                        $enum_values = ['Còn hàng', 'Hết hàng'];
                        foreach ($enum_values as $value) {
                            $selected = $selected = ($status == $value) ? 'selected' : '';
                            echo '<option value="'.$value.'" '.$selected.'>'.$value.'</option>';
                        }
                        ?>
                    </select>
                    </div>
                    <br>
                    <div class="submit">
                    <input type="hidden" name="id_prodetail" value="<?php echo $id_prodetail;?>">
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