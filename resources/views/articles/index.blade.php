@extends('layouts.layouts')

@section('content')

<h1>Daftar Artikel</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Author</th>
        <th>Kategori</th>
    </tr>

    @forelse($articles as $article)
    <tr>
        <td>{{ $article->id }}</td>
        <td>{{ $article->title }}</td>
        <td>{{ $article->author }}</td>
        <td>{{ $article->category }}</td>
    </tr>
    @empty
    <tr>
        <td colspan="4">Belum ada artikel</td>
    </tr>
    @endforelse

</table>

@endsection