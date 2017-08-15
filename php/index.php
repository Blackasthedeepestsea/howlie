<?php session_start();// Starting Session ?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Howlie</title>
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
        
        /* Add a black background color to the top navigation */
.topnav {
    background-color: black;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
    display: none;
}

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 900px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 900px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
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
<p>Welcome to Howlie where we provide a hoot and a half!  <br> Hoot: amazing FUNZO board! <br> Half: amazing Matches page! <br> If you are new click REGISTER above or get to work below!!! </p>
    <br>
    
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
            $URL="http://localhost/bfarmer/vowlie/php/profilereal.php";
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


    