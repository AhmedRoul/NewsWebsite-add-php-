<?php
	if (isset($_POST["submitBtn"]) && !empty($_POST) && $_SERVER["REQUEST_METHOD"] == "POST")
	{
		$prefix = "NEWSDATA/" . $_POST["NEWSType"] . "/";
		$fileName = uniqid("", true);
		$file = fopen($prefix . "ReverseOrder.txt", "a");
		fwrite($file, $prefix . $fileName . ".txt" . "\n");
		fclose($file);
		$file = fopen($prefix . "Titles.txt", "a");
		fwrite($file, $_POST["NEWSTitle"] . "\n");
		fclose($file);
		$ImageExt = explode(".", $_FILES["fileBtn"]["name"]);
		$ImageExt = strtolower(end($ImageExt));
		$file = fopen($prefix . "Images.txt", "a");
		fwrite($file, $prefix . $fileName . "." . $ImageExt . "\n");
		fclose($file);
		$file = fopen($prefix . "Summary.txt", "a");
		fwrite($file, $_POST["NEWSSUMMARY"] . "\n");
		fclose($file);
		$file = fopen($prefix . $fileName . ".txt", "w");
		fwrite($file, $_POST["NEWSText"]);
		fclose($file);
		move_uploaded_file($_FILES["fileBtn"]["tmp_name"], $prefix . $fileName . "." . $ImageExt);
		header("Location: AdminPage.php?success=true");
	}

?>