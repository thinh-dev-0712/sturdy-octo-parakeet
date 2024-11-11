
<div style="margin-bottom: 105px;" id="content">
            <div class="login">
                <h3 style="text-align: center;">Cập nhật thông tin tài khoản</h3>
                <div class="l2">
                    <form action="index.php?act=capnhattaikhoan" method="post">
                    <?php   
                        if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                            extract($_SESSION['user']);
                        }
                    ?>
                        <input  type="text" value="<?=$name?>" name="name" placeholder="Vui lòng nhập tên"> 
                        <input  type="email" value="<?=$email?>" name="email" placeholder="Vui lòng nhập email"> 
                        <input  type="password" value="<?=$password?>" name="password" placeholder="Vui lòng nhập password"> 
                        <input  type="text" value="<?=$tel?>" name="tel" placeholder="Vui lòng nhập tel"> 
                        <input  type="text" value="<?=$address?>" name="address" placeholder="Vui lòng nhập address"> 
                        <input type="hidden" value="<?=$id_user?>" name="id_user">
                        <a href=""><input type="submit" name="capnhat" value="Cập nhật"></a>
                    </form>
                </div>
            </div>
        </div>