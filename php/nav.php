<link rel="apple-touch-icon" sizes="57x57" href="fav/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="fav/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="fav/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="fav/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="fav/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="fav/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="fav/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="fav/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="fav/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="fav/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="fav/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="faav/favicon-16x16.png">
<link rel="manifest" href="fav/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">



<nav class="topnav" id="mytopnav">
       
		<?php
		// Display the following two links only if the session variable ID exists
			if(isset($_SESSION['uid'])){
				echo '<a href="index.php" style ="font-family: Lemonada, sans-serif; color: #D8BFD8;">Howlie<br></a>';
                echo '<a href="profilereal.php">PROFILE</a>';
                echo '<a href="searchtest.php">MATCHES</a>';
                echo '<a href="../index1.php">FUNZO BOARD</a>';
                echo '<a href="profile.php">ACCOUNT INFO</a>';
				echo '<a href="logout.php">LOGOUT</a>';
                echo  '<a href="contact.php">CONTACT US</a>';
                echo  '<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>';
			}
        else {
        echo '<a href="index.php" style ="font-family: Lemonada, sans-serif; color: #D8BFD8;">Howlie<br></a>';
        echo  '<a href="index.php">HOME</a>';	
        echo '<a href="register.php">REGISTER</a>';
		echo '<a href="login.php">LOGIN</a>';
        echo  '<a href="contact.php">CONTACT US</a>';	
        echo  '<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>';
        }
        ?>
    
</nav>



<script>
function myFunction() {
    var x = document.getElementById("mytopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>