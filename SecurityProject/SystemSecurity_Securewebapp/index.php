
<?php 

	session_start(); 
	
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Secure Homepage</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

		
	</head>

	<body>

	<div class="header">
		<a href="index.php" class="logo"><img src="chat.png" style="width: 45px"></a>
		<a href="index.php" class="home">Home</a>
		<a href="forum.php" class="forum">Forum</a>
		<div class="header-right">
			<?php  if (isset($_SESSION['username'])) : ?>
				<p>You are <strong><?php echo $_SESSION['username']; ?></strong></p> <!-- si può fare un attacco -->
				<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
				<?php else: ?>
				
				<a class="active" href="login.php">LOGIN</a>
				<a href="register.php">SIGN IN</a>
			<?php endif ?>
		</div>
	</div>
	
	<div style=" text-align: center;" class="content">
		<h2>Secure Homepage</h2>
		<br><br>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p> <!-- si può fare un attacco -->
			<p> <a href="../SystemSecurity_Securewebapp/index.php?logout='1'" style="color: red;">logout</a> </p>
			<a href="../SystemSecurity_Securewebapp/question.php" class="btn btn-primary">Ask a question</a>
			<?php else:?>
				<a href="../SystemSecurity_Securewebapp/login.php" class="btn btn-primary">LOGIN</a>
		<?php endif ?>
		
		
		
		
	</div>
		
	</body>
</html>