<?php

	/*$article1 =array(
		"title" => "Que diriez-vous d’explorer le centre de la Terre depuis votre navigateur ?",
		"link" => "http://www.presse-citron.net/que-diriez-vous-dexplorer-le-centre-de-la-terre-depuis-votre-navigateur/",
		"comments" => "http://www.presse-citron.net/que-diriez-vous-dexplorer-le-centre-de-la-terre-depuis-votre-navigateur/#comments",
		"pubDate" => "Thu, 19 Mar 2015 08:41:20 +0000",
		"guid" => "http://www.presse-citron.net/?p=129120",
		"description" => "La BBC vous invite à prendre votre casque et votre marteau piqueur, pour vous lancer dans une belle épopée virtuelle et stylisée.",
		"wfw:commentRss" =>"http://www.presse-citron.net/que-diriez-vous-dexplorer-le-centre-de-la-terre-depuis-votre-navigateur/feed/",
	);

	$article2 = array();
	$article2['title'] = "Microsoft annonce la mort d’Internet Explorer";
	$article2['link'] = "http://www.presse-citron.net/microsoft-annonce-la-mort-dinternet-explorer-son-celebre-navigateur/";
	$article2['comments'] = "http://www.presse-citron.net/microsoft-annonce-la-mort-dinternet-explorer-son-celebre-navigateur/#comments";
	$article2['pubDate'] = "Wed, 18 Mar 2015 22:30:30 +0000";
	$article2['guid'] = "http://www.presse-citron.net/?p=129079";
	$article2['description'] = "Internet Explorer, le navigateur qui fut roi pendant des années devrait disparaître à petit feu et être remplacé par un nouveau navigateur.";
	$article2['wdw:commentRss'] = "http://www.presse-citron.net/microsoft-annonce-la-mort-dinternet-explorer-son-celebre-navigateur/feed/";*/

	function convertArticleToList($article){
		$list = '<ul>';
		foreach ($article as $key => $value) {
			$list .= '<li>'.$key.' : '.$value.'</li>';
		}
		return $list .= '</ul>';
	}

	function convertArticleToTable($article, $wantedProperties){
		$table = '<table>';
		foreach ($article as $key => $value) {
			if(in_array($key, $wantedProperties)){
				$table .= '<tr>
							<td>'.$key.'</td>
							<td>'.$value.'</td>
							</tr>'
				;
			}
		}
		return $table .= '</table>';
	}

	$wantedProperties = array('title', 'description', 'pubDate');

	foreach (simplexml_load_file('news.rss')->channel->item as $key => $value) {
		echo convertArticleToTable($value, $wantedProperties);
		echo '<hr>';
	}

		
?>