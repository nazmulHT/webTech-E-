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

<table>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Image</th>
	</tr>
	<tr>
		<td><a href="showStudent.php?id=<?php echo $student['id'] ?>"><?php echo $student['f_name'] ?></a></td>
		<td><?php echo $student['l_name'] ?></td>
		<td><?php echo $student['email'] ?></td>
		<td><?php echo $student['password'] ?></td>
		<td><img width="100px" src="uploads/<?php echo $student['image'] ?>" alt="<?php echo $student['f_name'] ?>"></td>
	</tr>

</table>


</body>
</html>