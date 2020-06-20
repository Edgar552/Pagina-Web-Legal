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

		<div class="row">
			
			<div class="col-12 col-sm-10 col-lg-10 mx-auto">
				
		<form method="POST" action="{{route('NuestraExperiencia.update', $BlogModelo)}}" enctype="multipart/form-data"  class="bg-white shadow rounded-lg py-3 px-5"
		onsubmit="return checkSubmit();">
		
			<div class="d-flex justify-content-between align-items-center">

				<a class="btn btn-dark" href="{{route('NuestraExperiencia.index')}}">Regresar</a>
		
			</div>	
		<hr>	
	
			
			<h1>Actualizar Registro</h1>
			<hr>
			
			@method('PATCH') {{-- METODO PARA ACTUALIZAR UN DATO EN LARAVEL --}}

			@include('BlogDC._form') {{-- SE PUEDE MANDAR MEDIANTE UN ARRAY UNA INSTANCIA DEL BOTON, PERO ES OPCIONAL --}}

			<button class="btn btn-dark btn-lg btn-block my-4" id="btsubmit" type="submit" >Actualizar Nota</button>
		
		</form>

			</div>

		</div>

	
		

</div>

<script type="application/javascript">
	
	function checkSubmit() 
	{

			document.getElementById("btsubmit").innerHTML='Actualizando Nota...';
	    	document.getElementById("btsubmit").disabled = true;
	    	return true;			



	}

</script>



@endsection