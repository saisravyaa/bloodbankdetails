<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == 'manish' && $password == 'manish1' || $username == '20bit0393' && $password == '20bit0393' || $username == 'sravya' && $password == 'sravya01' ){
    include 'adminhome.html';
}
else{
    include 'admin.html';
}
?>