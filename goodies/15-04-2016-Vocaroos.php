<?php
	$pageName = "Vocaroos";
	$headingName = "Vocaroos";

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
			<h3>15/04/2016 &mdash; Vocaroos</h3>
			<p>Click <a href="https://mega.nz/#!GpQ1QLqC!xBGvYBHrgGB6MM4i1MS_8ngkMzSa4HYaUCuktwB7v6Q">here to download our collection of funny Vocaroos!</a>.</p>
		</article>
<?php include($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php') ?>