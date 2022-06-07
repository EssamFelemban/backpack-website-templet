<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
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
  <div class="login-box">
        <h1>Login</h1>  
        <form id="form" action="" method="POST">
			<div class="input-group">
                <label for="email">Email</label>
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
                <label for="password">Password</label>
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
  <button name="submit" class="btn3" type="submit">Submit</button>
   </form>
   <p class="para-2">
                Not have an account? <a href="sing-up.php">Sign Up Here</a>
              </p>   
    </body>
</html>

