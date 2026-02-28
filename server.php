<?php 
$user_name = $_POST['username'] ?? null;
$password  = $_POST['password'] ?? null;
$isAdmin   = $_POST['isAdmin'] ?? null;

if ($user_name === "admin" && $password === "admin") {
    echo "200";
} 
else if ($isAdmin === "true") {
    header("Location: files/passed_access.html");
    exit();
} 
else {
    echo "201";
}
?>