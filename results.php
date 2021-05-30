<?php
session_start();

$JobName = $_SESSION['JobName'];
$ProtSeq = $_SESSION['ProtSeq'];
$OutputFolder = $_SESSION['OutputFolder'] ;

?>



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
					<a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a>
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
					<a class="nav-link active" href="result.php"><i class="fas fa-dna"></i> Result</a>
				</li>
			</ul>
		</nav>
	</div>







	<div class="table">

		
		
		<div class="logs" >
			<h2>Results</h2>
			<h3> Job name : </b> <?php echo $JobName; ?> </h3> 
			<a href="index.php" class="btn btn-primary btn-lg active mb-3 mt-2 text-uppercase" role="button" aria-pressed="true">Start new job</a>
			<p>Structural prediction results:</p>   
			

			<table class="table-sm table-dark table-striped">
				<tbody id="tby1">
					<?php

					$outputFILE = fopen($OutputFolder . '/struct_results.tsv',"r") or die("Error");   
																										
					while(($row = fgets($outputFILE)) != false) {     
																													
							echo "<tr>";     
							$col = explode("\t",$row);
							$i = 0;

							foreach($col as $data) {
								echo "<td>". trim($data)."</td>";
								$i++;
							}                     
							echo "</tr>";
					}

					?>
				</tbody>
			</table>



		</div>
	</div>
	
	</body>

</html>


