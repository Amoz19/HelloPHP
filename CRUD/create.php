<?php


try {
    $pdo = new PDO("mysql:dbname=school;dbhost=localhost", "root", "amoz21");
    $pdo->query('
        INSERT INTO `students`(`name`,`email`,`gender`,`dob`,`age`)
        VALUES(\'Mon\',\'mon@gmail.com\',\'male\',\'2003-09-19\',20)
    ');
    var_dump($pdo);
} catch (PDOException $exception) {
    die($exception->getMessage());
} catch (Exception $exception){
    die($exception->getMessage());
}

//phpinfo();
