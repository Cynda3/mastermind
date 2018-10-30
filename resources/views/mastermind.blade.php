<!DOCTYPE html>
<html>
<head>
	<title>Mastermind</title>
</head>
<body>
	<h1>¡Bienvenido a Mastermins!</h1>
	<form action="/mastermind" method="POST">
		@csrf
		<p>Introduce un codigo:</p>
		<select id="valor1">
			<option value="rojo">rojo</option>
			<option value="verde">verde</option>
			<option value="fuego">fuego</option>
			<option value="hielo">hielo</option>
			<option value="gigante">gigante</option>
			<option value="reina">reina</option>
			<option value="pingu">pingu</option>
			<option value="hoja">hoja</option>
		</select></br>
		<select id="valor2">
			<option value="rojo">rojo</option>
			<option value="verde">verde</option>
			<option value="fuego">fuego</option>
			<option value="hielo">hielo</option>
			<option value="gigante">gigante</option>
			<option value="reina">reina</option>
			<option value="pingu">pingu</option>
			<option value="hoja">hoja</option>
		</select></br>
		<select id="valor3">
			<option value="rojo">rojo</option>
			<option value="verde">verde</option>
			<option value="fuego">fuego</option>
			<option value="hielo">hielo</option>
			<option value="gigante">gigante</option>
			<option value="reina">reina</option>
			<option value="pingu">pingu</option>
			<option value="hoja">hoja</option>
		</select></br>
		<select id="valor4">
			<option value="rojo">rojo</option>
			<option value="verde">verde</option>
			<option value="fuego">fuego</option>
			<option value="hielo">hielo</option>
			<option value="gigante">gigante</option>
			<option value="reina">reina</option>
			<option value="pingu">pingu</option>
			<option value="hoja">hoja</option>
		</select></br>
		<input type="submit" name="comprobar" value="Comprobar">
	</form>
	<h2>Jugador:</h2>
	Intento: 
</body>
</html>