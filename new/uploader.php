<?php
include_once('assets/excel_reader2.php');
include_once('koneksi.php');

$target = basename($_FILES['exceldata']['name']);
move_uploaded_file($_FILES,['exceldata']['tmp_name'], $target);

chmod($_FILES['exceldata']['name'],0777);

$data = new Spreadsheet_Excel_Reader($_FILES['exceldata']['name'],false);

$jumlah_baris = $data->rowcount("$sheet_index=0");

$success = 0;
for($i=2; $i<=$jumlah_baris; $i++)
{
	$project_id_awal = $data->val($i,1);
	$project_id_act = $data->val($i,2);
	$data_update = $data->val($i,3);
	$site_id = $data->val($i,4);
	$check_data = $data->val($i,6);
	$latitude = $data->val($i,7);
	$longitude = $data->val($i,8);
	$tahun_project = $data->val($i,9);
	$ubis = $data->val($i,10);
	$project_source = $data->val($i,11);
	$status = $data->val($i,12);
	$cost = $data->val($i,13);
	$new_cost = $data->val($i,14);
	$portofolio = $data->val($i,15);
	$tower_owner = $data->val($i,16);
	$site_name = $data->val($i,17);
	$alamat_site = $data->val($i,18);
	$kabupaten = $data->val($i,19);
	$provinsi = $data->val($i,20);
	$area = $data->val($i,21);
	$ro = $data->val($i,22);
	$peraturan = $data->val($i,23);
	$status_tagihan = $data->val($i,24);
	$peraturan_pasca = $data->val($i,25);
	$imb = $data->val($i,26);
	$realisasi_rpmt2017 = $data->val($i,27);
	$denda18 = $data->val($i,28);
	$realisasi_rpmt2018 = $data->val($i,29);
	$denda19 = $data->val($i,30);
	$realisasi_rpmt2019 = $data->val($i,31);
	$realisasi_rpmt2020 = $data->val($i,32);
	$average = $data->val($i,33);
	$prioritas = $data->val($i,34);
	$data_propose = $data->val($i,35);
	$site_tertagih = $data->val($i,36);
	$realisasi_tot = $data->val($i,37);
	$keterangan = $data->val($i,38);

	mysqli_query($connect, "INSERT INTO db_table VALUES ('','$project_id_awal','$project_id_act','$data_update','$data_update','$site_id','$check_data','$latitude','$longitude','$tahun_project','$ubis','$project_source','$status','$cost','$new_cost','$portofolio','$tower_owner','$site_name','$alamat_site','$kabupaten','$provinsi','$area','$ro','$peraturan','$status_tagihan','$peraturan_pasca','$imb','$realisasi_rpmt2017','$denda18','$realisasi_rpmt2018','$denda19','$realisasi_rpmt2019','$realisasi_rpmt2020','$average','$prioritas','$data_propose','$site_tertagih','$realisasi_tot','$keterangan' )");

		$success++;

}

unlink($_FILES['exceldata']['name']);

if($sucess > 0)
{
	header("location:index.php?upload=sucess");

}
else{
	header("location:index.php?upload=gagal");
}
?>
