<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Desain Kreatif</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --canva-purple: #8B3DFF;
            --canva-text: #0D1216;
            --canva-gray: #5F6368;
            --canva-light-gray: #F5F5F5;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }

        body {
            background-color: var(--canva-light-gray);
            color: var(--canva-text);
        }

        .about-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 80px 24px;
        }

        .about-header {
            text-align: center;
            margin-bottom: 64px;
            position: relative;
        }

        .about-header::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--canva-purple);
            border-radius: 2px;
        }

        .about-title {
            font-size: 3rem;
            font-weight: 700;
            color: var(--canva-text);
            margin-bottom: 16px;
            background: linear-gradient(45deg, var(--canva-purple), #FF6B6B);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .about-subtitle {
            font-size: 1.25rem;
            color: var(--canva-gray);
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 32px;
            margin: 64px 0;
        }

        .feature-card {
            background: white;
            padding: 32px;
            border-radius: 16px;
            text-align: center;
            transition: transform 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .feature-card:hover {
            transform: translateY(-8px);
        }

        .feature-icon {
            width: 64px;
            height: 64px;
            background: var(--canva-light-gray);
            border-radius: 50%;
            margin: 0 auto 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--canva-purple);
            font-size: 24px;
        }

        .feature-title {
            font-size: 1.5rem;
            color: var(--canva-text);
            margin-bottom: 16px;
        }

        .feature-text {
            color: var(--canva-gray);
            line-height: 1.6;
        }

        .stats-container {
            background: white;
            border-radius: 24px;
            padding: 48px;
            margin: 64px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 32px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--canva-purple);
            margin-bottom: 8px;
        }

        .stat-label {
            color: var(--canva-gray);
            font-size: 1rem;
        }

        .team-section {
            margin-top: 80px;
        }

        .section-title {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 48px;
            color: var(--canva-text);
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 32px;
        }

        .team-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-8px);
        }

        .team-image {
            width: 100%;
            height: 320px;
            object-fit: cover;
        }

        .team-info {
            padding: 24px;
            text-align: center;
        }

        .team-name {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--canva-text);
        }

        .team-role {
            color: var(--canva-purple);
            font-size: 1rem;
            font-weight: 500;
        }

        @media (max-width: 1024px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .feature-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .about-title {
                font-size: 2.5rem;
            }

            .feature-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }

            .about-container {
                padding: 40px 16px;
            }
        }
    </style>
</head>

<body>
    <div class="about-container">
        <div class="about-header">
            <h1 class="about-title">Kreasi Tanpa Batas</h1>
            <p class="about-subtitle">Memberdayakan setiap orang untuk mengekspresikan kreativitas mereka melalui desain yang memukau</p>
        </div>

        <div class="feature-grid">
            <div class="feature-card">
                <div class="feature-icon">🎨</div>
                <h3 class="feature-title">Desain Intuitif</h3>
                <p class="feature-text">Platform desain yang mudah digunakan untuk semua tingkat keahlian</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">💡</div>
                <h3 class="feature-title">Inspirasi Tanpa Batas</h3>
                <p class="feature-text">Ribuan template dan elemen desain untuk mewujudkan ide Anda</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🚀</div>
                <h3 class="feature-title">Kolaborasi Real-time</h3>
                <p class="feature-text">Bekerja bersama tim Anda dari mana saja, kapan saja</p>
            </div>
        </div>

        <div class="stats-container">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">100M+</div>
                    <div class="stat-label">Pengguna Aktif</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">500K+</div>
                    <div class="stat-label">Template</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">190+</div>
                    <div class="stat-label">Negara</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">1B+</div>
                    <div class="stat-label">Desain Dibuat</div>
                </div>
            </div>
        </div>

        <div class="team-section">
            <h2 class="section-title">Tim Kreatif Kami</h2>
            <div class="team-grid">
                <div class="team-card">
                    <img src="/api/placeholder/400/320" alt="Creative Director" class="team-image">
                    <div class="team-info">
                        <h3 class="team-name">Ali Mubaroq</h3>
                        <p class="team-role">Creative Director</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>