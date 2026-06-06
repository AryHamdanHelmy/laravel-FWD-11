@extends('layouts.app')

@section('title', $title)

@section('styles')
<style>
    .about-section {
        background: white;
        padding: 2.5rem;
        border-radius: 16px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        margin-bottom: 2rem;
    }
    .about-section h2 {
        color: #ff6b6b;
        margin-bottom: 1rem;
        font-size: 1.5rem;
        border-bottom: 2px solid #f0f0f0;
        padding-bottom: 0.5rem;
    }
    .about-section p { color: #555; line-height: 1.8; font-size: 1rem; }

    .skills-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
        gap: 1rem;
        margin-top: 1rem;
    }
    .skill-tag {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 0.7rem 1rem;
        border-radius: 8px;
        text-align: center;
        font-size: 0.9rem;
        font-weight: 500;
        transition: transform 0.2s;
    }
    .skill-tag:hover { transform: translateY(-2px); }

    .timeline {
        margin-top: 1rem;
    }
    .timeline-item {
        display: flex;
        gap: 1.5rem;
        padding: 1.2rem 0;
        border-bottom: 1px solid #eee;
    }
    .timeline-item:last-child { border-bottom: none; }
    .timeline-year {
        min-width: 120px;
        color: #ff6b6b;
        font-weight: bold;
        font-size: 0.9rem;
    }
    .timeline-content h4 { color: #333; margin-bottom: 0.2rem; }
    .timeline-content p { color: #888; font-size: 0.9rem; }
</style>
@endsection

@section('content')
    <div class="about-section">
        <h2>📖 Deskripsi</h2>
        <p>{{ $deskripsi }}</p>
    </div>

    <div class="about-section">
        <h2>🛠️ Keahlian Teknis</h2>
        <div class="skills-grid">
            @foreach($keahlian as $skill)
                <div class="skill-tag">{{ $skill }}</div>
            @endforeach
        </div>
    </div>

    <div class="about-section">
        <h2>💼 Riwayat Pekerjaan</h2>
        <div class="timeline">
            @foreach($pengalaman as $exp)
                <div class="timeline-item">
                    <div class="timeline-year">{{ $exp['tahun'] }}</div>
                    <div class="timeline-content">
                        <h4>{{ $exp['posisi'] }}</h4>
                        <p>{{ $exp['perusahaan'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
