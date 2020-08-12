<!DOCTYPE html>
<html>
<head>
	<title>Document Upload</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	
</head>
<body>
	<center>
		<h1> Upload File Data </h1>
		
		<div class="col-6 mt-3">
			<div class="card card-secondary">
				<form action="uploader.php" method="post" role="form">
					<div class="card-body">
						<div class="form-group mt-3">
		                    <div class="custom-file">
		                      <input type="file" class="custom-file-input" id="customFile" name="exceldata" required="required">
		                      <label class="custom-file-label" for="customFile">Choose File</label>
		                    </div>
		            	</div>
					</div>

					<div class= "card-footer">
						<button type="submit" class="btn btn-dark" name="upload">Upload</button>					
					</div>
				</form>
			</div>
		</div>

		<?php
		if(isset($_GET['upload']))
		{
			if($_GET['upload']=="success")
			{
				echo "<h3>Data berhasil diupload!";
			}
			else
			{
				echo "<h3>Data gagal diupload!</h3>";
			}
		}
		?>
		
		<table class="table table-bordered mt-3">
			<thead>
				<tr>
					<th>ID</th>
					<th>PROJECT ID AWAL</th>
					<th>PROJECT ID ACT</th>
					<th>DATA UPDATE ASSET</th>
					<th>Site  ID Owner/Tenant</th>
					<th>CHECK</th>
					<th>LATITUDE ACT</th>
					<th>LONGITUDE ACT</th>
					<th>TAHUN PROJECT</th>
					<th>UBIS</th>
					<th>PROJECT SOURCE</th>
					<th>STATUS SITE</th>
					<th>COST CENTER</th>
					<th>NEW COST CENTER</th>
					<th>PORTOFOLIO</th>
					<th>TOWER OWNER</th>
					<th>SITE NAME ACTUAL</th>
					<th>ALAMAT SITE</th>
					<th>KABUPATEN/KODYA</th>
					<th>PROVINSI</th>
					<th>AREA</th>
					<th>RO</th>
					<th>PERATURAN/th>
					<th>STATUS TAGIHAN</th>
					<th>PERATURAN PASCA MK</th>
					<th>IMB</th>
					<th>REALISASI RPMT 2017</th>
					<th>DENDA 2018 DIBAYARKAN DI 2020</th>
					<th>REALISASI RPMT 2018</th>
					<th>DENDA 2019 DIBAYARKAN DI 2020</th>
					<th>REALISASI RPMT 2019</th>
					<th>REALISASI RPMT 2020</th>
					<th>AVERAGE</th>
					<th>Prioritas</th>
					<th>DATA PROPOSE DROP</th>
					<th>SITE TERTAGIH 2017-2019</th>
					<th>REALISASI RPMT 2017-2019</th>
					<th>KETERANGAN</th>
				</tr>
			</thead>
			
			
			<tbody>
			<?php
			include_once('koneksi.php');
			$exceldata = mysqli_query($connect, "SELECT * FROM db_table");
			$no = 1;
			while ($data = mysqli_fetch_assoc($exceldata))
			{
			?>
				<tr>
					<td><?= $no++; ?></td>
					<td><?= $data['project_id_awal']; ?></td>
					<td><?= $data['project_id_act']; ?></td>
					<td><?= $data['data_update']; ?></td>
					<td><?= $data['site_id']; ?></td>
					<td><?= $data['check_data']; ?></td>
					<td><?= $data['latitude']; ?></td>
					<td><?= $data['longitude']; ?></td>
					<td><?= $data['tahun_project']; ?></td>
					<td><?= $data['ubis']; ?></td>
					<td><?= $data['project_source']; ?></td>
					<td><?= $data['status']; ?></td>
					<td><?= $data['cost']; ?></td>
					<td><?= $data['new_cost']; ?></td>
					<td><?= $data['portofolio']; ?></td>
					<td><?= $data['tower_owner']; ?></td>
					<td><?= $data['site_name']; ?></td>
					<td><?= $data['alamat_site']; ?></td>
					<td><?= $data['kabupaten']; ?></td>
					<td><?= $data['provinsi']; ?></td>
					<td><?= $data['area']; ?></td>
					<td><?= $data['ro']; ?></td>
					<td><?= $data['peraturan']; ?></td>
					<td><?= $data['status_tagihan']; ?></td>
					<td><?= $data['peraturan_pasca']; ?></td>
					<td><?= $data['imb']; ?></td>
					<td><?= $data['realisasi_rpmt2017']; ?></td>
					<td><?= $data['denda18']; ?></td>
					<td><?= $data['realisasi_rpmt2018']; ?></td>
					<td><?= $data['denda19']; ?></td>
					<td><?= $data['realisasi_rpmt2019']; ?></td>
					<td><?= $data['realisasi_rpmt2020']; ?></td>
					<td><?= $data['average']; ?></td>
					<td><?= $data['prioritas']; ?></td>
					<td><?= $data['data_propose']; ?></td>
					<td><?= $data['site_tertagih']; ?></td>
					<td><?= $data['realisasi_tot']; ?></td>
					<td><?= $data['keterangan']; ?></td>
				</tr>
			</tbody>
			
			<?php
			}
			?>
			
		</table>

	</center>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>