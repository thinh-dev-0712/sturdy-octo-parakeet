<div id="contain-content">
            <div id="content">
                <div id="content3">
                <div style="text-align: center;" id="title">
                    <h1>ADD DETAIL</h1>
                </div>
                <div id="form">
                <form action="index.php?act=themprodetail" method="post" enctype="multipart/form-data">
                    <div class="id">
                    ID <br>
                    <input type="text" disabled placeholder="Auto increment">
                    </div>
                    <div class="img">
                    Image <br>
                    <input type="file" name="img">
                    </div>
                    <div class="old_price">
                    Color <br>
                    <input type="text" name="color">
                    </div>
                    <div class="new_price">
                    Size <br>  
                    <input type="text" name="size">
                    </div>
                    <div class="discount">
                    Description <br>
                    <textarea name="description" cols="44" rows="10"></textarea>
                    </div>
                    <br>
                    <div class="submit">
                    <input type="hidden" value="<?php if(is_array($pro)) echo $id_pro; ?>" name="id_pro">
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