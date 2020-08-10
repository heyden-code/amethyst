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

	<div class="card card-info ml-3 mr-3">
              <div class="card-header">
                <h3 class="card-title">Form Input</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" role='form' action="" method="POST">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="txtretri" class="col-sm-2 col-form-label">Nilai Retribusi</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="txtretri" placeholder="input retribusi" name="txtretri" value="txtretri">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="txtnodin" class="col-sm-2 col-form-label">Tanggal Nodin</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="txtnodin" placeholder="input tanggal nodin" name="txtnodin" value="txtnodin">
                    </div>
                  </div>
                  <div class="form-group row">
						<label for="txtside" class="col-sm-2 col-form-label">Jumlah Site</label>
                    	<div class="col-sm-10">
                      	<input type="number" class="form-control" id="txtsite" placeholder="input jumlah site" name="txtsite" value="txtsite">
                        </div>
                </div>
                <div class="form-group row">
						<label for="txttahun" class="col-sm-2 col-form-label">Tahun Input</label>
                    	<div class="col-sm-10">
                      	<input type="month" class="form-control" id="txttahun" placeholder="input tahun" name="txttahun">
                        </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer fixed-bottom">
                  <button type="submit" value="submit" class="btn btn-info" name="submit">Submit</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>

	<?php
	include "koneksi.php";
	if ($_SERVER['REQUEST_METHOD']=='POST'){
		$simpan = mysqli_query($host, "INSERT INTO list_data (retribusi,nodin,site,tahun)VALUES('$_POST[txtretri]','$_POST[txtnodin]','$_POST[txtsite]','$_POST[txttahun]')");

			if($simpan){
				header('location:data.php');
			}else {
				echo "gagal menyimpan data";
			}
		}
	?>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</head>