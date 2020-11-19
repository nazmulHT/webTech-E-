<?php 

require_once 'controller/studentInfo.php';
$student = fetchStudent($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/updateStudent.php" method="POST" enctype="multipart/form-data">
  <label for="f_name">First Name:</label><br>
  <input value="<?php echo $student['f_name'] ?>" type="text" id="f_name" name="f_name"><br>
  <label for="l_name">Last Name:</label><br>
  <input value="<?php echo $student['l_name'] ?>" type="text" id="l_name" name="l_name"><br>
  <label for="email">Email:</label><br>
  <input value="<?php echo $student['email'] ?>" type="text" id="email" name="email"><br>
  <input type="file" name="image"><br><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateStudent" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>

