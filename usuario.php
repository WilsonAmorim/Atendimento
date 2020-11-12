<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Sistema de Atendimento</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="assets/css/bootstrap.css" type="text/css" rel="stylesheet" />
	<script src="assets/js/bootstrap.js" type="text/javascript" ></script>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css"  href="estilo.css" />
    <!--[if lte IE 8]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
</head>

<body>
	<div id="wrapper">
		
			<h1 id="header"><img src="images/logo.gif" width="257" height="96" /></h1>
			<nav>
				<ul class="menu">
				<li><a href="Atendimento.php">Tecnico</a></li>
					<li><a href="AcompanharAtendimento.php">Acompanhar Atendimento</a></li>
					<li><a href="usuario.php">Usuário</a></li>
					<li><a href="#">Configuração</a>
						<ul>
						  <li><a href="tipoUsuario.php">Incluir Tipo Usuário</a></li>
						  <li><a href="tipoAtendimento.php">Incluir Tipo Atendimento</a></li>
						  </ul>
					</li>
					<li><a href="Login.php">Sair</a></li>
				<li><a href="#">Gestor: 001  Antonio da Silva Perreira</a></li>
				<li><a href="#">10/11/2020 09:10</a></li>
				
			</ul>
			</nav>
			
				<div id="center">
				<div class="row">
					<h2> Cadastrar Usuário</h2>
					<form action="SalvaUsuario.php?act=save" method="POST" name="form1" class="form-horizontal" >
						<div class="form-group">
						<div class="clear"></div>
							<label for="tipousuario" class="col-sm-3 control-label">Tipo de Usuário</label>
							<div class="col-md-5">
								
								<select name="tipousuario" id="tipousuario" class="form-control">
								  <option value="2">Administrado</option> 
								  <option value="3" >Técnico</option>
								  <option value="4">Cliente</option>
								</select>
							</div>
							<div class="clear"></div>
							<label for="nomeUsuario" class="col-sm-3 control-label">Nome</label>
							<div class="col-md-1">
								<input type="text" name="nome" id="nome" />
							</div>
							<div class="clear"></div>
							<label for="emailUsuario" class="col-sm-3 control-label">E-mail</label>
							<div class="col-md-1">
								<input type="text" name="email" id="email" />
							
						</div>
						<div class="pull-right">
							<button type="submit" class="btn btn-primary" /><span class="glyphicon glyphicon-ok"></span> Salvar</button>
							<button  type"reset"  class="btn btn-primary" /><span class="glyphicon glyphicon-ok"></span> Limpár</button>
						</div>
					</form>
				</div>
					
					
				</div>
			
			<div class="clear"></div>
			<div id="footer">
				<div id="footeri"></div>
				<div class="panel-footer">
					<div class="clearfix">
						<h2 >Usuário</h2>
					
					<form action="?act=save" method="POST" name="form1" class="form-horizontal" >
						<div class="clear"></div>
						<table border=1 >
							<thead>
								<tr>
									<th>Editar</th>
									<th>Excluir</th>
									<th>Tipo Usuuário</th>
									<th>Nome</th>
									<th>Email</th>
								</tr>
							</thead>
							<?php 
								// Recupera as informações  
								// Conexão com o banco de dados
									$cont=0;
									$tabela = "Usuário";
								
									$link = mysqli_connect("localhost", "root", "123atende", "atendimento");

									/* check connection */
									if (mysqli_connect_errno()) {
										printf("Connect failed: %s\n", mysqli_connect_error());
										exit();
									}
									$query = "SELECT usuario.Id_Usuario, usuario.Nome, usuario.Email, usuario.Id_TipoUsuario, usuario.DataAtualiza,  tipousuario.Descrica FROM usuario, tipousuario  WHERE tipousuario.Id_TipoUsuario = usuario.Id_TipoUsuario";
									$result = mysqli_query($link, $query);
								if ($result) {
									while ($row = mysqli_fetch_array($result)) {
										$id = $row['Id_Usuario'];
										//Saber quantos resgistros existem na tabela
										$cont++;  
										
										$tabela .= "<tr> "
										. " <td><a href='EditarUsuario.php?id={$row['Id_Usuario']}&act=up'><img src='images/editar.png'  /></a></th> 
											 <td><a href='SalvaUsuario.php?id={$row['Id_Usuario']}&act=ex'><img src='images/excluir.png'  /></a></th> 
											 <td>{$row['Descrica']}</th> 
											 <td>{$row['Nome']}</th> 
											 <td>{$row['Email']}</th> "
										. "</tr> ";
										
								 }
    
								}
								echo $tabela;
								?>
							
						</table>
					</form>
					
					</div>
				</div>
			</div>
		
	</div>
</body>
</html>