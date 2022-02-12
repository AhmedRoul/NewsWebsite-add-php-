<!doctype html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="AdminPageStyleSheet.css">
		<link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Almarai:wght@800&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Sonsie+One&display=swap" rel="stylesheet">
	</head>
	
	<header>
		<h2>Administrator</h2>
		<nav>
			<ul>
				<li>
					<input type="button" value="Home" class="lgout" onclick="location.href='home(login).php'"/>
				</li>
			</ul>
		</nav>
	</header>
	
	<body class="bdybackground">
		<form method="POST" enctype="multipart/form-data">
			<p class="text1">Add News</p>
			<br>
			<label for="URL" class="colorlabel">News Summary:</label>
			<br>
			<input type="text" id="URL" name="NEWSSUMMARY" id="NEWSLink" class="txtbox" placeholder="Enter the News Summary.." autocomplete="off" required/>
			<br>
			<br>
			
			<label for="Title" class="colorlabel">News Title:</label>
			<br>
			<input type="text" name="NEWSTitle" class="txtbox" placeholder="Enter the News Title.." autocomplete="off" required/>
			<br>
			
			<br>
			<label for="Details" class="colorlabel" >News Details:</label>
			<br> 
			<textarea rows="5" cols="60" name="NEWSText" id="NEWSText" required></textarea>
			<br>
			<br>
			<label for="Add Img" class="addlabel">Add Image</label>
			<label for="News Type" class="selectclas">Select News Type</label>
			<br>
			<input type="file" name="fileBtn" class="addfile" id="fileBtn" required/>
			<select name="NEWSType" required>
				<option value="">Choose type</option>
				<option value="BreakingNews">Breaking NEWS</option>
				<option value="Science">Science</option>
				<option value="Money">Money</option>
				<option value="Technology">Technology</option>
				<option value="Sports">Sports</option>
				<option value="Reports">Reports</option>
				<option value="COVID-19">COVID-19</option>
			</select>
			<br>
			<input type="submit" value="Save" name="submitBtn" class="in"/>
		</form>
	</body>
	<?php require 'AdminPagePHP.php'?>
<html>