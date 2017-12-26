<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$servername = "mysql785.umbler.com";
$username = "joaoaluz";
$password = "joao99945222";
$db = "controle_materia"; 
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

$sql = "SELECT id, ubm, material, rp, nserie, situacao, ocorrencia, nome, rg, reg_date FROM materialoperacional";
$result = mysqli_query($conn, $sql);
?>

<?php if(mysqli_num_rows ($result) > 0 ): ?>

 <?php while($row = mysqli_fetch_assoc($result)): ?> 
        echo "id: " . $row["id"]. " - Name: " . $row["Nome"]. "Material" .$row["material"]. "Numero de Serie:" .$row["nserie"]. "Ocorrencia" .$row["ocorrencia"]. "rp:" .$row["rp"].  "<br>";
   
<table class="table table-hover">
<thead>
	<tr>
		<th>ID</th>
		<th width="30%">Nome</th>
		<th>CPF/CNPJ</th>
		<th>Telefone</th>
		<th>Atualizado em</th>
		<th>Opções</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['cpf_cnpj']; ?></td>
		<td>00 0000-0000</td>
		<td><?php echo $row['modified']; ?></td>
		<td class="actions text-right">
			<a href="view.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $customer['id']; ?>">
				<i class="fa fa-trash"></i> Excluir
			</a>
		</td>
	</tr>

	

</tbody>
</table>

<?php endwhile; ?>

<?php endif;?>


    












?>



</body>
</html>

