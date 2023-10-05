<?php


try {
    $pdo = new PDO("mysql:dbname=school;dbhost=localhost", "root", "amoz21");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $statement = $pdo->query('
       SELECT * FROM students where id = 2; 
    ');
    $student = $statement->fetch(PDO::FETCH_OBJ);
//    var_dump($student);


} catch (PDOException $exception) {
    die($exception->getMessage());
} catch (Exception $exception){
    die($exception->getMessage());
}

//phpinfo();

