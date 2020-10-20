@extends('../layouts.app')
@section('content')
    @if (session('cancella'))
    <div class="alert alert-danger  d-flex justify-content-center align-items-center flex-row" role="alert">
        {{ session('cancella') }}
      </div>
    @endif
    <h2 class="h2 display-4">Elenco Utenti</h2>
    @foreach ($users as $user)
        <div class="list-group">
            <a href="{{ route('users.show', $user->id) }}" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $user->name }}</h5>
                    <small>{{$user->created_at}}</small>
                </div>
                <p class="mb-1">{{ $user->email }}</p>
                <p class="mb-1">{{ $user->avatar->avatar }}</p>
            </a>
        </div>
    @endforeach

@endsection
