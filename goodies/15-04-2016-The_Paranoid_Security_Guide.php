<?php
	$pageName = "The Paranoid Security Guide";
	$headingName = "The Paranoid Security Guide";

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
			    echo '<li><a href="/goodies/'.$file.'">'.$file.'<a></li>';
			}
		?>
		</ul>
		<article>
			<h3>15/04/2016 &mdash; The Paranoid Security Guide</h3>
			<p>Click <a href="http://pastebin.com/ZMbP2qKv">here to read & download the The Paranoid Security Guide</a>.</p>
		</article>
<?php include($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php') ?>