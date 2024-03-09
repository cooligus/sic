<?php 
	session_start();

	require_once("./head.php");
	require_once("./db.php");

	$rawQuery = "SELECT * FROM product WHERE product_id in (";
	if(!isset($_SESSION['selected_ids'])) {
		echo "The cart is empty, my lord";
		exit();
	} 
	$ids = $_SESSION['selected_ids'];

	foreach($ids as $id) {
		$rawQuery .= $id . ",";
	}

	$len = strlen($rawQuery);
	$rawQuery[$len-1] = ")";

	$db = new DB();
	$res = $db->mysqli->query($rawQuery);
	while($row = $res->fetch_assoc()) {
		print_r($row);
	}
?>
