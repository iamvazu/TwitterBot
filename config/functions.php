<?php

  /**
   * Output an array in a clean format
   *
   * @param array $data, an array of mixed data
   * @param bool $isExit, whether to exit the script or not
   *
   * @return array output of the data
   */

   function pr($data, $isExit = false)
   {
   		echo '<pre>'; print_r($data);echo '</pre>';
   		if ($isExit) { die(); }
   }


  /**
   * Get the array of emojis based on its sentimnet category
   *
   * @param string $type, type of emoji (positive, negative, neutral
   *
   * @return array 
   */

   function getEmojis($type = 'positive')
   {
   		$positiveEmojis = [
	    '&#x1F601;',
	    '&#x1F602;',
	    '&#x1F603;',
	    '&#x1F604;',
	    '&#x1F605;',
	    '&#x1F606;',
	    '&#x1F609;',
	    '&#x1F60A;',
	    '&#x1F60C;',
		];

		$neutralEmojis = [
		    '&#x1F610;',
		    '&#x1F611;',
		    '&#x1F636;',
		    '&#x1F644;',
		];

		$negativeEmojis = [
		    '&#x1F612;',
		    '&#x1F613;',
		    '&#x1F614;',
		    '&#x1F61E;',
		    '&#x1F622;',
		    '&#x1F623;',
		    '&#x1F625;',
		    '&#x1F629;',
		    '&#x1F62A;',
		];

		if ($type == 'positive') return $positiveEmojis;
		elseif ($type == 'negative') return $negativeEmojis;
		else return $neutralEmojis;
   }

