<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/createStudent.php" method="POST" enctype="multipart/form-data">
  <label for="f_name">First Name:</label><br>
  <input type="text" id="f_name" name="f_name"><br>
  <label for="l_name">Last Name:</label><br>
  <input type="text" id="l_name" name="l_name"><br>
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>
  <input type="file" name="image"><br><br>
  <input type="submit" name = "createStudent" value="Create">
  <input type="reset"> 
</form> 

</body>
</html>

