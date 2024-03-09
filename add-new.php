<?php
	session_start();
	$ids = $_SESSION['selected_ids'] ?? [];
	array_push($ids, $_GET['id']);
	$_SESSION['selected_ids'] = $ids;
	header("Location: http://localhost/29.02.24/index.php");
?>
