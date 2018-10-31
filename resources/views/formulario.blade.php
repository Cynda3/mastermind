<!DOCTYPE html>
<html>
<head>
	<title>MasterMind</title>
</head>
<body>
	<h1>¡Bienvenido al Mastermind!</h1>

	<div>
		<img src="/images/1.png" width="32px" height="32px">
		<img src="/images/2.png" width="32px" height="32px">
		<img src="/images/3.png" width="32px" height="32px">
		<img src="/images/4.png" width="32px" height="32px">
		<img src="/images/5.png" width="32px" height="32px">
		<img src="/images/6.png" width="32px" height="32px">
		<img src="/images/7.png" width="32px" height="32px">
		<img src="/images/8.png" width="32px" height="32px">

	</div>
	<form action="mastermind" method="POST">
		@csrf
		Nombre: <input type="text" name="nombre">
		<p>Longitud de la clave:</p>
		<input type="radio" name="longitud" value="4">4<input type="radio" name="longitud" value="5">5
		<p>Numero de items posibles:</p>
		<input type="radio" name="items" value="4">4<input type="radio" name="items" value="5">5<input type="radio" name="items" value="6">6<input type="radio" name="items" value="7">7<input type="radio" name="items" value="8">8
		<p>Permitir repetidos:</p>
		<input type="radio" name="Repetidos" value="Si">Si<input type="radio" name="Repetidos" value="No">No
		<p>Numero de intentos:</p>
		<select name="Nintentos">
			<option value="8">8</option>
			<option value="10">10</option>
			<option value="12">12</option>
		</select></br>
		<input type="submit" name="Iniciar la partida" value="Iniciar partida">
	</form>
</body>
</html>