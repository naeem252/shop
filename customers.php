<?php

$page_head="Customers";
$page_title="Customers Page";
$page="customers";


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
                <th>Device</th>
                <th>Device Problem</th>
                <th>Coupon Code</th>
                <th>Date</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $customers=new Customer();
            $data=$customers->seleteAll();
            for($i=0;$i<count($data);$i++):
                ?>
                <tr>
                    <td><?php echo $data[$i]['id'];?></td>
                    <td><?php echo $data[$i]['name'];?></td>
                    <td><?php echo $data[$i]['device'];?></td>
                    <td><?php echo $data[$i]['device_problem'];?></td>
                    <td><?php echo $data[$i]['coupon_code'];?></td>
                    <td><?php echo $data[$i]['date'];?></td>
                    <td><a href="edit.php?edit=Customer&id=<?php echo $data[$i]['id'];?>">Edit</a></td>
                </tr>
            <?php endfor;?>
            </tbody>
        </table>

    </div>
    <?php include "includes/footer.php";?>
