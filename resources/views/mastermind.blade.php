<!DOCTYPE html>
<html>
<head>
	<title>Mastermind</title>
</head>
<body>
	<h1>¡Bienvenido a Mastermind!</h1>
	<form action="jugar" method="POST">
		@csrf
		<p><b>Introduce un codigo:</b></p>
		<div>
			</br>
			<select id="valor1">
				<option value="rojo">rojo</option>
				<option value="verde">verde</option>
				<option value="fuego">fuego</option>
				<option value="hielo">hielo</option>
				<option value="gigante">gigante</option>
				<option value="reina">reina</option>
				<option value="pingu">pingu</option>
				<option value="hoja">hoja</option>
			</select>
			<select id="valor2">
				<option value="rojo">rojo</option>
				<option value="verde">verde</option>
				<option value="fuego">fuego</option>
				<option value="hielo">hielo</option>
				<option value="gigante">gigante</option>
				<option value="reina">reina</option>
				<option value="pingu">pingu</option>
				<option value="hoja">hoja</option>
			</select>
			<select id="valor3">
				<option value="rojo">rojo</option>
				<option value="verde">verde</option>
				<option value="fuego">fuego</option>
				<option value="hielo">hielo</option>
				<option value="gigante">gigante</option>
				<option value="reina">reina</option>
				<option value="pingu">pingu</option>
				<option value="hoja">hoja</option>
			</select>
			<select id="valor4">
				<option value="rojo">rojo</option>
				<option value="verde">verde</option>
				<option value="fuego">fuego</option>
				<option value="hielo">hielo</option>
				<option value="gigante">gigante</option>
				<option value="reina">reina</option>
				<option value="pingu">pingu</option>
				<option value="hoja">hoja</option>
			</select>
		</div>
		<div>
			</br></br>
			<input type="submit" name="comprobar" value="Comprobar">
		</div>
	</form>
	<h2>Jugador: {{$nombre}}</h2>
	Intento: x/{{$Nintentos}}
</body>
</html>