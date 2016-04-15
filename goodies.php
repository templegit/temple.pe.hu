<?php
	$pageName = "Goodies";
	$headingName = "Goodies";

	// read all articles

	$directory = "goodies/";
	$fileNames = array();

	// Open a directory, and read its contents
	if (is_dir($directory)){
		if ($dh = opendir($directory)){
		    while (($file = readdir($dh)) !== false){
		    	$parts = pathinfo($file);
		    	if ($parts['extension'] == 'php') {
		      		array_push($fileNames, $file);
		    	}
		    }
		    closedir($dh);
	  	}
	}

	// latest file is

	$latestArticleFileName = '15-04-2016-The_Paranoid_Security_Guide';
	$latestArticle = $latestArticleFileName.'.php';
?>
<?php include('templates/header.php') ?>
		<ul id="articles">
		<?php 
			foreach ($fileNames as $file) {
			    echo '<li><a href="goodies/'.$file.'">'.$file.'<a></li>';
			}
		?>
		</ul>
		<?php include('goodies/'.$latestArticle) ?>
<?php include('templates/footer.php') ?>