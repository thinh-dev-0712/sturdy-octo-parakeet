<?php 
if(is_array($onepro)){
    extract($onepro);
}
$hinh= "../upload/".$img;
?>

<div id="contain-content">
            <div id="content">
                <div id="content3">
                <div style="text-align: center;" id="title">
                    <h1>UPDATE PRODUCT</h1>
                </div>
                <div id="form">
                <form action="index.php?act=suaproduct" method="post" enctype="multipart/form-data">
                    <div class="id">
                    ID <br>
                    <input type="text" value="<?php echo $id_pro; ?>" disabled placeholder="Auto increment">
                    </div>
                    <div class="name">
                    NAME <br>
                    <input type="text" value="<?php echo $name_pro; ?>" name="name_pro">
                    </div>
                    <div class="name">
                    IMAGE <br>
                    <img style="width: 70px; height: 70px;" src="<?php echo $hinh; ?>" alt=""><br>
                    <input type="file" name="img">  
                    </div>
                    <div class="name">
                    OLD PRICE <br>
                    <input type="text" value="<?php echo $old_price; ?>" name="old_price">
                    </div>
                    <div class="name">
                    NEW PRICE <br>
                    <input type="text" value="<?php echo $new_price; ?>" name="new_price">
                    </div>
                    <div class="name">
                    DISCOUNT <br>
                    <input type="text" value="<?php echo $discount; ?>" name="discount">
                    </div>
                    <div class="belong">
                    BELONG TO <br>                  
                    <select name="id_cate">
                        <?php 
                        
                        foreach($allcate as $cate) {
                            if($id_cate==$cate['id_cate'])
                            echo '<option value="'.$cate['id_cate'].'" selected>'.$cate['name_cate'].'</option>';
                            else echo '<option value="'.$cate['id_cate'].'">'.$cate['name_cate'].'</option>';
                        }

                        ?>
                    </select>
                    </div>
                    <br>
                    <div class="submit">
                    <input type="hidden" name="id_pro" value="<?php echo $id_pro;?>">
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