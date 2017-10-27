<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Facturacion</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<form action="" class="form">
	
				<div class="row">
						<div class="form-group col-md-6">
								
								<label for="opcion">Elige una Opcion:</label>
					
								<select id="selOpcion" name="selOpcion" class="form-control" id="opcion">
									<option value="xml">XML</option>
									<option value="pdf">PDF</option>
									<option value="envio">Envio</option>
								</select>
						</div>
							
						<div class="form-group col-md-6">
										
										<label for="opcion">Elige un Cliente:</label>
							
										<select id="selCliente" name="selCliente" class="form-control" >
											<option value="xml">Todos</option>
											<option value="pdf">ISM</option>
											<option value="envio">IAR</option>
											<option value="envio">CME</option>
											<option value="envio">PAMM</option>
										</select>
						</div>				
				


						<div class="form-group col-md-6  col-xs-6">
							
								<input class="form-control " type="text" name="txtSerie" id="txtSerie" placeholder="Serie">
								
						</div>
						
						<div class="form-group col-md-6  col-xs-6">

								
								<div class="input-group">
									<label id="lblTotalSymb"  class="input-group-addon">/</label>
									<input class="form-control " type="text" name="txtFolio" id="txtFolio" placeholder="Folio">
								</div>
						</div>

						<div class="form-group col-md-12">
						
							<input class="form-control" type="text" name="chkMod" id="chkMod" placeholder="Concepto">
							<div class="checkbox">
								<label for=""><input type="checkbox">Modificar</label>
							</div>
						</div>	
						
						<div class="form-group col-md-12">
							<div class="input-group">
								<label id="lblTotalSymb"  class="input-group-addon">$</label>
								<input class="form-control" type="text" name="txtCorreo" id="txtCorreo" placeholder="Total">
							</div>
						</div>
							
						<div class="form-group col-lg-12">
							<button class="btn btn-primary pull-right">Enviar</button>
							<div class="clearfix"></div>
						</div>	

				</div>
		</form>

	</div>



	<script src="bootstrap/js/jquery-3.2.1.min.js"></script>
	<script src="bootstrap/js/popper.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	



	<script type="text/javascript" src="Scripts/script_webTimbrado.js"></script>
	<script type="text/javascript" src="Scripts/script_Utiles.js"></script>


	<script type="text/javascript">
		
	 $("#selCliente").change(function(event)
	  {
	 	/* Act on the event */


	 		fnSetSerieFolio($("#selCliente option:selected").text(),fnObtenerMesAño())
	 	
	  }
	  );

	</script>

	
</body>
</html>