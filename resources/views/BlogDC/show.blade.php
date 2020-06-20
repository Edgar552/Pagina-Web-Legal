@extends('layout')

@section('content')

  <div class="page-section bg-primary" style="padding:2%">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0"></h2>
          
         
        </div>
      </div>
    </div>
  </div>


<div class="container" style="padding: 3rem 0">
	

	<div class="bg-white p-3 shadow rouded py-2">

		<div class="d-flex justify-content-between align-items-center">

			<a class="btn btn-dark" href="{{route('NuestraExperiencia.index')}}">Regresar</a>
	
				@auth
				
				<div class="btn-group">
					<a class="btn btn-secondary" href="{{ route('NuestraExperiencia.edit' , $BlogModelo) }}">Editar Información</a>
					
					<a class="btn btn-danger" href="#" onclick="return EliminarNota();">Eliminar</a>
				</div>
				
					<form id="delete-project" class="d-none" method="POST" href="{{ route('NuestraExperiencia.destroy' , $BlogModelo)}}">
						@csrf
						@method('DELETE')
					</form>
		
				@endauth	

		</div>	

<hr>
		<h2> {{$BlogModelo->titulo}} </h2>

		<p class="text-secondary"> {{$BlogModelo->descripcion}}</p>

		<p class="text-black-50">
			Publicado {{$BlogModelo->created_at->diffForHumans()}} por Lic. Israel Castro Domínguez	
		</p>
		
	</div>

<hr>
	<div class="bg-white p-3 shadow rouded py-2">

		<p class="text-secondary"> {{$BlogModelo->contenido}} </p>

	</div>

</div>

<script type="application/javascript">
	
	function EliminarNota()
	{

		var Seguridad=confirm("¿Desea eliminar permanentemente la nota?")

			if (Seguridad===true)

					 {

					 	document.getElementById('delete-project').submit();

					 }

					 else
					 {
					 	return false;
					 }
		
	}

</script>

@endsection