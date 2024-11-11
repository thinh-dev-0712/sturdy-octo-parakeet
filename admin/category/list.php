<div id="contain-content">
            <div id="content">
                <div id="content3">
                    <h2>Category</h2>
                    <table border="1">
                        <tr>
                            <th style="text-align : left;">Id</th>
                            <th style="text-align : left;">Name</th>
                            <th style="width: 150px;">Status</th>
                            <th >Action</th>
                        </tr>
                        <?php 
                        foreach($allcate as $cate){         
                            extract($cate);
                            $statusClass = ($status === 'Actived') ? 'status-active' : 'status-non-active';
                            echo '<tr>
                            <td>'.$id_cate.'</td>
                            <td>'.$name_cate.'</td>
                            <td  style="text-align : center;"><span class="'.$statusClass.'">'.$status.'</span></td>
                            <td style="text-align : center; ">
                            <a href="index.php?act=updatecate&id='.$id_cate.'">
                            <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            </td>
                        </tr>';
                        }
                        ?>
                    </table>
                    <div id="action1">
                    <a href="index.php?act=addcate">
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