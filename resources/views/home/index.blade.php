@extends('layout')
@section('pagina_titulo', 'HOME')
@section('pagina_conteudo')

<div class="container">
	<div class="row">
	{{-- @foreach($registros as $registro)
		<div class="col s12 m6 l4">
			<div class="card medium">
				<div class="card-image">
					<img src="{{ $registro->imagem }}">
				</div>
				<div class="card-content">
					<span class="card-title grey-text text-darken-4 truncate" title="{{ $registro->nome }}">{{ $registro->nome }}</span>
				</div>
				<div class="card-action">
					<span class="blue-text" href="{{ route('produto', $registro->id) }}">Veja mais informações</span>
				</div>
			</div>
		</div>
	@endforeach --}}
	</div>
</div>
@endsection