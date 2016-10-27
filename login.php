<DOCTYPE html>
<html>
<head><title>Latihan Login</title>
<style>
	.formate{
		background-color:white;
		color:black;
		margin :100px 400px 100px 400px;
		border-color: black;
		border-style: solid;
		border-width: 5px;
		border-radius: 20px;
		padding:20px 20px 20px 20px;

	} 
	.kotak{
		
		width:300px;


	}

</style>

</head>
<body>
<div class="formate">
<form action="proses.php" method="POST">
	
		<label>Nama </label><br><input type="text" name=nama class="kotak"><br>
	
		<label>Password </label><br><input type=password name=password class="kotak"><br>

		<input type="submit" name = submit value="Login">
	
</form>
</div>

</body>
</html>