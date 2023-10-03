<?php
session_start();
print_r($_SESSION);

$arr = ["name" => "aung"];
$arr["age"] = ["color"=> "red"];
var_dump($arr["age"]);

