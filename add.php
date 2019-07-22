
<?php
$add=$_GET['add'] ?? " ";
$page_head="Add ".$add;
$page_title="Add Page";
$page="Add";







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

        <?php

        ?>

        <h3 class="display-4">Add New</h3>

        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <?php
                    if($add=="Admin"){
                        include "components/admin_add_form.php";
                    }elseif ($add=="Customer"){
                        include "components/customer_add_from.php";
                    }
                    ?>
                </div>
            </div>
        </div>

    </div>
    <?php include "includes/footer.php";?>
