<?php
	
	if ($_POST["submit"]){
		
		
		
		if (!$_POST["name"]){
			$error = "<br>You didn't submit the name.";
		}
		if (!$_POST["email"]){
			$error .= "<br>You didn't submit the email.";
		}
		if (!$_POST["comment"]){
			$error .= "<br>You didn't submit the the comment.";
		}
		if ($_POST["email"] &&(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false)) {
			$error .= "<br>The email is not in a correct form.";
		} 
		if ($error){
			$result = '<div class="alert alert-danger">There are some error(s) :'.$error.'</div>';
		}
		else{
			$result = "<div class='alert alert-success'>Thank you! submited succefully. </div>";
		}
		
	}




?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Contact Form</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
		.contactForm{
			
			border:1px solid grey;
			border-radius:10px;
			margin-top: 30px;
			padding-bottom:15px;
		}
		textarea{
			
			height:100px !important;
		}
	
	</style>
  </head>
  <body>
	
	<div class="container">
	
		<div class="row">
		
			<div class="col-md-6 col-md-offsite-3 contactForm">
			
				<h1>Contact Form</h1>
				
				<?php echo $result; ?>
				<p class="lead">Get in touch with me!</P>
				
				
				<form method="POST">
				
					<div class="form-group">
						
						<label for="name">Name:</label>
						<input type="name" name="name" class="form-control" value="<?php echo $_POST['name']; ?>">
					
					</div>
					
					<div class="form-group">
						
						<label for="name">Email:</label>
						<input type="text" name="email" class="form-control" value="<?php echo $_POST['email']; ?>">
					
					</div>
					
					<div class="form-group">
						
						<label for="comment">Comment:</label>
						<textarea name="comment" class="form-control"><?php echo $_POST['comment']; ?></textarea>
					
					</div>
					
					<input type="submit" class="btn btn-success btn-lg" name="submit">
				
				
				</form>
			
			</div>
			
		
		</div>
		
	
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	<script>
		
	
	</script>
  </body>
</html>