@extends('layouts.layouts')

@section('content')
<div class="container-fluid pt-4">
    
    <div class="row mb-4">
        <div class="col-md-12">
            <form action="{{ route('articles.index') }}" method="GET">
                <div class="input-group input-group-lg shadow-sm">
                    <input type="text" name="query" class="form-control" placeholder="Cari artikel edukasi di sini..." value="{{ $keyword ?? '' }}">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">🔍 Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success shadow-sm">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger shadow-sm">{{ session('error') }}</div>
    @endif

    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3 class="card-title font-weight-bold mb-0">Artikel Terbaru</h3>
                    @if(strtolower(auth()->user()->role) === 'guru' || strtolower(auth()->user()->role) === 'admin')
                        <a href="{{ route('articles.create') }}" class="btn btn-sm btn-success ml-auto">
                            ➕ Tulis Artikel Baru
                        </a>
                    @endif
                </div>
                <div class="card-body">
                    @forelse($articles as $article)
                        <div class="border-bottom mb-4 pb-3">
                            <h4 class="text-primary font-weight-bold">{{ $article->title }}</h4>
                            <p class="text-muted small">Penulis: {{ $article->author }} | Kategori: {{ $article->category }} | {{ $article->created_at->diffForHumans() }}</p>
                            <p>{{ Str::limit($article->content, 180) }}</p>
                            <a href="{{ route('articles.show', $article->id) }}" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                        </div>
                    @empty
                        <p class="text-center text-muted py-4">Tidak ada artikel yang ditemukan.</p>
                    @endforelse
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-danger">
                <div class="card-header bg-danger text-white">
                    <h3 class="card-title mb-0">🔥 Artikel Trending</h3>
                </div>
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush">
                        @forelse($trendingArticles as $trend)
                            <li class="list-group-item py-3">
                                <a href="{{ route('articles.show', $trend->id) }}" class="font-weight-bold text-dark d-block mb-1">{{ $trend->title }}</a>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="small text-muted">Oleh: {{ $trend->author }}</span>
                                    <span class="badge badge-warning">{{ $trend->views ?? 0 }} Views</span>
                                </div>
                            </li>
                        @empty
                            <li class="list-group-item p-3 text-center text-muted">Belum ada materi populer.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection