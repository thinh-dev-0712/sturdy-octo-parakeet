<div id="contain-content">
            <div id="content">
                <div id="content3">
                    <h2>User</h2>
                    <table border="1">
                        <tr>
                            <th style="text-align : left;">Id</th>
                            <th style="text-align : left;">Name</th>
                            <th style="text-align : left;">Email</th>
                            <th style="text-align : left;">Password</th>
                            <th style="text-align : left;">Tel</th>
                            <th style="text-align : left;">Address</th>
                            <th style="text-align : center; width: 114px;">Status</th>
                            <th style="text-align : left;">Role</th>
                            <th >Action</th>
                        </tr>
                        <?php 
                        foreach($user as $us){         
                            extract($us);
                            $statusClass = ($status === 'Actived') ? 'status-active' : 'status-non-active';
                            echo '<tr>
                            <td>'.$id_user.'</td>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$password.'</td>
                            <td>'.$tel.'</td>
                            <td>'.$address.'</td>
                            <td  style="text-align : center;"><span class="'.$statusClass.'">'.$status.'</span></td>
                            <td>'.$role.'</td>
                            <td style="text-align : center; ">
                            <a href="index.php?act=updateuser&id='.$id_user.'">
                            <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            </td>
                        </tr>';
                        }

                        ?>
                    </table>
                    <div id="action1">
                    <a href="index.php?act=adduser">
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