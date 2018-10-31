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
            <select id="{{$i}}">
            	@for ($j=0; $j < session()->get('items'); $j++)
                <option value="{{$j}}">{{$j}}</option>
                @endfor
            </select>
            @endfor
		</div>
			</br></br>
		<div>
			<input type="submit" name="comprobar" value="Comprobar">
		</div>
	</form>
	<h2>Jugador: {{session()->get('nombre')}}</h2>
	Intento: x/{{session()->get('Nintentos')}}
</body>
</html>