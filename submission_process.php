<?php
	require('functions.php');

	if (!isset($_POST['submit']) || $_POST['name']== "" || $_POST['email'] =="" || $_POST['message'] =="") {
		redirect('phpform.php');
	}
	if (validateemail($_POST['email'])===false)
	//if(strpos($_POST['email'], '@')===false)
		redirect('phpform.php');
?>

<html>
<head>
	<title></title>
</head>
<body>

<?php
	if (isset($_POST['submit'])) {
		
		$nm = $_POST['name']; // query string parameter
		$em = $_POST['email'];
		$msg= $_POST['message']; 
		echo "<div><p>Thank you, $nm, for logging in. Here is your other information:</p></div><br /><div><p>Email:    $em</p><br /><p>Message:    $msg</p></div>";		
	} else {
		header('Location: phpform.php'); //like a redirect
	}
?>

</body>
</html>