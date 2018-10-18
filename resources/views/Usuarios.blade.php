{{$texto}}

@if ($checagem == true)
	Checagem = true

@else
	Checagem = false

@endif

<br/> <!--quebra de linha-->

@foreach($usuarios as $usuarios)
	{{ $usuarios }} <br/>

@endforeach