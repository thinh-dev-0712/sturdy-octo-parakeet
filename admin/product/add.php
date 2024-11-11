<div id="contain-content">
            <div id="content">
                <div id="content3">
                <div style="text-align: center;" id="title">
                    <h1>ADD PRODUCT</h1>
                </div>
                <div id="form">
                <form action="index.php?act=thempro" method="post" enctype="multipart/form-data">
                    <div class="id">
                    ID <br>
                    <input type="text" disabled placeholder="Auto increment">
                    </div>
                    <div class="name">
                    NAME <br>
                    <input type="text" name="name_pro">
                    </div>
                    <div class="img">
                    Image <br>
                    <input type="file" name="img">
                    </div>
                    <div class="old_price">
                    Old price <br>
                    <input type="text" name="old_price">
                    </div>
                    <div class="new_price">
                    New price <br>  
                    <input type="text" name="new_price">
                    </div>
                    <div class="discount">
                    Discount <br>
                    <input type="text" name="discount">
                    </div>
                    <div class="belong">
                    BELONG TO <br>                  
                    <select name="id_cate">
                        <?php 
                        
                        foreach($allcate as $cate) {
                            extract($cate);
                            echo '<option value="'.$id_cate.'">'.$name_cate.'</option>';
                        }

                        ?>
                    </select>
                    </div>
                    <br>
                    <div class="submit">
                    <input type="submit" name="add" value="ADD">
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>