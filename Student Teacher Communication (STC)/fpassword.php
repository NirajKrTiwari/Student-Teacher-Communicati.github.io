<!doctype html>
<html>
  <head>
    <title>STC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="fpassword.css">

    <title>Welcome To STC</title>
  </head>
  <body>
    <div class="container">
    <form method="post">
  <div class="form-group">
    
    <center><h1 style="color:White;">Forgot Password</h1></center>
    <br>
    <label class="form-check-label" for="email"><p style="color:White;"><b>Email</b></label></p>
    <input type="text" class="form-control" placeholder="Enter Email" name="email" required >
    <br>

    <label class="form-check-label" for=""><p style="color:White;"><b>Enter Mobile Number</b></label></p>
    <input type="text" class="form-control" placeholder="Enter Mobile No." name="mobile_no" required>

  </div>
  <div id = "center">
    <button type="submit" name="submitbtn" class="btn btn-success btn-lg">Submit</button>
    <a href="login.php" class="btn btn-info btn-danger btn-lg" role="button">Cancel</a>
    <?php include("fpassword2.php"); ?>
  </div>
</form>
  </body>
</html>