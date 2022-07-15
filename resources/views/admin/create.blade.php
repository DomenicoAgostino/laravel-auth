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
        <input type="text" value="{{ old('title') }}" class="form-control @error('title')

        @enderror" id="title" name="title" placeholder="Titolo">
        @error('title')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        </div>
        <p class="text-danger" id="error-title"></p>
        <div class="mb-3">
            <label for="title" class="form-label">Contenuto del post</label>
            <textarea class="form-control @error('content') is-invalid {{ old('content')

            @enderror" name="content" id="content" cols="30" rows="10"></textarea>
            </div>
        <button type="submit" class="btn btn-primary">Invia</button>
    </form>
</div>
@endsection
