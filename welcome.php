<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
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
            <div class="container">
            </header>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <button class ="btn btn-primary btn-purchase" ><a href="logout.php">Logout</a></button>
    <button class ="btn btn-primary btn-purchase" ><a href="store.php">Store</a></button>
</body>
</html>