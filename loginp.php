<form method="get" action="adminp.php">
    <input type="hidden" name="user" value="user">
</form>
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
    } else echo '<body background="1.jpg" font size="6">
<center></br>
<img src="title.png" height="30%">
</br>
<font color="RED">Datele introduse nu corespund. </font>
</br>
<form name="autentificare" action="loginp.php" method="POST">
User <input type="text" name="user"/></br>
Password <input type="password" name="pass" /></br></br>
<input type ="submit"> </form>
</br>
</br>';
}
?>