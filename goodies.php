<?php
	$pageName = "Goodies";
	$headingName = "Goodies";
	$latestArticleFileExt = 'html';
	$latestArticleFileName = '15-04-2016-Cyphernomicon';
	$latestArticle = $latestArticleFileName.'.'.$latestArticleFileExt;
?>
<?php include('templates/header.php') ?>
		<p>Welcome to temple.pe.hu! This webserver provides html pages about many cool and interesting topics. Feel free to browse at your leisure and remember... have <b>fun!</b></p>
		<?php include('goodies/'.$latestArticle) ?>
		<!-- To do:

			Add the rest of the articles as a links.
			This may possible require a file system read or 
			if permissions do not allow for that on the host 
			webserver maybe a manifest.

		-->
<?php include('templates/footer.php') ?>