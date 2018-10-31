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
			</br>
		<div>
			@for ($i=0; $i < session()->get('longitud'); $i++)
            <select id="item">
                <option value="rojo">rojo</option>
                <option value="verde">verde</option>
                <option value="fuego">fuego</option>
                <option value="hielo">hielo</option>
                <option value="gigante">gigante</option>
                <option value="reina">reina</option>
                <option value="pingu">pingu</option>
                <option value="hoja">hoja</option>
            </select>
            @endfor
		</div>
		<div>
			</br></br>
			<input type="submit" name="comprobar" value="Comprobar">
		</div>
	</form>
	<h2>Jugador: {{session()->get('nombre')}}</h2>
	Intento: x/{{session()->get('Nintentos')}}
</body>
</html>