<?php 
	// Recupera as informações  
	// Conexão com o banco de dados
		
		$link = mysqli_connect("localhost", "root", "123atende", "atendimento");

		if (mysqli_connect_errno()) {
			printf("Conecção Falhou: %s\n", mysqli_connect_error());
			exit();
		}
		$query = "SELECT Id_Usuario, Nome, Email, Id_TipoUsuario, DataAtualiza FROM usuario  WHERE  Id_Usuario =  4";
		$result = mysqli_query($link, $query);
		$row = mysqli_fetch_array($result);
		$IdUsuario = $row['Id_Usuario'];
		$uNome = $row['Nome'];
		$uEmail = $row['Email'];
		$IdTipoUsuario = $row['Id_TipoUsuario'];
		mysqli_close($link);
?>

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
    <div id="wrapperi">
		<h1 id="header"><img src="images/logo.gif" width="257" height="96"  /></h1>
		<nav>
			<ul class="menu">
				<li><a href="Login.php">Home</a></li>
				<li><a href="RegistrarAtendimento.php">Registrar Atendimento</a></li>
				<li><a href="Login.php">Sair</a></li>
				<li><a href="#">Técnico: 001  José da Silva Perreira</a></li>
				<li><a href="#">10/11/2020 09:10</a></li>
				
			</ul>
		</nav>
		<div id="wrapperj"></div>
        <div id="right"></div>
    </div>
	<div class="clear"></div>
        <div id="footer">
			<div id="footeri">
				<div class="row">
				<div>
					<h2 >REGISTRAR ATENDIMENTO</h2>
					<form action="SalvaAtendimento.php?id=<?php echo $IdUsuario?>&act=save" method="POST" name="form1" class="form-horizontal" >
						<div class="form-group">
						<div class="clear"></div>
						
						
							<label for="data" class="col-sm-3 control-label">Data Excucção</label>
							<div class="col-md-5">
								<input id="data" name="data" type="date"  class="form-control" />
							</div>
							<div class="clear"></div>
							<label for="Atendimento" class="col-sm-3 control-label">Tipo de Atendimento</label>
							<div class="col-md-5">
								<select name="Atendimento" id="Atendimento" class="form-control">
								  <option value="1">Placa de Video</option> 
								  <option value="2" >Placa de Rede</option>
								  <option value="3">Botão Power</option>
								</select>
							</div>
							<div class="clear"></div>
							<label for="Cliente" class="col-sm-3 control-label">Cliente</label>
							<div class="col-md-5">
							<select name="Cliente" id="Cliente" class="form-control" >
								<?php 
									// Recupera as informações  
									// Conexão com o banco de dados
										$select = "tipo";
										$link = mysqli_connect("localhost", "root", "123atende", "atendimento");

										/* check connection */
										if (mysqli_connect_errno()) {
											printf("Connect failed: %s\n", mysqli_connect_error());
											exit();
										}
										$query = "SELECT Id_Usuario, Nome FROM usuario";
										$result = mysqli_query($link, $query);
										 if ($result) {
												
											while ($row = mysqli_fetch_array($result)) {
												
													
												echo "'<option value=".$row['Id_Usuario'].">".$row['Nome']."</option>"; 
												}  
											}
    
											mysqli_close($link);
										?>
							</select>
							</div>
							<div class="clear"></div>
							<label for="Status" class="col-sm-3 control-label">Status</label>
							<div class="col-md-5">
								<select name="Status"  id="Status" class="form-control">
								  <option value="Encerrado" >Encerrado</option> 
								  <option value="Em andamento" >Em andamento</option>
								  <option value="Pendente">Pendente</option>
								</select>
							</div>
							<div class="clear"></div>
							<label for="Observacao" class="col-sm-3 control-label">Observação</label>
							<div class="col-md-5">
								<textarea id="Observacao" name="Observacao"   rows="5" cols="100"></textarea>
							</div>
						</div>
					
				</div>
				<div class="panel-footer">
					<div class="clearfix">
						<div class="pull-right">
							<button type="submit" class="btn btn-primary" /><span class="glyphicon glyphicon-ok"></span> Salvar</button>
							<button type="submit" class="btn btn-primary" /><span class="glyphicon glyphicon-ok"></span> Limpár</button>
						</div>
					</div>
				</div>
			</div>
			</form>
			</div>		
		</div>
    </div>
</div>
      </div>
    </div>
  </div>
</body>

<
</html>
