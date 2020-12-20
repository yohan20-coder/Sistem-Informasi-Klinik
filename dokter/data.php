<?php include_once('../header.php');  ?>


<div class="box">
	<h1>Dokter</h1>
	<h4>
		<small>DATA DOKTER</small>
		<div class="pull-right">
			<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
			<a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"> Tambah Dokter</i></a>
		</div>
	</h4>

	<form method="post" name="proses">
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover" id="mytable" >
		<thead>
			<tr>
				<th>
					<center>
						<input type="checkbox" name="checked[]" id="select_all">
					</center>
				</th>
				<th>No</th>
				<th>Nama Dokter</th>
				<th>Spesialis</th>
				<th>Alamat</th>
				<th>Telepon</th>
				<th><i class="glyphicon glyphicon-cog"></i></th>
			</tr>
			</thead>
			<tbody>

				<?php 
					$no = 1;
					$sql_poli = mysqli_query($con,"SELECT * FROM tb_dokter" ) or die(mysql_error($con));
					while ($data = mysqli_fetch_array($sql_poli)){ ?>
						<tr>
							<td align="center">
							<input type="checkbox" name="checked[]" class="check" value="<?=$data['id_dokter']?>">
							</td>
							<td><?= $no++ ?></td>
							<td><?= $data['nama_dokter'] ?></td>
							<td><?= $data['spesialis'] ?></td>
							<td><?= $data['alamat'] ?></td>
							<td><?= $data['no_telp'] ?></td>
							<td align="center">
								<a href="edit.php?id=<?= $data['id_dokter'] ?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
							</td>
						</tr>
					
					<?php
					}
				 ?>
				
			</tbody>
		</table>
		<script>
$(document).ready(function() {

	$('#mytable').dataTable({
		dom : 'Bfrtip',
				 buttons : [
				 	{
				 		extend :'pdf',
				 		orientation  : 'potrait',
				 		pageSize : 'A4',
				 		title : 'Data Dokter',
				 		download : 'open'
				 	},

				 		'csv', 'excel', 'print', 'copy'

				 ],
			columnDefs: [
				{
					"searchable": false,
					"orderable":false,
					"targets":[0,6]
					
				}
			],
			"order":[1, "asc"]
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


	function hapus() {
		var conf = confirm('Yakin Ingin Menghapus Data ?');
		if (conf) {
		document.proses.action = 'del.php';	
		document.proses.submit();
		}
		
	}

</script>
	</div>
</form>

	<div class="box pull-right">
		<button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i>Hapus</button>
	</div>

</div>

<!--<script >
	$(document).ready(function(){
		$('#mytable').dataTable({
			columnDefs: [
				{
					"searchable": false,
					"orderable":false,
					"targets":[0,6]
					
				}
			],
			dom :'bfrtip',
			button :[
						{
							extend :'pdf',
							oriented :'potrait',
							pageSize :'Legal',
							title	:'Data Pasien',
							download :'open'
						},
						'csv', 'excel', 'print', 'copy'
					],
			"order":[1, "asc"]
		});
	});

</script>-->

<div class="row">
 <div class="col-lg-12">
             <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="glyphicon glyphicon-chevron-left"></i></a>
          </div>
        </div>
<?php include_once('../footer.php');  ?>