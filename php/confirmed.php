<?php session_start(); ?>
<!-- php session -->
<!-- start HTML -->
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Howlie</title>
	<link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lemonada|Delius" rel="stylesheet">
	<style>
			*{
			font-family: Delius, sans-serif;
            text-align: center;
		}
        h2 {
            font-family: Lemonada, cursive;
        }
        
		.error{
			color:#f00;
		}
		.profilecontainer{
			margin:0px auto;
			text-align: center;
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
<?php require_once "nav.php"; ?>
<!-- Continue HTML for our Page heading -->
<h2>Your New Profile!:</h2>

<!-- Call the data that is stored in the files that we've created in postprocess.php -->
<?php
	// call the user variable stored in our session
	$u = $_SESSION['user'];
	$i = $_SESSION['img'];


	// call the file 'profile.txt'and treat each line as and item in an array called $profile
	$p = file("users/$u/profile.txt");
	
	// assign the first two lines of profile.txt to two variables, $name and $email
	// in addition use the trim method to remove any whitespace from these's lines
	$n = trim($p[0]);
	$e = trim($p[1]);
    $vZ = trim($p[7]);
    $v2 = trim($p[4]);
	$v1 = trim($p[5]);
	$v3 = trim($p[6]);
?>
<div class="profilecontainer">
	<!-- Call our PHP variables inside of our HTML-->
	<!-- Call the variable 'user' To identify which image will be called as the src attribute-->
	<img src="<?php echo $i ?>">
	<h3>
		<span class="left">Name:&nbsp;</span>
		<!-- Call the 'name' Variable to display in this span-->
		<span class="right"><?php echo $n ?></span>
	</h3>
	<h4>
		<span class="left">Email:&nbsp;</span>
		<!-- Call the 'email' variable to display in this span -->
		<span class="right"><?php echo $e ?></span>
	</h4>
    <h4>
		<span class="left">I want to or do :&nbsp;</span>
		<!-- Call the 'email' variable to display in this span -->
		<span class="right"><?php echo $vZ ?></span>
	</h4>
    <h4>
		<span class="left">State:&nbsp;</span>
		<!-- Call the 'email' variable to display in this span -->
		<span class="right"><?php echo $v2 ?></span>
	</h4>
    <h4>
		<span class="left">Here to meet people that:&nbsp;</span>
		<!-- Call the 'email' variable to display in this span -->
		<span class="right"><?php echo $v1 ?></span>
	</h4>
     <h4>
		<span class="left">Comedy found funniest:&nbsp;</span>
		<!-- Call the 'email' variable to display in this span -->
		<span class="right"><?php echo $v3 ?></span>
	</h4>
      <h2>
          <a href="login.php">Click here to LOGIN for the first time!</a></h2>
</div>
</body>
</html>