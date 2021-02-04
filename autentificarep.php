<body background="1.jpg" font size="6">
    <center></br>
        <img src="title.png" height="30%">
        </br>
        </br>
        </br>

        <form name="autentificare" action="loginp.php" method="POST">
            User <input type="text" name="user" /></br>
            Password <input type="password" name="pass" /></br></br>
            <input type="submit">
        </form>
        </br>
        </br>
        Creeaza cont nou :
        <form action="adaugarep.php" method="POST">
            Nume : <input type="text" name="formnume"><br>
            Prenume : <input type="text" name="formprenume"><br>
            Email : <input type="text" name="formemail"><br>
            User : <input type="text" name="formuser"><br>
            Parola : <input type="password" name="formpass"><br><br>
            <input type="submit" value="Adauga user nou">
        </form>
    </center>
</body>