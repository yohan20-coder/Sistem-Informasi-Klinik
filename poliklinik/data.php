<?php include_once('../header.php');  ?>


<div class="box">
	<h1>Poliklinik</h1>
	<h4>
		<small>DATA POLIKLINIK</small>
		<div class="pull-right">
			<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
			<a href="generate.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"> Tambah Poli</i></a>
		</div>
	</h4>

	<form method="post" name="proses">
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover" id="poli">
			<thead>
			<tr>
				<th>No</th>
				<th>Nama Poli</th>
				<th>Gedung</th>
				<th>
					<center>
						<input type="checkbox" name="checked[]" id="select_all">
					</center>
				</th>
			</tr>
			</thead>
			<tbody>

				<?php 
					$no = 1;
					$sql_poli = mysqli_query($con,"SELECT * FROM tb_poliklinik ORDER BY nama_poli ASC" ) or die(mysql_error($con));
					if (mysqli_num_rows($sql_poli) > 0 ) { 
					while ($data = mysqli_fetch_array($sql_poli)){ ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $data['nama_poli'] ?></td>
							<td><?= $data['gedung'] ?></td>
							<td align="center">
							<input type="checkbox" name="checked[]" class="check" value="<?=$data['id_poli']?>">
							</td>
						</tr>
					
					<?php
					}

					}else{
						echo "<tr><td colspan=\"4\"align=\"center\">Data tidak ditemukan</td></tr>";
					}
				 ?>
				
			</tbody>
		</table>
	</div>
</form>

	<div class="box pull-right">
		<button class="btn btn-warning btn-sm" onclick="edit()"><i class="glyphicon glyphicon-edit"></i>Edit</button>
		<button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i>Hapus</button>
	</div>

</div>


<script>
$(document).ready(function() {

	$('#poli').dataTable({
		dom : 'Bfrtip',
				 buttons : [
				 	{
				 		extend :'pdf',
				 		orientation  : 'potrait',
				 		pageSize : 'A4',
				 		title : 'Data Poliklinik',
				 		download : 'open'
				 	},

				 		'csv', 'excel', 'print', 'copy'

				 ],
		columnDefs: [
				{
					"searchable": false,
					"orderable":false,
					"targets":[3]
					
				}
			],
			"order":[0, "asc"]

		});

	$('#select_all').on('click', function() {
		if(this.checked) {
			$('.check'). each(function() {
				this.checked = true;
			})
		}else{
			$('.check'). each (function(){
				this.checked = false;
			})
		}
	});

	$('.check'). on ('click', function(){
		if ($('.check:checked').length == $('.check').length) {
			$('#select_all'). prop('checked', true)
		}else{
			$('#select_all'). prop('checked', false)
		}
	});


})


	function edit() {
		document.proses.action = 'edit.php';
		document.proses.submit();
	}
	function hapus() {
		var conf = confirm('Yakin Ingin Menghapus Data ?');
		if (conf) {
		document.proses.action = 'del.php';	
		document.proses.submit();
		}
		
	}

</script>

<div class="row">
 <div class="col-lg-12">
             <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="glyphicon glyphicon-chevron-left"></i></a>
          </div>
        </div>

<?php include_once('../footer.php');  ?>