<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "product"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
  die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Ambil data dari formulir
$nama = $_POST['nama'];
$jenis = $_POST['jenis_product'];
$barang = $_POST['barang'];
$total = $_POST['total'];

// Hitung diskon
$discount = 0;
if ($total >= 100000) {
  $diskon = 0.1;
} else if ($total >= 50000) {
  $diskon = 0.05;
} else {
    $diskon = 0; // Tidak ada diskon
}

$hargadiskon = $total - ($total * $diskon);

// Simpan data ke database
$sql = "INSERT INTO tbproduct (nama, jenis_product, barang, total, harga_diskon) VALUES ('$nama', '$jenis', '$barang', '$total', '$hargadiskon')";

if (mysqli_query($conn, $sql)) {
    // Redirect kembali ke index.php dengan harga setelah diskon
    header("Location: barang.php?hargadiskon=" . $hargadiskon);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

$conn->close();
?>
