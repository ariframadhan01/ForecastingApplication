<?php
include "koneksi_201951225.php";
if(isset($_POST['simpan'])) {
  $periode_pmb = $_POST['periode_pmb'];
  $jumlah_pmb = $_POST['jumlah_pmb'];
  $sql = @mysqli_query($koneksi, "INSERT INTO pmb_201951225 VALUES ('$kode_pmb','$periode_pmb','$jumlah_pmb')") or
    die(mysqli_error($koneksi));
  if($koneksi) {
    echo "<script>alert('Berhasil menambahkan data'); window.location='/aplikasiForcasting/input_201951225.php';</script>";
  }
}
?>
