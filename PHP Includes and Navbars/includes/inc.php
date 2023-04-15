<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Navigation Bars</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a href="http://" target="_blank" rel="noopener noreferrer" class="navbar-brand">Brand Name
      </a>

      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigations">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navigations">
        <ul class="navbar-nav">
          <li class="nav-item"><a href="" class="nav-link">1</a></li>
          <li class="nav-item"><a href="" class="nav-link">2</a></li>
          <li class="nav-item"><a href="" class="nav-link">3</a></li>
          <li class="nav-item">
          <a href="" class="nav-link">4</a>
          </li>
        </ul>
      </div>

    </nav>
  </header>


  <?php
  $dbServerName = "localhost";
  $dbUserName = "root";
  $dbPwd = "";
  $dbName = "database";

  $conn = mysqli_connect($dbServerName, $dbUserName, $dbPwd, $dbName);
  ?>

 
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>