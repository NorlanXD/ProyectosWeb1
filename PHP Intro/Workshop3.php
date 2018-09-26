<?php 
	$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
	ksort($ceu);

	foreach($ceu as $x=>$x_value) {
	   echo "La capital del pais " . $x . " es " . $x_value;
	   echo "<br>";
   }

   $temp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

	$suma = 0;
	for ($x=0;$x<count($temp);$x++)
	  $suma += $temp[$x];

	$promedio = array_sum($temp)/count($temp);

	echo "<br>";

	echo "El promedio es: " . $promedio;

	sort($temp);
   echo "<br>";
   echo "La 7 temperaturas mas bajas son:";
   foreach ($temp as $x => $y) {
   		echo " " . $y . ",";
   		if ($x > 5) {
   			break;
   		}
   }

   rsort($temp);
   echo "<br>";
   echo "La 7 temperaturas mas altas son:";
   foreach ($temp as $x => $y) {
   		echo " " . $y . ",";
   		if ($x > 5) {
   			break;
   		}
   }

 ?>