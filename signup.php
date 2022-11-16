<!doctype html>
<html lang="en">
  <head>
   <title>STC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="signupstyle.css">

    <title>Welcome To STC</title>
  </head>
  <body>
  <div class="container">
  <form method="post">
  <div class="form-group">
   <center><h1 style="color:White;">Registration Form</h1></center>
    <hr>
    <label for="name"><p style="color:White;"><b>Name</b></label></p>
    <input class="form-control" type="text" placeholder="Enter Name" name="name" style="max-width:70%" required>
    <label class="form-check-label" for="email"><p style="color:White;"><b>Email</b></label></p>
    <input type="text" class="form-control" placeholder="Enter Email" name="email" required>

    <label class="form-check-label" for="mobile_no"><p style="color:White;"><b>Mobile Number</b></label></p>
    <input type="text" placeholder="Enter Mobile Number" name="mobile_no" style="max-width: 54%"required>
    
    <label  class="form-check-label" for="pass"><p style="color:White; "><b>Password</b></label></p>
    <input  type="password"  class="form-control" placeholder="Enter Password" name="pass" required>
  
  <label class="form-check-label" for="cpass"><p style="color:White;"><b>Confirm Password</b></label></p>
  <input type="password" style="min-width: 142%"  class="form-control" placeholder="Confirm Password" name="cpass" required>


<p class="thick" style="color:White;">
<label class="form-check-label" for="stream" >Stream</label>
  <select class="form-control form-control-sm" id="stream" name="stream">
  <option value="bsc">BSc</option>
  <option value="bcom">BCom</option>
  <option value="ba">BA</option>
</select>
<label class="form-check-label" for="semester">Semester</label>
  <select class="form-control form-control-sm" id="semester" name="semester">
  <option value="1">1st</option>
  <option value="2">2nd</option>
  <option value="3">3rd</option>
  <option value="4">4th</option>
  <option value="5">5th</option>
  <option value="6">6th</option>
</select>
<label class="form-check-label" for="department">Depatment</label>
  <select  class="form-control form-control-sm" id="department" name="department" required>
  <option value="cs">Computer Science</option>
  <option value="phy">Physics</option>
  <option value="eco">Economics</option>
  <option value="buss">Business</option>
  <option value="math">Maths</option>
  <option value="chem">Chemistry</option>
</select>
</p>
<p class="thick" style="color:White;">
<label class="form-check-label" for="designation">Designation</label>
  <select class="form-control form-control-sm" id="des" name="des" required>
  <option value="teacher">Teacher</option>
  <option value="student">Student</option>
</select>
</p>
</div>

<div id = "center">
    <button type="submit" name="registerbtn" class="registerbtn">Register</button>
</div>
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
  <?php include("insert.php"); ?>
</form>
</div>
  </body>
</html>