<?php
	$dados = json_decode(file_get_contents('php://input'), true);
	if ($dados != null) {
		echo 'recebido';
	} else {
		echo 'não recebido';
	}
	/*var_dump($dados);
	echo json_encode($dados);*/
?>