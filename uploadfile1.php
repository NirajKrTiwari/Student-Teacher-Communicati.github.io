<!DOCTYPE html>
<html>
<head>
   <title>STC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="uploadstyles.css">
  <title></title>
</head>
<body>
<form   method="post" enctype="multipart/form-data">
  <div class="topright">
<a href="menu.php" class="btn btn-info btn-lg" role="button">Home</a>
<a href="login.php" class="btn btn-danger btn-info btn-lg" role="button">Logout</a>
</div>

<h1>  <p class="text-white">Welcome To STC</p></h1>

<div class="center">
<div class="container">
    <div class="form-group">
      <p class="thick" style="color:White;">
    <input type="email"  name="email" style="max-width: 50%" placeholder="Email" >
    <input type="password"  name="pass" style="max-width: 50%" placeholder="Password" ></p>
    <p class="thick" style="color:White;">
    <label class="form-check-label" for="menu">Menu</label>
      <select class="form-control " id="menu" name="menu" required >
      <option value="notes">Notes</option>
      <option value="qp">Question Paper</option>
      <option value="routine">Routine</option>
      <option value="syllabus">Syllabus</option>
      <option value="notice">Notice</option>
    </select>
    </p>  

    <p class="thick" style="color:White;">
    <label class="form-check-label" for="stream">Stream</label>
      <select class="form-control " id="stream" name="stream" required>
      <option value="bsc">BSC</option>
      <option value="bcom">BCOM</option>
      <option value="ba">BA</option>
    </select>
    </p>
    <p class="thick" style="color:White;">
    <label class="form-check-label" for="semester">Semester</label>
  <select class="form-control " id="semester" name="semester" required>
  <option value="1">1st</option>
  <option value="2">2nd</option>
  <option value="3">3rd</option>
  <option value="4">4th</option>
  <option value="5">5th</option>
  <option value="6">6th</option>
</select></p>
<p class="thick" style="color:White;">
<label class="form-check-label" for="subject">Subject</label>
  <select  class="form-control " id="subject" name="subject" required>
  <option value="cs">Computer Science</option>
  <option value="phy">Physics</option>
  <option value="eco">Economics</option>
  <option value="buss">Business</option>
  <option value="math">Maths</option>
  <option value="chem">Chemistry</option>
</select></p>
</div>
<input type="name" class="form-control" name="fname" style="max-width: 100%" placeholder="File Name" >
<br>
    <p class="thick" style="color:White;">
     Select File to upload:
    <input type="file" name="file" size="50">
    <input type="submit" class="btn btn-success btn-lg"  name="upload">
    </p>
    <?php include("uploadfile.php"); ?>

</form>

</body>
</html>