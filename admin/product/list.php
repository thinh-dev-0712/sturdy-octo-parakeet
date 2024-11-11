<div id="contain-content">
            <div id="content">
                <div id="content3">
                <h2>Product</h2>    
                    <table border="1">
                        <tr>
                            <th style="text-align : left;">Id</th>
                            <th style="text-align : left;">Name</th>
                            <th style="text-align : left;">Image</th>
                            <th style="text-align : left;">Old_price</th>
                            <th style="text-align : left;">New_price</th>
                            <th style="text-align : left;">Discount</th>
                            <th style="text-align : left;">Belong to</th>
                            <th>Action</th>
                        </tr>
                        <?php 
                        foreach($allpro as $pro){         
                            extract($pro);
                            $img_path = ".././view/image/";
                            $hinh= "../upload/".$img;
                            $đ = ($new_price != "") ? 'đ' : '';
                            $di = ($discount != "") ? '%' : '';
                            $class = ($discount != "") ? 'status-non-active' : '';
                            echo '<tr>
                            <td>'.$id_pro.'</td>
                            <td>'.$name_pro.'</td>
                            <td><img style="width: 70px; height: 70px;"  src="'.$hinh.'" alt=""></td>
                            <td>'.$old_price.'đ</td>
                            <td>'.$new_price.''.$đ.'</td>
                            <td style="text-align : center;"><span class="'.$class.'">'.$discount.''.$di.'</span></td>
                            <td>'.$name_cate.'</td> 
                            <td style="text-align : center;">
                            <a style="text-decoration: none;" href="index.php?act=listprodetail&id='.$id_pro.'">
                            <i class="fa-solid fa-circle-info"></i>
                            </a>
                            <a href="index.php?act=updatepro&id='.$id_pro.'">
                            <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            </td>
                        </tr>';
                        }

                        ?>
                    </table>
                    <div id="action1">
                    <a href="index.php?act=addpro">
                        <i class="fa-solid fa-plus"></i>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script>
</script>

</body>
</html>