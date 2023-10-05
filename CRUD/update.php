<?php


try {
    $pdo = new PDO("mysql:dbname=school;dbhost=localhost", "root", "amoz21");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $statement = $pdo->query('
       UPDATE students
      SET name = "Michel", age = 25, email = "michel@gmail.com"
      WHERE id = 7
    ');
    if($statement){
        echo "Successfully Update";
    }

} catch (PDOException $exception) {
    die($exception->getMessage());
} catch (Exception $exception){
    die($exception->getMessage());
}

//phpinfo();

