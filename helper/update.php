<?php
include 'koneksi.php';

//mengambil Nilai Post
$id = $_POST['id'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$nim = $_POST['nim'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$prodi = $_POST['prodi'];
$tanggal_lahir = $_POST['tanggal_lahir'];
//query 
$query_update = "UPDATE mahasiswa SET 
				nama_mahasiswa ='$nama_mahasiswa',
				nim='$nim',
				prodi='$prodi',
				jenis_kelamin='$jenis_kelamin',
				tanggal_lahir='$tanggal_lahir'
				WHERE id='$id'";
$update = mysqli_query($db, $query_update);

if ($update) {
	header("Location: ../index.php");
} else {
	echo "gagal";
}
