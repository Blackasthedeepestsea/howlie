<?php session_start();// Starting Session ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Cache-Control" content="no-store" />
    <link href="https://fonts.googleapis.com/css?family=Lemonada|Delius" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
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
    
	<title>Howlie</title>
	<script src="js/jquery.min.js"></script>
	<script src="js/ajax1.js"></script>
	<style>
		
        
        @media screen and (max-width: 600px) {
    h2 {
        font-size: 17px;
    }
}
        
        
        *{
			box-sizing: border-box;
            background: black;
            color: #D8BFD8;
            text-align: center;
		}

        h2 { 
            font-family: Lemonada, cursive;
            padding: 2px;
           border: 3px solid black;
           background: linear-gradient( -45deg, yellow,darkorange 40%, darkorange 40%, yellow);
          color: black;
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
<h2>Funzo Board</h2>
 
    <form style="text-align: center;" method="post" enctype="multipart/form-data">


<label><span class="error">*</span>Any photo will do: <input type="file" name="photo" required><br>
</label>
	<br>
    <label><span class="error">*</span>Any message you want: <br>
	<input type="text" name="name" required><br>
</label>
<br>

<input type="submit" name="submit" value="Submit" id="submit">
</form>
    
    <p style ="margin: 10px;"><span class="error"> * required field</span></p>

<div id="profile">
	<h2>Did you enjoy??</h2>
</div>

    
   
</body>
</html>