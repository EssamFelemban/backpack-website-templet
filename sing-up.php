<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Log in</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />
        <script src="store.js" async></script>
    </head>
    <body>
        <header class="main-header">
            <nav class="nav main-nav">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="store.php">STORE</a></li>
                    <li><a href="log-in.php">Log in</a></li>
					<li><a href="feedback.php">Feedback</a></li>
                </ul>
            </nav>
            <h1 class="band-name band-name-large">backpacks</h1>
        </header>

        <section class="content-section container">
	

        <div id="error"></div>
        
        <div class="signup-box">
    <h1>Sign Up</h1>
    <form id="form" action="" method="POST" class= "login-email">
    <div>
	        <label for="email">Username</label>
            <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
			    <label for="email">Email</label>
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
			    <label for="password">Password</label>
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
			    <label for="password">Confirm password</label>
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
 
  <button name="submit" class="btn3" type="submit">Submit</button><a>
    </form>

  <p class="para-2">
    Already have an account? <a href="log-in.php">Login here</a>
  </p>
 </div>

  </body>
</html>