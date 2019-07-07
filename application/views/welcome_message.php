<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="assets/style.css">
		<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
		<link rel="stylesheet" href="https://bootswatch.com/4/sandstone/bootstrap.min.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Welcome to Turista MIMAROPA!</title>
	</head>
	<body>
		<div id="overlay" class="text-white text-center py-4 d-flex justify-content-center align-items-center vh-100">
			<div class="col col-6 bg-white rounded p-4">
				<div class="">
					<img id="logo" src="assets/turista-mimaropa.png" />
					<form>
						<div class="text-left py-2">
							<label class="text-secondary mb-n1">Username</label>
							<input type="text" class="form-control" />
						</div>
						<div class="text-left py-2">
							<label class="text-secondary mb-n1">Password</label>
							<input type="password" class="form-control" />
						</div>
						<div>
							<button type="submit" class="btn btn-lg btn-success pt-2 mt-2 w-75">
								<i class="fa fa-user"></i>
								LOGIN
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>