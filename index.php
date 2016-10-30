<?php

use Codebird\Codebird;

require 'vendor/autoload.php';


Codebird::setConsumerKey(CONSUME_KEY, CONSUMER_SECRET);

//Instance of codebird
$cb = Codebird::getInstance();

$cb->setReturnFormat(CODEBIRD_RETURNFORMAT_ARRAY);

var_dump($cb);