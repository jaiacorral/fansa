<?php
	return function($site, $pages, $page){

		$home_data = [];
		$banners_slot1 = [];
		$banners_slot2 = [];
		$banners_slot3 = [];
		$banners_slot4 = [];
		$banners_slot5 = [];
		$articles_slot1 = [];
		$articles_slot2 = [];
		$articles_slot3 = [];
		$articles_slot4 = [];
		$articles_slot5 = [];
		$articles_slot6 = [];
		$articles_slot7 = [];
		$articles_slot8 = [];
		$articles_slot9 = [];
		$articles_slot10 = [];
		};

		foreach( $site->page('home')->banners()->yaml() as $i => $a){
			$bg = str_replace( "sftp://sshacs@garena.upload.akamai.com/116476/cdn.garenanow.com", "https://cdngarenanow-a.akamaihd.net", $a['image'] );
			$title = $a['title'];
			$link = $a['link'];
			$slot = $a['slot'];
			$temp = array($title, $link);
			switch( $slot ){
				case 1: {
					array_push( $banners_slot1, $temp );
					break;
				}
				case 2: {
					array_push( $banners_slot2, $temp );
					break;
				}
				case 3: {
					array_push( $banners_slot3, $temp );
					break;
				}
				case 4: {
					array_push( $banners_slot4, $temp );
					break;
				}
				case 5: {
					array_push( $banners_slot5, $temp );
					break;
				}
			}
		}

		$site->page()

		foreach( $site->page('home')->articles()->yaml() as $i => $a){
			$bg = str_replace( "sftp://sshacs@garena.upload.akamai.com/116476/cdn.garenanow.com", "https://cdngarenanow-a.akamaihd.net", $a['image'] );
			$title = $a['title'];
			$link = $a['link'];
			$slot = $a['slot'];
			$temp = array($link, $title);
			switch( $slot ){
				case 1: {
					array_push( $articles_slot1, $temp );
					break;
				}
				case 2: {
					array_push( $articles_slot2, $temp );
					break;
				}
				case 3: {
					array_push( $articles_slot3, $temp );
					break;
				}
				case 4: {
					array_push( $articles_slot4, $temp );
					break;
				}
				case 5: {
					array_push( $articles_slot5, $temp );
					break;
				}
				case 6: {
					array_push( $articles_slot6, $temp );
					break;
				}
				case 7: {
					array_push( $articles_slot7, $temp );
					break;
				}
				case 8: {
					array_push( $articles_slot8, $temp );
					break;
				}
				case 9: {
					array_push( $articles_slot9, $temp );
					break;
				}
				case 10: {
					array_push( $articles_slot10, $temp );
					break;
				}
			}
		}

	  return [
	  	'banners_slot1'	 => $banners_slot1,
	  	'banners_slot2'	 => $banners_slot2,
	  	'banners_slot3'	 => $banners_slot3,
		'banners_slot4'	 => $banners_slot4,
		'banners_slot5'	 => $banners_slot5,
	  	'articles_slot1' => $articles_slot1,
		'articles_slot2' => $articles_slot2,
		'articles_slot3' => $articles_slot3,
		'articles_slot4' => $articles_slot4,
		'articles_slot5' => $articles_slot5,
		'articles_slot6' => $articles_slot6,
		'articles_slot7' => $articles_slot7,
		'articles_slot8' => $articles_slot8,
		'articles_slot9' => $articles_slot9,
		'articles_slot10' => $articles_slot10,
		
	  ];
?>