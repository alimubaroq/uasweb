<?php
include "includes/config.php";
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Minuman Tradisional</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --canva-purple: #8B3DFF;
            --canva-text: #0D1216;
            --canva-gray: #5F6368;
            --canva-light-gray: #F5F5F5;
            --canva-border: #E5E7EB;
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
            min-height: 100vh;
        }

        .container {
            max-width: 800px;
            margin: 80px auto;
            padding: 0 24px;
        }

        .header {
            text-align: center;
            margin-bottom: 48px;
            position: relative;
        }

        .header::after {
            content: '';
            position: absolute;
            bottom: -16px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--canva-purple);
            border-radius: 2px;
        }

        .page-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 16px;
            background: linear-gradient(45deg, var(--canva-purple), #FF6B6B);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .form-card {
            background: white;
            padding: 48px;
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
            font-size: 1rem;
        }

        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid var(--canva-border);
            border-radius: 12px;
            background: white;
            color: var(--canva-text);
            font-family: 'Open Sans', sans-serif;
            transition: all 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--canva-purple);
            box-shadow: 0 0 0 4px rgba(139, 61, 255, 0.1);
        }

        .button-group {
            display: flex;
            gap: 16px;
            justify-content: flex-end;
            margin-top: 32px;
        }

        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        .btn-primary {
            background: var(--canva-purple);
            color: white;
        }

        .btn-primary:hover {
            background: #7B2FEF;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(139, 61, 255, 0.3);
        }

        .btn-secondary {
            background: var(--canva-light-gray);
            color: var(--canva-text);
        }

        .btn-secondary:hover {
            background: #E5E7EB;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .container {
                margin: 40px auto;
            }

            .form-card {
                padding: 32px 24px;
            }

            .page-title {
                font-size: 2rem;
            }
        }

        @media (max-width: 480px) {
            .button-group {
                flex-direction: column-reverse;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1 class="page-title">Tambah Minuman Tradisional</h1>
        </div>

        <div class="form-card">
            <form method="post" action="?page=minumanAddProses">
                <div class="form-group">
                    <label class="form-label">Nama Minuman</label>
                    <input
                        type="text"
                        name="nama_minuman"
                        class="form-input"
                        placeholder="Masukkan nama minuman"
                        required>
                </div>

                <div class="form-group">
                    <label class="form-label">Daerah Asal</label>
                    <input
                        type="text"
                        name="daerah_minuman"
                        class="form-input"
                        placeholder="Masukkan daerah asal"
                        required>
                </div>

                <div class="button-group">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        onClick="document.location='?page=minuman'">
                        Batal
                    </button>
                    <button
                        type="submit"
                        name="submit"
                        class="btn btn-primary">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>