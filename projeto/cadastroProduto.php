<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php require "html/head.php" ?>

</head>

	<!--  -->
	<body>
		<?php include "html/header.php" ?>
		<main>
        <div class="container-fluid">
			<h3>Cadastro de produto</h3>
			<form enctype="multipart/form-data" class="row g-3 container-fluid" action="" method="post">

				<div class="col-md-6 col-sm-12">
					<label for="nome_id" class="form-label">Nome produto</label>
					<input type="text" class="form-control" id="nome_id" name="nome" value="" required>
				</div>
				<div class="col-md-6 col-sm-12">
                    <label for="tipoid" class="form-label">Tipo</label>
                    <select class="form-select" id="tipoid" name="tipo" required>
                        <option selected disabled value="">Selecione</option>
                        <option value="HARDWARE">HARDWARE</option>
                        <option value="PERIFÉRICOS">PERIFÉRICOS</option>
                    </select>
                </div>
				<div class="col-md-4 col-sm-12">
					<label for="desc_id" class="form-label">Descrição</label>
					<textarea class="form-control" id="desc_id" name="descicao" rows="4" cols="50" value="" required></textarea>
				</div>
				<div class="col-md-4 col-sm-12">
					<label for="or_id" class="form-label">Foto</label>
					<input type="file" class="form-control" id="or_id" name="foto" value="" required>
				</div>
				<div class="col-12">
					<button class="btn btn-primary" type="submit" id="btn-off" disabled style="display: none">Cadastrar</button>
					<button class="btn btn-primary" type="submit" id="btn-on">Cadastrar</button>
				</div>
			</form>
		</div>
		</main>
<?php
	include "html/rodaPe.php";
?>


		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>

</body>

</html>