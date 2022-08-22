
<?php 
	session_start();
	
	if(isset ($_SESSION['username'])){
		header("Location: ../SystemSecurity_Securewebapp/index.php");
	}
	
	include_once('connect.php');
	//$errors = array();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style>
		
		.center {
			margin: auto;
			width: 30%;
			
			padding: 10px;
		}
	</style>
</head>
<body style="text-align: center;">
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

	<h2>Registration</h2>
	<form style="align: center; " method="post" action="register.php" class="center">
		<div <?php if (isset($name_error)): ?> class="mb-3 form_error" <?php endif ?>>
			<label for="inputUsername" class="form-label">Username</label>
			<input type="text" class="form-control" id="inputUsername" name="username" required>
			<?php if (isset($name_error)): ?>
				<span><?php echo $name_error; ?></span>
			<?php endif ?>
		</div>
		<div <?php if (isset($email_error)): ?> class="mb-3 form_error" <?php endif ?>>
			<label for="inputEmail" class="form-label">Email</label>
			<input type="email" class="form-control" id="inputEmail" name="email" required>
			<?php if (isset($email_error)): ?>
				<span><?php echo $email_error; ?></span>
			<?php endif ?>
		</div>
		<div class="mb-3">
			<label for="inputPassword" class="form-label">Password</label>
			<input type="password" class="form-control" id="inputPassword" name="password" required onfocus=”javascript:document.getElementById(this.id).value = ”">
		</div>
		
		<button type="submit" class="btn btn-primary" name="reg_user">Register</button>
		<br><br>
		<p>
			Already a member? <a href="login.php">Login</a>
		</p>
	</form>

 
	
	<?php
		if( isset( $_POST["reg_user"] ) ){

		 
			$username = mysqli_real_escape_string($conn, $_POST["username"] );
			$email = mysqli_real_escape_string($conn, $_POST["email"] );
			$password = mysqli_real_escape_string($conn,  $_POST["password"] );
			
			$sql_u = "SELECT * FROM users WHERE username='$username'";
			$sql_e = "SELECT * FROM users WHERE email='$email'";
			$res_u = mysqli_query($conn, $sql_u);
			$res_e = mysqli_query($conn, $sql_e);
	
			$uppercase = preg_match('@[A-Z]@', $password);
			$lowercase = preg_match('@[a-z]@', $password);
			$number    = preg_match('@[0-9]@', $password);
			$specialChars = preg_match('@[^\w]@', $password);
	
			if (mysqli_num_rows($res_u) > 0) {
				$name_error = "Sorry... <b>username</b> already taken, retry"; 	
				echo "<p>$name_error</p>";
			}else if(mysqli_num_rows($res_e) > 0){
				$email_error = "Sorry... <b>email</b> already taken, retry"; 	
				echo "<p>$email_error</p>";
				  }else{
					if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
						echo 'Password should be at least <b>8 characters</b> in length and should include at least <b>one upper case letter</b>, <b>one number</b>, and <b>one special character</b>.';
					}else{
						echo 'Strong password.';
						
						$hashed_password = password_hash($password, PASSWORD_DEFAULT);
						$query = "INSERT INTO users (username, email, passwordH) 
								VALUES ('$username', '$email', '$hashed_password')";
						$results = mysqli_query($conn, $query);
						echo 'Saved!';
						header('location: ../SystemSecurity_Securewebapp/login.php');
						exit();
					}
				  }
				
			mysqli_close($conn);
		}

		
    ?>
</body>
</html>