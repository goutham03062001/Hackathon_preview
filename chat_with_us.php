<!DOCTYPE html>
<html>
<head>
	<title>
		Chat With Us
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body class="bg-dark">
	<div class="container">
		<div class="row">
			
			<div class="col-lg-8 col-md-8 col-12 col-sm-12 col-xl-8 mt-3">
				<p class="text text-center text-info" style="font-size: 26px;">
				Hi,How can we help you out?
			</p>
				<div class="card bg-secondary" style="box-shadow: 15px 15px 20px #00000;">
				<div class="card-body">
				<form action="chat_with_us_file.php" method="POST">
					<div class="form-group">
						<input type="text" name="username" class="form-control" placeholder="Enter Your Name" required>
					</div>
					<div class="form-group">
						<input type="email" name="username" class="form-control" placeholder="Enter Your Email" required>
					</div>
					<div class="form-group">
						<input type="mobile" name="username" class="form-control" placeholder="Enter Your Mobile" required>
					</div>
					<div class="form-group">
						<textarea placeholder="Enter Your Message" class="form-control" rows="5" required></textarea>
					</div>
					<button class="btn btn-dark btn-block" type="submit" name="submit">Message</button>
				</form>
			</div>
		</div>
		</div>
		</div>
	</div>
</body>
</html>