<?php


function validate_admin($name,$password,$confirm_password,$email,$user_name){
    $errors=[];

    if(empty(trim($name))){
        $errors['name']="Name connot be empty";
    }elseif (strlen($name) > 20 || strlen($name) < 5){
        $errors['name']="Name should be less then 20 and grater than 5 charecter";
    }elseif(!ctype_alnum($name)){
        $errors['name']="Name only have alphanumeric charecters";
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



    $admins = new Admin();
    $data = $admins->seleteAll();
    $have=false;
    for ($i = 0; $i < count($data); $i++){
        if(strtolower($data[$i]['user_name'])==strtolower($user_name)){
            $have=true;
        }
    }


    if(empty($user_name)){
        $errors['user_name']="user name cannot be empty";
    }elseif($have){
        $errors['user_name']="user name is already exist";
    }

    return $errors;
}
