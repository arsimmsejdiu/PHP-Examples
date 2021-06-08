<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <title>PHP Calculator</title>

    <style>
        .calc {
            display: flex;
            justify-content: center;
            align-items: center;
            top: 300px;
            flex-direction: column;
        }

        p {
            font-size: 12px;
        }

        .alert {
            color: red;
        }
    </style>
</head>

<body>



    <div class="calc">
        <h2>OOP calculator</h2>
        <br>
        <form action="calc.php" method="POST">
            <input type="text" name="num1Inserted">
            <input type="text" name="num2Inserted">
            <select name="calInserted">
                <option value="add">Add</option>
                <option value="sub">Subtract</option>
                <option value="mul">Multiply</option>
                <option value="div">Division</option>
                <option value="modulo">Modulo</option>
            </select>
            <button type="submit">Calculate</button>
        </form>
    </div>



</body>

</html>