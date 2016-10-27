
<?php
 session_start();
$nama=$_POST['nama'];
$password=$_POST['password'];
 
if ($nama=="root" && $password==123){
	$_SESSION['session_email']=$nama;
	header("location:index.php");


}
?>