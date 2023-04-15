<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <title>Arithematic Calcs</title>
  <style>
    body {
      background-image: url(../image/back.jpg);
      background-repeat: no-repeat;
      background-size: 100%;
      overflow: hidden;
      height: 100vh;
    }
  </style>
</head>

<body>
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-sm-4 mx-auto">
        <div class="card bg-light">
          <div class="card-body">
            <div class="card-header mb-3 text-center">
              Arithematic Operations
            </div>

            <form method="post">
              <div class="form-group">
                <label for="num1">Please enter number 1:</label>
                <input type="text" name="num1" id="num1" class="form-control" />
              </div>

              <div class="form-group">
                <label for="num2">Please enter number 2:</label>
                <input type="text" name="num2" id="num2" class="form-control" />
              </div>

              <div class="form-group">
                <label for="operator">Select the Arithematic Operator:</label>
                <select name="operator" id="operator" class="form-control">
                  <option selected value="None">None</option>
                  <option value="Add">Add</option>
                  <option value="Subtract">Subtract</option>
                  <option value="Multiply">Multiply</option>
                  <option value="Divide">Divide</option>
                </select>
              </div>

              <button type="submit" name="submit" class="btn btn-primary btn-block" id="calc">Calculate</button>

            </form>

            <div class="alert alert-success mt-3 text-center">
              <p id="answerBox"> This Is The Answer Box</p>

              <?php
              if (isset($_POST['submit'])) {

                $num1 = $_POST['num1'];   //Get number 1
                $num2 = $_POST['num2'];   //Get number 2

                $text3 = "The Answer Is:";

                $addition = $num1 + $num2;
                $subtraction = $num1 - $num2;
                $multiplication = $num1 * $num2;
                $division = $num1 / $num2;
                $operator = $_POST['operator'];   //Get operator

                switch ($operator) {
                  case "None":
                    echo "ERROR! Please select any operator.";
                    break;

                  case "Add":
                    echo "The Answer is: $addition";
                    break;

                  case "Subtract":
                    echo "The Answer is: $subtraction";
                    break;

                  case "Multiply":
                    echo "The Answer is: $multiplication";
                    break;

                  case "Divide":
                    echo "The Answer is: $division";
                    break;
                }
              }
              ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script>
    // // By Event Listener Method
    // document.querySelector('#calc').addEventListener('click', function() {
    //   document.querySelector('#answerBox').stlye.display = "none";
    //   alert('Hello World!');
    // });

    // // By Onclick Method
    // document.querySelector('#calc').onclick = function(){
    //   document.querySelector('#answerBox').stlye.display = "none";
    //   alert('Hello World!');
    // };
  </script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>