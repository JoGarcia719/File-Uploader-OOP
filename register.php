<?php
$success = $_GET['success'] ?? null;
$error = $_GET['error'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1> Registration Form </h1>
    <form method="POST" enctype="multipart/form-data" action="upload-handler.php">

      <div class="mb-3 row">
        <label for="inputCompleteName" class="col-sm-2 col-form-label">Complete Name</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="inputPassword">
        </div>
      </div>

      <div class="mb-3 row">
        <label for="inputEmailAddress" class="col-sm-2 col-form-label">Email Address</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="inputEmailAddress">
        </div>
      </div>

      <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-5">
          <input type="Password" class="form-control" id="inputPassword">
        </div>
      </div>

      <div class="mb-3 row">
        <label for="inputConfirm Password" class="col-sm-2 col-form-label">Confirm Password</label>
        <div class="col-sm-5">
          <input type="Confirm Password" class="form-control" id="inputConfirmPassword">
        </div>
      </div>

      <div class="mb-4 row"> 
        <label for="inputFile" class="col-sm-2 col-form-label">Picture</label> 
        <div class="col-sm-5">
          <input type="password" class="form-control" id="formFile">
        </div>
      </div>

      <button type="button" class="btn btn-outline-dark" style="margin-left: 400px;">Submit Registration</button>
     
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>