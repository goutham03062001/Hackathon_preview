
		<?php
	include 'connection.php';
	include 'links.php';

	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];

		$useremail = $_POST['useremail'];

		$usermobile = $_POST['usermobile'];

		$file = $_FILES['item'];

		$filename = $file['name'];

		$filepath = $file['tmp_name'];

		$fileerror = $file['error'];



		


		if($fileerror==0)
		{
			$destination = 'uploaded_images/'.$filename;

			//echo $destination;

			move_uploaded_file($filepath, $destination);

			$insertquery = "INSERT INTO farmerproducts (name,email,mobile,item) values('$username','$useremail','$usermobile','$destination')";

			$query = mysqli_query($connection,$insertquery);

			if($query)
			{
				?>

				<div class="row">
					<div class="col-lg-4 col-sm-2 col-md-3 col-xl-3">
						
					</div>

					<div class="col-lg-5 col-sm-8 col-md-6 col-xl-6">
						<div class="card">
							<div class="card-body">
								<h4 class="text text-center text-success">
									<?php
										echo "Your Image"." ".$filename."is Uploaded Successfully";

									?>
								</h4>
							</div>
						</div>

					</div>
				</div>



				<?php
			}
			else{

				?>
				<div class="row">
					<div class="col-lg-4 col-sm-2 col-md-3 col-xl-3">
						
					</div>

					<div class="col-lg-5 col-sm-8 col-md-6 col-xl-6 mt-5">
						<div class="card">
							<div class="card-body">
								<h4 class="text text-center text-warning">
									<?php
										echo "Your Image"." ".$filename." "."is not Uploaded";

									?>
								</h4>
							</div>
						</div>

					</div>
				</div>



				<?php
				
			}

			

	
}
}
		?>
	