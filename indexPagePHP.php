<?php
	function Get(string $s)
	{
		$fileSummary = file_get_contents($s . "Summary.txt");
		$fileImages = file_get_contents($s . "Images.txt");
		$fileTitles = file_get_contents($s . "Titles.txt");
		$summary = explode("\n", $fileSummary);
		$img = explode("\n", $fileImages);
		$titles = explode("\n", $fileTitles);
		array_reverse($summary);
		array_reverse($img);
		array_reverse($titles);
		return array($img, $summary, $titles);
	}
	function ShowTable(string $s, $login)
	{
		$data = Get($s);
		$Category = explode("/", $s);
		$temp = "";
		if ($login == true)
		{
			$temp = "(login)";
		}
		else
		{
			$temp = "(logout)";
		}
		for ($row = 0; $row + 1 < count($data[0]); ++$row)
		{
			$link = "Template" . $temp . ".php?NEWS=" . $Category[1] . "&num=" . $row . "&login=" . $temp;
			echo "<tr><td><a href=\"" . $link . "\">";
			echo "<img src=\"" . $data[0][$row] . "\" height=\"130px\" width=\"150px\" style=\"float:right;\"/>";
			echo "<h2 class=\"linkText\">" . $data[2][$row] . "</h2></a>";
			echo $data[1][$row];
			echo "</td></tr>";
		}
	}
	function ShowDiv(string $s, $login)
	{
		$data = Get($s);
		$Category = explode("/", $s);
		$temp = "";
		if ($login == true)
		{
			$temp = "(login)";
		}
		else
		{
			$temp = "(logout)";
		}
		for ($row = 0; $row + 1 < count($data[0]); ++$row)
		{
			$link = "Template" . $temp . ".php?NEWS=" . $Category[1] . "&num=" . $row . "&login=" . $temp;
			echo "<div class=\"bigOneSec\">";
			echo "<a href=\"" . $link . "\" class=\"bigOneImg\">";
			echo "<img src=\"" . $data[0][$row] . "\" height=\"100px\" width=\"150px\" style=\"float:right;\"/>";
			echo $data[0][$row];
			echo "</a>";
			echo "<div>";
			echo "<h3><a href=\"" . $link . "\">" . $data[2][$row] . "</a></h3>";
			echo "<p>" . $data[1][$row] . "</p>";
			echo "</div>";
			echo "</div>";
		}
	}
 ?>