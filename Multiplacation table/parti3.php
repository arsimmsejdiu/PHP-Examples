<!DOCTYPE html>
<html>

<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PHP script to Generate Multiplication table!</title>
</head>

<body>
    <div class="container">
        <form method="post" action="">
            <span>Select Numbers</span><br />
            <input type="checkbox" name='numb[]' value="1"> 1<br />
            <input type="checkbox" name='numb[]' value="2"> 2 <br />
            <input type="checkbox" name='numb[]' value="3"> 3 <br />
            <input type="checkbox" name='numb[]' value="4"> 4 <br />
            <input type="checkbox" name='numb[]' value="5"> 5<br />
            <input type="checkbox" name='numb[]' value="6"> 6 <br />
            <input type="checkbox" name='numb[]' value="7"> 7 <br />
            <input type="checkbox" name='numb[]' value="8"> 8 <br />
            <input type="checkbox" name='numb[]' value="9"> 9 <br />
            <input type="checkbox" name='numb[]' value="10"> 10 <br />

            <input type="submit" value="Submit" name="submit">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            echo "<h3>Result:</h3>";
            if (!empty($_POST['numb'])) {
                echo "<br />";
                foreach ($_POST['numb'] as $value) {
                    for ($i = 0; $i <= 10; ++$i) {
                        echo "$value * $i = " . $value * $i . "<br />";
                    }
                    echo "<br />";
                }
            } else {
                echo "select a number in the checkbox";
            }
        }
        ?>
    </div>
</body>

</html>