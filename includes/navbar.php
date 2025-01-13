<style>
body {
    margin: 0;
    padding-top: 80px; /* Sesuaikan dengan tinggi navbar */
}
</style>

<nav style="background: white; padding: 0.8rem 2rem; position: fixed; width: 100%; z-index: 1000; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 1px 3px rgba(0,0,0,0.1); top: 0; left: 0;">
  <div class="nav-left" style="display: flex; align-items: center; gap: 2rem;">
    <h1 style="color: #8B3DFF; font-family: 'Open Sans', sans-serif; font-size: 1.5rem; font-weight: 700; margin: 0;">KULINER</h1>
    <div class="search-container" style="position: relative;">
      <input type="text" placeholder="Cari makanan atau minuman..." style="padding: 8px 16px; background: #F5F5F5; border: none; border-radius: 4px; width: 300px; font-size: 14px;">
    </div>
  </div>

  <div class="nav-links" style="display: flex; align-items: center; gap: 2rem;">
    <a href="?page=home" style="color: #0D1216; text-decoration: none; font-weight: 500; font-size: 14px;">Home</a>
    <a href="?page=makanan" style="color: #0D1216; text-decoration: none; font-weight: 500; font-size: 14px;">Makanan</a>
    <a href="?page=minuman" style="color: #0D1216; text-decoration: none; font-weight: 500; font-size: 14px;">Minuman</a>
    <a href="?page=about" style="color: #0D1216; text-decoration: none; font-weight: 500; font-size: 14px;">About</a>
    <a href="?page=contact" style="color: #0D1216; text-decoration: none; font-weight: 500; font-size: 14px;">Contact</a>
    <button style="background: #8B3DFF; color: white; padding: 8px 16px; border: none; border-radius: 4px; font-weight: 600; cursor: pointer; font-size: 14px;">Masuk</button>
  </div>
</nav>