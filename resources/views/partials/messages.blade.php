

@if(session('SuccessMessage'))

<div class="alert alert-primary" role="alert" style="background-color: #8bceaf; color: #ffffff;">
	
	{{session('SuccessMessage')}}

	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		
		<span aria-hidden="true">&times;</span>

	</button>

</div>

@endif


@if(session('ErrorMessage'))

<div class="alert alert-primary" role="alert" style="background-color: red; color: #ffffff;">
	
	{{session('ErrorMessage')}}

	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		
		<span aria-hidden="true">&times;</span>

	</button>

</div>

@endif