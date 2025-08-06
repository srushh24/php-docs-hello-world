<?php
$string = "hello WORLD";
$lowercase = strtolower($string);
$uppercase = strtoupper($string);
$ucfirst = ucfirst (strtolower ($string));
$lcfirst = lcfirst($string);
$ucwords = ucwords(strtolower($string));
echo"Original string: $string\n";
echo"strtolower(): $lowercase\n";
echo"strtoupper(): $uppercase\n";
echo"ucfirst(): $ucfirst\n";
echo"lcfirst(): $lcfirst\n";
echo"ucwords(): $ucwords\n";
?>


