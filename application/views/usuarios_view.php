<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css'); ?>"/>
    <title><?php echo $titulo; ?></title>
    <meta charset="UTF-8" />
    
</head>
<body>
    <?php echo form_open('usuarios/inserir', 'id="form-usuarios"'); ?>
 
    <label for="nome">Nome:</label><br/>
    <input type="text" name="nome" value="<?php echo set_value('nome'); ?>"/>
    <div class="error"><?php echo form_error('nome'); ?></div>
    <label for="email">Email:</label><br/>
    <input type="text" name="email" value="<?php echo set_value('email'); ?>"/>
    <div class="error"><?php echo form_error('email'); ?></div>
    
    
     <label for="senha">Senha:</label><br/>
    <input type="text" name="senha" value="<?php echo set_value('senha'); ?>"/>
    <div class="error"><?php echo form_error('senha'); ?></div>
    <label for="dtNascimento">Data Nascimento:</label><br/>
    <input type="date" name="dtNascimento" value="<?php echo set_value('dtNascimento'); ?>"/>
    <div class="error"><?php echo form_error('dtNascimento'); ?></div>
    
   <label for="foto">Foto:</label><br/>
   <input type="image" name="foto" value="<?php echo set_value('foto'); ?>"/>
    <div class="error"><?php echo form_error('foto'); ?></div>
    <label for="cidade">Cidade:</label><br/>
    <input type="text" name="cidade" value="<?php echo set_value('cidade'); ?>"/>
    <div class="error"><?php echo form_error('cidade'); ?></div>
    
     <label for="bairro">Bairro:</label><br/>
    <input type="text" name="bairro" value="<?php echo set_value('bairro'); ?>"/>
    <div class="error"><?php echo form_error('bairro'); ?></div>
    <label for="estado">Estado:</label><br/>
    <input type="text" name="estado" value="<?php echo set_value('estado'); ?>"/>
    <div class="error"><?php echo form_error('estado'); ?></div>
    
    <label for="endereco">Endereço:</label><br/>
    <input type="text" name="endereco" value="<?php echo set_value('endereco'); ?>"/>
    <div class="error"><?php echo form_error('endereco'); ?></div>
    <label for="cep">Cep:</label><br/>
    <input type="text" name="cep" value="<?php echo set_value('cep'); ?>"/>
    <div class="error"><?php echo form_error('cep'); ?></div>
    
    <label for="telefone">Telefone:</label><br/>
    <input type="tel" name="telefone" value="<?php echo set_value('telefone'); ?>"/>
    <div class="error"><?php echo form_error('telefone'); ?></div>
    <label for="celular">cep:</label><br/>
    <input type="tel" name="celular" value="<?php echo set_value('celular'); ?>"/>
    <div class="error"><?php echo form_error('celular'); ?></div>
    
    <label for="dtcriacao">Data Criação:</label><br/>
    <input type="date" name="dtcriacao" value="<?php echo set_value('dtcriacao'); ?>"/>
    <div class="error"><?php echo form_error('dtcriacao'); ?></div>
    <label for="dtatualizacao">Data Atualização:</label><br/>
    <input type="date" name="dtatualizacao" value="<?php echo set_value('dtatualizacao'); ?>"/>
    <div class="error"><?php echo form_error('dtatualizacao'); ?></div>
    
    <input type="submit" name="cadastrar" value="Cadastrar" />
 
    
    
    <?php echo form_close(); ?>
    
    <!-- Lista os Usuarios Cadastradas -->
<div id="grid-usuarios">
    <ul id="grid">
	<?php foreach($usuarios as $user): ?>
	<li>
	    <a title="Deletar" href="<?php echo base_url() . 'usuarios/deletar/' . $user->idusuario; ?>" onclick="return confirm('Confirma a exclusão deste registro?')"><img src="<?php echo base_url('assets/img/lixo.png'); ?>/></a>
	    <span> - </span>
	    <a title="Editar" href="<?php echo base_url() . 'usuarios/editar/' . $user->idusuario; ?>"><?php echo $user->nome; ?></a>
	    <span> - </span>
	    <span><?php echo $user->email; ?></span>
	</li>
	<?php endforeach ?>
    </ul>
</div>
<!-- Fim Lista -->
    
</body>
</html>

