<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
	</head>
	<body>
	<?php
	$nome = array('name' => 'nome', 'placeholder' => 'NOME');
	$senha = array('name' => 'senha',	'placeholder' => 'SENHA');
	$submit = array('name' => 'submit', 'value' => 'ENTRAR', 'title' => 'ENTRAR');
	?>
	<div class="container_12">
		<h1>LOGIN</h1>
		<div class="grid_12" id="login">
			<div class="grid_8 push_2" id="formulario_login">
				<div class="grid_6 push_1" id="campos_login">
					<?=form_open(base_url().'login/new_user')?>
					<label for="nome">Nome usuario:</label>
					<?=form_input($nome)?><p><?=form_error('nome')?></p>
					<label for="senha">Insira a senha:</label>
					<?=  form_password($senha)?><p><?=form_error('senha')?></p>
					
					<?=form_submit($submit)?>
					<?=form_close()?>
					<?php 
					if($this->session->flashdata('usuario_incorrecto'))
					{
					?>
					<p><?=$this->session->flashdata('usuario_incorrecto')?></p>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>