<!DOCTYPE html>
<html>
<head>
	<title>Form MEMIKAT (Mendata Minat & Bakat)</title>
	<link rel="stylesheet" type="text/css" href="form_validasi.css">
</head>
<body>

<nav>
	<div class="name">
		<h1>DATA MINAT & BAKAT MAHASISWA</h1>
	</div>
		<ul>
			<li><a href="form_validasi.php">Tambah Data</a></li>
		</ul>
</nav>

<div class="box2">
	<div class="tabel">
		<form method="post">
		<table border="1" cellpadding="10" cellspacing="0">
			
			<tr class="ket">
				<td>No.</td>
				<td>Nama</td>
				<td>NIM</td>
				<td>Jenis Kelamin</td>
				<td>Alamat</td>
				<td>No. Telp</td>
				<td>Program Studi</td>
				<td>Minat Bakat</td>
			</tr>

			<?php 

				$txt_file    = file_get_contents('file.txt');
			  	$rows        = explode("\n", $txt_file);
			  	array_shift($rows);
			  	$i = 1;

			 foreach ($rows as $row => $data){

		        //Explode digunakan untuk memisahkan Item Data dariPemisah |, array pada PHP dimulaipada index ke-0
		        $row_data = explode('|', $data);

		        $info[$row]['nama'] = $row_data[0];
		        $info[$row]['nim'] = $row_data[1];
		        $info[$row]['jk'] = $row_data[2];
		        $info[$row]['alamat'] = $row_data[3];
		        $info[$row]['telp'] = $row_data[4];
		        $info[$row]['prodi'] = $row_data[5];
		        $info[$row]['minat'] = $row_data[6];


		        //menampilkan tabel data

		        echo "<tr>";
		        echo "<td>".$i++."</td>";
		        echo "<td>". $info[$row]['nama']."</td>";
		        echo "<td>". $info[$row]['nim']."</td>";
		        echo "<td>". $info[$row]['jk']."</td>";
		        echo "<td>". $info[$row]['alamat']."</td>";
		        echo "<td>". $info[$row]['telp']."</td>";
		        echo "<td>". $info[$row]['prodi']."</td>";
		        echo "<td>". $info[$row]['minat']."</td>";

				}
			?>			

		</table>
		</form>
	</div>
	
</div>
</body>
</html>