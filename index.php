<?php

use Codebird\Codebird;

require 'vendor/autoload.php';


Codebird::setConsumerKey(CONSUMER_KEY, CONSUMER_SECRET);

//Instance of codebird
$cb = Codebird::getInstance();

$cb->setReturnFormat(CODEBIRD_RETURNFORMAT_ARRAY);

//Set token
$cb->setToken(TOKEN_KEY, TOKEN_SECRET);

$mentions = $cb->statuses_mentionsTimeline();


//If no mentions in Tweet, then return

if (!isset($mentions[0])) {
	return;
}

	$tweets = [];
	foreach ($mentions AS $index=>$mention) {

		/* 
		If there are mentions, then store its ID
		We are using the main 'id' as a primary key or indicator, then something with
		an id must be a Twitter mention.
		*/
		if (isset($mention['id'])) { 
			$tweets[] = [
				'id' => $mention['id'],
				'user_screen_name' => $mention['user']['screen_name'],
				'text' => $mention['text']

			];
		}
	}

	
	pr($tweets, 1);
