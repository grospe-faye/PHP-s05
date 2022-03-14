<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>S05: Client-Server Communication (Basic To-Do)</title>
</head>
<body>
	<?php session_start() ?>
	

	<?php if (isset($_SESSION['details'])): ?>
		<?php foreach($_SESSION['details'] as $index => $detail): ?>
		<div>
			<form method="POST" action="./index.php" style="display: inline-block;">

               <p>Hello, <?php echo $detail->email; ?></p>
               <button type="submit">Logout</button>
              	
			</form>

		</div>
		<?php endforeach; ?>
	<?php endif; ?>


</body>
</html>