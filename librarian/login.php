	<?php session_start();
	if (isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn,$query);
	$num_row = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		if( $num_row > 0 ) {
			$_SESSION['id']=$row['user_id'];
			header('Location:dashboard.php');
		}
		else{ ?>
	<div class="alert alert-danger">Access Denied</div>
	<?php
	}}
	?>