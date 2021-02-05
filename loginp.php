<?php
if (isset($_POST["user"]) && isset($_POST["pass"])) {
    $db = mysqli_connect("localhost", "root", "", "proiectphp");
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $query = mysqli_query($db, "SELECT * FROM graficieni WHERE usernamegraf='$user' AND passgraf='$pass'");
    if (mysqli_num_rows($query)) {
        require("adminp.php");
        session_start();
        $_SESSION["usernamegraf"] = $_POST["user"];
        $_SESSION["passgraf"] = $pass;
        $_SESSION["key_admin"] = session_id();
        $_SESSION["error"] = false;
    } else {
        $_SESSION["error"] = true;
    require("autentificarep.php");
    }
}
