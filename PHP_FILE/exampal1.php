<!DOCTYPE html>
<html>
<head>
	<title>exampal</title>
</head>
<body>

<h1>
<?php
$my_str = "sampal string";
$temp = 25.3;


echo var_dump($my_str);
echo "<br>";
// echo var_dump($temp);

echo strlen ($my_str);
echo "<br>";

echo str_word_count($my_str);
echo "<br>";

echo strrev($my_str);
echo "<br>";

echo strpos($my_str,"ring");
echo "<br>";

echo str_replace("r", "k",$my_str);
echo "<br>";

echo substr($my_str, 9 v);

?>
</h1>

</body>
</html>
