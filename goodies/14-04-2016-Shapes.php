<?php
	$pageName = "Shapes";
	$headingName = "Shapes";

	// read all articles

	$directory = "./";
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
<?php include('../header.php') ?>
		<ul id="articles">
		<?php 
			foreach ($fileNames as $file) {
			    echo '<li><a href="goodies/'.$file.'">'.$file.'<a></li>';
			}
		?>
		</ul>
		<article>
			<h3>13/04/2016 &mdash; Cool shapes</h3>
			<p>Please enjoy this fine collection of shapes. The shapes have been handmade in Microsoft Paint. Each shape roughly took a few seconds to create. The shapes are only available in the black colour however you are free to save the shapes and recolour them as you wish.</p>
			<img src="goodies/shapes/1.bmp">
			<img src="goodies/shapes/2.bmp">
			<img src="goodies/shapes/3.bmp">
			<img src="goodies/shapes/4.bmp">
			<img src="goodies/shapes/5.bmp">
			<img src="goodies/shapes/6.bmp">
			<img src="goodies/shapes/7.bmp">
			<img src="goodies/shapes/8.bmp">
			<img src="goodies/shapes/9.bmp">
			<img src="goodies/shapes/10.bmp">
		</article>
<?php include('../footer.php') ?>