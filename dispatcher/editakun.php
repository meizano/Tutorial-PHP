<?php
	require("koneksidb.php");

	$ID = $_POST['ID'];
    $login = $_POST['txtlogin'];
	$password = $_POST['txtpasswd'];

    if($login === "" || $password === "")
	{
		$status = "Login dan password harus terisi";
		header("location:../formeditdata.php?id=$ID&status=$status");
	}
    else
    {

		$sql = "UPDATE akun SET login = '$login', password =md5('$password') WHERE ID = '$ID'";
        $query = mysqli_query($con,$sql);
		mysqli_close($con);

        if ($query) {
            $status = "Akun berhasil diedit";
        } else {
            $status = "Akun gagal diedit";
        }

		header("location:../formeditdata.php?id=$ID&status=$status");
	}
?>
