<!DOCTYPE html>
<html>
<head>
    <title>jQuery</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

	
</head>

<body>	

<?php
	
	if ($_POST["submit"]){
		
		$email = $_POST["email"];
		$name = $_POST["name"];
		$comment = $_POST["comment"];
		
		mail($email, "The comment", $comment);
		
		if(mail($email, "The comment", $comment)){
		
			echo "mail sent";
		}
	}
	
	
	
	
?>

	
	
	
	<form method="POST" id="commentForm">
		
		<input type="email" name="email" placeholder="Enter your email here">
		<input type="text" name="name" placeholder="Name">
		<input type="submit" name="submit" value="Submit the comment">
				
	</form>
	
	<textarea type="text" form="commentForm" placeholder="Comment" name="comment"></textarea>
	
	
</body>
</html>