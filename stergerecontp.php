<?php
$user = $_REQUEST['user'];
$db=mysqli_connect("localhost","root","","proiectphp");
$dbselect=mysqli_select_db($db,'proiectphp');
	
$sqlsterge="DELETE * FROM graficieni WHERE graficieni.usernamegraf='$user' ";
mysqli_query($db,$sqlsterge);
require("autentificarep.php");
?>