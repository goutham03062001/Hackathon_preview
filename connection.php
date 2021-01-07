<?php

$connection = mysqli_connect('localhost','root','','ssgg');

if($connection)
{
	//echo 'connected successfully';

}

else{
?>

	<div class="container">
		<div class="row">

			<h4 class="text text-center text-warning">
				<?php
					echo "404 connection error";
				?>
			</h4>
		</div>
	</div>

		<?php
}
?>