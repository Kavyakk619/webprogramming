<?php
$names=array(
"s1"=>"Theertha",
"s2"=>"Kavya",
"s3"=>"fadiya",
"s4"=>"Adithya"
);
echo"<center>";
echo"<h2>Original Student List</h2>";
echo"<pre>";
print_r($names);
echo"</pre>";
asort($names);
echo"<h2>Acending Order</h2><br>";
echo"<pre>";
print_r($names);
echo"</pre>";
arsort($names);
echo"<h2>Decending order</h2><br>";
echo"<pre>";
print_r($names);
echo"</pre>";
echo"</center>";
?>


