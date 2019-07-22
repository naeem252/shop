<?php
ob_start();
session_start();
//for navigation active link
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('shop/', $path);
$first_part = $components[1];


include "file_path.php";

include "db_credential.php";
include "db_object.php";
include "admin.php";
include "customer.php";
include "functions.php";