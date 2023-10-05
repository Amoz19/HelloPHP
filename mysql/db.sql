CREATE TABLE `students` (
    `id` INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(200) NOT NULL,
    `email` VARCHAR(200) NOT NULL,
    `gender` CHAR(6) NOT NULL,
    `dob` DATE NOT NULL,
    `age` TINYINT UNSIGNED
);
-- `course_id` INT UNSIGNED NOT NULL
INSERT INTO `students`(`name`,`email`,`gender`,`dob`,`age`)
VALUES('Amos','amoz@gmail.com','male','2002-05-19',20);

INSERT INTO `students`(`name`,`email`,`gender`,`dob`,`age`)VALUES
('Naing','naing@gmail.com','female','2002-09-19',19),
('chan','chan@gmail.com','male','2002-01-19',18),
('Amos','amoz@gmail.com','male','2002-05-19',20),
('King','king@gmail.com','male','2002-03-11',17),
('Queeen','queen@gmail.com','female','2002-09-09',18)
;


UPDATE `students` SET `gender`='female' WHERE `id`=1;

UPDATE `students` SET `age`=22;

CREATE TABLE `courses`(
    `id` INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(200) NOT NULL
);

CREATE TABLE `course_student`(
    `student_id` INT UNSIGNED NOT NULL,
    `course_id` int UNSIGNED NOT NULL
);


INSERT INTO `courses`(`name`) VALUES
('PHP'),
('Javascript'),
('Phython'),
('C');

SELECT * FROM `students`
INNER JOIN `courses` ON students.course_id=courses.id;


UPDATE `student` SET `course_id`=1 WHERE `id`=1;


SELECT 
students.name,students.email,students.age,courses.name
FROM `students`
INNER JOIN `courses` ON students.course_id=courses.id;

INSERT INTO `course_student`(`student_id,course_id`) VALUES
(1,2),
(1,3),
(2,4),
(3,1),
(3,2),
(4,1),
(5,1)


SELECT 
students.name,students.email,students.age,courses.name
FROM `students` 
JOIN `course_student` ON course_student.student_id=students.id
JOIN `courses` ON courses.id=course_student.course_id;

UPDATE students
SET name = "Michel", age = 25, email = "michel@gmail.com"


