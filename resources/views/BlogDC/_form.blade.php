@csrf {{-- TOKEN DE SEGURIDAD EN FORMULARIOS --}}

<div class="form-row">
	
	<div class="form-group col-md-6">	

		<label for="titulo">Título de la Nota</label>

		<input class="form-control shadow-sm @error('titulo') is-invalid @enderror " 
		id="titulo"
	   	type="text" 
	   	name="titulo"
	   	value="{{ old('titulo', $BlogModelo->titulo) }}">

		@error('titulo')

			<span class="invalid-feedback" role="alert">
				
				<strong>{{$message}}</strong>

			</span>

		@enderror
	</div>
	

</div>


<div class="form-row">
	
	<label for="url_blog">URL Nota</label>
	
		<div class="input-group mb-3">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="basic-addon3">https://estudiolegaldc.com/NuestraExperiencia/</span>
		  </div>
		 <input class="form-control shadow-sm @error('url_blog') is-invalid @enderror " 
				id="url_blog"
			   	type="text" 
			   	name="url_blog"
			   	value="{{ old('url_blog', $BlogModelo->url_blog) }}">

		@error('url_blog')

			<span class="invalid-feedback" role="alert">
				
				<strong>{{$message}}</strong>

			</span>

		@enderror
		</div>		

</div>


<div class="form-row">
	
	<div class="form-group col-md-12">

		<label for="descripcion">Descripción de la Nota</label>

		<input class="form-control shadow-sm @error('descripcion') is-invalid @enderror " 
		id="descripcion"
	   	type="text" 
	   	name="descripcion"
	   	value="{{ old('descripcion',$BlogModelo->descripcion)}}">

		@error('descripcion')

			<span class="invalid-feedback" role="alert">
				
				<strong>{{$message}}</strong>

			</span>

		@enderror
		

	</div>

</div>


<div class="form-row">
	
		<label>Ingrese el contenido de la nota</label>

			<textarea class="form-control shadow-sm @error('contenido') is-invalid @enderror" 
					  placeholder="Ingrese texto aquí..." 
					  rows="15"
					  name="contenido">{{old('contenido',$BlogModelo->contenido)}}</textarea>

			<p id="descripcion_hecho_count"></p>

		@error('contenido')

			<span class="invalid-feedback" role="alert">
				
				<strong>{{$message}}</strong>

			</span>

		@enderror

</div>