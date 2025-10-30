<h1>SID:C112181108<br>
NAME:UxxxP</h1>
<p>


<?php 
$scores = array(22, 16, 30, 24);
$total = 0;
foreach($scores as $element){
   echo "$element |";
   $total += $element;
}
echo "$total<br>";
print_r($scores);
?>
