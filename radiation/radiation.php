<!DOCTYPE html>
<html lang="en-GB">
<head>
	<?php include('../templates/head.php'); ?>
</head>
<body>
	<?php include('../templates/body.php'); ?>
	<h1>Radiation Monitor</h1>
	<p>About: 'gnuplot.png' is generated every 10 seconds. You might need to reload the page if it does not load.</p>
	<p><a href="gnuplot.png">Download</a></p>
	<img src="gnuplot.png" alt="gnuplot data" width="960px" height="540px">
	<?php
$filename = 'gnuplot.png';
if (file_exists($filename)) {
    echo "<p>`$filename` was last modified: " . date ("F d Y H:i:s.", filemtime($filename)) . "</p>";
}
	?>
	<p><a href="log.txt">Raw Data</a>
	<?php
$file = 'log.txt';
clearstatcache();
$filesize = filesize($file)/1000;
 
echo "$filesize KB</p>";
	?>
	<p><a href="src.tar.xz">Source Code</a></p>
</body>
</html>
