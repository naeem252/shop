<?php

if($add=="Admin" && isset($_POST['add'])){

    $name=$_POST['name'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];
    $email=$_POST['email'];
    $user_name=$_POST['user_name'];


    $errors=validate_admin($name,$password,$confirm_password,$email,$user_name);
    if(empty($errors)){
        echo "good";
        $object=new Admin();
        $object->name=$name;
        $object->email=$email;
        $object->password=$password;
        $object->user_name=$user_name;

        if($object->create()){

            $_SESSION['create']=true;
            $_SESSION['create_name']=$name;
            re_direct('admin');

        }

    }else{
        var_dump($errors);
    }

}

?>

<form action="" method="post">
    <div class="form-group">
        <label for="name">Name <span class="text-danger"><?php echo $errors['name'] ?? ' '; ?></span></label>
        <input type="text" name="name" class="form-control" value="<?php if(isset($name)){echo $name;}?>">
    </div>
    <div class="form-group">
        <label for="user_name">User Name <span class="text-danger"><?php echo $errors['user_name'] ?? ' '; ?></span></label>
        <input type="text" name="user_name" class="form-control" value="<?php if(isset($user_name)){echo $user_name;}?>">
    </div>
    <div class="form-group">
        <label for="password">Password <span class="text-danger"><?php echo $errors['password'] ?? ' '; ?></span></label>
        <input type="password" name="password" class="form-control" value="<?php if(isset($password)){echo $password;}?>">
    </div>
    <div class="form-group">
        <label for="confirm_password">Confirm Password <span class="text-danger"><?php echo $errors['password'] ?? ' '; ?></span></label>
        <input type="password" name="confirm_password" class="form-control" value="<?php if(isset($confirm_password)){echo $confirm_password;}?>">
    </div>
    <div class="form-group">
        <label for="email">Email <span class="text-danger"><?php echo $errors['email'] ?? ' '; ?></span></label>
        <input type="email" name="email" class="form-control" value="<?php if(isset($email)){echo $email;}?>">
    </div>
    <div class="form-group">
        <input type="submit" name="add" value="Add" class="btn btn-block btn-primary">
    </div>
</form>