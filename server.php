<?php 
$user_name = $_POST['username'];
$password = $_POST['password'];
$isAdmin = $_POST['isAdmin'] ?? null;

if ($user_name=="admin" && $password=="admin"){echo "200";}

else if ($isAdmin == "true"){echo "202";}
else{
    echo "201";}

?>