<!DOCTYPE html>
<html>

<head>
    <title>Exercises SQL</title>
</head>

<body>
    <?php
    require_once './exercisesql.php';

    $sql = "SELECT first_name, last_name FROM users WHERE last_name = 'palmer'";
    foreach ($conn -> query($sql) as $row) {
        echo $row["first_name"] . " " . $row["last_name"];
    }

    ?>
</body>

</html>