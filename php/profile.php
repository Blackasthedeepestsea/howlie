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
		  * {
            font-family: Delius, sans-serif;
            text-align: center;
            background: black;
            color: #D8BFD8;
        }
        
h2 { 
            font-family: Lemonada, cursive;
            font-size: 25px;
            padding: 2px;
           border: 3px solid black;
           background: linear-gradient( -45deg, yellow,darkorange 40%, darkorange 40%, yellow);
          color: black;
          text-align: center;
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
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
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
<h2>Account Information</h2>
<!--Echo all our super global session variables within our HTML-->
<p>Your ID is: <?php echo $_SESSION['ouid']; ?> </p>
<p>Your NAME is: <?php echo $_SESSION['oname']; ?> </p>
<p>Your EMAIL is: <?php echo $_SESSION['oemail']; ?> </p>
   

<p>If you need to change any of the information on this page please contact us at howlie@gmail.com and make sure to include your ID number.  Thank you!</p>

</body>
</html>