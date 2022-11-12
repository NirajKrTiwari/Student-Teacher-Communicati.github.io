
<!DOCTYPE html>
<html >
<head>
  <title>STC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="menustyle.css">
</head>
<body>
<form   method="post" enctype="multipart/form-data">
  <div class="topright">
<a href="student_menu.php" class="btn btn-info btn-lg" role="button">Home</a>
<a href="login.php" class="btn btn-danger btn-info btn-lg" role="button">Logout</a>
</div>
<div class="center">
<div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th><p class="thick" style="color:White;">#</p></th>
                        <th><p class="thick" style="color:White;">File Name</p></th>
                        <th><p class="thick" style="color:White;">View</p></th>
                        <th><p class="thick" style="color:White;">Download</p></th>
                    </tr>
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
                        <td></td>
                        <td><p class="thick" style="color:White;"><?php echo $i++; ?></p></td>
                        <td><p class="thick" style="color:White;"><?php echo $row['fname']; ?></p></td>
                        <td><a href="files/<?php echo $row['fname']; ?>" target="_blank">View</a></td>
                        <td><a href="files/<?php echo $row['fname']; ?>" download>Download</td>
                    </tr>
                    <?php } ?>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div >
</div>
</form>
</body>
</html>