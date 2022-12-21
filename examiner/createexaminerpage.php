<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create Student and Examiner</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>

<Body>
	<div class="container">
		<form action="../php/createexaminer.php" method="post">

			<h4 class="display-4 text-center">Create Examiner</h4>
			<hr><br>
			<?php if (isset($_GET['error'])) { ?>
				<div class="alert alert-danger" role="alert">
					<?php echo $_GET['error']; ?>
				</div>
			<?php } ?>
			<div class="form-group">
				<label for="name">Name</label>
				<input type="name" class="form-control" id="name" name="fullname" value="<?php if (isset($_GET['name']))
																								echo ($_GET['name']); ?>" placeholder="Enter your full name">
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" value="<?php if (isset($_GET['email']))
																							echo ($_GET['email']); ?>" placeholder="Enter email">
			</div>
			<div class="mb-3">
				<label for="username" class="form-label">User name</label>
				<input type="text" class="form-control" name="username" id="username" placeholder="Enter a username">
			</div>

			<div class="mb-3">
				<label for="password" class="form-label">Password</label>
				<input type="password" name="password" class="form-control" id="password">
			</div>
			<button type="submit" class="btn btn-primary" name="create">Create</button>
			<!-- <a href="read.php" class="link-primary">View Details</a> -->
		</form>
	</div>
</Body>

</html>