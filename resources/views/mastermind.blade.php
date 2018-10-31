<!DOCTYPE html>
<html>
<head>
	<title>Mastermind</title>
</head>
<body>
	<h1>¡Bienvenido a Mastermind!</h1>
	<form action="juego" method="POST">
		@csrf
		<p><b>Introduce un codigo:</b></p>
			</br>
		<div>
			@for ($i=0; $i < session()->get('longitud'); $i++)
            <select name="{{$i}}">
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

	array: 
	{{var_dump(session()->get('UserKey'))}}
</body>
</html>