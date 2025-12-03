<?php
$indianPlayer=array("Mahendra Singh Dhoni","Suresh Raina","bhoomra","chahal","Jadeja");
echo "<table border='1'>
  <tr>
      <th> SL NO </th>
      <th> Player Name </th>
      </tr>";
$i=1;
foreach ($indianPlayer as $player)
{
echo "<tr>
         <td> $i</td>
           <td> $player</td>
           </tr>";
           $i++;
}
echo "</table>";
?>
