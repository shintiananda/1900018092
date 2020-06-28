<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
		<font face="impact" size="5">FORM MINAT & BAKAT</font><br>
		<font face="impact" size="5">MAHASISWA FTI</font>
	</center>
		<form action="form_welcome.php" method="post">
			<div>
				<table>
					<tr>
						<td>NAMA</td>
						<td>:</td>
						<td><input type="text" name="nama" placeholder="Nama Lengkap" size="50"></td>
					</tr>
					<tr>
						<td>NIM</td>
						<td>:</td>
						<td><input type="text" name="nim" placeholder="NIM" size="20"></td>
					</tr>
					<tr>
						<td>JENIS KELAMIN</td>
						<td>:</td>
						<td><input type="radio" name="jk" value="Laki-laki">Laki-laki
							<input type="radio" name="jk" value="Perempuan">Perempuan</td>
					</tr>
					<tr>
						<td>ALAMAT</td>
						<td>:</td>
						<td><input type="text" name="alamat" placeholder="Alamat Lengkap" size="50"></td>
					</tr>
					<tr>
						<td>No. Telp/WA</td>
						<td>:</td>
						<td><input type="text" name="telp" placeholder="+62" size="20"></td>
					</tr>
					<tr>
						<td>PROGRAM STUDI</td>
						<td>:</td>
						<td><input type="text" name="prodi" size="20"></td>
					</tr>
					<tr>
						<td>MINAT & BAKAT</td>
						<td>:</td>
						<td><input type="tetx" name="bakat" size="30"></td>
					</tr>
					<td><button type="submit" name="simpan">SIMPAN</button>
						<button type="reset" name="reset">BATAL</button>
					</td>
				</table>
			</div>
		</form>
</body>
</html>