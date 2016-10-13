<?php
    require("dispatcher/val_login.php");
?>
<?php
    if($statusLogin == "tidak")
    {
        header("location:login.php");
    }
    else
    {
        $namaLogin = $_SESSION['login'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Akun: Edit</title>
<!--    <link href="css/css.css" rel="stylesheet">-->
</head>
<body>
    <h1>Edit data</h1>
    <a href="index.php">halaman utama</a>
    <?php
        require("dispatcher/koneksidb.php");
    	$getID = $_GET['id'];

	    $sql = "SELECT login FROM akun WHERE id='$getID'";
		$query = mysqli_query($con,$sql);
		$hasil = mysqli_fetch_array($query);
        $login = $hasil[0];
    ?>
    <form action="dispatcher/editakun.php" method="post">
    <input type="hidden" name="ID" value="<?php echo $getID; ?>" />
    <table>
        <tr>
            <td>Login :</td>
            <td><input type="text" size="16" name="txtlogin" placeholder="nama login" required="required" value="<?php echo $login; ?>"/></td>
        </tr>
        <tr>
            <td >Password :</td>
            <td><input type="password" size="16" name="txtpasswd" required="required" /></td>
        </tr>
        <tr>
            <td>~</td>
            <td><input type="submit" class="tombol" /></td>
        </tr>
        </table>
        <?php
            if(isset($_GET['status'])){
                $getStatus = $_GET['status'];
                echo "<em>".$getStatus."</em>";
            }
        ?>
    </form>
</body>
<script src="js/js.js"></script>
</html>
