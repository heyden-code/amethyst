<?php
include "koneksi.php";
$hapus = mysqli_query($host, "DELETE FROM list_data WHERE id='$_GET[id]'");

if($hapus){
	header('location:data.php');
}else{
	echo "gagal menghapus data";
}
?>