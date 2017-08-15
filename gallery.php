<?php session_start();// Starting Session ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Cache-Control" content="no-store" />
    <link href="https://fonts.googleapis.com/css?family=Lemonada|Delius" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
	<title>Ajax Example</title>
	<script src="js/jquery.min.js"></script>
	<script src="js/ajax1gallery.js"></script>
	<style>
		*{
			font-family: sans-serif;
			box-sizing: border-box;
            background: black;
            color: #D8BFD8;
            text-align: center;
		}

		#profile{
			margin: 0px auto;
			text-align: center;
            width: 30%;
		}

		.person{
			width:100%;
			padding:5px 20px 20px 20px;
			display: inline-block;
			text-align: left;
			vertical-align: top;
			background-color: black;
			color:#fff;
			border:1px #333 solid;
			border-radius:5px;
			margin:10px;
			min-height:100px;
		}

		.person .profileImage{
			text-align: center;
		}

		.person img{
			width: 200px;
			border-radius:0%;
			border:2px #fff solid;
		}

		.person h5{
			margin:10px 0px 0px 0px;
		}

		.person h5+p{
			margin:0px;
		}
	</style>
</head>
<body>
<?php require_once "nav1.php"; ?>
<h2>FUNZO Board</h2>
<form method="post" enctype="multipart/form-data">
<label>Photo
	<input type="file" name="photo" required><br>
</label>
	<br>
    <label>Message
	<input type="text" name="name" required><br>
</label>
<br>

<input type="submit" name="submit" value="Submit" id="submit">
</form>

<div id="profile">
	<h2>Did you enjoy??</h2>
</div>
</body>
</html>