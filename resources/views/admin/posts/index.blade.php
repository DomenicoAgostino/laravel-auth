@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Elenco Post</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Azioni</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post )
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td><a class="btn btn-warning" href="{{ route('admin.posts.show', $post) }}">VEDI</a></td>
            </tr>
            @endforeach
        </tbody>
        </table>

        {{ $posts->links() }}

</div>
@endsection
