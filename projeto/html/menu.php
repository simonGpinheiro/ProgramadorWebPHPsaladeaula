<nav>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="produtos.php">Home</a></li>

		<?php if(isset($_SESSION['tipo'])){?>
			<li><a href="clientes.php">Clientes</a></li>
		<?php } else if(isset($_SESSION['id'])){?>
			<li><a href="#"></a>Configuração</li>
		<?php }?>
							
		<li><a href="sobre_nos.php">Sobre nós</a></li>
		<li><a href="position/index.html">Contatos</a></li>
			
		<?php if(isset($_SESSION['nome'])){?>
			<li style="float: right;"><a href="clienteConfiguracao.php">
            Bem-vindo: <?= substr($_SESSION['nome'], 0, strpos($_SESSION['nome'], " "));?>
            </a></li>
		<?php } ?>
	</ul>
</nav>