<?php
	echo "<a href=\"Home" . $_GET["login"] . ".php\" target=\"_blank\">Home</a><img src=\"Similar items/arrow.png\"/>";
	echo "<a href=\"" . $_GET["NEWS"] . $_GET["login"] . ".php\">" . $_GET["NEWS"] . "</a><br>";
	$prefix = "NEWSDATA/";
	$file = file_get_contents($prefix . $_GET["NEWS"] . "/" . "Titles.txt");
	$data = explode("\n", $file);
	$data = array_reverse($data);
	echo "<h1 style=\"color:red; font-weight: bold;\">" . $data[$_GET["num"]] . "</h1>";
	$file = file_get_contents($prefix . $_GET["NEWS"] . "/" . "Images.txt");
	$data = explode("\n", $file);
	$data = array_reverse($data);
	echo "<img src=\"" . $data[$_GET["num"] + 1] . "\" width=\"800px\" height=\"400px\"/>";
	$file = file_get_contents($prefix . $_GET["NEWS"] . "/" . "ReverseOrder.txt");
	$data = explode("\n", $file);
	$data = array_reverse($data);
	echo "<br><br><div class=\"Text\" style=\"padding-left:50px ;padding-right:50px;\">";
	echo "<p>" . file_get_contents($data[$_GET["num"] + 1]) . "</p>";
	echo "</div>";
?>