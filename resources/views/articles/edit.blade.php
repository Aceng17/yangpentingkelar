@extends('layouts.layouts')

@section('content')

<h1 class="mb-4">✏️ Edit Artikel</h1>

<div class="card shadow-sm">

```
<div class="card-body">

    <form action="{{ route('articles.update', $article->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Judul</label>
            <input type="text"
                   name="title"
                   class="form-control"
                   value="{{ $article->title }}">
        </div>

        <div class="mb-3">
            <label>Author</label>
            <input type="text"
                   name="author"
                   class="form-control"
                   value="{{ $article->author }}">
        </div>

        <div class="mb-3">
            <label>Kategori</label>
            <input type="text"
                   name="category"
                   class="form-control"
                   value="{{ $article->category }}">
        </div>

        <div class="mb-3">
            <label>Konten</label>
            <textarea
                name="content"
                class="form-control"
                rows="6">{{ $article->content }}</textarea>
        </div>

        <button class="btn btn-success">
            Update Artikel
        </button>

        <a href="{{ route('articles.index') }}"
           class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>
```

</div>

@endsection
