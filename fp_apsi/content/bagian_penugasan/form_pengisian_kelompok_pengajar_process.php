<?php
	require_once 'connection.php';

	$nama_kelompok = $_POST["namaKelompok"];
	$sql = "INSERT INTO kelompok_pengajar (`nama_kelompok`) values ('$nama_kelompok')";
	$qry = mysqli_query($conn, $sql);

	$sql_2 = "SELECT id_kelompok from kelompok_pengajar where nama_kelompok = '$nama_kelompok'";
	$qry_2 = mysqli_query($conn, $sql_2);
	$row = mysqli_fetch_row($qry_2);

	$id_kelompok = $row[0];

	for($i = 1 ; $i <= 3 ; $i++)
	{
		$id_pengajar = $_POST["idPengajar_$i"];
		$sql_3 = "CALL sp_create_kp($id_kelompok, $id_pengajar)";
		$qry_3 = mysqli_query($conn, $sql_3);

		while ($conn->next_result()) {;}
	}
?>