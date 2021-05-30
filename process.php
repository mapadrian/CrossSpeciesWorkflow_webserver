<?php

session_start();

echo $_POST['submit'];


// Validate input
echo 'Validating input data ....'; echo "<br>";

// Validate job name
if (preg_match('/^[a-zA-Z0-9_]{3,20}$/', $_POST['jobname'])) {
	$isValidJobName = 1;
	$JobName = $_POST['jobname'];
	echo 'Job name is : '.$JobName ; echo "<br>";

} else {
	$isValidJobName = 0;
	echo 'Job name contains disallowed or too many characters !'; echo "<br>";
}



// Validate prot seq
if (preg_match('/^[[a-zA-Z0-9_>\r\n]{20,10000}$/', $_POST['protseq'])) {
	$isValidProtSeq = 1;

	$protseq =  $_POST['protseq'];
	echo 'Protein sequences are : <br>'.$protseq; echo "<br>";

} else {
	$isValidProtSeq = 0;
	echo 'Input data does not follow the FASTA specifications !'; echo "<br>";
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
