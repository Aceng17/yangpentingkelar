@extends('layouts.layouts')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h1>📚 Daftar Artikel</h1>

        <span class="badge bg-primary">
            Total Artikel: {{ $articles->count() }}
        </span>
    </div>

    <a href="{{ route('articles.create') }}"
       class="btn btn-primary">
        + Tambah Artikel
    </a>

</div>

<div class="card shadow-sm">

    <div class="card-body">

        <table class="table table-striped table-hover">

            <thead class="table-dark">

                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Author</th>
                    <th>Kategori</th>
                    <th width="180">Aksi</th>
                </tr>

            </thead>

            <tbody>

            @forelse($articles as $article)

                <tr>

                    <td>{{ $article->id }}</td>

                    <td>
                        <strong>{{ $article->title }}</strong>
                    </td>

                    <td>{{ $article->author }}</td>

                    <td>
                        <span class="badge bg-success">
                            {{ $article->category }}
                        </span>
                    </td>

                    <td>

                        <a href="{{ route('articles.show',$article->id) }}"
                        class="btn btn-info btn-sm">
                        Detail
                        </a>

                        <a href="{{ route('articles.edit',$article->id) }}"
                        class="btn btn-warning btn-sm">
                        Edit
                        </a>

                        <form action="{{ route('articles.destroy',$article->id) }}"
                            method="POST"
                            class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin hapus artikel?')">
                                Hapus
                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="5" class="text-center text-muted">

                        Belum ada artikel 😢

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection