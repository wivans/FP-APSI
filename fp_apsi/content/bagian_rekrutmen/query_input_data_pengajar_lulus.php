<?php 
	require_once '../connection.php';

	$sql = "SELECT * from pengajar";
	$qry = mysqli_query($conn, $sql);
?>