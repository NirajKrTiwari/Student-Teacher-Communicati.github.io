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
<link rel="stylesheet" type="text/css" href="m2style.css">
</head>
<body>
<form   method="post" enctype="multipart/form-data">
<div class="topright">
<a href="login.php" class="btn btn-danger btn-info btn-lg" role="button">Logout</a>
</div>
<h1>  <p class="text-white">Welcome To STC</p></h1>
<div class="center">
<div class="container">
    <div class="form-group">
    <p class="thick" style="color:White;" >
    <label class="form-check-label" for="menu">Menu</label>
      <select  id="menu" name="menu"  required >
      <option value="notes">Notes</option>
      <option value="qp">Question Paper</option>
      <option value="routine">Routine</option>
      <option value="syllabus">Syllabus</option>
      <option value="notice">Notice</option>
    </select>

    <label class="form-check-label" for="stream">Stream</label>
      <select  id="stream" name="stream"  required>
      <option value="bsc">BSC</option>
      <option value="bcom">BCOM</option>
      <option value="ba">BA</option>
    </select>
   
    <label class="form-check-label" for="semester">Semester</label>
  <select  id="semester" name="semester"  required>
  <option value="1">1st</option>
  <option value="2">2nd</option>
  <option value="3">3rd</option>
  <option value="4">4th</option>
  <option value="5">5th</option>
  <option value="6">6th</option>
</select>

<label class="form-check-label" for="subject">Subject</label>
  <select   id="subject" name="subject"  required>
  <option value="cs">Computer Science</option>
  <option value="phy">Physics</option>
  <option value="eco">Economics</option>
  <option value="buss">Business</option>
  <option value="math">Maths</option>
  <option value="chem">Chemistry</option>
</select></p>
</div>

    <div class="btn-group">
    <button  type="submit" class="btn btn-secondary btn-lg" name="sub_btn">Submit</button>
  </div>
  <br>
  <br>
  <div class="bottomleft">
  <a href="uploadfile1.php" class="btn btn-success btn-lg" role="button">Upload Document</a>
  </div>
  <br>
  <br>

<div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th><p class="thick" style="color:White;">SL No.</p></th>
                        <th><p class="thick" style="color:White;">File Name</p></th>
                        <th><p class="thick" style="color:White;">File</p></th>
                        <th><p class="thick" style="color:White;">Download</p></th>
                   <td></td>
                </thead>
                <tbody>
                <?php
                include("connection.php");
                if(isset($_POST['sub_btn']))
                {
                    $menu = $_POST['menu'];
                    $stream = $_POST['stream'];
                    $semester = $_POST['semester'];
                    $subject = $_POST['subject'];
                    $sql = "select fname from $menu where stream='$stream' AND semester='$semester' AND subject='$subject'";
                    $result = mysqli_query($link, $sql);
                    $i = 1;
                    while($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><p class="thick" style="color:White;"><?php echo $i++; ?></p></td>
                        <td><p class="thick" style="color:White;"><?php echo $row['fname']; ?></p></td>
                        <td></td>
                        <td><a href="files/<?php echo $row['fname']; ?>" download>Download</td>
                    </tr>
                    <?php } ?>
                <?php } ?>
                </tbody>
            </table>
        </div>
</div>
<div>
</div>
</form>
</body>
</html>