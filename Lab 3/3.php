<?php
//Step 1
$numLanguages = 4;
$months = 11;

//Step 2
$days = $months * 16;

//Step 3
$daysPerLanguage = $days / $numLanguages;

//Step 4
echo "Мэг в среднем потртила " . $daysPerLanguage . " дней на каждый язык";