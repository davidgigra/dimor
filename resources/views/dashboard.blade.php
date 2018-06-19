<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>dashborad</title>

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
                <a href="{{ route('auth.logout') }}">Salir</a>
          </div>
		</nav>


		<div class="card-body">
		<div class="container ms8">
			<table class="table" >
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Nombre</th>
			      <th scope="col">Ciudad</th>
			      <th scope="col">Cliente</th>
			      <th scope="col">Presupuesto</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach(Auth::user()->buldings as $bulding)
				    <tr>
				      <td scope="row">{{$cont++}}</td>
				      <td>{{$bulding->name}}</td>
				      <td>{{$bulding->city}}</td>
				      <td>{{$bulding->client}}</td>
				      <td><a class="btn btn-primary" href="{{ route('butgetview',$bulding->butget_id) }}">Ver</a></td>
				    </tr>
			    @endforeach
			  </tbody>
			</table>

			<!-- Button to Open the Modal -->
			<div class="card-body">
			  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
			    Nueva obra
			  </button>

		</div>
		</div>
		</div>


		  <!-- The Modal -->
		  <div class="modal fade" id="myModal">
		    <div class="modal-dialog">
		      <div class="modal-content">
		      
		        <!-- Modal Header -->
		        <div class="modal-header">
		          <h4 class="modal-title">Crear Obra</h4>
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		        </div>
		        
		        <!-- Modal body -->
		        <div class="modal-body">
		          <form method="POST" action="/in/butget">
		            {!! csrf_field() !!}
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Nombre de Obra</label>
                    <input type="text" class="form-control" id="NombreObra"  name="name" placeholder="Nombre de la Obra">
                  </div>
          		  
          		  <div class="form-group">
                    <label for="exampleFormControlInput1">Ciudad</label>
                    <input type="text" class="form-control" id="Ciudad" name="ciudad" placeholder="Nombre de la Ciudad">
                  </div>

                  <div class="form-group">
                    <label for="exampleFormControlInput1">Cliente</label>
                    <input type="text" class="form-control" id="Cliente" name="cliente" placeholder="Nombre del cliente">
                  </div>
                 
                  <div>
                  <div class="col-md-6 form-group">
                    <label for="dato">Dato a Calcular</label>
                    <select class="form-control" id="dato" name="dato" >
                      <option disabled selected>Seleccionar parametro</option>
                      <option value = "Terreno">Terreno</option>
                      <option>Costo Directo</option>
                      <option>Costo Indirecto</option>
                      <option>Urbanismo</option>
                      </select>
                    </div>
                    </div>

               
                  
                  <div class="form-group">
                    <div class="col-md-6">
                     <label for="valor">Valor</label>
                     <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                      </div>
                      <input type="number" class="form-control" id="valor" name="valor" placeholder="$ Valor">
                    </div>
                   </div>
                 </div>

                  <div class="form-group">
                    <div class="col-md-6">
                     <label for="valor">Otros costos</label>
                     <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                      </div>
                      <input type="number" class="form-control" id="otros" name="otros" placeholder="$ Valor">
                    </div>
                   </div>
                 </div>
                 
                <button type="submit" class="btn btn-primary">Crear</button>

                </form>
		        </div>
		        
		      </div>
		    </div>
		  </div>
		 
    </body>
</html>
