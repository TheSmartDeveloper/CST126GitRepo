<?php
/**
 * Created by PhpStorm.
 * User: Chuong
 * Date: 10/3/2018
 * Time: 1:57 PM
 */
require_once("Service.php");
$username = $_GET['uname'];
$content = $_GET['content'];
$title = $_GET['title'];
$_SESSION['uname'] = $username;

$user = new Service();
if($user->insertPost($username,$title, $content)==true){

    include("PostContentSuccess.php");
}
else{

    include ("PostContentError.php");
}