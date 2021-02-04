<?php
session_start();
$_SESSION['message'] = '';

$db = mysqli_connect("localhost", "root", "", "proiectphp");
$dbselect = mysqli_select_db($db, 'proiectphp');
$nume = $_POST['formnume'];
$prenume = $_POST['formprenume'];
$email = $_POST['formemail'];
$username = $_POST['formuser'];
$passw = $_POST['formpass'];
$sqladauga = "INSERT INTO graficieni (numegraf,prenumegraf,emailgraf,usergraf,passgraf)"
    . " VALUES ('$nume','$prenume','$email','$username','$passw')";
mysqli_query($db, $sqladauga);
require("autentificarep.php");
