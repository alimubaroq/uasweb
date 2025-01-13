<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - Desain Kreatif</title>
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

        .contact-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 80px 24px;
        }

        .contact-header {
            text-align: center;
            margin-bottom: 64px;
            position: relative;
        }

        .contact-header::after {
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

        .contact-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 16px;
            background: linear-gradient(45deg, var(--canva-purple), #FF6B6B);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .contact-subtitle {
            font-size: 1.25rem;
            color: var(--canva-gray);
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 48px;
            margin-top: 32px;
        }

        .contact-info {
            background: white;
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .info-item {
            margin-bottom: 32px;
            transition: transform 0.3s ease;
        }

        .info-item:hover {
            transform: translateX(8px);
        }

        .info-label {
            color: var(--canva-purple);
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 8px;
        }

        .info-content {
            color: var(--canva-gray);
            line-height: 1.6;
        }

        .contact-form {
            background: white;
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            color: var(--canva-text);
            font-weight: 500;
        }

        .form-input {
            width: 100%;
            padding: 12px 16px;
            background: var(--canva-light-gray);
            border: 2px solid transparent;
            border-radius: 12px;
            color: var(--canva-text);
            font-family: 'Open Sans', sans-serif;
            transition: all 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--canva-purple);
            background: white;
        }

        textarea.form-input {
            resize: vertical;
            min-height: 120px;
        }

        .submit-btn {
            background: var(--canva-purple);
            color: white;
            padding: 14px 28px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            font-weight: 600;
            width: 100%;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .submit-btn:hover {
            background: #7B2FEF;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(139, 61, 255, 0.3);
        }

        @media (max-width: 768px) {
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 32px;
            }

            .contact-title {
                font-size: 2.5rem;
            }

            .contact-container {
                padding: 40px 16px;
            }

            .contact-info,
            .contact-form {
                padding: 24px;
            }
        }
    </style>
</head>

<body>
    <div class="contact-container">
        <div class="contact-header">
            <h1 class="contact-title">Hubungi Kami</h1>
            <p class="contact-subtitle">Mari berkolaborasi untuk mewujudkan ide kreatif Anda menjadi desain yang memukau</p>
        </div>

        <div class="contact-grid">
            <div class="contact-info">
                <div class="info-item">
                    <div class="info-label">Alamat</div>
                    <div class="info-content">Canva Creative Hub<br>Jl. Sudirman No. 123<br>Jakarta, Indonesia</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Email</div>
                    <div class="info-content">hello@canvacreative.id</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Telepon</div>
                    <div class="info-content">+62 21 8888 9999</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Jam Operasional</div>
                    <div class="info-content">Senin - Jumat: 09:00 - 18:00<br>Sabtu: 09:00 - 15:00</div>
                </div>
            </div>

            <form class="contact-form">
                <div class="form-group">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-input" placeholder="Masukkan nama lengkap Anda" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-input" placeholder="Masukkan email Anda" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Subjek</label>
                    <input type="text" class="form-input" placeholder="Subjek pesan Anda" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Pesan</label>
                    <textarea class="form-input" placeholder="Tuliskan pesan Anda di sini" rows="5" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Kirim Pesan</button>
            </form>
        </div>
    </div>
</body>

</html>