<?php
if($_POST["message"]) {
		mail("jurtly@icloud.com","Form to email message", $_POST["message"], "From: an@email.address");
}
?>



<html>
<head>
  <style>
  body {
        background: black;
        margin: 0 auto;
        text-align: center;
        width: 100%;
        height: 100%;
        padding: 0;
        color: white;
  }
  </style>
</head>
<body>
<h1> Just a test here </h1>
<p> Just testing all around.</p>
<h1> Just a test </h1>
<form method="post" action="contact.php">
<textarea name="message"></textarea>
<input type="submit"/>
</body>
</html>
