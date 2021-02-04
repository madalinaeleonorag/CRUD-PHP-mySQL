<img src="title.png" height="10%" ALIGN="left" />
</br></br></br></br></br></br>
<?php
$user = $_REQUEST['user'];
echo "Bine ai venit, " . $user . "</br>";
$db = mysqli_connect("localhost", "root", "", "proiectphp");

$sql = "SELECT * FROM graficieni WHERE graficieni.usernamegraf='$user'";
$result = mysqli_query($db, $sql);

while ($row = mysqli_fetch_assoc($result)) {
	echo "</br>Nume : " . $row["numegraf"];
	echo "</br>Prenume : " . $row["prenumegraf"];
	echo "</br>Email : " . $row["emailgraf"];
	echo "</br>Username : " . $row["usernamegraf"];
	echo "</br></br>";
	echo "<a href='editarecontp?id=" . $user .".php'>Modifica date cont </a></br></br>";
}

?>
<a href="stergerecontp.php" style="color:red;">Sterge cont </a></br></br>

<a href="toatelucrarilep.php">Vezi toate lucrarile tale</a></br></br>