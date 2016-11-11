<?php
	$all_vertex = $_POST['vertices'];
	$all_edges = $_POST['aristas'];

	$arrayVertex = getArrayVertex($all_vertex);
	$arrayEdges = getArrayEdges($all_edges, $all_vertex);

	$results[0] = $arrayVertex;
	$results[1] = $arrayEdges;

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