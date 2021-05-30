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

	<h2>Results</h2>

	<div>


	<h3> Job name : </b> <?php echo $JobName; ?> </h3> 
		
		<div id="logs" >
		Structural prediction results:  <br><br>

		<table>

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

		</table>



</div>
</div>
</div>
</div>


	<div class="footer">
	<br>
	</div>

	</body>

</html>


