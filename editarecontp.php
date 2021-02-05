<head>
	<style>
		.logo {
			height: 10vh;
		}

		.forms {
			display: flex;
			flex-flow: row;
			justify-content: center;
		}

		form {
			display: flex;
			flex-flow: column;
			margin: 10px;
			text-align: center;
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
	</style>
</head>

<body background="1.jpg">
	<div>
		<img src="title.png" class="logo" />
	</div>

	<?php

	if (isset($_SESSION["usernamegraf"])) {
		$user =  $_SESSION["usernamegraf"];
	} else {
		$user = false;
	}

	$db = mysqli_connect("localhost", "root", "", "proiectphp");

	$sql = "SELECT * FROM graficieni WHERE graficieni.usernamegraf='$user'";
	$result = mysqli_query($db, $sql);
	while ($roww = mysqli_fetch_assoc($result)) {
		$nume = $roww["numegraf"];
		$prenume = $roww["prenumegraf"];
		$email = $roww["emailgraf"];
		$username = $roww["usernamegraf"];
		$password = $roww["passgraf"];
	}

	echo '
		<div class="forms">
			<form name="autentificare" action="loginp.php" method="POST">
				<input type="text" name="formnume" value="Madalina" placeholder="Name">
				<input type="text" name="formprenume" value="Gheorghe" placeholder="Surname">
				<input type="text" name="formemail" value="mdx97e@gmail.com" placeholder="Email">
				<input type="text" name="formuser" value="user1" placeholder="Username">
				<input type="text" name="formpass" value="pass1" placeholder="Password">
				<div class="submit-button">
					<input type="submit" value="Save">
				</div>
			</form>
		</div>
	';
	?>
</body>