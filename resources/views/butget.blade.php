<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>Presupuesto</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

	
        <!-- Styles -->
        <style>


            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .flex-center-table {
                
            }


        </style>
    </head>
    <body>
    	
    	<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
		  <a class="navbar-brand" href="{{ url('/') }}" >Dimor</a>
		  <div class="top-right links">
                <a href="{{ route('in.dashboard') }}">olver</a>
          </div>
		</nav>


		<div class="card-body">
		<div class="container ms8">
			<table class="table" >
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Parametro</th>
			      <th scope="col">Costo</th>
			    </tr>
			  </thead>
			  <tbody>
				    <tr>
				      <td scope="row">1</td>
				      <td>Costo Directo</td>
				      <td>{{$butget->totalProyecto/2}}</td>
				    </tr>
				    <tr>
				      <td scope="row">2</td>
				      <td>Costo Indirecto</td>
				      <td>{{$butget->totalProyecto/5}}</td>
				    </tr>
				    <tr>
				      <td scope="row">3</td>
				      <td>Urbanismo</td>
				      <td>{{$butget->totalProyecto/10}}</td>
				    </tr>
				    <tr>
				      <td scope="row">4</td>
				      <td>Terreno</td>
				      <td>{{$butget->totalProyecto/10}}</td>
				    </tr>
				    <tr>
				      <td scope="row">5</td>
				      <td>Utilidad</td>
				      <td>{{$butget->totalProyecto/10}}</td>
				    </tr>
				    <tr>
				      <td scope="row">6</td>
				      <td>Otros</td>
				      <td>{{$butget->otros}}</td>
				    </tr>
				    <tr>
				      <td scope="row">7</td>
				      <td>Costo total del proyecto</td>
				      <td>{{$butget->totalProyecto+$butget->otros}}</td>
				    </tr>
			  </tbody>
			</table>



		