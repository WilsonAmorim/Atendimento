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
					<h2 >ATENDIMENTO</h2>
					<div>
					<form action="?act=save" method="POST" name="form1" class="form-horizontal" >
						<div class="clear"></div>
						<table border=1 >
							<thead>
								<tr >
									
									<th BGCOLOR=RED>Data Execução</th>
									<th>Técnico</th>
									<th>Tipo Atendimento</th>
									<th>Status</th>
									<th>Observação</th>
								</tr>
							</thead>
								<?php 
									// Recupera as informações  
									// Conexão com o banco de dados
										$cont=0;
										$tabela = "";
									
										$link = mysqli_connect("localhost", "root", "123atende", "atendimento");

										/* check connection */
										if (mysqli_connect_errno()) {
											printf("Connect failed: %s\n", mysqli_connect_error());
											exit();
										}
										$query = "SELECT atendimento.Id_Atendimento, atendimento.Id_TipoAtendimento, atendimento.Id_Usuario, atendimento.Id_Tecnico, atendimento.DataExecucao, 
											atendimento.Observacao, atendimento.status, TipoAtendimento.descricao, usuario.Nome, tecnico.Nome FROM atendimento
											INNER JOIN TipoAtendimento ON atendimento.Id_TipoAtendimento = TipoAtendimento.Id_TipoAtendimento 
											INNER JOIN usuario ON atendimento.Id_Usuario = usuario.Id_Usuario 
											INNER JOIN usuario tecnico ON atendimento.Id_Tecnico = tecnico.Id_Usuario";
										
										$result = mysqli_query($link, $query);
										
								if ($result) {
									while ($row = mysqli_fetch_array($result)) {
										$id = $row['Id_Usuario'];
										//Saber quantos resgistros existem na tabela
										$cont++;  
										
										$tabela .= "<tr> "
										. " <td>{$row['DataExecucao']}</td> 
											 <td>{$row['Nome']}</td> 
											 <td>{$row['descricao']}</td> 
											 <td>{$row['status']}</td>
											 <td>{$row['Observacao']}</td> "
										. "</tr> ";
										
								 }
    
								}
								echo $tabela;
								?>
								
							
						</table>
					</form>
					</div>
				</div>
			
			<div class="clear"></div>
			<div id="footer">
				<div id="footeri"></div>
				<div class="panel-footer">
					<div class="clearfix">
						<div class="pull-right">
							
						</div>
					</div>
				</div>
			</div>
		
	</div>
</body>
</html>