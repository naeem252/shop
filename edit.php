
<?php
$edit=$_GET['edit'] ?? " ";
$id=$_GET['id'] ?? '';
$page_head="Edit ".$edit;
$page_title="Edit Page";
$page="edit";







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
        $find_data=new $edit();
        $find_data=$find_data->find_by_id($id);

        ?>

        <?php


        if($edit=="Admin" && isset($_POST['submit'])){

            $name=$_POST['name'];
            $password=$_POST['password'];
            $confirm_password=$_POST['confirm_password'];
            $email=$_POST['email'];
            $user_name=$_POST['user_name'];

            $errors=validate_admin($name,$password,$confirm_password,$email,$user_name);
            if(empty($errors)){
                echo "good";
            }else{
                var_dump($errors);
            }

        }

        elseif ($edit=="Customer" && isset($_POST['submit'])){
            echo "customers";
        }

        ?>

        <h3 class="display-4"><?php echo "Edit {$find_data[0]['name']}";?></h3>

        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Name <span class="text-danger"><?php echo $errors['name'] ?? ' '; ?></span></label>
                            <input type="text" name="name" class="form-control" value="<?php if(isset($name)){echo $name;}else{echo $find_data[0]['name'];}?>">
                        </div>
                        <div class="form-group">
                            <label for="user_name">User Name <span class="text-danger"><?php echo $errors['user_name'] ?? ' '; ?></span></label>
                            <input type="text" name="user_name" class="form-control" value="<?php if(isset($user_name)){echo $user_name;}else{echo $find_data[0]['user_name'];}?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password <span class="text-danger"><?php echo $errors['password'] ?? ' '; ?></span></label>
                            <input type="password" name="password" class="form-control" value="<?php if(isset($password)){echo $password;}else{echo $find_data[0]['password'];}?>">
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password <span class="text-danger"><?php echo $errors['password'] ?? ' '; ?></span></label>
                            <input type="password" name="confirm_password" class="form-control" value="<?php if(isset($confirm_password)){echo $confirm_password;}else{echo $find_data[0]['password'];}?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email <span class="text-danger"><?php echo $errors['email'] ?? ' '; ?></span></label>
                            <input type="email" name="email" class="form-control" value="<?php if(isset($email)){echo $email;}else{echo $find_data[0]['email'];}?>">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Edit" class="btn btn-block btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <?php include "includes/footer.php";?>
