<?php
	$pageName = "Cyphernomicon";
	$headingName = "Cyphernomicon";

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
?>
<?php include('templates/header.php') ?>
		<ul id="articles">
		<?php 
			foreach ($fileNames as $file) {
			    echo '<li><a href="goodies/'.$file.'">'.$file.'<a></li>';
			}
		?>
		</ul>
		<article>
			<h3>15/04/2016 &mdash; Cyphernomicon</h3>
			<p>Click <a href="https://www.cypherpunks.to/faq/cyphernomicron/cyphernomicon.txt">here to read & download the cyphernomicon</a>.</p>
		</article>
<?php include('templates/footer.php') ?>