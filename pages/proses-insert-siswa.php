<?php 
include "../libs/database.php";

$namasiswa = $_POST['namaSiswa'];
$jurusansiswa = $_POST['jurusanSiswa'];
$kelassiswa = $_POST['kelasSiswa'];

$query = mysqli_query($db, "INSERT INTO `siswa`(`nama_siswa`, `jurusan_siswa`, `kelas_siswa`) VALUES ('$namasiswa','$jurusansiswa','$kelassiswa')");

if($query){
    header("location: insert-siswa.php?messageSuccess= Siswa Added to server!");
}else{
    header("location: insert-siswa.php?messageError= Failed! Add to server!");
}

?>