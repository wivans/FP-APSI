<?php

	require_once 'connection.php';

	$sql = "SELECT COUNT(*) from pengajar";
	$qry = mysqli_query($conn, $sql);
	$row = mysqli_fetch_row($qry);

	for($i = 1 ; $i <= $row[0] ; $i++) {

		$id_pengajar = $_POST["idPengajar_$i"];
		$_POST["sk_$i"] = isset($_POST["sk_$i"]) ? $_POST["sk_$i"] : "TL";
		$status_kelulusan = $_POST["sk_$i"];

		$sqlku = "CALL sp_status_kelulusan($id_pengajar, '$status_kelulusan')";
		$qryku = mysqli_query($conn, $sqlku);
		$rowku = mysqli_fetch_row($qryku);
		
		while ($conn->next_result()) {;}
	}
?>

	<script type="text/javascript">
        	if(!alert("<?php echo "Anda berhasil mengisi data pengajar lulus"; ?>")) document.location = 'input_data_pengajar_lulus.php';
    </script>

<?php

?>