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
					<form action="?act=save" method="POST" name="form1" class="form-horizontal" >
						<div class="form-group">
						<div class="clear"></div>
							<label for="tipoAtende" class="col-sm-3 control-label">Tipo de Atendimento</label>
							<div class="col-md-5">
								<input type="text" name="tipoAtende" id="tipoAtende" />
							</div>
							<div class="pull-right">
							<button type="submit" class="btn btn-primary" /><span class="glyphicon glyphicon-ok"></span> Salvar</button>
							<button type="submit" class="btn btn-primary" /><span class="glyphicon glyphicon-ok"></span> Limpár</button>
						</div>
					</form>
				</div>
					
					
				</div>
			
			<div class="clear"></div>
			<div id="footer">
				<div id="footeri"></div>
				<div class="panel-footer">
					<div class="clearfix">
						
					<form action="?act=save" method="POST" name="form1" class="form-horizontal" >
						<div class="clear"></div>
						<table border=1 >
							<thead>
								<tr>
									<th>Editar</th>
									<th>Excluir</th>
									<th>Tipo Atendimento</th>
								</tr>
							</thead>
							
								<tr>
									<td><a href="#"><img src="images/editar.png"  /></a></td>
									<td><a href="#"><img src="images/excluir.png"  /></a></td>
									<td>Em Andammento</th>
																			
								</tr>
								<tr>
									<td><a href="#"><img src="images/editar.png"  /></a></td>
									<td><a href="#"><img src="images/excluir.png"  /></a></td>
									<td>Pendente</td>
								</tr>
								<tr>
									<td><a href="#"><img src="images/editar.png"  /></a></td>
									<td><a href="#"><img src="images/excluir.png"  /></a></td>
									<td>Encerrado</th>
								</tr>
								
							
						</table>
					</form>
					
					</div>
				</div>
			</div>
		
	</div>
</body>
</html>