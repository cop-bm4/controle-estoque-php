<?php 

			$evento = $_POST['evento'];
			$localizacao =  $_POST['localizacao'];
			$cod_militar_auxiliar = $_POST['cod_militar_auxiliar'];
			$cod_militar_condutor = $_POST['cod_militar_condutor'];
			$viatura = $_POST['viatura'];
			$solicitante = $_POST['solicitante'];
			$telefone = $_POST['telefone'];
			$observacao = $_POST['observacao'];
			$referencia = $_POST['referencia'];
			$data = $_POST['data'];
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