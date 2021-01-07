<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<style type="text/css">
		.fa {
			font-size: 22px;
			
		}

	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-sm-12 col-12 col-md-8 col-xl-8 mt-3">
				<form action="uploaded_successfully.php" method="POST" enctype="multipart/form-data">
         <div class="form-group input-group">
           <div class="input-group-prepend">
             <span class="input-group-text">
               <i class="fa fa-user"></i>
             </span>
           </div>
           <input type="text"  name="username" class="form-control" placeholder="Full name"  required>
         </div>

         <div class="form-group input-group">
           <div class="input-group-prepend">
             <span class="input-group-text">
               <i class="fa fa-envelope"></i>
             </span>
           </div>
           <input type="email" name="useremail" class="form-control" placeholder="Email" type="text" required>
         </div>

 
        <div class="form-group input-group">
         <div class="input-group-prepend">
           <span class="input-group-text">
             <i class="fa fa-phone"></i>
           </span>
         </div>
         <input type="tel" name="usermobile" class="form-control" placeholder="Phone number"  required>
       </div>

        <div class="form-group input-group">
         <div class="input-group-prepend">
           <span class="input-group-text">
             <i class="fa fa-file"></i>
           </span>
         </div>
         <input type="file" name="item" class="form-control" placeholder="Please Choose A File"  required>
       </div>

       
         
          
          <div class="form input-group">
            <input type="submit" name="submit" value="submit"> 
          </div>
          
       </form>
			</div>
		</div>
	</div>

	
		
</body>
</html>