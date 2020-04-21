<?php
	$servername = "localhost:3307";
	$username = "root";
	$dbname = "tugas_10";
	$conn = mysqli_connect($servername, $username, "", $dbname);

	if (mysqli_connect_errno()){
		echo "Gagal Terhubung dengan database: ".mysqli_connect_error();
		exit();
	}
	//echo "KONEKSI BERHASIL <br>";
?>