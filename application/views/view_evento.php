<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentellela Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  </head>
  <body class="nav-md">
    <div class="container body">
        <!-- page content -->
		<div class="x_panel col-xs-12">
			<div class="x_title">
			<h2 class="col-sm-6">Formulario</h2>
			<div class="clearfix"></div>
			</div>
			<div class="x_content">
			</div>	  
				<br />
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
                                    <div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="titulo">Titulo:<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="text" name="titulo" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
					</div>
                                    </div>
                                    <div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="link">Link:<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="text" name="link" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
					</div>
                                     </div>
                                    <div class="form-group">
					<label for="responsavel" class="control-label col-md-3 col-sm-3 col-xs-12">Responsável:</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="middle-name" name="responsavel" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
					</div>
                                    </div>
                                     <div class="form-group">
					<label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email:</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="middle-name" name="email" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
					</div>
                                    </div>
                                    <div class="form-group">
					<label for="inicio" class="control-label col-md-3 col-sm-3 col-xs-12">Inicio:</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="middle-name" name="inicio" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
					</div>
                                    </div>
                                    <div class="form-group">
					<label for="fim" class="control-label col-md-3 col-sm-3 col-xs-12">Fim:</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="middle-name" name="fim" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
					</div>
                                    </div>
                                    <div class="form-group">
					<label for="descricao" class="control-label col-md-3 col-sm-3 col-xs-12">Descricao:</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="middle-name" name="descricao" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
					</div>
                                    </div>
                                    <div class="form-group">
					<label for="telefone" class="control-label col-md-3 col-sm-3 col-xs-12">Telefone:</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="middle-name" name="telefone" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
					</div>
                                    </div>                                   
				  <div class="ln_solid"></div>
				  <div class="form-group">
					<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
					  <button type="button" class="btn btn-primary">Cancelar</button>
					  <button type="submit" class="btn btn-success">Salvar</button>
					</div>
				  </div>
				</form>
    </div> 
  </body>
</html>


