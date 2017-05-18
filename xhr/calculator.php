
<?php

	header("Access-Control-Allow-Origin: *");	
	$jsondata = array(-100,-100,-100,-100);

	$variables = array(
			array(
				array('t1' => 5.35, "a" => 5.2632),
				array("t1" => 7.38, "a" => 4.7619),
				array("t1" => 9.43, "a" => 4.5455),
				array("t1" => 11.41, "a" => 4.6512),
				array("t1" => 17.21, "a" => 4.4444),
				array("t1" => 23.09, "a" => 4.3478),
				array("t1" => 37.25, "a" => 4.0816),
				array("t1" => 51.59, "a" => 3.9216),
				array("t1" => 8.57, "a" => 3.2258),
				array("t1" => 11.07, "a" => 3.2258),
				array("t1" => 13.62, "a" => 3.2258),
				array("t1" => 26.69, "a" => 3.5088)
			), array(
				array('t1' => 86.48, "a" => 4),
				array("t1" => 120.83, "a" => 4),
				array("t1" => 156.99, "a" => 4),
				array("t1" => 247.03, "a" => 3.9216),
				array('t1' => 344.2, "a" => 3.8462),
				array("t1" => 534.16, "a" => 3.7736)
			), array(
				array('t1' => 194.45, "a" => 2.9412),
				array("t1" => 437.5, "a" => 1.9417),
				array("t1" => 676.5, "a" => 2.439),
				array("t1" => 13.94, "a" => 2.5316)
			), array(
				array('t1' => 18.28, "a" => 1.2195),
				array("t1" => 60.38, "a" => 1.1765),
				array("t1" => 62.58, "a" => 1.0309),
				array("t1" => 71.02, "a" => 1.1765),
				array('t1' => 95.94, "a" => 1.4493)
			)
		);
		

	$data = $_GET["data"];

	$arr = json_decode($data);

	for ($j=0; $j < sizeof($arr); $j++) {
		$row = $arr[$j];
		for ($i=0; $i < sizeof($row); $i++) { 
			//echo $row[$i];

			if($row[$i]==0){

			}else{
				$int = 0;
				if($j >= 2){
					$int = round(1010 / pow(($variables[$j][$i]["t1"] / $row[$i]), $variables[$j][$i]["a"]) - 10);
				}else{
					$int = round(1010 / pow(($row[$i] / $variables[$j][$i]["t1"]), $variables[$j][$i]["a"]) - 10);
				}
				//echo "</br>".$int."</br>";
				if($int > $jsondata[$j]){
					$jsondata[$j] = $int;
				}
			}
		}
	}

	if(in_array(-100, $jsondata)){
		echo "something wrong";
	}else{
		$jsondata = array($jsondata);
		echo json_encode($jsondata);
	}
?>
