<head>
    <style>
        body {
            text-align: center;
        }

        .logo {
            width: 70%;
            margin: 10px;
        }

        .forms {
            display:flex;
            flex-flow: row;
            justify-content: center;
        }

        form {
            display: flex;
            flex-flow: column;
            margin: 10px;
            text-align: center;
        }

        .form-title {
            font-weight: bold;
            padding: 10px;
            font-size: 1.2rem;
            color: #6a1313;
        } 

        .error {
            color: #6a1313;
            padding: 5px;
        }

        input {
            margin: 3px 0;
            border-radius: 5px;
            border: none;
            padding: 5px;
            box-shadow: 0px 0px 3px 1px lightgrey;
        }

        .submit-button input {
            width: fit-content;
            margin: 10px;
            background-color: #6a1313;
            color: white;
            padding: 7px;
        }

        .signin, .signup {
            background-color: #6a131314;
        }

        .space-between {
            background-color: #6a13133d;
            width: 3px;
        }
    </style>
</head>

<body background="1.jpg" font size="6">
    <img src="title.png" class="logo">
    <div class="forms">
        <div class="signin">
            <?php
            if (isset($_SESSION["error"])) {
                $error =  $_SESSION["error"];
            } else {
                $error = false;
            }

            if ($error) {
                echo '
                    <form name="autentificare" action="loginp.php" method="POST">
                        <div class="form-title">Authenticate</div>
                        <input type="text" name="user" placeholder="Username"/>
                        <input type="password" name="pass" placeholder="Password"/>
                        <span class="error">Datele introduse nu corespund.</span>
                        <div class="submit-button">
                            <input type="submit" value="Signin">
                        </div>
                    </form>
                ';
            } else {
                echo '
                    <form name="autentificare" action="loginp.php" method="POST">
                        <div class="form-title">Authenticate</div>
                        <input type="text" name="user" placeholder="Username"/>
                        <input type="password" name="pass" placeholder="Password"/>
                        <div class="submit-button">
                            <input type="submit" value="Signin">
                        </div>
                    </form>
                ';
            }
            ?>
        </div>
        <div class="space-between"></div>
        <div class="signup">
            <form action="adaugarep.php" method="POST">
                <div class="form-title">Create new account</div>
                <input type="text" name="formnume" placeholder="Name">
                <input type="text" name="formprenume" placeholder="Surname">
                <input type="text" name="formemail" placeholder="Email">
                <input type="text" name="formuser" placeholder="Username">
                <input type="password" name="formpass" placeholder="Password">
                <div class="submit-button">
                    <input type="submit" value="Signup">
                </div>
            </form>
        </div>
    </div>
</body>