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


<div class="container">
	
	<div class="row">
		
		<div class="col-12 col-sm-10 col-lg-10 mx-auto py-5">
			
			<form method="POST" action="{{route('NuestraExperiencia.store')}}" enctype="multipart/form-data" class="bg-white shadow rounded-lg py-3 px-5" onsubmit="return checkSubmit();">
			
				<h2>Añadir Nueva Nota</h2>
					<hr>
			
				@include('BlogDC._form')

				<button class="btn btn-dark btn-lg btn-block my-4" id="btsubmit" type="submit">Publicar Nota</button>
			
			</form>

		</div>

	</div>



</div>

<script type="application/javascript">
	
	function checkSubmit() 
	{

			document.getElementById("btsubmit").innerHTML='Publicando Nota...';
	    	document.getElementById("btsubmit").disabled = true;
	    	return true;			



	}

</script>


@endsection