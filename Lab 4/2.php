<?php
$text = '105,200,33,90,0';
$regexp = '/[0-9]{1,}/u';
$result = preg_replace_callback($regexp, function($a){return ((int)$a[0])-100;}, $text);
echo $result;