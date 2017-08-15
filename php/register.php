<?php session_start();// Starting Session ?>
<!--start our HTML -->
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="Cache-Control" content="no-store" />
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
    
</head>
    <style>
        * {
            font-family: Delius, sans-serif;
            text-align: left;
            background: black;
            color: #D8BFD8;
        }
        
      h2 { 
            font-family: Lemonada, cursive;
            font-size: 40px;
            padding: 2px;
           border: 3px solid black;
           background: linear-gradient( -45deg, yellow,darkorange 40%, darkorange 40%, yellow);
          color: black;
          text-align: center;
        }
      
    </style>
<body>

<!-- php inject our Navigation using the require method -->
<?php require_once "nav.php"; ?>

<!-- Continue HTML -->
<div class="hero1" >
<div class="opacity">

<h2>REGISTRATION</h2>
<p style ="margin: 10px;"><span class="error"> * required field</span></p>

<!--
3 new attributes needed to process user inputs.
METHOD accepts either 'post' or 'get.' We use post to store data privately.
ACTION tells the form where to send the data. This will be where the user lands when submit is clicked.
ENCTYPE specifies how form data should be encoded. We specify Multipart to carry media from the file field.
Pay attention to the INPUT NAME ATTRIBUTES, 'name', 'email', 'user', 'pw', and 'photo.' This is how we identify the bits of data in the next file.
-->
<form method="post" action="postprocess.php" enctype ='multipart/form-data'  style ="margin: 20px;">
<label>Name
	<input type="text" name="name" required><span class="error">*</span><br>
</label>
<br>
<label>E-mail
	<input type="email" name="email" required><span class="error">*</span><br>
</label>
<br>
<label>User Name
	<input type="text" name="user" required><span class="error">*</span><br>
</label>
<br>
<label>Password
	<input type="password" name="pw" required><span class="error">*</span><br>
</label>
<br><br>
<label><span class="error">*</span>I am interested in meeting people who : <br>
    <input type="radio" name="value" value="write comedy" required>write comedy.<br>
    <input type="radio" name="value" value="perform comedy" required>perform comedy.<br>
    <input type="radio" name="value" value="produce comedy shows or media" required>produce comedy shows or media.<br>
    <input type="radio" name="value" value="book comedy" required>book comedy.<br>
<br><br>
</label>
    <label><span class="error">*</span> I do or want to : <br>
    <input type="radio" name="valueZ" value="write comedy" required>write comedy.<br>
    <input type="radio" name="valueZ" value="perform comedy" required>perform comedy.<br>
    <input type="radio" name="valueZ" value="produce comedy shows or media" required>produce comedy shows or media.<br>
    <input type="radio" name="valueZ" value="book comedy" required>book comedy.<br>
<br>
</label>
<label><span class="error">*</span>I live in :
<select name ="value2" required>
	<option value="OU">Outside of the U.S.</option>
    <option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>
<br>
</label><br>
<label><span class="error">*</span> My favorite type of comedy involves :<br>
    <input type="radio" name="value3" value="funny voices" required>funny voices.<br>
    <input type="radio" name="value3" value="funny faces" required>funny faces.<br>
    <input type="radio" name="value3" value="astute observations" required>astute observations.<br>
    <input type="radio" name="value3" value="clever word play" required>clever word play.<br>
    <input type="radio" name="value3" value="people falling down and/or being physically injured" required>people falling down and/or being physically injured.<br>
    <input type="radio" name="value3" value="making fun of celebrities" required>making fun of celebrities.<br>
     <input type="radio" name="value3" value="animation" required>animation.<br>
     <input type="radio" name="value3" value="sketches" required>sketches.<br>
     <input type="radio" name="value3" value="stand up" required>stand up.<br>
     <input type="radio" name="value3" value="live settings" required>live settings.<br>
</label>
<br>
<label><span class="error">*</span>Photo displayed on profile (Any photo will do, does not have to be you!) : <br><br>
	<input type="file" name="photo" required><br>
</label>
<br>
<input type="submit" name="submit" value="Submit">
</form>
    </div><br><br><br>
    </div>

</body>
</html>