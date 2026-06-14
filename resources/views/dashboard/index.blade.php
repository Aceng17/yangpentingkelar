@extends('layouts.layouts')

@section('content')

<div class="p-4">

    <div class="welcome-banner">

        <h2>
            Selamat Datang,
            {{ Auth::user()?->name }}
        </h2>

        <p>
            Semangat belajar hari ini.
        </p>

    </div>

    <div class="row mt-4">

        <div class="col-md-3">
            <div class="card p-3">
                Artikel
                <h2>{{ $totalArtikel }}</h2>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-3">
                Pertanyaan
                <h2>{{ $totalQuestion }}</h2>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-3">
                Quiz
                <h2>{{ $totalQuiz }}</h2>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-3">
                Nilai
                <h2>85</h2>
            </div>
        </div>

    </div>

</div>

@endsection