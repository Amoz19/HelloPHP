<?php


try {
    $pdo = new PDO("mysql:dbname=school;dbhost=localhost", "root", "amoz21");
    $statement = $pdo->query('
       SELECT * FROM students
    ');
    $students = $statement->fetchAll(PDO::FETCH_OBJ);
} catch (PDOException $exception) {
    die($exception->getMessage());
} catch (Exception $exception) {
    die($exception->getMessage());
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Students From</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-8">
                <?php
                foreach ($students as $student) {
                    echo "<p>{$student->id} - {$student->name} :{$student->age}</p>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
