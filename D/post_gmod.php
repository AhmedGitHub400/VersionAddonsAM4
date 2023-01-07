<?php
	$p = $_POST["p"];
	$a = $_POST["a"];

	$f = fopen("write.html", "w");

	fwrite($f, "This is a test. $p $a\n");

	fclose($f);
?>
