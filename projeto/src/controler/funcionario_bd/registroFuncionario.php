<?php 
        include "../../../html/header.php"; 
        require_once "../../conexao.php";
        require_once "../../protect.php";
        //require_once "src/model/Funcionario.php";

        $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
        $dataNascimento = isset($_POST["nascimento"]) ? $_POST["nascimento"] : "";
        $tipo = isset($_POST["tipo"]) ? $_POST["tipo"] : "";
        $celular = isset($_POST["celular"]) ? $_POST["celular"] : "";
        $cpf = isset($_POST["cpf"]) ? $_POST["cpf"] : "";
        $estadoCivil = isset($_POST["estado_civil"]) ? $_POST["estado_civil"] : "";
        $email = isset($_POST["email"]) ? $_POST["email"] : "";
        $senha = isset($_POST["senha"]) ? password_hash($_POST["senha"], PASSWORD_DEFAULT) : "";
        $ativo = isset($_POST["ativo"]) ? $_POST["ativo"] : true;

        if(isset($_POST["nome"]) && isset($_POST["senha2"])){

            //$cliente = new Cliente(
               //$idCliente,
                //$nome,
                //$dataNascimento,
                //$orgao,
                //$rg,
                //$cpf,
                //$estadoCivil,
                //$sexo,
                //$email,
                //$senha,
                //$ativo
            //);

            $sql_code = "INSERT INTO funcionario  VALUES (NULL, '$nome', '$dataNascimento', '$cpf', '$estadoCivil', '$tipo', '$celular', '$email', '$senha', true)";
			
            $sql_query = $conexao->query($sql_code);
			// var_dump($sql_query);

			// if($conexao->query($sql_code)){
			if($sql_query){
				$sql_code = "SELECT idfuncionario, nome FROM funcionario WHERE cpf = '$cpf'";
				$sql_query = $conexao->query($sql_code);

				$funcionario = $sql_query->fetch_assoc();

				$id = $funcionario['idfuncionario'];
                $nome = $funcionario['nome'];
                
                header("Location: ../../../cadastroFuncionario.php?gravado=$id");
                die("Gravado!");


            } else{
                header("Location: ../../../cadastroFuncionario.php?gravado=0");
            }
        }

        header("Location: ../../../cadastroFuncionario.php");

        ?>

		<main>
        <div class="container-fluid">
			<h3>Cadastro de funcionários</h3>
			<form class="row g-3 container-fluid" name="f" action="src/controler/funcionario_bd/registroFuncionario.php" method="post">

				<div class="col-md-6 col-sm-12">
					<label for="nome_id" class="form-label">Nome completo</label>
					<input type="text" class="form-control" id="nome_id" name="nome" value="" required>
				</div>
				<div class="col-md-6 col-sm-12">
					<label for="email_id" class="form-label">E-mail</label>
					<div class="input-group">
						<span class="input-group-text" id="inputGroupPrepend2">@</span>
						<input type="email" class="form-control" id="email_id" name="email" value="" aria-describedby="inputGroupPrepend2" required>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<label for="cpf_id" class="form-label">CPF</label>
					<input type="cpf" class="form-control" id="cpf_id" name="cpf" value="" required>
				</div>

                <div class="col-md-3 col-sm-12">
					<label for="dtnasci" class="form-label">Data de nascimento</label>
					<input type="date" class="form-control" id="dtnasci" name="nascimento" value="" required>
				</div>


				<div class="col-md-4 col-sm-12">
					<label for="or_id" class="form-label">Celular</label>
					<input type="text" class="form-control" id="or_id" name="celular" value="" required>
				</div>

                <div class="col-md-3 col-sm-12">
					<label for="tipo_id" class="form-label">Tipo</label>
					<select class="form-select" id="estadoc" name="tipo_c" required>
						<option selected disabled value="">Selecione</option>
						<option value="Administrador">Administrador(a)</option>
						<option value="Vendedor">Vendedor(a)</option>
					</select>
				</div>

				<div class="col-md-4 col-sm-12">
					<label for="rg_id" class="form-label">Identidade</label>
					<input type="text" class="form-control" id="rg_id" name="rg" value="" required>
				</div>
				
                <div class="col-md-3 col-sm-12">
					<label for="estadoc" class="form-label">Estado civil</label>
					<select class="form-select" id="estadoc" name="estado_civil" required>
						<option selected disabled value="">Selecione</option>
						<option value="Solterio">Solterio(a)</option>
						<option value="Casado">Casado(a)</option>
						<option value="Divorciado">Divorciado(a)</option>
						<option value="Viuvo">Viuvo(a)</option>
					</select>
				</div>
				
				<div class="col-md-6 col-sm-12">
					<label class="form-label">Sexo</label><br>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="sexo" id="sexo_id1" value="M">
						<label class="form-check-label" for="sexo_id1">
							Masculino
						</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="sexo" id="sexo_id2" value="F">
						<label class="form-check-label" for="sexo_id2">
							Feminino
						</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="sexo" id="sexo_id3" value="O">
						<label class="form-check-label" for="sexo_id3">
							Outros
						</label>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<label for="sen1" class="form-label">Senha</label>
					<input type="password" class="form-control" id="sen1" onblur="confirma()" name="senha" value="" required>
				</div>
				<div class="col-md-6 col-sm-12" id="divConfirma" style="display: none">
					<label for="sen2" class="form-label">Confirmação senha</label>
					<input type="password" class="form-control" id="sen2" onblur="verifica()" name="senha2" value="" required>
					<div id="erro" class="invalid-feedback" style="display: none">
						Senhas divergentes.
					</div>
				</div>
				<div class="col-12">
					<button class="btn btn-primary" type="submit" id="btn-off" disabled style="display: none">Cadastrar</button>
					<button class="btn btn-primary" type="submit" id="btn-on" >Cadastrar</button>
				</div>
			</form>
		</div>
		</main>
<?php
	include "html/rodaPe.php";
?>