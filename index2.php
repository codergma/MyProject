<!DOCTYPE html>
<html>
<head>
<title>首页</title>
<meta charset="utf-8">
</head>

<body>
		<form  method="post" action="/index2.php">
		<input  type="text" name="name"/>
		<button type="submit" >提交</button>
		</form>

<?php
echo $name = $_POST['name'];
echo "<br/>";
echo $name2 = addslashes($name);
echo "<br/>";
echo $name3 = mysql_escape_string($name);
echo "<br/>";
echo $name4 = htmlspecialchars($name);
echo "<br/>";
echo $name5 = strip_tags($name);

$db = new mysqli('localhost','root','mysql2015','test');
if($db->connect_errnu){
    exit('error');
}
$db->set_charset('utf8');
$query="SELECT * FROM first where username = '$name';delete from first where 1 ";
echo '<br/>';
//echo $query;
$result = $db->query($query);
//var_dump($result->num_rows);
if($result->num_rows){
    while($row=$result->fetch_assoc()){
        print_r($row);
        echo "<br/>";
    }
    $result->free();
}
?>
</body>
</html>
