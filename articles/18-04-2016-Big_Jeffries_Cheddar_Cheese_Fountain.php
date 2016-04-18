<?php
	$pageName = "Big Jeffrie's Cheddar Cheese Fountain";
	$headingName = "Big Jeffrie's Cheddar Cheese Fountain";

	// read all articles

	$directory = $_SERVER['DOCUMENT_ROOT']."/articles/";
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
			    echo '<li><a href="/article/'.$file.'">'.$file.'</a></li>';
			}
		?>
		</ul>
		<article>
			<style>
				pre {
				 white-space: pre-wrap;       /* css-3 */
				 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
				 white-space: -pre-wrap;      /* Opera 4-6 */
				 white-space: -o-pre-wrap;    /* Opera 7 */
				 word-wrap: break-word;       /* Internet Explorer 5.5+ */
				}
			</style>
			<h3>18/04/2016 &mdash; Big Jeffrie's Cheddar Cheese Fountain</h3>
<pre>The town of McVities had been in recession for its 5th year now and its effects were now more pronounced than ever before.  Not just in its people but in its infrastructure. McVities had recently been a town famous for its goat milk and cheese but with the last generations of farmers dieing out the vigor of the town was fleeting.

Jeffrie was one of the 200 lads in the town without a job. He was 16 and dropped out of St. Worm's High School for troubled minds after his last fight with his teachers. He statistically was now more likely to do more poorly than his classmates who were due to graduate.

One day Jeffrie's parents had enough of his laying about and gave him an ultimatum; either he work at his uncles goat farm or he was kicked out!

With great reluctance Jeffrie said goodbye to his Fifa 2016 and was dropped off at the farm by his father.

"Don't fuck this up Jeffrie!" his father said to him.

"Whatever" jeffrie scoffed as he began walking up the gravely path with his rucksack.

The first months at the farm Jeffrie found it hard to fit in to the simple life of toil and subtle reward. But as he progressed he found that the goat's teat made a man out of him.

One day the local politician visited the farm with hopes to re-invigor the goat industry in McVities.

"Young man, is the owner of the farm at home?" the suited man enquired.

"I am the owner" Jeffrie replied. His uncle had passed from an anal canal infection.

"Sir I am local MP for Greater Brommel South Upon Stern Scumshire region, and I would like to re-invigor the goating industry" he said.

Jeffrie skeptical of authority, with curiousity invited the man into his humble wooden abode.

They sat at an oak table likely made long before McVities was a bustling hub of Goatish delicacies.

"You see McVities has changed. It is dieing! We need people like yourself to rejuvinate our humble town" persuaded the man.

Jeffrie put his hand to his chin and looked down in deep thought.

Weeks later a goat cheese fountain was constructed in the very center of McVities to inspire the residents to the power of goat industry.

The fountain was made from bronze and depicted 4 goats rearing up with their engorged teats streaming yellow liquified cheese. In the center was a stoic faceless man towering over the goats in a heroic pose.

Around the fountain the local council had set up stalls for its residents to try some of the cheese and a reporter from the local BBC station was there to report.

Jeffrie stood to the side looking at the mirthful residents and the cheese display. 
Perhaps was this the turning point to McVities downward spiral?

"Jeffrie!" a familiar voice rang out.

It was his father with a beaming smile on his face. He walked to his son and shook his hand.

"I am proud of you son!" he laughed.

Jeffrie looked blankly at his father but then a small smile escaped from his mouth.

Yes. Perhaps this was the turning point to the town of McVities.</pre>
		</article>
<?php include($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php') ?>