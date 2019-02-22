<html>
<head>
</head>
<body>
	<form action="" ></form>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>unit</th>
			<th>ktp</th>
		
		</tr>
		<?php 
		$no = 1;
		foreach($user1 as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->Nama ?></td>
			<td><?php echo $u->unit ?></td>
			<td><?php echo $u->ktp ?></td>
			
		</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>


