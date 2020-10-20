@extends('../layouts.app')
@section('content')
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="exampleFormControlInput1">Titolo</label>
            <input type="text" name="title" id="exampleFormControlInput1" class="form-control" id="exampleFormControlInput1"
                placeholder="Il tuo titolo qui">
        </div>
        <div class="form-group">
            <label for="user_id">User</label>
            <select class="form-control" name="user_id" id="user_id">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->id }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="body" rows="10"></textarea>
        </div>
        <input type="submit" value="submit" class="btn btn-primary">
    </form>
@endsection
