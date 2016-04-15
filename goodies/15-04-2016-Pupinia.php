<?php
	$pageName = "Pupinia";
	$headingName = "Pupinia";

	// read all articles

	$directory = $_SERVER['DOCUMENT_ROOT']."/goodies/";
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
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/templates/header.php') ?>
		<ul id="articles">
		<?php 
			foreach ($fileNames as $file) {
			    echo '<li><a href="/goodies/'.$file.'">'.$file.'</a></li>';
			}
		?>
		</ul>
		<article>
			<h3>15/04/2016 &mdash; Pupinia</h3>
			<iframe src="https://vine.co/v/iTP9TMnpU9u/embed/simple?audio=1" width="300" height="300" frameborder="0"></iframe><script src="https://platform.vine.co/static/scripts/embed.js"></script>
		</article>
<?php include($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php') ?>

