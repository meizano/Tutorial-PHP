<?php
	require("koneksidb.php");

	$login = $_POST['txtlogin'];
	$password = $_POST['txtpasswd'];

	if($login === "" || $password === "")
	{
		$status = "Login dan password harus terisi";
		header("location:../formbuatdata.php?status=$status");
	}
    else
    {
		$sql = "SELECT login FROM akun WHERE login='$login'";
		$query = mysqli_query($con,$sql);
		$hasil = mysqli_fetch_array($query);

		$loginCek=$hasil[0];

		if ($loginCek === $login)
		{
			mysqli_close($con);
            $status = "Login sudah ada";
			header("location:../formbuatdata.php?status=$status");
		}
        else
        {
			$sql = "INSERT INTO  akun (ID, login, password) VALUES (NULL ,  '$login',md5('$password'))";
            $query = mysqli_query($con,$sql);
            mysqli_close($con);

            if ($query) {
                $status = "Akun berhasil dibuat";
            }
            else
            {
                $status = "Akun gagal dibuat";
            }

			header("location:../index.php?status=$status");
		}
	}
?>
