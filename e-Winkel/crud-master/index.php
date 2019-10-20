
<?php
include "includes/database.php";
?>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
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
  text-align: center;
  padding: 2vw 0vw 2vw 010vw;
}
.selecth2 {
  color: white;
  height: 3vw;

  display: block;
  margin-top: 0vw;
  margin-bottom: 9vw;
}

</style>
<title>e-Winkel</title>


<body>
<div class=" bg-primary selectparent">
	<p>Welkom!</p>

<a href="add.php">Gegevens inputten</a>
<a href="index.php">Gegevens aanpassen</a>
</div>


<table>
<tr>
  <th>Naam</th>
  <th>Passwoord</th>
  <th>Email</th>
  <th>Address</th>
</tr>

<?php 

$getcontacts = mysqli_query($con,"SELECT * FROM contacts");

while ($contacts=mysqli_fetch_array($getcontacts)) {
	$id = $contacts['id'];

	$name = $contacts['name'];
	$phone = $contacts['phone'];
	$email = $contacts['email'];
	$address = $contacts['address'];
echo "<tr>";
echo "<td>".$name."</td><td>".$phone."</td><td>".$email."</td><td>".$address."</td><td><a href='delete.php?id=$id'>delete</a></td><td><a href='edit.php?id=$id'>edit</a></td>";
echo "</tr>";
}
?>

</table>
</body>

</html>