@extends('layouts.app')

@section('content')
<div class="container">
    <h1>FORM</h1>

    {{-- elenco di tutti gli errori eventuali --}}

    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error )
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>

    @endif
    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Titolo">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Contenuto del post</label>
            <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
            </div>
        <button type="submit" class="btn btn-primary">Invia</button>
    </form>
</div>
@endsection
