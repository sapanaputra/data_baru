<?php
session_start();
	$pesan_eror='';
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		if ($username == 'admin' AND $password == 'admin') {			
			$_SESSION['username'] = $username;
			header("location:daftar_pemesanan.php");

		}else{
			$pesan_eror = 'engk bisa login coy...';
		}
	}
?>
<html>
<head>
	<title>Halaman login pemesanan makanan</title>
</head>
<body>
	<center><h3>..::Silakan Login Terlebih dahulu::..</h3></center>
	<center><form method="post" action="index.php">
		<table>
			<tr>
				<td>Username :</td>
				<td><input type="text" name="username" placeholder="masukan username anda"></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" name="password" placeholder="masukan password anda"></td>
			</tr>
				<?php echo $pesan_eror;?>		
			<tr>
				<td><input type="submit" name="submit" value="login cuy"></td>
			</tr>
		</table>
	</form></center>
</body>
</html>

	

