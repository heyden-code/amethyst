<!DOCTYPE html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center mb-3">
		<ul class="navbar-nav"> 
			<li class="nav-item">
				<a class="nav-link" href="data.php">INDEX</a>
			</li>
			<li class="nav-item"> 
				<a class="nav-link" href="input.php">INPUT</a> 
			</li>
		</ul>
	</nav>

<h3 style="text-align: center">DATA</h3>
<br>
<a class="btn btn-primary mb-3" href="input.php">Tambah Data</a>

<table class="table table-hover mr-3 ml-3">
  <thead>
    <tr>
		<th>No</th>
		<th>Nilai Retribusi</th>
		<th>Tanggal Nodin</th>
		<th>Jumlah Site</th>
		<th>Tahun</th>
		<th>Action</th>
    </tr>
  </thead>
  <tbody>
		<?php
		include "koneksi.php";
		$no=1;
		$sqldata = mysqli_query($host, "SELECT * FROM list_data ORDER BY id ASC");

		while ($d = mysqli_fetch_array($sqldata)) {
			echo "<tr>
				<td>$no</td>
				<td>$d[retribusi]</td>
				<td>$d[nodin]</td>
				<td>$d[site]</td>
				<td>$d[tahun]</td>
				<td>
					<a href='edit.php?id=$d[id]'>Edit</a> | <a href='hapus.php?id=$d[id]'>Hapus</a>
				</td>
			</tr>";
			$no++;
		}
		?>
  </tbody>
</table>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</head>