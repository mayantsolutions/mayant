
<?php
$filename='/home/infaum-01-02/Documents/Ima/Infaum/COC/Questions/q.txt';

$handle = fopen($filename, 'r') or die('Un able to open file');


$count = 0;
$line1 = fgets($file);
while (!feof($handle)){
	$count++;
	
	$line2 = fgets($file);
	$line3 = fgets($file);
	$line4 = fgets($file);
	$line5 = fgets($file);
	
}

/* while(! feof($file))
  {
  $count++;

  if ($count=="1") {
  $line1 = fgets($file);
  
  
  }

  if ($count=="2") {
  $line2 = fgets($file);
  echo  $line2;
  }

  if ($count=="3") {
  $line3 = fgets($file);
  }
  
//everything else?

} */
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<form name="question" method="post" >
<label ><?php echo $line1;?></label></br>
<input type="radio" name="answer" value="a"><?php echo $line2; ?>
<input type="radio" name="answer" value="b"><?php echo $line3; ?>
<input type="radio" name="answer" value="c"><?php echo $line4; ?>
<input type="radio" name="answer" value="d"><?php echo $line5; ?></br>
<input type="submit" name="submit" value="Ok">&nbsp;&nbsp;
<input type="submit" name="next" value="Next">
</form>

</body>

</html>


