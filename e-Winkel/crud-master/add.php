
<?php
include "includes/database.php";

?>

<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<title>Adding new customer</title>
<style>
	.fa-edit {
opacity: 0.2;
		font-size: calc(100px + 10vw);
		height: auto;
	}
body {
	padding: 0px;
	margin: 0px;
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  color: black;
}
.selectparent {
	font-size: 2vw;
  width: 100vw;
  height: 13vw;  
  display: flex;
  padding: 2vw 0vw 2vw 010vw;
}
input{	font-size: 10px;
	height: calc(20px + 1vw) ;
	width: calc(100px + 30vw)} 

.selecth2 {
  color: white;
  height: 3vw;
  display: block;
  margin-top: 0vw;
  margin-bottom: 9vw;
}
.fa-edit{
	margin-top: 13vw;
	
}
.form-horizontal{
	margin-top: 13vw;
}
.row1{display: flex}
fieldset{margin-left: 2vw;}

#username {
	color: darkgrey;
	font-size: 20px;
	}
#email, #password, #password_confirm {	
	color: darkgrey;
	font-size: 12px;
	}
::-webkit-input-placeholder {
  color: grey; font-size: 10px;
}
.controls, .controls, .input-xlarge { 
margin-bottom: 5px;
}
.boodschap{
	text-align: center;
	position: absolute;
	width: 70vw;
	margin: 5vw 5vw 5vw 5vw;
	opacity: 0.5; 
}
</style>

<body>
<div class=" bg-primary selectparent">
	<p>Welkom!</p>
<!--
<a href="add.php">Gegevens inputten</a>
<a href="index.php">Gegevens aanpassen</a>
-->


<!--
</div>
<div>
<a href="index.php">home</a>
</div>
-->
<div class="boodschap">
<?php
if (isset($_POST['save'])) {
	$name = $_POST['username'];
	$email = $_POST['email'];
	$psw = $_POST['psw'];

$query ="INSERT INTO contacts1 (id, name, email, psw) VALUES ('','$name','$email','$psw')";
	if ($con->query($query)) {
		echo "Uw gegevens werden opgeslaan.";
	}else{
		echo "Oeps, er is iets misgelopen!";
	}
}


?></div>
<div class="row1">
<i class="fa fa-edit text-primary"></i>
<form class="form-horizontal" action='' method="POST">
  <fieldset>

    <div class="control-group">
      <!-- Username -->
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="Naam & Achternaam" required>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="Emailadres" class="input-xlarge" required>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="Wachtwoord" class="input-xlarge" required>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password -->
      <div class="controls">
        <input type="password" id="password_confirm" name="password_confirm" placeholder="Herhaal wachtwoord" class="input-xlarge" required>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button type="submit" name="save" class="btn btn-success">Registreren</button>
      </div>
    </div>
  </fieldset>
</form>

</body>

</html>