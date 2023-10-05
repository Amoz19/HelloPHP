<?php


try {
    $pdo = new PDO("mysql:dbname=school;dbhost=localhost", "root", "amoz21");
    $statement = $pdo->query('
       SELECT * FROM students
    ');
    $students = $statement->fetchAll(PDO::FETCH_OBJ);

    foreach ($students as $student) {
        echo "<p>{$student->id} - {$student->name} :{$student->age}</p>";
    }
//    var_dump($students);
} catch (PDOException $exception) {
    die($exception->getMessage());
} catch (Exception $exception) {
    die($exception->getMessage());
}

//phpinfo();

