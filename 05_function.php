<!-- build in function  -->
<?php
echo strlen("hello");

$a=10;
echo var_dump($a);
$b="hello world";
echo substr($b,3,7);

$result=strpos($b,'w');
echo($result);
exit();
// min max function
$r=max(20,9,99,789,999);
var_dump($r);