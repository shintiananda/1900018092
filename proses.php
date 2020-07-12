<?php

  // Menangkap isi variabel dari file yang telah kita isi pada form_valIDASI.php
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $jk = $_POST['jk'];
  $alamat = $_POST['alamat'];
  $telp = $_POST['telp'];
  $prodi = $_POST['prodi'];
  $minat = $_POST['minat'];
  

  // Format data yang akan di parsing
  $data = "\n $nama|$nim|$jk|$alamat|$telp|$prodi|$minat";

  // Buka file file.txt, kemudian tuliskan isi variabel di atas kedalam file.txt
  $fh = fopen("file.txt", "a");
  fwrite($fh, $data);

  // Tutup file data.txt
  fclose($fh);

  // Keterangan bila data berhasil di input

  echo "
      <script>
        alert('Data berhasil ditambah');
        document.location.href = 'Tabel.php';
      </script>
      ";

?>