
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Cross Species Workflow Web Server </title>
		<link href="styles/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>


	<body>

		<div class="banner">
			<img src="img/logo.png"></img>
		</div>


		<div class="topbar">
		
		<div class="menu">
		
			<div class="main-menu">
				<a href="index.php" class="main-menu"><i class="fas fa-home"></i>Home</a>
			</div>

			<div class="main-menu">
				<a href="about.php" class="main-menu"><i class="fas fa-info-circle"></i>About</a>
			</div>

			<div class="main-menu">
				<a href="help.php" class="main-menu"><i class="fas fa-question-circle"></i>Help</a>
			</div>

			<div class="main-menu">
				<a href="contact.php" class="main-menu"><i class="fas fa-feather-alt"></i>Contact</a>
			</div>

		</div>
		</div>



		<div class="content">
			
			<div>

			<h2> Run predictions for your protein sequences :  </h2>

	
			<form action="process.php" method="post">
			
			<p>
			<b>Job name</b> : <br>
			<input type="jobname" name="jobname" placeholder="" id="jobname"> <br>

			*between 3-20 alphanumerical characters and '_' (without spaces). 
			<br>			

			<br>
			<b>Protein sequences</b> : <br>
			<textarea wrap="hard" type="protseq" name="protseq" 

			*FASTA format. 

			placeholder=""

 			id="protseq"></textarea> <br>

			<br>
			<br>

			
			<input type="submit" name = 'submit' value="Run"> 
			
			</p>
			</form>


			<br>
			<br> 
			<br>
			<br>


			</div>
		</div>




	<div class="footer">
	<br>
	</div>

	</body>

</html>


