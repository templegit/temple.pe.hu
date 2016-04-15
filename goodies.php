<?php
	$pageName = "Goodies";
	$headingName = "Goodies";

	// read all articles

	$directory = "goodies/";
	$fileNames = array();

	// Open a directory, and read its contents
	if (is_dir($dir)){
		if ($dh = opendir($dir)){
		    while (($file = readdir($dh)) !== false){
		      	array_push($file);
		    }
		    closedir($dh);
	  	}
	}

	// latest file is

	$latestArticleFileExt = 'html';
	$latestArticleFileName = '15-04-2016-Cyphernomicon';
	$latestArticle = $latestArticleFileName.'.'.$latestArticleFileExt;
?>
<?php include('templates/header.php') ?>
		<?php include('goodies/'.$latestArticle) ?>
		<!-- To do:

			Add the rest of the articles as a links.
			This may possible require a file system read or 
			if permissions do not allow for that on the host 
			webserver maybe a manifest.

		-->
		<?php 
		foreach ($fileNames as $file) {
		    echo "<br>".$file;
		}
		?>
<?php include('templates/footer.php') ?>