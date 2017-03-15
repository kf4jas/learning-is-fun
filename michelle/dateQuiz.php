<?php
		$toReturn = "";

		// Calculate partial score
		$partScore = $_POST['education'] + $_POST['firstDate'] + $_POST['romance'] + $_POST['doors'];

    //Age Score
    //echo "Her age:".$_POST["herAge"]."<br>";
    $ageDiff =$_POST['herAge']-$_POST['hisAge'];
    //echo $ageDiff.PHP_EOL;
    if ($ageDiff>0) {
    	$ageScore=5;
    } elseif(($ageDiff<=0)&& ($ageDiff>-6)) {
      $ageScore=10;
    } elseif ($ageDiff<=6) {
      $ageScore=2;
    }
    //echo $ageScore.PHP.EOL;
    //Calculate score
    $score=$ageScore+$partScore;
    //Head Multipler abd $hscore
    $headMult=$_POST['head'];
    if ($headMult==10) {
      $hScore=$score * $headMult;
    } elseif ($headMult==.5) {
      $hScore=$score * $headMult;
    }

    //echo $hScore;

    //Programmer effect
    $programSkill=$_POST[program];
    $totalScore = $hScore * $programSkill;

   //Print out Total Score
   $toReturn .= "Your dude scored ";
   $toReturn .= $totalScore.PHP_EOL;
   //Describe Scores
   if ($totalScore >999) {
		 $toReturn .= "He is worth dating!";
	 }
   if (($totalScore>750)&&($totalScore<1000)) {
		 $toReturn .= "He currently does not have a date worthy score, but may be a fix-it-upper";
	 }
   if($totalScore<751) {
		 $toReturn .= "Sorry bub, you got a looser!";
	 }

   $toReturn .= " (Scores of 1,000 and higher are considered datable)";

	 echo $toReturn;
?>
