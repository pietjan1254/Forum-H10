<?php 
	require "functions.php";
	
	if(isset($_SESSION['user'])){
		header("location: login.php");
		exit();
	}

	if(isset($_GET['logout'])){
		logoutUser();
	}
	
	if(isset($_GET['confirm-account-deletion'])){
		deleteAccount();
	}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>Secure login system with php and mysql</title>
</head>
<body>
	<div class="page">
		<h2>Welcome <?php echo $_SESSION["user"] ?> </h2>
		<h4>This is a secure page</h4>

		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla nostrum, aspernatur. Sed harum facere ab nihil recusandae autem quos corporis nobis tempora sapiente cupiditate illo tempore obcaecati error non, eligendi.</p>
		
		<br>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla nostrum, aspernatur. Sed harum facere ab nihil recusandae autem quos corporis nobis tempora sapiente cupiditate illo tempore obcaecati error non, eligendi.</p>
		<br>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla nostrum, aspernatur. Sed harum facere ab nihil recusandae autem quos corporis nobis tempora sapiente cupiditate illo tempore obcaecati error non, eligendi.</p>
		
		<a href="?logout">Logout</a>
		<br>
		<?php 
			if(isset($_GET['delete-account'])){
				?>
					<p class="confirm-deletion">
						Are you sure you want to delete you account?
						<a class="confirm-deletion" href="?confirm-account-deletion">Delete account</a>
					</p>
				<?php
			}else{
				?>
					<a href="?delete-account">Delete account</a>
				<?php
			}
		?>
	</div>
</body>
</html>
