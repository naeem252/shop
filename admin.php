<?php

$page_head="Profile";
$page_title="Profile Page";
$page="profile";


?>

<?php include "includes/header.php";?>
<?php include "includes/top_navigation.php";?>

<!-- end top navigation -->

<div class="row">
    <div class="col-md-3 nopadding">
        <?php include "includes/side_navigation.php";?>
    </div>
    <div class="col-md-9 for-footer">
        <?php include "includes/page_heading.php";?>
<!--      content goes here-->

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Photo</th>
                <th>User Name</th>
                <th>Email</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
                <?php
                $admins=new Admin();
                $data=$admins->seleteAll();
                for($i=0;$i<count($data);$i++):
                ?>
                <tr>
                    <td><?php echo $data[$i]['id'];?></td>
                    <td><?php echo $data[$i]['name'];?></td>
                    <td><?php echo $data[$i]['photo'];?></td>
                    <td><?php echo $data[$i]['user_name'];?></td>
                    <td><?php echo $data[$i]['email'];?></td>
                    <td><a href="edit.php?edit=Admin&id=<?php echo $data[$i]['id'];?>">Edit</a></td>
                </tr>
            <?php endfor;?>
            </tbody>
        </table>

    </div>
    <?php include "includes/footer.php";?>
