@extends('layouts.app')

@section('title', $title)

@section('styles')
<style>
    .hero-profile {
        text-align: center;
        padding: 3rem 1rem;
        background: white;
        border-radius: 16px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        margin-bottom: 2rem;
    }
    .avatar {
        width: 120px; height: 120px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3rem;
        margin: 0 auto 1.5rem;
        color: white;
    }
    .hero-profile h1 { font-size: 2rem; color: #333; margin-bottom: 0.5rem; }
    .hero-profile .subtitle { color: #888; font-size: 1.1rem; }
    .hero-profile .location { color: #667eea; margin-top: 0.5rem; font-size: 0.95rem; }
    .info-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-top: 2rem;
    }
    .info-card {
        background: white;
        padding: 1.5rem;
        border-radius: 12px;
        box-shadow: 0 2px 12px rgba(0,0,0,0.06);
        border-left: 4px solid #ff6b6b;
    }
    .info-card h3 { color: #ff6b6b; margin-bottom: 0.5rem; font-size: 1rem; text-transform: uppercase; letter-spacing: 1px; }
    .info-card p { color: #555; font-size: 0.95rem; }
</style>
@endsection

@section('content')
    <div class="hero-profile">
        <div class="avatar">👨‍💻</div>
        <h1>{{ $nama }}</h1>
        <p class="subtitle">{{ $pekerjaan }}</p>
        <p class="location">📍 {{ $lokasi }}</p>
    </div>

    <div class="info-cards">
        <div class="info-card">
            <h3>📝 Bio</h3>
            <p>{{ $bio }}</p>
        </div>
        <div class="info-card">
            <h3>🎯 Fokus</h3>
            <p>Web development menggunakan Laravel framework dengan praktik terbaik MVC, Eloquent ORM, dan Blade templating.</p>
        </div>
        <div class="info-card">
            <h3>🌱 Belajar</h3>
            <p>Saat ini mendalami Laravel 11, Livewire, dan ekosistem modern PHP untuk pengembangan aplikasi web yang scalable.</p>
        </div>
    </div>
@endsection
