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
					<h2 >REGISTRAR ATENDIMENTO</h2>
					<form action="?act=save" method="POST" name="form1" class="form-horizontal" >
						<div class="form-group">
						<div class="clear"></div>
						
						
							<label for="tecnico" class="col-sm-3 control-label">Data Excucção</label>
							<div class="col-md-5">
								<input id="date" type="date"  class="form-control" />
							</div>
							<div class="clear"></div>
							<label for="tecnico" class="col-sm-3 control-label">Tipo de Atendimento</label>
							<div class="col-md-5">
								<select name="Atendimento" id="Atendimento" class="form-control">
								  <option value="Atendimento1">Placa de Video</option> 
								  <option value="Atendimento2" >Placa de Rede</option>
								  <option value="Atendimento3">Botão Power</option>
								</select>
							</div>
							<div class="clear"></div>
							<label for="tecnico" class="col-sm-3 control-label">Cliente</label>
							<div class="col-md-1">
								<select name="Cliente" id="Cliente" class="form-control">
								  <option value="Cliente1" >Maria Luiza Santos</option> 
								  <option value="Cliente2" >Luzimar Perreira</option>
								  <option value="Cliente3">Rosangela Silva</option>
								</select>
							</div>
							<div class="clear"></div>
							<label for="tecnico" class="col-sm-3 control-label">Status</label>
							<div class="col-md-1">
								<select name="Status"  id="Status" class="form-control">
								  <option value="Status1" >Encerrado</option> 
								  <option value="Status2" >Em andamento</option>
								  <option value="Status3">Pendente</option>
								</select>
							</div>
							<div class="clear"></div>
							<label for="Observacao" class="col-sm-3 control-label">Observação</label>
							<div class="col-md-5">
								<textarea id="Observacao" name="Observacao"   rows="5" cols="100"></textarea>
							</div>
						</div>
					</form>
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
					
		</div>
    </div>
</div>
      </div>
    </div>
  </div>
</body>

<
</html>
