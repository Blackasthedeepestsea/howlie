
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
        
        	.profilecontainer{
			margin:0px auto;
			text-align: center;
                width: 40%;
		}
		.profilecontainer img{
			padding-bottom:10px;
			border: 10px #bbb double;
			width:300px;
			height:300px;
			border-radius: 50%;
			padding:10px;
		}
		.profilecontainer span{
			display: inline-block;
			width:49%;
		}
		.profilecontainer .left{
			text-align: right;
		}
		.profilecontainer .right{
			text-align: left;
		}
       
        
	</style>
</head>
<body>
<!-- php inject our Navigation using the require method -->
<?php require_once "nav.php"; ?>

<!-- Continue HTML -->
<h2>New Pals!</h2>
<form  method="post" action="searchresult.php">
<label style="text-align:left;">I am interested in meeting people who : <br>
    <input type="radio" name="meet" value="write comedy" required>write comedy.<br>
    <input type="radio" name="meet" value="perform comedy" required>perform comedy.<br>
    <input type="radio" name="meet" value="produce comedy shows or media" required>produce comedy shows or media.<br>
    <input type="radio" name="meet" value="book comedy" required>book comedy.<br>
<br>
	<br>

<input type="submit" name="submit" value="Submit"> 
    <br><br><br><br>
</form>

    
<?php
    
    $m = $_POST['meet'];
    $con=mysqli_connect("localhost","fssa","Webdevfun1!","fssa");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM vowlie_reg WHERE valueZ LIKE '$m'");

    while($row = mysqli_fetch_array($result))
      { 
            if ($row['img'] == null) {
                $img = "users/young1/image.png"; } 
        else {
       $img = $row['img'];
        }
        
        echo "<div class='profilecontainer'><h2>Meet " .$row['name'] ."</h2></div>";
        echo "<div class='profilecontainer'><img src='$img'></div>";  
       echo "<br />";
       
      echo "<div class='profilecontainer'>Hello there!<br><br> My name is " . $row['name'] . " and I " . $row['valueZ'] . "!<br>". "My favorite type of comedy involves " . $row['value3'] . "!<br> To get in touch with me please e-mail me at " . $row['email'] . " and have a good day!</div><br>"; //these are the fields that you have stored in your database table employee
      echo "<br />";
        echo "<br />";
      }

    mysqli_close($con);
        
    ?>
    
</body>
</html>