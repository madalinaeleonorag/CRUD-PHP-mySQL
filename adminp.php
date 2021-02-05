<head>
	<style>
		.logo {
			height: 10vh;
		}
		.wrapper {
			display: flex;
			flex-flow: column;
		}
		.link {
			padding: 5px 0;
		}
		.account-detail-row {
			display: flex;
		}
		.account-detail-row .account-detail {
			font-weight: bold;
			padding-right: 5px;
		}
		.welcome-message {
			margin: 10px 0;
			font-weight: bold;
			color: #6a1313;
			font-size: 1.2rem;
		}
		.edit {
			color: orange;
		}
		.delete {
			color: #6a1313;
		}
	</style>
</head>
<body background="1.jpg">
	<div>
		<img src="title.png" class="logo"/>
	</div>

	<div class="wrapper">
		<?php
			$user = $_REQUEST['user'];
			echo "<div class='welcome-message'>Welcome, " . $user . "</div>";
			$db = mysqli_connect("localhost", "root", "", "proiectphp");

			$sql = "SELECT * FROM graficieni WHERE graficieni.usernamegraf='$user'";
			$result = mysqli_query($db, $sql);

			while ($row = mysqli_fetch_assoc($result)) {
				echo "<div class='account-detail-row'><div class='account-detail'>Name:</div> " . $row["numegraf"] . "</div>";
				echo "<div class='account-detail-row'><div class='account-detail'>Surname:</div> " . $row["prenumegraf"] . "</div>";
				echo "<div class='account-detail-row'><div class='account-detail'>Email:</div> " . $row["emailgraf"] . "</div>";
				echo "<div class='account-detail-row'><div class='account-detail'>Username:</div> " . $row["usernamegraf"] . "</div>";
				echo "<a class='link edit' href='editarecontp.php'>Edit account details</a>";
			}
		?>

		<a href="stergerecontp.php" class='link delete' style="color:red;">Delete account</a>
	</div>
</body>