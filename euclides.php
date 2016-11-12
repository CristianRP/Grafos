<?php
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	
	$mayor = max($num1, $num2);
	$menor = min($num1, $num2);

	function algoritmoEuclides($mayor, $menor, $num1, $num2) {
		$result = "";
		$result = $result.$mayor . " = " . $menor . "*" . @(floor($mayor / $menor)) . " + " . ($num1 - (@(floor($mayor / $menor)) * $menor)) . "<br>";
		while ($menor != 0) {
			$x = $menor;
			$menor = $mayor % $menor;
			$mayor = $x;
			try {
				$result = $result.$mayor . " = " . $menor . "*" . @(floor($mayor / $menor)) . " + " . ($mayor - (@(floor($mayor / $menor)) * $menor)) . "<br>";
			} catch (Exception $e) {
				$result = $result.$x . " = " . 0 . "*" . $mayor . " + " . $menor;
			}
		}
		$result = $result."El MCD(" . $num1 . "," . $num2 . ") = " . $mayor;
		return $result;
	}

	echo algoritmoEuclides($mayor, $menor, $num1, $num2);