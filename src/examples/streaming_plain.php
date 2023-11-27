<?php

use Amble\PhpGptFuncs\library\ChatGPT;
use Amble\PhpGptFuncs\library\StreamType;

$chatgpt = new ChatGPT( getenv("OPENAI_API_KEY") );
$chatgpt->umessage( "Write a short poem" );
$chatgpt->stream( StreamType::Plain );

echo PHP_EOL;
