<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="aplikasi psb sederhana">
	<meta name="author" content="fajar siagian">
	<link rel="icon" href="../assets/ico/favicon.ico">

	<title>Signin Calon Siswa/i SMK Medan</title>

	<!-- Bootstrap core CSS -->
	<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="../css/signincasis.css" rel="stylesheet">
	</head>

	<body>
		<div class="container">
			<form class="form-signin" method="post" action="verifikasi.php">
				<h2 class="text-center">Sign In Calon Siswa/i</h2>
				<label for="nopend" class="sr-only">No Pendaftara</label>
				<input type="text" id="nopend" name="nopend" class="form-control" placeholder="No. Pendaftaran" required autofocus>
				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required>
				<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>

				<a href="../home" class="text-primary">Back To Home</a>
			</form>
			

		</div> <!-- /container -->

		<script src="../bower_components/jquery/dist/jquery.min.js"></script>
		<script src="../bower_components/bootstrap/dist/bootstrap.bundle.min.js"></script>
	</body>
</html>