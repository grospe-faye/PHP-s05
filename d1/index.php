<?php
	$tasks = ['Get git', 'Bake HTML', 'Eat CSS', 'Learn PHP'];

	// isset() - Determine if the variable is declared and is different with NULL

	// $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get". $_GET can also collect data sent in the URL

	if(isset($_GET['index'])){
		$indexGet = $_GET['index'];
		echo "The retrieved task from GET is $tasks[$indexGet].";
	}

	if(isset($_POST['index'])){
		$indexPost = $_POST['index'];
		echo "The retrieved task from POST is $tasks[$indexPost].";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>S05: Client-Server Communication (GET and POST)</title>
</head>
<body>
	<h1>Task index from GET</h1>

	<form method="GET">
		<select name="index" required>
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
		</select>

		<button type="submit">GET</button>
	</form>

	<h1>Task index from POST</h1>

	<form method="POST">
		<select name="index" required>
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
		</select>

		<button type="submit">POST</button>
	</form>
</body>
</html>