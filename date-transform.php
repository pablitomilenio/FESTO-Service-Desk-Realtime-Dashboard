<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
   <style>
        body {
            background-color: red;
        }
    </style>
    <title>Date Transform</title>
</head>



<?php

echo "Hola<br><hr>";

$mysqli = mysqli_connect("sql108.byethost7.com", "b7_24447646", "Palmtree!00", "b7_24447646_statistiki");
$res = mysqli_query($mysqli, "select stamp, UNIX_TIMESTAMP() as ahora from availability_today limit 10");

$row = $res->fetch_assoc();


$oldstamp = $row["stamp"];
$newstamp = $row["ahora"];
$ddiff = $newstamp - $oldstamp;

echo $row["stamp"];
echo "<hr>";
echo $row["ahora"];
echo "<hr>";
echo $ddiff;
echo "<hr>";

echo '<br><br><br>';
echo "<hr>";
echo 'close';

?>

<body>
<pre>
run in phpmyadmin
UPDATE `availability_today` SET `stamp`=`stamp`+127133290
$mysqli = mysqli_connect("sql108.byethost7.com", "b7_24447646", "Palmtree!00", "b7_24447646_statistiki");

</pre>
</body>

</html>