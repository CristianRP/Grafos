<?php
	$all_vertex = $_POST['vertices'];
	$all_edges = $_POST['aristas'];

	$arrayVertex = getArrayVertex($all_vertex);
	$arrayEdges = getArrayEdges($all_edges, $all_vertex);
	$arrayGrades = drawGrades(getArrayGrades($arrayVertex, $arrayEdges));

	$results[0] = $arrayVertex;
	$results[1] = $arrayEdges;
	$results[2] = $arrayGrades;

	// echo "<pre>";
	// print_r($results);
	echo json_encode($results);

	function getArrayVertex($all_vertex){
		$all_vertex = str_replace("{", "", $all_vertex);
		$all_vertex = str_replace("}", "", $all_vertex);

		$vertex = explode(",", $all_vertex);

		$count = 0;
		foreach ($vertex as $v) {
			$count++;
			$arrayVertex[] = array('id' => $count, 'label' => trim($v));
		}
		
		return $arrayVertex;
	}

	function getArrayEdges($all_edges, $all){
		$all_edges = str_replace("{", "", $all_edges);
		$all_edges = str_replace("}", "", $all_edges);

		$edges = explode("),", $all_edges);

		$count = 0;

		$all_vertex = getArrayVertex($all);

		foreach ($edges as $e) {
			$count++;
			$ed = str_replace("(", "", $e);
			$ed = str_replace(")", "", $ed);

			$edge = explode(",", $ed);

			$from = findId($edge[0], $all_vertex);
			$to = findId($edge[1], $all_vertex);
			$arrayEdges[] = array('from' => $from, 'to' => $to);
		}

		return $arrayEdges;
	}

	function findId($name, $all_vertex){
		for ($i=0; $i < count($all_vertex); $i++) { 
			if($all_vertex[$i]['label'] == $name){
				return $all_vertex[$i]['id'];
			}
		}
	}

	function getArrayGrades($arrayVertex, $arrayEdges){
		$all_grades = null;

		foreach ($arrayVertex as $v) {
			$cantidad = 0;
			$vertice_id = $v['id'];

			foreach ($arrayEdges as $e) {
				if($vertice_id == $e['from'] || $vertice_id == $e['to']){
					$cantidad = $cantidad + 1;
					$all_grades[$vertice_id] = array('name' => $v['label'], 'id' => $vertice_id, 'grade' => $cantidad);
				}
			}
		}

		return $all_grades;
	}

	function drawGrades($all_grades){
		$return = null;
		foreach ($all_grades as $grade) {
			$return = $return . '<p><strong>Grado de '.$grade['name'].':</strong> ['.$grade['grade'].']</p><br>';
		}

		return $return;
	}