<?php 
$login = $_SESSION['id'];
?>

<!DOCTYPE HTML>

<html>
<head>
		<title>Member Home Page</title>
</head>
<body>


Vous êtes connecté
YOUPIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII
<br>
<a href="../controller/controller_change_password.php">Change password</a><br>
<a href="controller_logout.php">Logout</a>
<div align="right">
<a href="controller_profil.php">Welcome <?php print("$login"); ?></a>
</div>
