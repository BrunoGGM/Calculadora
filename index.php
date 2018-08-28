<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="description" content="Google Address Autocomplete API, google search autocomplete api, google jquery autocomplete, google places autocomplete jquery, google maps autocomplete tutorial, google autofill api">
		<meta name="keywords" content="Google Address Autocomplete API, google search autocomplete api, google jquery autocomplete, google places autocomplete jquery, google maps autocomplete tutorial, google autofill api">
		<meta name="author" content="https://plus.google.com/+MuniAyothi/">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,200' rel='stylesheet' type='text/css'>
	<!--Import materialize.css-->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
	<link rel="stylesheet" href="css/master.css">
	<link rel="stylesheet" href="css/animate.css">
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/angular.min.js"></script>
	<script type="text/javascript" src="js/event.js"></script>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body >

	<main class="row">

		<div class="col s12"><img src="img/ArqCubo.png" class='logo' alt=""></div>
		<div class="col s12 m10 push-s6 push-m6 centrado center" action="" method="get">

			<div id="Pregunta1">
				<h3 class="center titulo animated slideInUp"> ¿Qué nivel de calidad se encuentra buscando en los acabados? </h3>
				<div id="repuestas">
					<label for="media">
						<div class="col s6 m3 center center-align animated flipInX opcion">
							<center><img src="img/media.png" alt=""></center>
							<span>Media</span>
						</div>
						<input name="Pregunta1" type="radio" id="media" value="7500" class="uno" />
					</label>			

					<label for="media-alta">
						<div class="col s6 m3 center center-align animated flipInX opcion">
							<center><img src="img/media-alta.png" alt=""></center>
							<span>Media Alta</span>
						</div>
						<input name="Pregunta1" type="radio" id="media-alta" value="8000" class="uno" />
					</label>

					<label for="alta">
						<div class="col s6 m3 center center-align animated flipInX opcion">
							<center><img src="img/alta.png" alt="">	</center>
							<span>Alta</span>
						</div>
						<input name="Pregunta1" type="radio" id="alta" value="9000" class="uno" />
					</label>

					<label for="lujo">
						<div class="col s6 m3 center center-align animated flipInX opcion">
							<center><img src="img/lujo.png" alt="">	</center>
							<span>Lujo</span>
						</div>
						<input name="Pregunta1" type="radio" id="lujo" value="11000" class="uno" />
					</label>	
				</div>
			</div>


			<div id="Pregunta2" class="hide">
				<h3 class="center titulo animated slideInUp">¿Con que tipo de terreno cuenta?</h3>
				<div id="repuestas">
					<label for="ascendente">
						<div class="col s6 m3 center center-align animated flipInX opcion">
							<center><img src="img/ascendente.png" alt=""></center>
							<span>Ascendente </span>
						</div>
						<input name="Pregunta2" type="radio" id="ascendente" value="1.05" class="dos" />

					</label>

					<label for="descendente">
						<div class="col s6 m3 center center-align animated flipInX opcion">
							<center><img src="img/descendente.png" alt="">	</center>
							<span>Descendente</span>
						</div>
						<input name="Pregunta2" type="radio" id="descendente" value="1.1" class="dos" />

					</label>

					<label for="inclinado">
						<div class="col s6 m3 center center-align animated flipInX opcion">
							<center><img src="img/inclinado.png" alt="">	</center>
							<span>Inclinado</span>
						</div>
						<input name="Pregunta2" type="radio" id="inclinado" value="1.2" class="dos" />
					</label>

					<label for="plano">
						<div class="col s6 m3 center center-align animated flipInX opcion">
							<center><img src="img/plano.png" alt=""></center>
							<span>Plano</span>
						</div>
						<input name="Pregunta2" type="radio" id="plano" value="1" checked="checked" class="dos" />
					</label>	
				</div>	
			</div>


			<div id="Pregunta3" class="hide">
				<h3 class="center titulo animated slideInUp">¿Qué tanta inclinación tiene el terreno?</h3>
				<div id="repuestas">

					<label for="poco">	
						<div class="col s6 m4 center center-align animated flipInX opcion">
							<center><img src="img/poco.png" alt=""></center>
							<span>Poco </span>
						</div>
						<input name="Pregunta3" type="radio" id="poco" value="1.05" class="tres" />
					</label>

					<label for="regular">
						<div class="col s6 m4 center center-align animated flipInX opcion">
							<center><img src="img/regular.png" alt="">	</center>
							<span>Regular</span>
						</div>
						<input name="Pregunta3" type="radio" id="regular" value="1.1" class="tres" />
					</label>

					<label for="demasiado">
						<div class="col s12 m4 center center-align animated flipInX opcion">
							<center><img src="img/demasiado.png" alt="">	</center>
							<span>Demasiado</span>
						</div>
						<input name="Pregunta3" type="radio" id="demasiado" value="1.2" class="tres" />
					</label>

				</div>	
			</div>
			

			<div id="Pregunta4" class="hide">
				<h3 class="center titulo animated slideInUp">¿Deseas detallar los  m² por secciones del inmueble?</h3>
				<div id="repuestas">

					<label for="si">
						<div class="col s6 m6 center center-align animated flipInX opcion">
							<center><img src="img/si.png" alt=""></center>
							<span>Si</span>
						</div>
						<input name="Pregunta4" type="radio" id="si" value="si" class="cuatro" />
					</label>

					<label for="no">
						<div class="col s6 m6 center center-align animated flipInX opcion ">
							<center><img src="img/no.png" alt="">	</center>
							<span>No</span>
						</div>
						<input name="Pregunta4" type="radio" id="no" value="no" class="cuatro" />
					</label>

				</div>	
			</div>
			

			<div id="Pregunta5B" class="hide">
				<h3 class="center titulo animated slideInUp">Metros  m² cuadrados con los que cuenta el terrero.</h3>
				<div id="repuestas">
					<input type="number" placeholder="m²" name="metros" id="metros" class="col s12 m6 push-m3 flipInX">
				</div>	
			</div>

			<div id='Resultado' class="hide"> 
				<h4 class='center titulo animated slideInUp'>Cotización: <span id="cotizacion"></span></h4>
				<div class="input-field col s12 m6 push-m3 push-l3">
					<form action="">
						<input placeholder="Correo electrónico" id="mail" type="email" class="validate" required>
						<label for="mail">Enviar cotización por correo electrónico</label>
						<input type="submit" class="btn" value="Enviar Cotización">
					</form>
				</div>
			</div>


		</div>

		<div id="ubicacion" class="hide container">
			<form class="col 12 z-depth-3">
				<h3>Ingrese la dirección del terreno</h3>

				<h6 class="col s12 grey-text">Dirección</h6>
				<input type="text" id="autocomplete" placeholder="Ingrese la ubicacion" onfocus="geolocate()" class="col s12 m9">
				<br>
				<h6 class="col s12 grey-text">Calle</h6>
				<input id="street_number" class="hide">
				<input class="col s12 m4" id="route">
				<h6 class="col s12 grey-text">Ciudad</h6>
				<input  class="col s12 m6" id="locality">
				<h6 class="col s12 grey-text">Estado</h6>
				<input class="col s12 m4" id="administrative_area_level_1">
				<h6 class="col s12 grey-text">País</h6>
				<input class="col s12 m6" id="country">
				<h6 class="col s12 grey-text">C.P.</h6>
				<input class="col s12 m4" id="postal_code">
			</form>
		</div>
		
			<div id="Pregunta5A" class="hide container" ng-app="">
				<h3 class="center titulo animated slideInUp">Detallar metros cuadrados</h3>
				<div id="detallado">

					<table>
						<thead>
							<tr>
								<th>Espacio</th>
								<th>Largo</th>
								<th>Ancho</th>
								<th>Total</th>

							</tr>
						</thead>

						<tbody>
							<tr style="background-color: #ececec;">
								<td><b>Garage</b></td>
								<td style="padding: 15px 0px;"></td>
								<td style="padding: 15px 0px;"></td>
								<td style="padding: 15px 0px;"></td>
							</tr>
							<tr>
								<td>GARAGE CUBIERTO</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="garagea"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="garagel" onkeyup="sumar()"></td>
								<td><input type="text" id="garage" value="{{garagea * garagel | number}}" disabled="true" ></td>
							</tr>
							<tr>
								<td>CTO. SERVICIO</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="servicioa"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="serviciol" onkeyup="sumar()"></td>
								<td><input type="text" id="servicio" value="{{servicioa * serviciol | number}}" disabled="true"></td>
							</tr>
							<tr style="background-color: #ececec;"> 
								<td><b>PLANTA BAJA</b></td>
								<td style="padding: 15px 0px;"></td>
								<td style="padding: 15px 0px;"></td>
								<td style="padding: 15px 0px;"></td>
							</tr>
							<tr>
								<td>SALA</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="salaa"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="salal" onkeyup="sumar()"></td>
								<td><input type="text" id="sala" value="{{salaa * salal | number}}" disabled="true"></td>
							</tr>
							<tr>
								<td>COMEDOR</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="comedora"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="comedorl" onkeyup="sumar()"></td>
								<td><input type="text" id="comedor" value="{{comedora * comedorl | number}}" disabled="true"></td>
							</tr>
							<tr>
								<td>COCINA</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="cocinaa"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="cocinal" onkeyup="sumar()"></td>
								<td><input type="text" id="cocina" value="{{cocinaa * cocinal | number}}" disabled="true"></td>
							</tr>
							<tr>
								<td>MEDIO BAÑO</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="mbanoa"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="mbanol" onkeyup="sumar()"></td>
								<td><input type="text" id="mbano" value="{{mbanoa * mbanol | number}}" disabled="true"></td>
							</tr>
							<tr>
								<td>ALACENA</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="alacenaa"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="alacenal" onkeyup="sumar()"></td>
								<td><input type="text" id="alacena" value="{{alacenaa * alacenal | number}}" disabled="true"></td>
							</tr>
							<tr>
								<td>BODEGA</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="bodegaa"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="bodegal" onkeyup="sumar()"></td>
								<td><input type="text" id="bodega" value="{{bodegaa * bodegal | number}}" disabled="true"></td>
							</tr>
							<tr>
								<td>SALA TV- FAMILY</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="salatva"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="salatvl" onkeyup="sumar()"></td>
								<td><input type="text" id="salatv" value="{{salatva * salatvl | number}}" disabled="true"></td>
							</tr>
							<tr>
								<td>AREA LAVADO</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="lavadoa"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="lavadol" onkeyup="sumar()"></td>
								<td><input type="text" id="lavado" value="{{lavadoa * lavadol | number}}" disabled="true"></td>
							</tr>
							<tr>
								<td>ESTUDIO</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="estudioa"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="estudiol" onkeyup="sumar()"></td>
								<td><input type="text" id="estudio" value="{{estudioa * estudiol | number}}" disabled="true"></td>
							</tr>
							<tr style="background-color: #ececec;"> 
								<td><b>PLANTA ALTA</b></td>
								<td style="padding: 15px 0px;"></td>
								<td style="padding: 15px 0px;"></td>
								<td style="padding: 15px 0px;"></td>
							</tr>
							<tr>
								<td>RECAMARA PRINCIPAL</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="recamarapa"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="recamarapl" onkeyup="sumar()"></td>
								<td><input type="text" id="recamarap" value="{{recamarapa * recamarapl | number}}" disabled="true"></td>
							</tr>
							<tr>
								<td>BAÑO</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="banopa"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="banopl" onkeyup="sumar()"></td>
								<td><input type="text" id="banop" value="{{banopa * banopl | number}}" disabled="true"></td>
							</tr>
							<tr>
								<td>VESTIDOR</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="vestidorpa"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="vestidorpl" onkeyup="sumar()"></td>
								<td><input type="text" id="vestidorp" value="{{vestidorpa * vestidorpl | number}}" disabled="true"></td>
							</tr>
							<tr>
								<td>RECAMARA 01</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="recamara1a"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="recamara1l" onkeyup="sumar()"></td>
								<td><input type="text" id="recamara1" value="{{recamara1a * recamara1l | number}}" disabled="true"></td>
							</tr>
							<tr>
								<td>BAÑO 01</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="bano1a"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="bano1l" onkeyup="sumar()"></td>
								<td><input type="text" id="bano1" value="{{bano1a * bano1l | number}}" disabled="true"></td>
							</tr>
							<tr>
								<td>VESTIDOR 01</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="vestidor1a"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="vestidor1l" onkeyup="sumar()"></td>
								<td><input type="text" id="vestidor1" value="{{vestidor1a * vestidor1l | number}}" disabled="true"></td>
							</tr>
							<tr>
								<td>RECAMARA 02</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="recamara2a"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="recamara2l" onkeyup="sumar()"></td>
								<td><input type="text" id="recamara2" value="{{recamara2a * recamara2l | number}}" disabled="true"></td>
							</tr>
							<tr>
								<td>BAÑO 02</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="bano2a"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="bano2l" onkeyup="sumar()"></td>
								<td><input type="text" id="bano2" value="{{bano2a * bano2l | number}}" disabled="true"></td>
							</tr>
							<tr>
								<td>VESTIDOR 02</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="vestidor2a"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="vestidor2l" onkeyup="sumar()"></td>
								<td><input type="text" id="vestidor2" value="{{vestidor2a * vestidor2l | number}}" disabled="true"></td>
							</tr>
							<tr>
								<td>RECAMARA 03</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="recamara3a"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="recamara3l" onkeyup="sumar()"></td>
								<td><input type="text" id="recamara3" value="{{recamara3a * recamara3l | number}}" disabled="true"></td>
							</tr>
							<tr>
								<td>BAÑO 03</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="bano3a"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="bano3l" onkeyup="sumar()"></td>
								<td><input type="text" id="bano3" value="{{bano3a * bano3l | number}}" disabled="true"></td>
							</tr>
							<tr>
								<td>VESTIDOR 03</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="vestidor3a"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="vestidor3l" onkeyup="sumar()"></td>
								<td><input type="text" id="vestidor3" value="{{vestidor3a * vestidor3l | number}}" disabled="true"></td>
							</tr>
							<tr>
								<td>DOBLE ALTURA</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="doblea"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="doblel" onkeyup="sumar()"></td>
								<td><input type="text" id="doble" value="{{doblea * doblel | number}}" disabled="true"></td>
							</tr>
							<tr style="background-color: #ececec;"> 
								<td><b>PLANTA NIVEL 2</b></td>
								<td style="padding: 15px 0px;"></td>
								<td style="padding: 15px 0px;"></td>
								<td style="padding: 15px 0px;"></td>
							</tr>
							<tr>
								<td>RECAMARA PRINCIPAL</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="recamarap2a"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="recamarap2l" onkeyup="sumar()"></td>
								<td><input type="text" id="recamarap2" value="{{recamarap2a * recamarap2l | number}}" disabled="true"></td>
							</tr>
							<tr>
								<td>BAÑO</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="banop2a"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="banop2l" onkeyup="sumar()"></td>
								<td><input type="text" id="banop2" value="{{banop2a * banop2l | number}}" disabled="true"></td>
							</tr>
							<tr>
								<td>VESTIDOR</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="vestidorp2a"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="vestidorp2l" onkeyup="sumar()"></td>
								<td><input type="text" id="vestidorp2" value="{{vestidorp2a * vestidorp2l | number}}" disabled="true"></td>
							</tr>
							<tr>
								<td>OTRO</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="otroa"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="otrol" onkeyup="sumar()"></td>
								<td><input type="text" id="otro" value="{{otroa * otrol | number}}" disabled="true"></td>
							</tr>							
							<tr>
								<td>BAÑO</td>
								<td><input type="number" placeholder="Largo (m)" ng-model="banopiso2a"></td>
								<td><input type="number" placeholder="Ancho (m)" ng-model="banopiso2l" onkeyup="sumar()"></td>
								<td><input type="text" id="banopiso2" value="{{banopiso2a * banopiso2l | number}}" disabled="true"></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td style="font-size: 2em">Total: </td>
								<td><input type="text" id="total" disabled="true" style="font-size: 2em"></td>
							</tr>
						</tbody>
					</table>										

				</div>	
			</div>


		<!--div class="center next pregunta2">
			<span>Siguiente</span>
			<i class="material-icons">keyboard_arrow_right</i>
		</div>

		<div class="center next pregunta3 hide">
			<span>Siguiente</span>
			<i class="material-icons">keyboard_arrow_right</i>
		</div>
		
		<div class="center next pregunta4 hide">
			<span>Siguiente</span>
			<i class="material-icons">keyboard_arrow_right</i>
		</div>

		<div class="center next pregunta5 hide">
			<span>Siguiente</span>
			<i class="material-icons">keyboard_arrow_right</i>
		</div-->

		<div class="center next calcularA hide">
			<span>Cotizar</span>
			<i class="material-icons">keyboard_arrow_right</i>
		</div>

		<div class="center next calcularB hide">
			<span>Cotizar</span>
			<i class="material-icons">keyboard_arrow_right</i>
		</div>

		<div class="center next continuar hide">
			<span>Continuar</span>
			<i class="material-icons">keyboard_arrow_right</i>
		</div>

	    <div class="center after regresar1 hide">
	    	<i class="material-icons">keyboard_arrow_left</i>
			<span>Anterior</span>
		</div>

		<div class="center after regresar2 hide">
	    	<i class="material-icons">keyboard_arrow_left</i>
			<span>Anterior</span>
		</div>

		<div class="center after regresar2a hide">
	    	<i class="material-icons">keyboard_arrow_left</i>
			<span>Anterior</span>
		</div>

		<div class="center after regresar3 hide">
	    	<i class="material-icons">keyboard_arrow_left</i>
			<span>Anterior</span>
		</div>

		<div class="center after regresar4a hide">
	    	<i class="material-icons">keyboard_arrow_left</i>
			<span>Anterior</span>
		</div>

		<div class="center after regresar4b hide">
	    	<i class="material-icons">keyboard_arrow_left</i>
			<span>Anterior</span>
		</div>

		<div class="center after regresar5b hide">
	    	<i class="material-icons">keyboard_arrow_left</i>
			<span>Anterior</span>
		</div>

		<div class="center after regresar5a hide">
	    	<i class="material-icons">keyboard_arrow_left</i>
			<span>Anterior</span>
		</div>

		<div class='col s12 footer'>
		<div class='left'>
			<a href=""><img src="img/003-facebook-black-social-button-circle.png" alt=""></a>
			<a href=""><img src="img/005-twitter-black-shape.png" alt=""></a>
			<a href=""><img src="img/004-google-plus-logo-on-black-background.png" alt=""></a>
			<a href=""><img src="img/002-youtube-logo.png" alt=""></a>
			<a href=""><img src="img/001-instagram-logopng" alt=""></a>
		</div>
			<div class='right'><a href="" class='grey-text'>Términos y Condiciones </a> | <a href="" class='grey-text'>Aviso de privacidad</a></div>		
		</div>
		
	</main>

	<!--footer class="page-footer">
        <div class="container">
          <div class="row">
            <div class="col l7 s12">
              <h5 class="white-text">Síguenos en redes sociales</h5>
              <a href=""><img src="img/003-facebook-black-social-button-circle.png" style="margin: 15px" height="64px" width="64px"></a>
              <a href=""><img src="img/005-twitter-black-shape.png" style="margin: 15px" height="64px" width="64px"></a>
              <a href=""><img src="img/001-instagram-logo.png" style="margin: 15px" height="64px" width="64px"></a>
              <a href=""><img src="img/002-youtube-logo.png" style="margin: 15px" height="64px" width="64px"></a>
              <a href=""><img src="img/004-google-plus-logo-on-black-background.png" style="margin: 15px" height="64px" width="64px"></a>
            </div>
            <div class="col l3 offset-l2 s12">
              <h5 class="acento"></h5>
              <br>
              <ul>
                <li><a class="grey-text text-lighten-3" href="">Terminos y Condiciones </a></li>
              </ul>
              <ul>
              	<li><a class="grey-text text-lighten-3" href=""> Aviso de Privacidad</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
            © 2017 Copyright Text
          </div>
        </div>
      </footer-->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQ6rgJr07nh5JB4X-WSrIxXTDe6LW8Qjs&v=3.exp&signed_in=true&libraries=places"></script>
<!--script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQ6rgJr07nh5JB4X-WSrIxXTDe6LW8Qjs&callback=initMap"
  type="text/javascript"></script-->
		<script src="js/map.js"> </script>
</body>	
</html>