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





	

	<div class="table" id="mytable">

		
		
		<div class="logs" >
			<table class="header">
				<tbody>
					<tr>
						<td><h2>Results</h2>
					<h3> Job name : </b> <?php echo $JobName; ?> </h3> 
					<a href="index.php" class="btn btn-primary btn-lg active mb-3 mt-2 text-uppercase" role="button" aria-pressed="true">Start new job</a>
					<p>Structural prediction results:</p> </td>
					<td><div class='my-legend'>
							<div class='legend-title'>COLOR LEGEND</div>
							<div class='legend-scale'>
								<ul class='legend-labels'>
									<li><span style='background:yellow;'></span>A V L I M C - Amino acizi cu proprietatea ca sunt hidrofobi</li>
									<li><span style='background:red;'></span>D E - Amino acizi incarcati cu sarcina negativa</li>
									<li><span style='background:blue;'></span>K R H - Amino acizi incarcati cu sarcina pozitiva</li>
									<li><span style='background:orange;'></span>F W Y - Hidrofobi aromatici</li>
									<li><span style='background:#a3cdf6;'></span>S T N Q - Hidrofili cu sarcina neutra</li>
									<li><span style='background:grey;'></span>P G X - Amino acizi atipici</li>
								</ul>
							</div>
						</div>
					</td>  
					
					
					</tr>
				</tbody>
			</table>
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
	<script>
		$('#mytable tr td').each(function(){
		var cellValue = $(this).html();	
		
		
			if (cellValue.match(/^[AVLIMC]{1,1}$/i)) {
				
			$(this).css('color','yellow');
			}
		
			if(cellValue.match(/^[DE]{1,1}$/i)){
				
			$(this).css('color','red');
			}
		
				if(cellValue.match(/^[KRH]{1,1}$/i)){
			$(this).css('color','blue');
			}
		
				if(cellValue.match(/^[FWY]{1,1}$/i)){
			$(this).css('color','orange');
			}
				if(cellValue.match(/^[STNQ]{1,1}$/i)){
			$(this).css('color','#a3cdf6');
			}
				if(cellValue.match(/^[PGX]{1,1}$/i)){
			$(this).css('color','grey');
			}
		
			});
	</script>
	</body>

</html>


