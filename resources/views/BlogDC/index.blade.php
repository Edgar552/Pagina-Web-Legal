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

  <div class="row justify-content-center">
    
    <div class="col-lg-10 text-center">
	    
	      <h2 class="mt-0">ESTUDIO LEGAL DC, SOMOS EXCELENCIA</h2>
	      <hr class="divider my-3">
	     
	      <p class="text-muted mb-0" style="text-align: center">
	     <strong>Platícanos tus dudas, puedes contar con nosotros.</strong>

    </div>


  </div>
     @auth 
    	<a class="btn btn-dark btn-md" href="{{route('NuestraExperiencia.create')}}">Crear Nueva Nota</a>
     @endauth 

<hr>

	<h2>Conoce nuestras experiencias</h2>
<br>
@include('partials.messages')

	<ul class="list-group">
		@forelse($BlogModelo as $BlogList)

			<li class="list-group-item border-1 mb-2 shadow">
				

				<a class="d-flex justify-content-between align-items-center" href="{{route('NuestraExperiencia.show', $BlogList)}}">
					

					<span>{{$BlogList->titulo}}</span>

					<span class="text-secondary">Fecha de Publicación - {{$BlogList->created_at->format('d/m/Y')}}</span>

				</a>


			</li>

		@empty

			<li>No hay notas publicadas</li>


		@endforelse	

	</ul>

{{$BlogModelo->links()}}
</div>



@endsection