<?php


function validate_admin($name,$password,$confirm_password,$email,$user_name){
    $errors=[];

    if(empty(trim($name))){
        $errors['name']="Name connot be empty";
    }elseif (strlen($name) > 20 || strlen($name) < 5){
        $errors['name']="Name should be less then 20 and grater than 5 charecter";
    }
    if($password !== $confirm_password){
        $errors['password']="password not match";
    }elseif (empty($password) || empty($confirm_password)){
        $errors['password']="password cannot be empty";
    }

    if(empty($email)){
        $errors['email']="email connot be empty";
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['email']="email is not validate";
    }



//    $admins = new Admin();
//    $data = $admins->seleteAll();
//    $have=false;
//    for ($i = 0; $i < count($data); $i++){
//        if(strtolower($data[$i]['user_name'])==strtolower($user_name)){
//            $have=true;
//        }
//    }


//    if(empty($user_name)){
//        $errors['user_name']="user name cannot be empty";
//    }elseif($have){
//        $errors['user_name']="user name is already exist";
//    }

    return $errors;
}


function validate_customers($name,$device,$device_problem,$coupon_code,$date){
    $error=[];
    if(empty($name)){
        $error['name']="name cannto be empty";
    }
    if(empty($device_problem)){
        $error['prblm']="device ptoblem cannot be empty";
    }
    if(empty($device)){
        $error['device']="device cnnot bv emelpy";

    }
    if(empty($coupon_code)){
        $error['code']="code cannot be empty";
    }elseif(strlen($coupon_code)<5){
        $error['code']="code shold be grater than 5";
    }
    if(empty($date)){
        $error['date']="date cnnot be empty";
    }

    return $error;
}

function re_direct($url){
     header("Location:".$url.".php");
}


function scp($string){
    global $connection;
     return mysqli_real_escape_string($connection,$string);
}
