<?php session_start();// Starting Session ?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Howlie</title>
    <meta http-equiv="Cache-Control" content="no-store" />
    <link href="https://fonts.googleapis.com/css?family=Lemonada|Delius" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="apple-touch-icon" sizes="57x57" href="../fav/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../fav/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../fav/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../fav/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../fav/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../fav/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../fav/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../fav/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../fav/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../fav/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../fav/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../faav/favicon-16x16.png">
<link rel="manifest" href="../fav/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    
	<style>
		*{
			font-family: Delius, sans-serif;
            text-align: center;
		}
        h2 {
            font-family: Lemonada, cursive;
        }
        
	</style>
</head>
<body>
<!-- php inject our Navigation using the require method -->
 <?php require_once "nav.php"; ?>

<!-- Continue HTML -->
<div class="hero1">
<div class="opacity">
<h2>Howlie</h2>
<form method="post" action="login.php">
<label>E-mail
	<input type="email" name="email"  value="" required><br>
</label>
	<br>
<label>Password
	<input type="password" name="pw" value="" required><br>
</label>
<br>
<input type="submit" name="submit" value="Submit"><br> <br> <br>  
</form>
<?php

if(isset($_POST['submit'])){

	if (empty($_POST['email']) || empty($_POST['pw'])) {
		echo "Username or Password is invalid";
	} else {
		$e = $_POST['email'];
		$p = $_POST['pw'];

		//mamp users connection
		//$cnt = mysqli_connect("localhost", "fssa", "root", "DBNAME");
		//xampp users connection
		$connection = mysqli_connect("localhost", "fssa", "Webdevfun1!", "fssa");

		$qry = "select * from vowlie_reg where pw='$p' AND email='$e'";

		$login = mysqli_query($connection, $qry);

		$row = $login->num_rows;

		//echo $row;

		echo "<hr>";

		if ($row == 1) {
			$a = mysqli_fetch_assoc($login);
			//print_r($a);
			//echo "<hr>$a['uid']<br>$a['time']<br>$a['name']<br>$a['email']<br>$a['pw']";

            $_SESSION['uid'] = $a["uid"];
            $_SESSION['name'] = $a["name"];
            $_SESSION['user'] = $a["user"];
			$_SESSION['email'] = $a["email"];
			$_SESSION['pw'] = $a["pw"];
			$_SESSION['img'] = $a["img"];
             $_SESSION['ouid'] = $a["uid"];
            $_SESSION['oname'] = $a["name"];
			$_SESSION['oemail'] = $a["email"];
            $_SESSION['ouser'] = $a["user"];
			$_SESSION['opw'] = $a["pw"];
			$_SESSION['oimg'] = $a["img"];
			//echo "<a href=\"profile.php\">proceed to profile</a>";
            $URL="http://citytechcedev.org/fssa/bfarmer/howlie/php/profilereal.php";
            echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
            echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
		} else {
			echo "try again";
		}
		// Closing Connection
		mysqli_close($connection);
	}
}
?>
    </div>
    </div>
    
   
    

</body>
</html>