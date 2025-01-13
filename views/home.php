<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuliner Nusantara</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --canva-purple: #8B3DFF;
            --canva-blue: #00C4CC;
            --canva-black: #18191F;
            --canva-gray: #474A57;
            --canva-light: #F4F5F7;
            --canva-white: #FFFFFF;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: var(--canva-white);
            color: var(--canva-black);
            overflow-x: hidden;
        }

        .featured-hero {
            height: 90vh;
            position: relative;
            background: url('assets/img/banner.jpeg') center/cover;
            border-radius: 0 0 40px 40px;
            margin-bottom: 4rem;
        }

        .featured-gradient {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg,
                    rgba(139, 61, 255, 0.3) 0%,
                    rgba(0, 196, 204, 0.3) 100%);
            border-radius: 0 0 40px 40px;
        }

        .featured-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 80%;
            max-width: 800px;
        }

        .featured-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 4.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: var(--canva-white);
            letter-spacing: -1px;
        }

        .featured-description {
            font-size: 1.25rem;
            margin-bottom: 2.5rem;
            color: var(--canva-white);
            line-height: 1.6;
        }

        .featured-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
        }

        .btn {
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: 'Montserrat', sans-serif;
        }

        .btn-play {
            background: var(--canva-purple);
            color: var(--canva-white);
            border: none;
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }

        .btn-play:hover {
            background: #7B35E5;
            transform: translateY(-2px);
        }

        .btn-more {
            background: transparent;
            color: var(--canva-white);
            border: 2px solid var(--canva-white);
        }

        .btn-more:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }

        .content-row {
            padding: 2rem 5%;
            margin-bottom: 2rem;
        }

        .row-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 2rem;
        }

        .row-header h2 {
            font-family: 'Montserrat', sans-serif;
            font-size: 2rem;
            color: var(--canva-black);
        }

        .see-all {
            color: var(--canva-purple);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            padding: 0.5rem 1.5rem;
            border-radius: 20px;
        }

        .see-all:hover {
            background: rgba(139, 61, 255, 0.1);
        }

        .content-slider {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
            padding: 1rem 0;
        }

        .content-card {
            background: var(--canva-white);
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.3s ease;
            cursor: pointer;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .content-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 30px rgba(139, 61, 255, 0.2);
        }

        .card-image {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        .card-content {
            padding: 1.5rem;
        }

        .card-content h3 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: var(--canva-black);
        }

        .card-tags {
            display: flex;
            gap: 0.8rem;
        }

        .tag {
            font-size: 0.9rem;
            color: var(--canva-purple);
            background: rgba(139, 61, 255, 0.1);
            padding: 0.3rem 1rem;
            border-radius: 15px;
            font-weight: 500;
        }

        @media (max-width: 768px) {
            .featured-hero {
                height: 80vh;
            }

            .featured-title {
                font-size: 3rem;
            }

            .featured-description {
                font-size: 1.1rem;
            }

            .content-slider {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }

            .row-header h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="featured-hero">
        <div class="featured-gradient"></div>
        <div class="featured-content">
            <h1 class="featured-title">Kuliner Nusantara</h1>
            <p class="featured-description">Jelajahi keragaman cita rasa Indonesia melalui koleksi makanan dan minuman tradisional terbaik dari Sabang sampai Merauke.</p>
            <div class="featured-buttons">
                <button class="btn btn-play">▶ Jelajahi</button>
                <button class="btn btn-more">ℹ Info Lebih Lanjut</button>
            </div>
        </div>
    </div>

    <section class="content-row">
        <div class="row-header">
            <h2>Hidangan Tradisional</h2>
            <a href="?page=makanan" class="see-all">Lihat Semua →</a>
        </div>
        <div class="content-slider">
            <?php
            $queryMakanan = "SELECT * FROM tbl_makanan ORDER BY id_makanan ASC LIMIT 6";
            $resultMakanan = mysqli_query($conn, $queryMakanan);

            if (mysqli_num_rows($resultMakanan) > 0) {
                $counter = 1;
                while ($makanan = mysqli_fetch_assoc($resultMakanan)) {
            ?>
                    <div class="content-card">
                        <img src="images/makanan/<?= $counter; ?>.jpg" alt="<?= htmlspecialchars($makanan['nama_makanan']); ?>" class="card-image">
                        <div class="card-content">
                            <h3><?= htmlspecialchars($makanan['nama_makanan']); ?></h3>
                            <div class="card-tags">
                                <span class="tag"><?= htmlspecialchars($makanan['daerah_makanan']); ?></span>
                            </div>
                        </div>
                    </div>
            <?php
                    $counter++;
                }
            }
            ?>
        </div>
    </section>

    <section class="content-row">
        <div class="row-header">
            <h2>Minuman Tradisional</h2>
            <a href="?page=minuman" class="see-all">Lihat Semua →</a>
        </div>
        <div class="content-slider">
            <?php
            $queryMinuman = "SELECT * FROM tbl_minuman ORDER BY id_minuman ASC LIMIT 6";
            $resultMinuman = mysqli_query($conn, $queryMinuman);

            if (mysqli_num_rows($resultMinuman) > 0) {
                $counter = 1;
                while ($minuman = mysqli_fetch_assoc($resultMinuman)) {
            ?>
                    <div class="content-card">
                        <img src="images/minuman/<?= $counter; ?>.jpg" alt="<?= htmlspecialchars($minuman['nama_minuman']); ?>" class="card-image">
                        <div class="card-content">
                            <h3><?= htmlspecialchars($minuman['nama_minuman']); ?></h3>
                            <div class="card-tags">
                                <span class="tag"><?= htmlspecialchars($minuman['daerah_minuman']); ?></span>
                            </div>
                        </div>
                    </div>
            <?php
                    $counter++;
                }
            }
            ?>
        </div>
    </section>
</body>

</html>