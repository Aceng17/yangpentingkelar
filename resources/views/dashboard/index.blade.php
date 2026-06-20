@extends('layouts.layouts')

@section('content')
    <h2>Selamat Datang</h2>
    <p>Semangat belajar hari ini.</p>
    @endsection

@push('input-box')
    <div class="mx-auto" style="max-width: 800px;">
        <div class="input-group shadow-sm rounded-pill border overflow-hidden">
            <input type="text" id="articleInput" class="form-control border-0 px-4" placeholder="Buat artikel baru...">
            <button class="btn btn-primary px-4" id="sendBtn">Kirim</button>
        </div>
    </div>

    <script>
        document.getElementById('sendBtn').addEventListener('click', function() {
            @auth
                window.location.href = "{{ route('articles.create') }}";
            @else
                alert('Silakan Login Terlebih Dahulu!');
            @endauth
        });
    </script>
@endpush