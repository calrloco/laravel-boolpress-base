@extends('../layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $user->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $user->email }}</h6>
            <p class="card-text">{{ $user->avatar->avatar }}</p>
            <h6>User Post</h6>
            @foreach ($user->posts as $post)
            <p class="card-text">{{ $post->title }}</p>
            <p class="card-text">{{ $post->body }}</p>
            @endforeach
            <form action="{{ route('users.destroy', $user->id) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger" value="cancella">
            </form>
        </div>
    </div>
@endsection
