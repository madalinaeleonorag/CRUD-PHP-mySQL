<img src="title.png" height="10%" ALIGN="left" />
</br></br></br></br></br></br>
<?php
$user = $_REQUEST['user'];
echo "Bine ai venit, " . $user . "</br></br></br>";
$db = mysqli_connect("localhost", "root", "", "proiectphp");

$sql = "SELECT * FROM graficieni WHERE graficieni.usernamegraf='$user'";
$result = mysqli_query($db, $sql);

while ($roww = mysqli_fetch_assoc($result)) {
	$nume = $roww["numegraf"];
	$prenume = $roww["prenumegraf"];
	$email = $roww["emailgraf"];
	$username = $roww["usernamegraf"];
}
?>