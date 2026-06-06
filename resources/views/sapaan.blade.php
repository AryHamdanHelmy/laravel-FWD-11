<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Sapaan - Laravel</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .card {
            background: white;
            padding: 3rem 4rem;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            text-align: center;
            max-width: 500px;
            width: 90%;
        }
        .card h1 { color: #333; margin-bottom: 1rem; font-size: 2rem; }
        .card .name { color: #667eea; font-size: 1.5rem; font-weight: bold; margin: 1rem 0; }
        .card .badge {
            display: inline-block;
            background: #667eea;
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 25px;
            font-size: 0.9rem;
            margin-top: 1rem;
        }
        .card .label { color: #888; font-size: 0.9rem; margin-top: 1.5rem; }
        .logo { font-size: 3rem; margin-bottom: 0.5rem; }
    </style>
</head>
<body>
    <div class="card">
        <div class="logo">🚀</div>
        <h1>Halo, {{ $nama }}!</h1>
        <p class="label">Materi hari ini:</p>
        <div class="name">{{ $materi }}</div>
        <span class="badge">Day 30 — Laravel</span>
    </div>
</body>
</html>
