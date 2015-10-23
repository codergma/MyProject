<!DOCTYPE html>
<html>
<head>
</head>
<body>
</body>
</html>

<?php
echo "abc";
ob_flush();
flush();
$name = 'userid';
$value = md5(mt_rand());
$expire = time() + 6;
$path = "/";
$domain = "www.smaryun.com";

$result = setcookie($name,$value,$expire,$path);
echo $result;
var_dump($result);
echo $_COOKIE['userid'];
die;
