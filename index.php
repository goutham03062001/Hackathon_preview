<!DOCTYPE html>
<html>
<head>
		<title>Team SSGG</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
	
	<header>
		
	<div class="footer">
		<div class="container-fluid bg-secondary">
			<div class="row">
				<div class="col-lg-4 col-4 col-sm-4 col-md-4 col-xl-4">
					<ul style="text-decoration: none;list-style-type: none;font-family: Arieal;margin-left:-50px;" class="text text-primary mt-2">
						<li class="list-item" style="display: flex;flex-direction: row;padding-left:10px;">
							
								<i class="fa fa-facebook" style="font-size: 30px;">
							
								</i>
							
						
						
							<i class="fa fa-instagram" style="font-size: 30px;"></i>
						

							<i class="fa fa-youtube" style="font-size: 30px;"></i>
						
							<i class="fa fa-twitter" style="font-size: 30px;"></i>
						
						
						</li>
					</ul>
				</div>

				<div class="col-lg-4 col-sm-12 col-12 col-md-4 col-xl-4">
					<p class="text text-center text-warning mt-2" style="font-size: 18px;margin-right:60px;">
						<span><i class="fa fa-envelope"></i> &nbsp;Email : &nbsp; team SSGG@gmail.com</span>
					</p>
				</div>


				<div class="col-lg-4 col-sm-12 col-12 col-md-4 col-xl-4">
					<a href="chat_with_us.php" style="text-decoration: none;">
						<p class="text text-center text-warning mt-2 " style="font-size: 18px;margin-right:200px;">
						<span><i class="fa fa-comment"></i> &nbsp;Chat With Us &nbsp;</span>
					</p>
					</a>
				</div>

				
			</div>
		</div>
	
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	
		
		
  <a class="navbar-brand mt-2" href="#" style="font-weight: bold;font-size:28px;font-family: Poppins;">Formers Adda<p class="text text-success">
  	
  </p></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link  active px-3"  href="index.php" style="background-color: #1e9fb6;">HOME</a>
      </li>
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle px-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;font-weight: bold;">
         Categories
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
        <a href="#" class="dropdown-item">Vegitables</a>
        <a href="#" class="dropdown-item">Fruits</a>
        <a href="#" class="dropdown-item">Goods</a>
        


        </div>
      </li>
      <li class="nav-item">
      	<a class="nav-link  px-3" href="AddProducts.php">Add Product</a>
      	
      </li>
      <li class="nav-item">
      	<a class="nav-link  px-3" href="AboutUs.php">About Us</a>
      	
      </li>

       <li class="nav-item">
      	<a class="nav-link  px-3" href="ContactUs.php">ContactUs</a>
      	
      </li>

      <li class="nav-item">
      	<a class="nav-link  px-3" href="Privacy Policy.php">Privacy Policy</a>
      	
      </li>
     
      
      
      
      
      
      
    </ul>
  </div>  

</nav>

	</header>

<!--product section-->
<div class="container">
<div class="row">
<?php include 'connection.php';

$query = "SELECT * FROM farmerproducts";

$result = mysqli_query($connection,$query);

while($row = mysqli_fetch_array($result))
{
	?>	
	
			<div class="col-md-4 col-sm-12 col-12 col-lg-4 col-xl-4">
				<div class="card my-2" style="box-shadow: 10px 10px 10px #C3DDDD;">
					<div class="card-body">
						<img src="<?php echo $row['item'];?>" class="img-thumbnail">
						<div class="card-description">
							<?php
								echo $row['name']."<br>".$row['mobile']."<br>".$row['email']." ";

							?>
						</div>

					</div>
					<div class="card-footer">
						<button class="btn btn-info btn-block">BUYNOW</button>
					</div>
				</div>	
			</div>
		
	<?php
}
		

?>
</div>
	</div>
	
<!--product section end-->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,256L48,229.3C96,203,192,149,288,154.7C384,160,480,224,576,218.7C672,213,768,139,864,128C960,117,1056,171,1152,197.3C1248,224,1344,224,1392,224L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

	<div class="footer">
		<div class="container-fluid bg-dark">
			<div class="row">
				<div class="col-lg-4 col-12 col-sm-12 col-md-4 col-xl-4">
					<ul style="text-decoration: none;list-style-type: none;font-family: Arieal;" class="text text-primary">
						<h3 class="text text-success">Connect With Us</h3>
						<li class="list-item" style="display: flex;flex-direction: row;padding-left:10px;">
							
								<i class="fa fa-facebook" style="font-size: 30px;">
							
								</i>
							
						
						
							<i class="fa fa-instagram" style="font-size: 30px;"></i>
						

							<i class="fa fa-youtube" style="font-size: 30px;"></i>
						
							<i class="fa fa-twitter" style="font-size: 30px;"></i>
						
						
						</li>
					</ul>
				</div>

				<div class="col-lg-4 col-12 col-sm-12 col-md-4 col-xl-4">
					<ul style="text-decoration: none;list-style-type: none;font-family: Arieal;" class="text ">
						<h3 class="text text-success">More From Us</h3>
						<li class="nav-item" >
							<a class="nav-link" href="#" style="color:white;"><p class="text">
								
							</p></a>
							<a class="nav-link" href="#" style="color:white;">
								<p class="text">Online Teaching</p>
							</a>
							<a class="nav-link" href="#" style="color:white;">
								<p class="text">Online Store</p>
							</a>
							
						</li>
						

						
					</ul>
				</div>


				<div class="col-lg-4 col-12 col-sm-12 col-md-4 col-xl-4">
					<ul style="text-decoration: none;list-style-type: none;font-family: Arieal;" class="text ">
						<h3 class="text text-success">Our Services</h3>
						<li class="nav-item" >
							<a class="nav-link" href="#" style="color:white;"><p class="text">
								Timings

							</p></a>
							<a class="nav-link" href="#" style="color:white;">
								<p class="text">Get latest Posts</p>
								<input type="email" name="news_email" placeholder="Submit Your email to get latest notifications" class="form-control">
							</a>
							
							
						</li>
						

						
					</ul>
				</div>
			</div>
		</div>
		<div class="copy-right">
			<h5 class="text text-center text-dark">
				&copy;to Team SSGG&nbsp; All rights reserved
			</h5>
		</div>
	</div>
</body>
</html>