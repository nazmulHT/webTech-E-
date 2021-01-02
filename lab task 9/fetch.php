<?php
$connect = mysqli_connect("localhost", "root", "", "e_commerce");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM product 
	WHERE p_title LIKE '%".$search."%'
	OR p_price LIKE '%".$search."%' 
	OR p_description LIKE '%".$search."%'";
}
else
{
	$query = "SELECT * FROM product ORDER BY p_id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= "<thead> 
		<tr>
			<th>Product Name</th>
			<th>Price</th>
		</tr>
	</thead>
	<tbody>";
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr id="'.$row["p_id"].'" >
				<td>'.$row["p_title"].'</td>
				<td>'.$row["p_price"].'</td>				
			</tr>
		';
	}

	$output.= "</tbody>";
	echo $output;
}
else
{
	echo 'Data Not Found';
}

?>