<?php include_once('../header.php');  ?>


<div class="box">
	<h1>Pasien</h1>
	<h4>
		<small>DATA PASIEN</small>
		<div class="pull-right">
			<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
			<a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"> Tambah Pasien</i></a>
			<a href="import.php" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-import"> Import Excel</i></a>
		</div>
	</h4>

	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover" id="pasien">
		<thead>
			<tr>
				<th>Nomor Identitas</th>
				<th>Nama Pasien</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>No. Telepon</th>
				<th><i class="glyphicon glyphicon-cog"></i></th>
			</tr>
			</thead>
		</table>
	</div>

	
	<script>
		$(document).ready(function(){
			$('#pasien').dataTable({
				"processing":true,
				"serverSide":true,
				"ajax":"pasien_data.php",
				 scrollY : '270px',
				 dom : 'Bfrtip',
				 buttons : [
				 	{
				 		extend :'pdf',
				 		orientation  : 'potrait',
				 		pageSize : 'A4',
				 		title : 'Data Pasien',
				 		download : 'open'
				 	},

				 		'csv', 'excel', 'print', 'copy'

				 ],
				 columnDefs :[
				 	{
				 		"searchable" :false,
				 		"orderable" :false,
				 		"targets" : 5,
				 		"render" : function(data, type, row){
				 			var btn = "<center><a href=\"edit.php?id="+data+"\" class=\"btn btn-warning btn-xs\"><i class =\"glyphicon glyphicon-edit\"></i></a> <a href=\"del.php?id="+data+"\" onclick=\" return confirm('Yakin ingin menghapus data ?') \"class=\"btn btn-danger btn-xs\"><i class =\"glyphicon glyphicon-trash\"></i></a></center>";
				 			return btn;
				 		}
					 }

				 ]
			});
		});
	</script>

	<div class="row">
 <div class="col-lg-12">
             <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="glyphicon glyphicon-chevron-left"></i></a>
          </div>
        </div>

</div>

<?php include_once('../footer.php');  ?>