<!DOCTYPE html>
<html>
<head>
	<style>
		.error {color: #FF0000;}
	</style>
	<link rel="stylesheet" type="text/css" href="form_validasi.css">
</head>
<body>


<!-- validasi -->
<?php
	$nama = $nim = $jk = $alamat = $telp = $prodi = $minat = "";
	$namaErr = $nimErr = $jkErr = $alamatErr = $telpErr = $prodiErr = $minatErr = "";

	
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
  		if (empty($_POST["minat"])) {
   			$minat = "Minat & Bakat wajib diisi";
  		} else {
    		$minatErr = test_input($_POST["minat"]);
  	}
}

	function test_input($input) {
	$input = trim($input);
  	$input = stripslashes($input);
  	$input = htmlspecialchars($input);
  	return $input;
}
?>


<nav>
	<div class="name">
		<h2>FORM VALIDASI</h2>
	</div>
</nav>
<div class="box">
	
<p><span class="error">* wajib diisi</span></p>
<form method="post" action="proses_fix.php">
	<label>Nama 	</label><span class="error">* <?php echo $namaErr;?></span><br>
	<input type="text" name="nama" value="<?php echo $nama; ?>" class="form">
	
  	<br><br>
  	<label>NIM 	</label><span class="error">* <?php echo $nimErr;?></span><br>
  	<input type="number" name="nim" value="<?php echo $nim; ?>" class="form">
  	
  	<br><br>
  	<label>Jenis Kelamin 	</label><span class="error">* <?php echo $jkErr;?></span><br>
  		<input type="radio" name="jk" <?php if(isset($jk) && $jk == "perempuan") echo "checked"; ?> value="Perempuan" > Perempuan
  		<input type="radio" name="jk" <?php if(isset($jk) && $jk == "laki-laki") echo "checked"; ?> value="Laki-laki"> Laki-laki
  	
  	<br><br>
  	<label>Alamat 	</label><span class="error">* <?php echo $alamatErr;?></span><br>
  	<textarea name="alamat" rows="5" cols="25" class="form"><?php echo "$alamat"; ?></textarea>
  	
  	<br><br>
  	<label>Telp/WA 	</label><span class="error">* <?php echo $telpErr;?></span><br>
  	<input type="number" name="telp" value="<?php echo $telp; ?>" class="form">
  	
  	<br><br>
  	<label>Program Studi </label><span class="error">* <?php echo $prodiErr;?></span><br>
  	<input type="text" name="prodi" value="<?php echo $prodi; ?>" class="form">
  	
  	<br><br>
  	<label>Minat & Bakat 	</label><span class="error">* <?php echo $minatErr;?></span><br>
  	<input type="text" name="minat" value="<?php echo $minat; ?>" class="form">
  	<br><br>
  	<button name="submit">Submit</button>
</form>
</div>

</body>
</html>