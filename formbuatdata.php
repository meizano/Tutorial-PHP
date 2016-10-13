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
    <title>CRUD Akun: Buat baru</title>
<!--    <link href="css/css.css" rel="stylesheet">-->
</head>
<body>
    <h1>Buat Data Baru</h1>
    <a href="index.php">halaman utama</a>
    <form action="dispatcher/createakun.php" method="post">
    <table>
        <tr>
            <td>Login :</td>
            <td><input type="text" size="16" name="txtlogin" placeholder="nama login" required="required" /></td>
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
    </form>
    <?php
        if(isset($_GET['status'])){
            $getStatus = $_GET['status'];
            echo "<em>".$getStatus."</em>";
        }
    ?>
</body>
<script src="js/js.js"></script>
</html>
