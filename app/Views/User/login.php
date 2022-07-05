<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<title>Document</title>
</head>
<body>
	<div class="row body">
		<div class="col-md-6 b-1"></div>
		<div class="col-md-6 b-2 text-center">
			<div class="mt-4"><img src="Images/logo-w.png" alt="logo" width="150" height="100"></div>
			<span class="mt-2"><strong>Welcome Back</strong></span>
			<div>
				<form action="">
					<label for="email" class="sr-only"></label>
					<input type="text" name="email"><br>
					<label for="pass" class="sr-only"></label>
					<input type="password" name="pass"><br>
				</form>
			</div>
		</div>
	</div>
</body>
<style>
	body, html {
		overflow: hidden;
		height: 100%;
		width: 100%;
	}
	body {
		background-image: url("/Images/bg.jpg");
		width: 100%;
		height: 100%;
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
	}
	.b-1, .b-2, .body {
		height: 100%;
	}
	.b-2 {
		background-color: rgba(0, 0, 0, 0.5);
	}
	.b-2 span {
		color: white;
	}
</style>
</html>