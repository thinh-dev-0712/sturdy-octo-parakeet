<div id="contain-content">
            <div id="content">
                <div id="content3">
                    <?php 
                    foreach($allpro as $pro)
                        extract($pro);  
                        if(isset($name)){
                        echo '<h2>Details of '.$name_pro.'</h2>';
                        }else{
                        is_array($pro);  
                        echo '<h2>Details of '.$pro['name_pro'].'</h2>';   
                        }
                    ?>
                    <table border="1">
                        <tr>
                            
                            <th style="text-align : left;">Id</th>
                            <th>Img</th>
                            <th>Status</th>
                            <th>Color</th>
                            <th>Size</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        <?php 
                        foreach($allpro as $pro){ 
                            extract($pro);
                            $hinh= "../upload/".$img;
                            $statusClass = ($status === 'Còn hàng') ? 'status-active' : 'status-non-active';
                            echo '<tr>
                            <td>'.$id_prodetail.'</td>
                            <td><img style="width: 70px; height: 70px;"  src="'.$hinh.'" alt=""></td>
                            <td style="text-align : center; width: 100px; "><span class="'.$statusClass.'">'.$status.'</span></td>
                            <td style="text-align : center; ">'.$color.'</td>
                            <td style="text-align : center; ">'.$size.'</td>
                            <td>'.$description.'</td>
                            <td style="text-align : center;"><a href="index.php?act=updateprodetail&id='.$id_prodetail.'"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        </tr>';
                        }
                        ?>
                    </table>
                    <div id="action1">
                    <a href="index.php?act=addprodetail&id=<?php if(is_array($pro)) echo $id_pro; ?>">
                        <i class="fa-solid fa-plus"></i>
                    </a>
                    </div>
                    
                </div>
            </div>
</div>

</body>
</html>