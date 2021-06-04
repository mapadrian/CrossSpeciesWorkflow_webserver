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
					<a class="nav-link disabled" href="about.php"><i class="fas fa-info-circle"></i> About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="help.php"><i class="fas fa-question-circle"></i> Help</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="contact.php"><i class="fas fa-feather-alt"></i> Contact</a>
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
				
				<form action="index.php" method="post">
					<?php

					session_start();
					echo '<h3 class="text-uppercase">';
					echo $_POST['submit'];
					echo "</h3><br>";

					// Validate input
					echo '<h3 class="text-uppercase">Validating input data ....</h3><br>';
					echo '<h1 class="pb-5"> Errors :  </h1>';
					// Validate job name
					if (preg_match('/^[a-zA-Z0-9_]{3,20}$/', $_POST['jobname'])) {
						$isValidJobName = 1;
						$JobName = $_POST['jobname'];
						echo '<h3 class="text-uppercase">Job name is : '.$JobName ; echo "</h3><br>";

					} else {
						$isValidJobName = 0;
						echo '<h3 class="text-uppercase">Job name contains disallowed or too many characters ! </h3><br>';
					}



					// Validate prot seq
					if (preg_match('/^[[a-zA-Z0-9_>\r\n]{20,10000}$/', $_POST['protseq'])) {
						$isValidProtSeq = 1;

						$protseq =  $_POST['protseq'];
						echo '<h3 class="text-uppercase">Protein sequences are : <br>'.$protseq; echo "</h3><br>";

					} else {
						$isValidProtSeq = 0;
						echo '<h3 class="text-uppercase">Input data does not follow the FASTA specifications ! </h3><br>';
					}


					if ($isValidJobName && $isValidProtSeq) {

						// Generate input / output files

						// THIS WILL BE ON THE SERVER
						// FOR DEBBUGING and prior integration we will use already provided examples...

						// $randomNumber = rand(10000,99999); 
						// $newJobName = $JobName.'.'.$randomNumber;
						// $ProtFasta = 'userdata/input/'.$newJobName.'.fasta';
						// $OutputFolder = 'userdata/output/'.$newJobName;
						$OutputFolder = 'userdata/output/'.$JobName;
						
						// $cmd = 'echo '.$protseq.' > '.$ProtFasta.';';
						// echo $cmd;
						// system($cmd);

						

						//  Run Workflow async

						// THIS WILL BE ON THE SERVER
						// FOR DEBBUGING and prior integration we will use already provided examples...
						// $task = ' bash run_workflow.sh '.$ProtFasta.'.' -out '.$OutputFolder ;  
						// echo 'Running:'; echo "<br>";

						// echo $task; echo "<br>";
						
						//$_SESSION['JobName'] = $newJobName;
						
						$_SESSION['JobName'] = $JobName;
						$_SESSION['ProtSeq'] = $protseq;
						$_SESSION['OutputFolder'] = $OutputFolder ;

						session_write_close();

						// system($task );
						
						header('Location:results.php');
						exit();

					}


					?>
					<input type="submit" class="btn btn-primary text-uppercase" name = 'submit' value="Try again"> 
					</p>
				</form>
			</div>
		</div>




	<div class="footer">
	<br>
	</div>

	</body>

</html>
