SID:C112181108<br>
NAME:UxxxP<br>


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
