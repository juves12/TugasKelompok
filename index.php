<?php
session_start();
if (isset($_SESSION['session_email'])){
echo 'Selamat anda masuk <a href="logout.php">Logout</a>';

} else{

	header("location:login.php");
}

?>