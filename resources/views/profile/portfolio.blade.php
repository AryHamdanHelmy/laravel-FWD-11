@extends('layouts.app')

@section('title', $title)

@section('styles')
<style>
    .portfolio-header {
        text-align: center;
        margin-bottom: 2rem;
    }
    .portfolio-header h1 { color: #333; font-size: 2rem; margin-bottom: 0.5rem; }
    .portfolio-header p { color: #888; }

    .projects-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 1.5rem;
    }
    .project-card {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .project-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 30px rgba(0,0,0,0.15);
    }
    .project-header {
        background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%);
        padding: 1.5rem;
        color: white;
    }
    .project-header h3 { font-size: 1.2rem; margin-bottom: 0.3rem; }
    .project-header .year {
        display: inline-block;
        background: rgba(255,255,255,0.25);
        padding: 0.2rem 0.7rem;
        border-radius: 12px;
        font-size: 0.8rem;
    }
    .project-body {
        padding: 1.5rem;
    }
    .project-body p {
        color: #555;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 1rem;
    }
    .tech-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
    }
    .tech-tag {
        background: #f0f0f0;
        color: #667eea;
        padding: 0.3rem 0.8rem;
        border-radius: 15px;
        font-size: 0.8rem;
        font-weight: 500;
    }
    .project-footer {
        padding: 1rem 1.5rem;
        border-top: 1px solid #f0f0f0;
    }
    .project-footer a {
        color: #ff6b6b;
        text-decoration: none;
        font-weight: 500;
        font-size: 0.9rem;
    }
    .project-footer a:hover { text-decoration: underline; }
</style>
@endsection

@section('content')
    <div class="portfolio-header">
        <h1>🚀 Portofolio Proyek</h1>
        <p>Berikut adalah beberapa proyek yang telah saya kerjakan</p>
    </div>

    <div class="projects-grid">
        @foreach($projects as $project)
            <div class="project-card">
                <div class="project-header">
                    <h3>{{ $project['nama'] }}</h3>
                    <span class="year">{{ $project['tahun'] }}</span>
                </div>
                <div class="project-body">
                    <p>{{ $project['deskripsi'] }}</p>
                    <div class="tech-tags">
                        @foreach($project['teknologi'] as $tech)
                            <span class="tech-tag">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="project-footer">
                    <a href="{{ $project['link'] }}">🔗 Lihat Detail →</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
