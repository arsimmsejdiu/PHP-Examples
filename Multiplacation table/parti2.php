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
    <div class="row">
      <h2>Multiplication table using PHP Script!</h2>
      <hr />
      <div class="form-group">
        <form class="form-horizontal" method="post">
          <div class="form-group">
            <label for="table_no" class="col-sm-2 control-label">Multiplication table of:</label>
            <div class="col-sm-2">
              <select type="number" class="form-control" min="1" name="table_no" placeholder="Table no." required>
                <option selected>Choose...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
          </div>
          <!-- <div class="form-group">
            <label for="upto" class="col-sm-2 control-label">Upto:</label>
            <div class="col-sm-2">
              <input type="number" class="form-control" min="1" name="upto" placeholder="Table upto"/>
            </div>
          </div> -->
          <div class="form-group">
            <label for="upto" class="col-sm-2 control-label"></label>
            <div class="col-sm-2">
              <input type="submit" class="form-control btn btn-primary" />
            </div>
          </div>
        </form>
      </div>
    </div>
    <?php
    if (isset($_POST['table_no']) && $_POST['table_no'] != '') {
      echo "<h3>Result:</h3>";
      $table_no = $_POST['table_no'];
      // $upto = $_POST['upto'];
      for ($i = 0; $i <= 10; ++$i) {
        echo "$table_no * $i = " . $table_no * $i . "<br />";
      }
    }
    ?>
  </div>
</body>

</html>