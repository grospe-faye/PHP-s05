<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>S05: Client-Server Communication (Basic To-Do)</title>
</head>
<body>
	<?php session_start() ?>
	
	<br><br>
	<form method="POST" action="./server.php">
		<input type="hidden" name="action" value="add" />
		Email: <input type="email" name="email" required />
        Password: <input type="password" name="password" required />
		<button type="submit">Login</button>
	</form>

</body>
</html>