
<?php

session_start();

$name = $_POST['name'];
$age = $_POST['age'];

if($name === "aungmon" && $age = "22"){
    $_SESSION['user'] = ["username" => "aungmon"];
    header('location: ../profile.php');
}else{
    header('location: ../index.php?incorect=1');
}
