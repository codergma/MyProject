<?php
header('content-type:text/html;charset=utf-8;');
function &test()
{
	static $b ='b';
	$b .='a';
	return $b;
}
$x =test();
$x = 'x';
echo $x;
