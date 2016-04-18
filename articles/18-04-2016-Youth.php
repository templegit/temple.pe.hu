<?php
	$pageName = "Youth";
	$headingName = "Youth";

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
			    echo '<li><a href="/articles/'.$file.'">'.$file.'</a></li>';
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
			<h3>18/04/2016 &mdash; Youth</h3>
<pre>The man hastened his walk down the grey 

london street. Now panting and eager to find 

an open shop as a place of refuge, he 

continued his fatigued gait running his 

hands on the closed metal shutters of the 

kebab and curry shops.

"Oh please be open" he pants. "Somebody 

please help me" his voice turning into a 

panicky whine.

He glances over his shoulder and still sees 

the solitary figure walking at a hastened 

pace 30 metres behind him.

A pathetic whimper squeeks from the man at 

the sight.
"Please just leave me alone" he whimpers to 

himself. Tears now beginning to swell in his 

eyes.

The man darts into an alley and staggers 

deeper into it. His pants progressing more 

and more worse. The last time he ever did 

anything as exerting was his P.E. lessons at 

least forty years ago.

The man eyes probe the alley for an escape 

but to his folley he finds his passage 

blocked by a wall.

The man whimpers and quickly walks back 

towards the main road before a reluctance 

stops him in his tracks. "No.. no.. what do 

I do now" his face twisted in anguish.

His eyes dart like a maniac looking for 

desperate salvation. In a flight of thought 

his eyes transfix to the large olive green 

rubbish container filled with black bin 

bags. 

He runs towards it stumbling momentarily 

with a whimper and quickly kneels to the 

floor scraping his knees in the process. His 

formal office attire now stained brown by 

the condiment of urban filth on the floor, 

but this is the least of his worries as he 

inches deeper behind the bin. He contorts 

his rotund body sideways and sucks in his 

tummy in effort to move deeper like a worm 

escaping a magpie. The foul smelling plastic 

perverts his nose and the cold coarse brick 

wall scrapes painfully against back of his 

head but this is little when compared to the 

fear of his persuer. He curses to himself as 

the buttons of his previously clean white 

shirt snag and tear against the granularity 

of the bin's plastic. His face now red as 

cherry and his nose contorted painfully 

towards because of the tight squeeze. Now 

fully emersed between the back of the bin 

and the chip shop wall the man freezes in 

possition and his mind races with terrifying 

ideas.

His pants and whimpers exacerbate at the 

thought of being caught by the figure. "What 

if he sees me?" He thinks to himself. "This 

is ridiculous he is going to see me and he 

is going to get me!" his mind whizzes.
 He 

shuffles in panic attempting to escape from 

his hidey-hole but freezes instantly knowing 

he would not have enough time. "I should 

have ran!" he screams inside of his head. "I 

should have ran! He is going to find me and 

get me now!". By now the tears are streaming 

down his face and his heart feels like a 

hammer pounding mercilessly on his throat.


The foot steps of the persuer now invade the 

man's ears. He freezes like a cornered rat 

waiting with absolute concentration. His 

mind and body fighting at maximum capacity 

to seize the panting breaths and muscle 

tremors.

"I know you are here!" a disturbinging 

squeeky voice shouts. A shot of ice cold 

mercury drops from the man's throat into his 

stomach his eyes transfixed on the entry way 

to the alley. A life time passes within a 

few seconds and the figure steps from around 

the corner and walks cooly into the alley. 

The figure is a gangly man of roughly 20 

years of age with black hair and a whispy 

immature beard. His skin is pale but his 

eyes are swollen red. He is wearing a dirty 

dark grey tracksuit and hoody with black 

sport shoes. His eyes move slowly around the 

alley examining the bins and thrown out 

delivery boxes until they fixate on the 

green bin bag container. His head scans 

downwards until his eyes lock with the mans. 

A small smile widens to a manic green. With 

a nasally and squeeky voice he says "I have 

found you! I can see you there!" pointing 

directly at the man. The man squawks in 

terror "NO!". The gangly persuer laughs as 

he moves closer to the bin and with two 

hefty pulls manages to move the bin 

container plopping the portly face down in 

the floor.

"Please no! Don't hurt me" the man panics. 

The gangly man laughs again. "I have got 

you!" he laughs. "You are a mess!" the 

persuer says as he reveals a menacing black 

taser from his hoody pocket.</pre>
		</article>
<?php include($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php') ?>