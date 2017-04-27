<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Weather</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	
		#firstPage{
			
			background-image:url("clouds.jpg");
			background-size:cover;
			width:100%;
			background-position:center;
		}
		.title{
			
			margin-top:120px;
			margin-bottom:50px;
			text-align: center;
		}
		.lead{
			
			margin:0 0 150px 0;
			text-align: center;
		}
		.button{
			
			text-align: center;
			margin-top:30px;
		}
		
	</style>
  </head>
  <body>
	
		<div class="container" id="firstPage">
		
		
			<div class="row">
			
				<div class="col-md-6 col-md-offset-3">
				
					<h1 class="title">Weather Predicter</h1>
					
					<p class="lead">Enter the city and you find the weather</p>
					
					<form method="POST">
					
						<div class="form-group">
						
							<input class="form-control" type="text" placeholder="Enter the city" name="city">
							
						
						</div>
						<div class="button">
						
							<input class="btn btn-success btn-lg" type="submit" name="submit">
						
						</div>
					
							 
					
					</form>
				
				</div>
			
			</div>
		
		
		</div>
		
	
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	<script>
		$("#firstPage").css("min-height",$(window).height());
	
	</script>
  </body>
</html>