<?php
if($_POST["message"]) {
		mail("jurtly@icloud.com","Form to email message", $_POST["message"], "From: an@email.address");
}
?>

<!Doctype HTML>
<html>
<head>
</head>
<body>
<h1> Just a test </h1>
<form method="post" action="contact.php">
<textarea name="message"></textarea>
<input type="submit"/>
</form>
</body>
</html>
