<html>
<head>
<title>Indian Cricket Players</title>
<style>
table{
width:50%;
border-collapse:collapse;
margin:20px auto;
}
th,td
{
padding:10px;
text-align:center;
border:1px solid black;
}
th{
background-color:lightgrey;
}
</style>
</head>
<body>
<h2 style="text-align:center;">List of indian Cricket players</h2>
<?php
$players=array(
"virat Kohli",
"Rohith Sharma",
"sachin Tendulkar",
"MS Doni",
"Shikhar Dhawan",
"KL Rahul",
"Jadeja",
"Hardik Pandya",
"Bhuvneshwar Kumar",
"Ishant sharma"
);
echo"<table>";
echo"<tr><th>S.NO</th><th>Player Name</th></tr>";
foreach($players as $x=>$player){
echo"<tr><td>".($x+1)."</td><td>".$player."</td></tr>";
}
echo"</table>";
?>
</body>
</html>



