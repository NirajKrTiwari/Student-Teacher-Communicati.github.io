
 <?php
include("connection.php");
if(isset($_POST['upload']))
  {
  	$pass = mysqli_real_escape_string($link,$_POST['pass']);
	$email = mysqli_real_escape_string($link,$_POST['email']);
	$stream = $_POST['stream'];
    $semester = $_POST['semester'];
    $subject = $_POST['subject'];
    $fname = $_POST['fname'];
    $menu = $_POST['menu'];
    $file=$_FILES['file']['name'];
    $query = "SELECT * FROM signup where email ='$email' AND pass = '$pass' ";
	$result3 = mysqli_query($link, $query);
	$run_result = mysqli_num_rows($result3);

	if($run_result == 1)
	{
	$_SESSION['email'] = $email;
	
 	$targetfolder = "files/";
	$targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;
	$sql="SELECT * FROM $menu WHERE fname = '". mysqli_real_escape_string($link, $_POST['fname'])."'LIMIT 1";		
	$result=mysqli_query($link,$sql);
	if(mysqli_num_rows($result) > 0)
	{
		echo "<script>alert('File Name already exist...ERROR!!')</script>";
	}
	else
	{
	if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
 	{
			$query="INSERT into $menu(email,fname,file,stream,semester,subject,u_time) values('$email','$fname','$file','$stream','$semester','$subject',NOW())"; 
 	 		mysqli_query($link,$query);
 	 		echo "<script>alert('succesfully uploaded')</script>";
 	}
 	 else 
	{
		echo "<script>alert('ERROR!!')</script>";
	}
	}
	}
	else
	{
		echo "<script>alert('Wrong email or password !!')</script>";
	}
	
}
 ?>