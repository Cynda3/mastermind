<!DOCTYPE html>
<html>
<head>
	<title>MasterMind</title>
</head>
<body>
	<h1>¡Bienvenido al Mastermind!</h1>

	<div>
		<img src="/images/rojo.png" width="32px" height="32px">
		<img src="/images/verde.png" width="32px" height="32px">
		<img src="/images/fuego.png" width="32px" height="32px">
		<img src="/images/hielo.png" width="32px" height="32px">
		<img src="/images/gigante.png" width="32px" height="32px">
		<img src="/images/reina.png" width="32px" height="32px">
		<img src="/images/pingu.png" width="32px" height="32px">
		<img src="/images/hoja.png" width="32px" height="32px">

	</div>
	<form action="mastermind" method="POST">
		@csrf
		Nombre: <input type="text" name="nombre">
		<p>Longitud de la clave:</p>
		<input type="radio" name="longitus" value="4">4<input type="radio" name="longitud" value="5">5
		<p>Numero de champis posibles:</p>
		<input type="radio" name="champis" value="4">4<input type="radio" name="champis" value="5">5<input type="radio" name="champis" value="6">6<input type="radio" name="champis" value="7">7<input type="radio" name="champis" value="8">8
		<p>Permitir repetidos:</p>
		<input type="radio" name="Repetidos" value="Si">Si<input type="radio" name="Repetidos" value="No">No
		<p>Numero de intentos:</p>
		<input list="intentos" name="intentos">
		<datalist id="intentos">
			<option value="8">
			<option value="10">
			<option value="12">
		</datalist></br>
		<input type="submit" name="Iniciar la partida" value="Iniciar partida">
	</form>
</body>
</html>