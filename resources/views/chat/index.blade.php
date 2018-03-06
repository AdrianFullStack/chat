@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="column is-8 is-offset-2">
			<div class="panel">
				<div class="panel-heading">
					Lista de Amigos
				</div>
				@forelse($friends as $friend)
				<a href="{{ route('chat.show', $friend->id) }}" class="panel-block">
					{{ $friend->name }}
				</a>
				@empty
				<div class="panel-block">
					No tienes ningun amigo
				</div>
				@endforelse
			</div>
		</div>
	</div>
@endsection