<?php  
require_once 'controller/studentInfo.php';

$students = fetchAllStudents();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Surname</th>
			<th>Username</th>
			<th>Password</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($students as $i => $student): ?>
			<tr>
				<td><a href="showStudent.php?id=<?php echo $student['id'] ?>"><?php echo $student['f_name'] ?></a></td>
				<td><?php echo $student['l_name'] ?></td>
				<td><?php echo $student['email'] ?></td>
				<td><?php echo $student['password'] ?></td>
				<td><img width="100px" src="uploads/<?php echo $student['image'] ?>" alt="<?php echo $student['name'] ?>"></td>
				<td><a href="editStudent.php?id=<?php echo $student['id'] ?>">Edit</a>&nbsp<a href="controller/deleteStudent.php?id=<?php echo $student['id'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>