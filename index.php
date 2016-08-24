<?php

require 'vendor/autoload.php';

$string = 'PadMe';

echo \StringUtils\String::leftPad($string, 10, '.') . PHP_EOL;
echo \StringUtils\String::rightPad($string, 10, '.') . PHP_EOL;