<?php  

include_once 'model/Conexao.class.php';
include_once 'model/Manager.class.php';

$manager = new Manager();

?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once 'view/dependencias.php'; ?>
</head>
<body>

<div class="container">
	
	<h2 class="text-center p-4">
		Lista de Clientes <i class="fa fa-list"></i>
	</h2>

	<h5 class="d-flex justify-content-end">
		<a href="view/page_register.php" class="btn btn-primary btn-xs">
			<i class="fa fa-user-plus"></i>
		</a>
	</h5>

	<div class="table-responsive">
		<table class="table table-hover">
			<thead class="thead">
				<tr>
					<th>ID</th>
					<th>NOME</th>
					<th>E-MAIL</th>
					<th>CPF</th>
					<th>DT. DE NASCIMENTO</th>
					<th>ENDEREÇO</th>
					<th>TELEFONE</th>
					<th colspan="3">AÇÕES</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($manager->listClient("registros") as $client): ?>
				<tr>
					<td><?php echo $client['id']; ?></td>
					<td><?php echo $client['name']; ?></td>
					<td><?php echo $client['email']; ?></td>
					<td><?php echo $client['cpf']; ?></td>
					<td><?php echo $client['birth']; ?></td>
					<td><?php echo $client['address']; ?></td>
					<td><?php echo $client['phone']; ?></td>
					<td>
						<form method="POST" action="view/page_update.php">
							
							<input type="hidden" name="id" value="<?=$client['id']?>">

							<button class="btn btn-warning btn-xs">
								<i class="fa fa-user-edit"></i>
							</button>

						</form>
					</td>
					<td>
						<form method="POST" action="controller/delete_client.php" onclick="return confirm('Você tem certeza que deseja excluir ?');">
							
							<input type="hidden" name="id" value="<?=$client['id']?>">

							<button class="btn btn-danger btn-xs">
								<i class="fa fa-trash"></i>
							</button>

						</form>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>