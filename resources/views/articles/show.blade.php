@extends('layouts.layouts')

@section('content')

<div class="card">

    <div class="card-header">
        <h3>{{ $article->title }}</h3>
    </div>

    <div class="card-body">

        <p>
            <strong>Author:</strong>
            {{ $article->author }}
        </p>

        <p>
            <strong>Kategori:</strong>
            {{ $article->category }}
        </p>

        <hr>

        <p>
            {{ $article->content }}
        </p>

        <a href="{{ route('articles.index') }}"
           class="btn btn-secondary">
           Kembali
        </a>

    </div>

</div>

@endsection