<?php 
if(is_array($onecate)){
    extract($onecate);
}
?>

<div id="contain-content">
            <div id="content">
                <div id="content3">
                <div style="text-align: center;" id="title">
                    <h1>UPDATE CATEGORY</h1>
                </div>
                <div id="form">
                <form action="index.php?act=suacate" method="post">
                    <div class="id">
                    ID <br>
                    <input type="text" value="<?php echo $id_cate; ?>" disabled placeholder="Auto increment">
                    </div>
                    <div class="name">
                    NAME <br>
                    <input type="text" value="<?php echo $name_cate; ?>" name="name_cate">
                    </div>
                    <div class="status">
                    Status <br> 
                    <select name="status">
                        <?php 
                        $enum_values = ['Actived', 'None Active'];
                        foreach ($enum_values as $value) {
                            $selected = ($status == $value) ? 'selected' : ''; 
                            echo '<option value="'.$value.'" '.$selected.'>'.$value.'</option>';
                        }
                        ?>
                    </select>
                    </div>
                    <br>
                    <div class="submit">
                    <input type="hidden" name="id_cate" value="<?php echo $id_cate;?>">
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