<html>
	<head>
		<?php
			session_start();
			if (isset($_SESSION['session_username'])) {
				echo "Selamat datang, <b>".$_SESSION['session_username']."</b>! ";
				echo '<a href="logout.php">logout</a>';
			} else {
				?>
				<a href="login.php"><b>Login!</b><a>
				Belum punya akun? -> Sini <a href="access.php?controller=User&function=create">registrasi</a> dulu!
				<?php
			}
			?>
		<br><br>
	</head>
	<body>
		<b>index.php belongs here!</b>
	</body>
</html>
