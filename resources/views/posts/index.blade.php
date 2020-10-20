@extends('../layouts.app')
@section('content')
    @if (session('success'))
        <div class="alert alert-success  d-flex justify-content-center align-items-center flex-row" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @foreach ($posts as $post)
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->body }}</p>
        </div>
    @endforeach
@endsection
