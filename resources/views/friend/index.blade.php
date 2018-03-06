@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="column is-8 is-offset-2">
			<div class="panel">
				<div class="panel-heading">
					Lista de Amigos
				</div>
				@forelse($friends as $friend)
				<div class="panel-block">
					{{ $friend->name }}
				</div>
				@empty
				<div class="panel-block">
					No tienes ningun amigo
				</div>
				@endforelse
			</div>
		</div>
	</div>
@endsection