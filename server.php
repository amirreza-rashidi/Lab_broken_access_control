<?php 
$user_name = $_POST['username'];
$password = $_POST['password'];
$isAdmin   = $_POST['isAdmin'];

if ($user_name=="admin" && $password=="admin"){echo "200";}

else if ($isAdmin == "true"){echo "200";}
else{
    echo "201";}

?>