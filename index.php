
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Cross Species Workflow Web Server </title>
		<link href="styles/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>


	<body>

	<div class="topbar">
		<nav class="navbar navbar-expand-sm bg-primary navbar-dark fixed-top">
			
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link active" href="index.php"><i class="fas fa-home"></i> Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.php"><i class="fas fa-info-circle"></i> About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="help.php"><i class="fas fa-question-circle"></i> Help</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact.php"><i class="fas fa-feather-alt"></i> Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="result.php"><i class="fas fa-dna"></i> Result</a>
				</li>
			</ul>
		</nav>
	</div>


		
		<div  class="container">
			
			<div class="content text-center">
			<div class="logo">
				<img src="../images/dnaushpii.png" alt="logo">
			</div>
				<h1 class="pb-5"> Run predictions for your protein sequences :  </h1>
				<form action="process.php" method="post">
					<div class="form-group">
						<label for="jobname"><h3 class="text-uppercase">Job name:</h3></label>
						<input type="jobname" class="form-control" placeholder="*Between 3-20 alphanumerical characters and '_' (without spaces)." id="jobname" name="jobname">
					</div>
					<div class="form-group">
						<label for="protseq"><h3 class="text-uppercase">Protein sequences:</h3></label>
						<textarea class="form-control" rows="10" id="protseq" type="protseq" name="protseq" wrap="hard" placeholder="*FASTA format"></textarea>
					</div> 
				<input type="submit" class="btn btn-primary text-uppercase" name = 'submit' value="Run Sequences"> 
				</p>
				</form>
			</div>
		</div>




	<div class="footer">
	<br>
	</div>

	</body>

</html>


