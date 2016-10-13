<?php
	session_start(); //perlu setiap kali mengakses session
    $statusLogin = isset($_SESSION['login']) ? "ya" : "tidak";
?>
