<?php include('server.php') ?>

<?php 
	
	
	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../SystemSecurity_Securewebapp/login.php');
	}
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: ../SystemSecurity_Securewebapp/login.php");
	}
	
	
?>

<!DOCTYPE html>
<html>
	
	<head>
		<title>Ask a question</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<style>
		
		.center {
			margin: auto;
			width: 30%;
			padding: 10px;
		}
	</style>
	</head>
	<body style="text-align:center">
		<div class="header">
			<a href="index.php" class="logo"><img src="chat.png" style="width: 45px"></a>
			<a href="index.php" class="home">Home</a>
			<a href="forum.php" class="forum">Forum</a>
			<div class="header-right">
				<?php  if (isset($_SESSION['username'])) : ?>
					<p>You are <strong><?php echo $_SESSION['username']; ?></strong></p> 
					<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
				<?php endif ?>
			</div>
		</div>
		
		
		<h2>Ask a question</h2>
	
		<form style="align: center;" method="post" action="postingQ.php" class="center">
			<div class="mb-3">
				<label class="form-label">Question</label>
				<input class="form-control" type="text" name="titleQ"  >
			</div>
			<div class="mb-3">
				<label class="form-label">Text</label>
				<input class="form-control" type="text" name="bodyQ" style="height: 200px">
			</div>
			
			<div class="mb-3">
				<button type="submit" class="btn btn-primary" name="sub_question">Submit your question</button>
			</div>
			<p>
				Would you like to see <a href="forum.php">Forum</a> first?
			</p>
		</form>
	
		
		
		<?php
		
		?>
	</body>
</html>