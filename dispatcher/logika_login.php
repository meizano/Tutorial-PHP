<?php
    require("koneksidb.php");

	$login = $_POST['txtlogin'];
	$password = $_POST['txtpasswd'];

    if($login === "" || $password === "") //Nilai tidak boleh kosong
	{
		$status = "Login dan password harus terisi";
		header("location:../login.php?status=$status");
    }
    else
    {
		//CATATAN: MD5 memerlukan panjang penampung 32 karakter
        $EnkripsiPassword = md5($password);

        $sql = "SELECT login FROM akun WHERE login='$login' AND password='$EnkripsiPassword'";
        $query = mysqli_query($con,$sql);
        mysqli_close($con);
        $rows = mysqli_num_rows($query);

        if($query)
        {
            if ($rows == 1)
            {
                session_start(); //memulai session
                $_SESSION['login'] = $login;
                header("location:../dashboard.php");
            }
            else
            {
                $status = "Periksa kembali login dan password Anda";
                header("location:../login.php?status=$status");
            }
        }
        else
        {
            $status = "Sistem bermasalah: ";
            header("location:../login.php?status=$status");
        }
    }
?>
