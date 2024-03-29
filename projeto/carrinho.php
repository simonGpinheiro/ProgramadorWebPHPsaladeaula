<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php require "html/head.php" ?>

</head>

	<body>
		<?php 
		include "html/header.php";
		include_once "src/model/Produto.php";
		include_once "src/model/Estoque.php";
		?>

		<main>
			<h1>Carrinho de compras</h1>
			<?php if(isset($_SESSION['carrinho'])) : ?>
			<div class="table-responsive"> 	
				<table class="table table-bordered align-middle">
					<tr>
						<th width="50">FOTO</th>
						<th>NOME</th>
						<th width="80">TIPO</th>
						<th width="100">CATEGORIA</th>
						<th>FABRICANTE</th>
						<th width="50">QTD</th>
						<th>VALOR</th>
						<th>TOTAL</th>
						<th width="60">AÇÃO</th>
					</tr>
					<?php 
					$totalCompra = 0;
					foreach($_SESSION['carrinho'] as $key => $value) :
					?>
					<tr>
						<td><img width="50" src="<?= unserialize($value['obj'])->getProduto()->getFoto() ?>"></td>
						<td><?= unserialize($value['obj'])->getProduto()->getNome() ?></td>
						<td><?= unserialize($value['obj'])->getProduto()->getTipo() ?></td>
						<td><?= unserialize($value['obj'])->getProduto()->getCategoria() ?></td>
						<td><?=  unserialize($value['obj'])->getProduto()->getFabricante() ?></td>
						<td><?= $value['qtd'] ?></td>
						<td><?= number_format($value['valor'], 2, ',','.') ?></td>
						<?php
							$totalProduto = $value['valor'] * $value['qtd'];
							$totalCompra = $totalCompra + $totalProduto;
						?>
						<td><?= number_format($totalProduto, 2, ',','.') ?></td>
						<td>
							<a id="excluir" href="?remover=<?= $key ?>" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Excluir do carrinho">
								<i class="bi bi-trash text-danger" style="font-size: 2rem;"></i>
							</a>
						</td>
					</tr>
					<?php
					endforeach;
					?>
					<tr>
						<td colspan="7" style="text-align: center;">TOTAL</td>
						<td colspan="2" class="text-center">R$ <?= number_format($totalCompra, 2, ",", "."); ?></td>
					</tr>
					
				</table>
			</div>
			<?php else :
			echo "<h3 style='text-align: center; margin-top: 50px'>Não há produtos no carrinho no momento.</h3>";
			endif;
			?>
			<div style="text-align: center;">
				<a href="produtos.php" type="button" class="btn btn-success btn-lg">Continuar Comprando</a>
				<a href="registro_compra.php" type="button" class="btn btn-primary btn-lg">Finalizar Compras</a>
			</div>
		</main>
<?php
	include "html/rodaPe.php";
?>


		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
		<script>
			const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
		</script>

</body>

</html>