<?php

use AmblePhpGptFuncs\library\ChatGPT;
use AmblePhpGptFuncs\library\StreamType;

$chatgpt = new ChatGPT( getenv("OPENAI_API_KEY") );
$chatgpt->umessage( "Write a short poem" );
$chatgpt->stream( StreamType::Plain );

echo PHP_EOL;
