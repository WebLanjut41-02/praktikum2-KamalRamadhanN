<html>
<head>
</head>
<body>
	<form action="" ></form>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>tgldatang</th>
			<th>sasaran</th>
			<th>penerima</th>
			<th>isipaket</th>
			<th>tglambil</th>

		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->tgldatang ?></td>
			<td><?php echo $u->sasaran ?></td>
			<td><?php echo $u->penerima ?></td>
			<td><?php echo $u->isipaket ?></td>
			<td><?php echo $u->tglambil ?></td>
		</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>


