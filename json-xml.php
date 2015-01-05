<?php
// 	$concerts = array(
// 									array("title" => "The Magic Flute", 		  "time" => 1329636600),
// 									array("title" => "Vivaldi Four Seasons",  "time" => 1329291000),
// 									array("title" => "Mozart's Requiem",      "time" => 1330196400)
// );

// 	$why = json_encode($concerts);
// 	echo $why;

// 	$changer = json_decode($why, true);
// 	echo '<pre>';
// 	print_r($changer);
// 	echo '<pre>';


	$simplexml = new SimpleXMLElement(
								'<?xml version="1.0"?><concerts />');
									$concert1 = $simplexml->addChild('concert');
									$concert1->addChild("title", "The Magic Flute");
									$concert1->addChild("time", 1329636600);

									$concert2 = $simplexml->addChild('concert');
									$concert2->addChild("title", "Vivaldi Four Seasons");
									$concert2->addChild("time", 1329291000);

									$concert3 = $simplexml->addChild('concert');
									$concert3->addChild("title", "Mozart's Requiem");
									$concert3->addChild("time", 1330196400);
	
		$xml = $simplexml->asXML();
		$changerxml = simplexml_load_string($xml);
		// show a table of the concerts
			echo "<table>\n";
			foreach($changerxml as $concert) {
				echo "<tr>\n";
				echo "<td>" . $concert->title . "</td>\n";
				echo "<td>" . date('g:i, jS M',(string)$concert->time) ."</td>\n";
				echo "</tr>\n";
			}
			echo "</table>\n";
		// output the second concert title
echo "Featured Concert: " . $changerxml->concert[1]->title;

