<?php
    session_start();
    $title = "Admin";
    include_once 'header.php';
    include_once 'includes/adminscript.php';
    $result = getAdmin();
?> 

             <div class="tableau-bd">
                <h1>Admin</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Id user</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php if($result!='0'){ while($row = $result->fetch_assoc()) {?>
                            <tr>
                                <td><?php echo $row["UserId"] ?></td>
                                <td><?php echo $row["UserName"] ?></td>
                                <td><?php echo $row["UserEmail"] ?></td>
                            </tr>  
                        <?php }} ?>
                    </tbody>
                </table>
            </div>
<?php
  include_once 'footer.php'
?>