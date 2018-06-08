<?php 
require 'credenciais.php';
			$evento = $REQUEST['evento'];
			$localizacao =  $REQUEST['localizacao'];
			$cod_militar_auxiliar = $_REQUEST['cod_militar_auxiliar'];
			$cod_militar_condutor = $_REQUEST['cod_militar_condutor'];
			$viatura = $_REQUEST['viatura'];
			$solicitante = $_REQUEST['solicitante'];
			$telefone = $_REQUEST['telefone'];
			$observacao = $_REQUEST['observacao'];
			$referencia = $_REQUEST['referencia'];
			$data = $_REQUEST['data'];
			$data = explode(" ", $data);
			list($date, $hora) = $data;
			$data_sem_barra = array_reverse(explode("/", $date));
			$data_sem_barra = implode("-", $data_sem_barra);
			$data_sem_barra = $data_sem_barra . " " . $hora;

			require 'db.php';
			$sql_cad = "INSERT INTO missao(evento,localizacao,cod_militar_auxiliar,cod_militar_condutor, viatura, solicitante,telefone, observacao,referencia,data) VALUES('$evento','$localizacao','$cod_militar_auxiliar','$cod_militar_condutor','$viatura','$solicitante','$telefone','$observacao','$referencia','$data_sem_barra')";
			if($conn->query($sql_cad) === TRUE){
		echo "Cadasto realizado com sucesso";


	}	



			
			?>