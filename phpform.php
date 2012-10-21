<!doctype html>
<html>
<head>
	<title>PHP rocks</title>
</head>
<body>

<form method="post" action="submission_process.php">
	<label>Name</label>
	<input type ="text" name="name" />
	<br />
	<label>Email:</label>
	<input type="text" name="email" />
	<br />
	<label>Message</label>
	<input type="text" name="message" />
	<br />
	<input type="submit" name="submit" />
	<div class="error"></div>

</body>
</html>