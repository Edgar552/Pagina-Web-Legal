@extends('layout')



@section('content')


  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
       
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold" style="font-size:2.5em">
          SOMOS ABOGADOS ESPECIALISTAS, EXPERTOS EN MEDIACIÓN Y LITIGACIÓN DENTRO DEL ÁREA DEL DERECHO PRIVADO</h1>
          <hr class="divider my-4">
        </div>
        
        <div class="col-lg-10 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">

          Área en la que se determinan las consecuencias esenciales de los principales hechos y actos de la vida humana, así como la situación jurídica del ser humano en relación con sus semejantes o con respecto a los bienes y los intereses que atañen a su esfera jurídica; como consecuencia hemos forjado un enfoque claro, responsable y de gran sentido humanitario en beneficio de los derechos de las personas

          </p>
          
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#about">Ver Más</a>
        </div>


      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">Acerca de Nosotros</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">

          Estudio Legal DC es una empresa especializada en Derecho de daños, contando con un enfoque claro, responsable y de gran sentido sentido humanitario en beneficio de los derechos de las víctimas.
      	  </p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Nuestros Servicios</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">Servicios de Estudio Legal DC</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          
          <div class="mt-5">
            <a href="{{route('Familiar')}}"><i class="fas fa-4x fa-users text-primary mb-4"></i></a>
            
            <h3 class="h4 mb-2">Derecho Familiar</h3>
{{--               <p class="text-muted mb-0" style="text-align: justify">Asesoría, mediación, conciliación y litigación en temas relacionados con:</p>

              <br>

            	<p class="text-muted mb-0" style="text-align: left">I.- El Matrimonio</p>
            	<p class="text-muted mb-0" style="text-align: left">II.- Divorcio </p>
            	<p class="text-muted mb-0" style="text-align: left">III.- Violencia Familiar</p>
 --}}
         </div>
{{--          	<br>
          <a class="btn btn-dark btn-x2 js-scroll-trigger" href="/derecho_familiar" style="margin-top: 18%">Ver Más</a>        
         --}}
        </div>

        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <a href="{{route('Civil')}}"><i class="fas fa-4x fa-scroll text-primary mb-4"></i></a>
            	
            	<h3 class="h4 mb-2">Derecho Civil</h3>
{{--             
            	<p class="text-muted mb-0" style="text-align: justify">Asesoría y litigación en conflictos respecto a la relación de las personas con respecto a los bienes, como:</p>
            	<br>
            	<p class="text-muted mb-0" style="text-align: left">I.- La posesión</p>
            	<p class="text-muted mb-0" style="text-align: left">II.- La propiedad</p>
            	<p class="text-muted mb-0" style="text-align: left">III.- El Usufructo</p> --}}
          </div>
          		<br>

{{-- 
          		 <a class="btn btn-dark btn-x2 js-scroll-trigger" href="/derecho_civil" style="margin-top: 9%">Ver Más</a>
 --}}
        </div>
        
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <a href="{{route('Penal')}}"><i class="fas fa-4x fa-gavel text-primary mb-4"></i></a>
            <h3 class="h4 mb-2">Derecho Penal</h3>
{{--             
            <p class="text-muted mb-0" style="text-align: justify">Litigación en la defensa y representación de personas a quienes se les impute algún hecho delictivo, en cada una de las etapas del procedimiento, salidas alternas y mecanismos de aceleración en todas las etapas del procedimiento</p> --}}
          </div>
 {{--   		
   			   <br>
       		 <a class="btn btn-dark btn-x2 js-scroll-trigger" href="/derecho_penal"  style="margin-top: 9%">Ver Más</a>
 --}}
        </div>
        	

        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            
            <a href="{{route('Mercantil')}}"><i class="fas fa-4x fa-money-check-alt text-primary mb-4"></i></a>
            <h3 class="h4 mb-2">Derecho Mercantil</h3>
{{--             	
            	<p class="text-muted mb-0" style="text-align: justify">Asesoría y litigación en procedimientos que sirven para resolver conflictos derivadas de los actos que se relacionen con:</p>
            	<br>
            	<p class="text-muted mb-0" style="text-align: left">I.-La organización de las empresas</p>
            	<p class="text-muted mb-0" style="text-align: left">II.- La actividad del comerciante </p> --}}
            
          </div>
{{--           		<br>

          		 <a class="btn btn-dark btn-x2 js-scroll-trigger" href="/derecho_mercantil">Ver Más</a>
           --}}
          </div>

        </div>
 
 <div class="row">       
        <div class="col-lg-6 col-md-6 text-center">
          <div class="mt-5">
            
            <a href="{{route('Internacional')}}"><i class="fas fa-4x fa-globe-americas text-primary mb-4"></i></a>
            <h3 class="h4 mb-2" >Derecho Internacional Privado</h3>
{{--              
              <p class="text-muted mb-0" style="text-align: justify">Asesoría y litigación en procedimientos que sirven para resolver conflictos derivadas de los actos que se relacionen con:</p>
              <br>
              <p class="text-muted mb-0" style="text-align: left">I.-La organización de las empresas</p>
              <p class="text-muted mb-0" style="text-align: left">II.- La actividad del comerciante </p> --}}
            
          </div>
{{--              <br>

               <a class="btn btn-dark btn-x2 js-scroll-trigger" href="/derecho_mercantil">Ver Más</a>
           --}}
          </div>        

        <div class="col-lg-6 col-md-6 text-center">
          <div class="mt-5">
            
            <a href="{{route('Laboral')}}"><i class="fas fa-4x fa-hard-hat text-primary mb-4"></i></a>
            <h3 class="h4 mb-2">Derecho Laboral</h3>
{{--              
              <p class="text-muted mb-0" style="text-align: justify">Asesoría y litigación en procedimientos que sirven para resolver conflictos derivadas de los actos que se relacionen con:</p>
              <br>
              <p class="text-muted mb-0" style="text-align: left">I.-La organización de las empresas</p>
              <p class="text-muted mb-0" style="text-align: left">II.- La actividad del comerciante </p> --}}
            
          </div>
{{--              <br>

               <a class="btn btn-dark btn-x2 js-scroll-trigger" href="/derecho_mercantil">Ver Más</a>
           --}}
          </div>        
</div>
      </div>
    </div>
  </section>

    <section class="page-section bg-primary" id="mision">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">MISIÓN</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">

          Examinamos las circunstancias de las que derivan las lesiones a los derechos y los menoscabos a los intereses de quienes nos consultan, así como las posibles repercusiones a sus proyectos de vida, con el fin de materializar una reparación multidimensional que revierta cualquier daño material, personal, o moral, los presentes y futuros, partiendo de la premisa de que los bienes afectados, no son el objeto que merece la protección del Derecho, sino los intereses de las personas reflejados en la no afectación a sus derechos.

      	  </p>
         
        </div>
      </div>
    </div>
  
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">VISIÓN</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">

         Ser factor clave en el combate contra la impunidad de cualquier contravención a la ley,  que tengan como consecuencia lesiones de interés humano susceptibles de protección jurídica
          </p>
         
        </div>
      </div>
    </div>


  </section>

@endsection