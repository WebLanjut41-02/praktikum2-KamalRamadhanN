<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo base_url()?>index.php/c_control/aksi_login" method="POST">
		<table align="center">
			<tr>
			<td><h2>Login Karyawan</h2></td>
			</tr>
			<tr>
				<td>Nama<input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Nip<input type="text" name="nip"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="login"></td>
			</tr>
		</table>
	</form>
</body>
</html>