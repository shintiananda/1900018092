<!DOCTYPE html>
<html>
<head>
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>

<?php
	$nama = $nim = $jk = $alamat = $telp = $prodi = $bakat = "";
	$namaErr = $nimErr = $jkErr = $alamatErr = $telpErr = $prodiErr = "";

	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST["nama"])){
			$namaErr = "Nama wajib diisi";
		}else{
			$nama = test_input($_POST["nama"]);
		}
		if(empty($_POST["nim"])){
			$nimErr = "NIM wajib diisi";
		}else{
			$nim = test_input($_POST["nim"]);
		}
		if(empty($_POST["nama"])){
			$namaErr = "Nama wajib diisi";
		}else{
			$nama = test_input($_POST["nama"]);
		}
		if (empty($_POST["jk"])) {
			$jkErr = "Jenis kelamin wajib diisi";
		} else {
    		$jk = test_input($_POST["jk"]);
  		}
		if (empty($_POST["alamat"])) {
			$alamatErr = "Alamat wajib diisi";
		} else {
    		$alamat = test_input($_POST["alamat"]);
  		}
  		if (empty($_POST["telp"])) {
			$telpErr = "No. Handphone wajib diisi";
		} else {
    		$telp = test_input($_POST["telp"]);
  		}
  		if (empty($_POST["prodi"])) {
			$prodiErr = "Program Studi wajib diisi";
		} else {
    		$prodi = test_input($_POST["prodi"]);
  		}
  		if (empty($_POST["bakat"])) {
   			$bakat = "";
  		} else {
    		$bakat = test_input($_POST["bakat"]);
  	}
}

	function test_input($data) {
	$data = trim($data);
  	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
  	return $data;
}
?>

<h2>FORM VALIDASI</h2>
<p><span class="error">* wajib diisi</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	Nama 	: <br><input type="text" name="nama" value="<?php echo $nama; ?>">
	<span class="error">* <?php echo $namaErr;?></span>
  	<br><br>
  	NIM 	: <br><input type="number" name="nim" value="<?php echo $nim; ?>" >
  	<span class="error">* <?php echo $nimErr;?></span>
  	<br><br>
  	Jenis Kelamin 	: <br>
  		<input type="radio" name="jk" <?php if(isset($jk) && $jk == "perempuan") echo "checked"; ?> value="Perempuan"> Perempuan
  		<input type="radio" name="jk" <?php if(isset($jk) && $jk == "laki-laki") echo "checked"; ?> value="Laki=laki"> Laki-laki
  	<span class="error">* <?php echo $jkErr;?></span>
  	<br><br>
  	Alamat 	: <br><textarea name="alamat" rows="5" cols="25"><?php echo "$alamat"; ?></textarea>
  	<span class="error">* <?php echo $alamatErr;?></span>
  	<br><br>
  	Telp/WA 	: <br><input type="number" name="telp" value="<?php echo $telp; ?>">
  	<span class="error">* <?php echo $telpErr;?></span>
  	<br><br>
  	Program Studi : <br><input type="text" name="prodi" value="<?php echo $prodi; ?>">
  	<span class="error">* <?php echo $prodiErr;?></span>
  	<br><br>
  	Minat & Bakat 	: <br><input type="text" name="bakat" value="<?php echo $bakat; ?>">
  	<br><br>
  	<input type="submit" name="submit" value="Submit">
</form>
<hr>
<?php 
	echo $nama;
	echo "<br>";
	echo $nim;
	echo "<br>";
	echo $jk;
	echo "<br>";
	echo $alamat;
	echo "<br>";
	echo $telp;
	echo "<br>";
	echo $prodi;
	echo "<br>";
	echo $bakat;
?>

</body>
</html>