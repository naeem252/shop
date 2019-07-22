<?php

class Admin extends DB_object{
    static $db_table='admin';
     public $name;
    public $photo;
    public $user_name;
    public $password;
    public $email;
    static $table_col=['name','photo','user_name','password','email'];




}
