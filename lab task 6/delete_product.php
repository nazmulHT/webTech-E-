<?php require_once("../../config.php");
require_once("../../db.php");


if(isset($_GET['id'])) {
	$query = query("DELETE * FROM product WHERE p_id = " . escape_string($_GET['id']) . " ");
	confirm($query);


	set_message("Order Deleted");
	redirect("../../../public/admin/index.php?products");
} else {
	redirect("../../../public/admin/index.php?products");
}


























 ?>