<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>studi kasus jquery 2</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
	<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
</head>
<body>
	<table id="table_id" class="display">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Umur</th>
				<th>Alamat</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Pelita</td>
				<td>24</td>
				<td>Bandung</td>				
			</tr>
			<tr>
				<td>Najmina</td>
				<td>20</td>
				<td>Jakarta</td>				
			</tr>
			<tr>
				<td>Nur</td>
				<td>19</td>
				<td>Yogyakarta</td>				
			</tr>
		</tbody>
	</table>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#table_id').DataTable();
	});
</script>