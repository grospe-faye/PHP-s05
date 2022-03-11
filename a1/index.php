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

	<?php if (isset($_SESSION['details'])): ?>
		<?php foreach($_SESSION['details'] as $index => $detail): ?>
		<div>
			<form method="POST" action="./server.php" style="display: inline-block;">
				
               <input type="hidden" name="action" value="update">
               <input type="hidden" name="id" value="<?php echo $index; ?>">

               <input type="text" name="email" value="<?php echo $detail->email; ?>">
              
			</form>

		</div>
		<?php endforeach; ?>
	<?php endif; ?>


</body>
</html>