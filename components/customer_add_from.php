<?php

$object=new Customer();

if($add=="Customer" && isset($_POST['add'])){

    $name=$_POST['name'];
    $device=$_POST['device'];
    $problem=$_POST['device_problem'];
    $date=date('l jS \of F Y h:i:s A');


    $errors=validate_customers($name,$device,$problem,$code,$date);
    if(empty($errors)){
        echo "good";
        $object->name=$name;
        $object->device=$device;
        $object->device_problem=$problem;
        $object->new_coupon_code=$code;
        $object->date=$date;

        if($object->create()){

            $_SESSION['create']=true;
            $_SESSION['create_name']=$name;
//            re_direct('customers');
            echo $object->new_coupon_code;

        }

    }else{
        var_dump($errors);
    }

}

?>
<form action="" method="post">
    <?php echo $code;?>
    <div class="form-group">
        <label for="name">Name <span class="text-danger"><?php echo $errors['name'] ?? ' '; ?></span></label>
        <input type="text" name="name" class="form-control" value="<?php if(isset($name)){echo $name;}?>">
    </div>
    <div class="form-group">
        <label for="user_name">Device <span class="text-danger"><?php echo $errors['device'] ?? ' '; ?></span></label>
        <input type="text" name="device" class="form-control" value="<?php if(isset($device)){echo $device;}?>">
    </div>
    <div class="form-group">
        <label for="password">Device Problem <span class="text-danger"><?php echo $errors['prblm'] ?? ' '; ?></span></label>
        <input type="text" name="device_problem" class="form-control" value="<?php if(isset($problem)){echo $problem;}?>">
    </div>
    <div class="form-group">
        <label for="password">Coupon Code <span class="text-danger"><?php echo $errors['code'] ?? ' '; ?></span></label>
        <input type="text" name="code" class="form-control" value="<?php if(isset($code)){echo $code;}?>">
    </div>
    <div class="form-group">
        <input type="submit" name="add" value="Add" class="btn btn-block btn-primary">
    </div>
</form>