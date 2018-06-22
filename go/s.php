<?php
$arr=['Michael'=>1000,'John'=>500,'Steven'=>200];
echo "Michael's salary-" .$arr['Michael'] ."<br>";
echo "Steven's salary-" .$arr['Steven']."<br>";
$sum1=0; 
foreach ($arr as $key => $value) {
	$sum1=$sum1+$value;
}
echo "Sum of all salaries:".$sum1 ."<br>";
?>
