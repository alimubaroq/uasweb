<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Makanan Tradisional</title>
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

    .container {
      padding: 80px 80px 2rem;
    }

    .page-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 40px;
    }

    .page-title {
      font-size: 2rem;
      color: var(--canva-text);
      font-weight: 700;
    }

    .add-button {
      background: var(--canva-purple);
      color: white;
      padding: 12px 24px;
      border-radius: 4px;
      text-decoration: none;
      font-weight: 600;
      transition: background 0.3s;
    }

    .add-button:hover {
      background: #7433CC;
    }

    .content-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 24px;
      margin-bottom: 2rem;
    }

    .content-card {
      background: white;
      border-radius: 8px;
      overflow: hidden;
      transition: transform 0.3s;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .content-card:hover {
      transform: translateY(-4px);
    }

    .card-image {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .card-content {
      padding: 24px;
    }

    .card-title {
      font-size: 1.25rem;
      font-weight: 600;
      margin-bottom: 8px;
      color: var(--canva-text);
    }

    .card-location {
      color: var(--canva-gray);
      font-size: 0.9rem;
      margin-bottom: 16px;
    }

    .card-actions {
      display: flex;
      gap: 12px;
    }

    .action-button {
      padding: 8px 16px;
      border-radius: 4px;
      text-decoration: none;
      font-size: 0.9rem;
      font-weight: 500;
      transition: background 0.3s;
    }

    .edit-button {
      background: var(--canva-light-gray);
      color: var(--canva-text);
    }

    .edit-button:hover {
      background: #e5e5e5;
    }

    .delete-button {
      background: #FF4D4D;
      color: white;
    }

    .delete-button:hover {
      background: #ff3333;
    }

    .total-items {
      color: var(--canva-gray);
      font-size: 0.9rem;
      text-align: right;
    }

    .no-data {
      text-align: center;
      color: var(--canva-gray);
      padding: 2rem;
      grid-column: 1 / -1;
    }

    @media (max-width: 768px) {
      .container {
        padding: 80px 24px 2rem;
      }

      .page-header {
        flex-direction: column;
        gap: 16px;
        text-align: center;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="page-header">
      <h1 class="page-title">Daftar Makanan Tradisional</h1>
      <a href="?page=makananAdd" class="add-button">+ Tambah Makanan</a>
    </div>

    <div class="content-grid">
      <?php
      include "includes/config.php";
      $query = "SELECT * FROM tbl_makanan ORDER BY id_makanan ASC";
      $sql = mysqli_query($conn, $query);
      $nomor = 1;

      while ($data = mysqli_fetch_array($sql)) { ?>
        <div class="content-card">
          <img src="images/makanan/<?= $nomor ?>.jpg" alt="<?= htmlspecialchars($data['nama_makanan']) ?>" class="card-image">
          <div class="card-content">
            <h3 class="card-title"><?= htmlspecialchars($data['nama_makanan']) ?></h3>
            <div class="card-location"><?= htmlspecialchars($data['daerah_makanan']) ?></div>
            <div class="card-actions">
              <a href="?page=makananUpdate&id=<?= $data['id_makanan'] ?>" class="action-button edit-button">Edit</a>
              <a href="?page=makananDelete&id=<?= $data['id_makanan'] ?>"
                onclick="return confirm('Yakin ingin menghapus data ini?');"
                class="action-button delete-button">Hapus</a>
            </div>
          </div>
        </div>
      <?php
        $nomor++;
      } ?>
    </div>

    <div class="total-items">
      Total Makanan: <?= mysqli_num_rows($sql) ?>
    </div>
  </div>
</body>

</html>