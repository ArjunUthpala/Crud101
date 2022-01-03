<?php
require("connection.php");
?>

<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.cs+s" rel="stylesheet"> 
    
  </head>

  <body>
  <form action="insert_user.php" method="post">
    <div class="container my-5">
    <form method="post">

    <div class="row justify-content-between text-left">
    <div class="form-group col-sm-8 flex-column d-flex">
    <label class="form-control-label px-0">Name<span class="text-danger"> *</span>
    </label> <input type="text" id="name" name="fname" placeholder="Enter your first name" autocomplete="off" onblur="validate(1)"> </div>
    </div>

    <div class="row justify-content-between text-left my-3">
    <div class="form-group col-sm-8 flex-column d-flex">
    <label class="form-control-label px-0">E-mail<span class="text-danger"> *</span>
    </label> <input type="text" id="email" name="email" placeholder="Your E-mail wil not be shared with anyone else." autocomplete="off" onblur="validate(1)"> </div>
    </div>

    <div class="row justify-content-between text-left my-3">
    <div class="form-group col-sm-8 flex-column d-flex">
    <label class="form-control-label px-0">Contact Number<span class="text-danger"> *</span>
    </label> <input type="text" id="cnumber" name="cnumber" placeholder="Your Contact Number will not be shared with anyone else." autocomplete="off" onblur="validate(1)"> </div>
    </div>

    <div class="row justify-content-between text-left my-3">
    <div class="form-group col-sm-8 flex-column d-flex">
    <label class="form-control-label px-0">Password<span class="text-danger"> *</span>
    </label> <input type="text" id="password" name="password" placeholder="Enter your password." autocomplete="off" onblur="validate(1)"> </div>
    </div>
  
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>

    </form>
    </div>

  </body>
</html>