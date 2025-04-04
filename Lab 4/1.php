<?php
$text = 'xox xalx yxex xxz xxx';
$regexp = '/x.x/u';
$matches = array();
preg_match_all($regexp, $text, $matches);
var_dump($matches);