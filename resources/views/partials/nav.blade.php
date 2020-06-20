  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="/">Estudio Legal DC</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     
      <div class="collapse navbar-collapse" id="navbarResponsive">
       
        <ul class="navbar-nav ml-auto my-2 my-lg-0">

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{route('Index')}}">Inicio</a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{route('Nosotros')}}">Nosotros</a>
          </li>

      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle"s data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Servicios
        </a>

        <ul class="dropdown-menu" >
            
            <li><a class="dropdown-item" href="{{route('Civil')}}" >Derecho Civil</a></li>
            <li><a class="dropdown-item" href="{{route('Mercantil')}}" >Derecho Mercantil</a></li>
            <li><a class="dropdown-item" href="{{route('Familiar')}}" >Derecho Familiar</a></li>
            <li><a class="dropdown-item" href="{{route('Internacional')}}" >Derecho Internacional Privado</a></li>
            <li><a class="dropdown-item" href="{{route('Laboral')}}" >Derecho Laboral</a></li>
            <li><a class="dropdown-item" href="{{route('Penal')}}" >Derecho Penal</a></li>
          
        </ul>

      </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{route('MisionVision')}}">Misión | Visión</a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{route('NuestraExperiencia.index')}}">Nuestra Experiencia</a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Contáctanos</a>
          </li>

        @guest
        
{{--        <li class="nav-item {{setActive('login')}}"><a class="nav-link" href="{{route('login')}}">Ingresar</a></li>
 --}}       
          @else

          <li class="nav-item dropdown">
            
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-power-off" aria-hidden="true"></i> <b class="caret"></b></a>

            <ul class="dropdown-menu">

              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a></li>
            </ul>

          </li>

          @endguest 


        </ul>

      </div>
    </div>
  </nav>
  
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

