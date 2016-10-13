<?php
	require("koneksidb.php");

	$getID = $_GET['id'];

	$sql = "DELETE FROM akun WHERE ID = $getID";
    $query = mysqli_query($con,$sql);
	mysqli_close($con);

    if ($query) {
        $status = "Akun berhasil dihapus";
    } else {
        $status = "Akun gagal dihapus";
    }

    header("location:../index.php?status=$status");
?>
