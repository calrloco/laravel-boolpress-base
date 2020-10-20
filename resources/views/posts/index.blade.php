@extends('../layouts.app')
@section('content')
@foreach ($posts as $post)
<div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <p class="card-text">{{ $post->body }}</p>
</div>
@endforeach
@endsection