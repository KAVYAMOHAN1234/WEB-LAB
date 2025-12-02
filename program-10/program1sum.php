<?php
$students=array("kavya","thasni","aneesa","alfi","shahina");
echo "<h2>Array Before Sorting</h2>";
print_r($students);

echo "<br><br>";

asort($students);
echo "<h2>Array after asending sorting (asort):</h2>";
print_r($students);

echo "<br><br>";

arsort($students);
echo "<h2>Array after Desending sorting (asort):</h2>";
print_r($students);
?>


