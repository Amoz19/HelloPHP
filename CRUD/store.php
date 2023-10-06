<?php


try {
    $pdo = new PDO("mysql:dbname=school;dbhost=localhost", "root", "amoz21");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $statement = $pdo->prepare('
        INSERT INTO `students`(`name`,`email`,`gender`,`dob`,`age`)
        VALUES(:name,:email,:gender,:dob,:age)
    ');

    $statement->bindParam(":name",$_POST["name"]);
    $statement->bindParam(":email",$_POST["email"]);
    $statement->bindParam(":gender",$_POST["gender"]);
    $statement->bindParam(":dob",$_POST["dob"]);
    $statement->bindParam(":age",$_POST["age"]);

    if($statement->execute()){
        echo "New student is created";
    }




//    var_dump($pdo);
} catch (PDOException $exception) {
    die($exception->getMessage());
} catch (Exception $exception){
    die($exception->getMessage());
}

//phpinfo();
