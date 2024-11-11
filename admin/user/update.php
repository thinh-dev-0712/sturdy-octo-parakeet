<?php 
if(is_array($user)){
    extract($user);
}
?>

<div id="contain-content">
            <div id="content">
                <div id="content3">
                <div style="text-align: center;" id="title">
                    <h1>Update User</h1>
                </div>
                <div id="form">
                <form action="index.php?act=suauser" method="post">
                    <div class="id">
                    ID <br>
                    <input type="text" value="<?php echo $id_user; ?>" disabled placeholder="Auto increment">
                    </div>
                    <div class="name">
                    NAME <br>
                    <input type="text" value="<?php echo $name; ?>" name="name">
                    </div>
                    <div class="name">
                    EMAIL <br>
                    <input type="text" value="<?php echo $email; ?>" name="email">
                    </div>
                    <div class="name">
                    PASSWORD <br>
                    <input type="text" value="<?php echo $password; ?>" name="password">
                    </div>
                    <div class="name">
                    TEL <br>
                    <input type="text" value="<?php echo $tel; ?>" name="tel">
                    </div>
                    <div class="name">
                    ADDRESS <br>
                    <input type="text" value="<?php echo $address; ?>" name="address">
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
                    <div class="name">
                    ROLE <br>
                    <input type="text" value="<?php echo $role; ?>" name="role">
                    </div>
                    <br>
                    <div class="submit">
                    <input type="hidden" name="id_user" value="<?php echo $id_user;?>">
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