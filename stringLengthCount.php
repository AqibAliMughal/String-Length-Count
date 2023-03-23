<?php 
/* ================ STRING LENGTH COUNT ================ */
echo  "<h3>String Length Count</h3>";
// Function Declare
function myStrLenFunction($string){
	$a=0;
	for ($y=0; isset($string[$y]) ; $y++) { 
		if($string[$y] != " "){
      $a++;
    }
	}
	echo $a;
}
myStrLenFunction('Count String Characters Length'); // FUNCTION CALL
echo "<hr/>";
?>