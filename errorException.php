<?php
$x=0;


try{
    if($x <=0){
        throw new Exception('X must be greater than zero');
    }else if($x <=10){
        throw new Exception('X must be greater than ten',1000);
    }
}catch (Exception $exception){
    echo $exception->getMessage() . " " . $exception->getCode();
}

