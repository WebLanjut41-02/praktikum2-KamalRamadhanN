<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo base_url()?>index.php/c_control/inputpaket" method="POST">
		
		<table align="center">
			<tr>
			 <td>Account <?php echo $this->session->userdata("nama"); ?></td>
			</tr>
			<tr>
				<td>Tanggal Datang <input type="date" name="tgldatang" value="<?php echo (date('Y-m-d')); ?>"></td>
			</tr>
			<tr>
				<td>Sasaran <select name="sasaran"> 
					<option>Firza</option>
					<option>Rayan</option>
					<option>Abror</option>
					<option>Rizky</option>
					<option>Dela</option>
				</select></td>
			</tr>
			<tr>
				<td>Penerima <input type="text" name="penerima"></td>
			</tr>
			<tr>
				<td>Isi Paket <input type="textarea" name="isipaket"></td>
			</tr>
			<tr>
				<td>Tanggal Ambil <input type="date" name="tglambil"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
			<tr>
				<td><a href="<?php echo base_url()?>index.php/c_control/tampildatapeng">view daftar penghuni</a></td>
			</tr>
		</table>

	</form>
</body>
</html>