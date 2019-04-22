<!DOCTYPE html>
<html>
	<head>
		<title>OffWeb Hub</title>
		<link rel="stylesheet" href="glob_style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div class="feature">OffWeb Hub | <?PHP echo date('l jS \of F Y h:i:s A');  ?></div>
		<div class="container">
			<h1>Welcome to the OffWeb!</h1>
			<p>An offline copy of the internet</p>
			<hr>
			<form action="redir_handler.php">
				Enter Application URI:
				<input type="text" name="uri">
				<button>Go!</button>
			</form>
			<hr>
			<a href="./archive/">Browse the complete Archive</a> | <a href="https://github.com/tuxnull/OffWeb/issues/new">Add your App to the OffWeb!</a>
		</div>
		<?PHP
			
		?>
	</body>
</html>
