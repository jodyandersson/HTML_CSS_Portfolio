<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>studi kasus jquery 1</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	<style type="text/css">
		.pointer-disabled{
			cursor: not-allowed;
		}

	</style>
</head>
<body style="background: #f5f5f5;">
	<div class="container-fluid p-4">
		<div class="row">
			<div class="col-md-3">
				<h3>Form</h3>
				<form action="">
			  		<div class="form-group">
			    		<label for="first_name">First Name:</label>
			    		<input type="text" class="form-control" id="first_name" aria-describedby="emailHelp" placeholder="First Name">
			    	<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  		</div>
			  		<div class="form-group">
			    		<label for="last_name">Last Name:</label>
			    		<input type="text" class="form-control" id="last_name" placeholder="Last Name">
			  		</div>
			  		<div class="form-check">
			    		<input type="checkbox" class="form-check-input" id="exampleCheck1">
			    		<label class="form-check-label" for="exampleCheck1">Remember me</label>
			  		</div>
			  			<br><button type="submit" class="btn btn-primary" id="btn-submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>

<script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
  	$('#btn-submit').prop('disabled', true);
  	$('#btn-submit').addClass('pointer-disabled', true);
  	//document.getElementById('btn-submit').disabled = true;
  	var first_name = '';
  	var last_name = '';
  	$('input[id=first_name]').on('input', function () {
  		first_name = $(this).val();
  		enableButton();
  	});
  	  	$('input[id=last_name]').on('input', function () {
  		last_name = $(this).val();
  		enableButton();
  	});
  	  	function enableButton(){
  	  		if (first_name != '' && last_name !='') {
  	  			$('#btn-submit').prop('disabled', false);
  	  			$('#btn-submit').removeClass('pointer-disabled', true);
  	  		} else {
  	  			$('#btn-submit').prop('disabled', true);
  	  			$('#btn-submit').removeClass('pointer-disabled', true);
  	  		}
  	  	}
  </script>
