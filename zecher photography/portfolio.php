<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio | Zecher Photography</title>
  <link rel="stylesheet" href="assets/styles.css" />
</head>
<body id="top" class="portfolio-page">
  <header class="nav">
    <div class="nav-inner">
      <a class="brand" href="index.php">Zecher Photography</a>
      <nav class="nav-links" aria-label="Main navigation">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="services.php">Services</a>
        <div class="nav-dropdown"><a href="portfolio.php" class="nav-drop-link">Portfolio</a><div class="nav-dropdown-menu"><a href="portfolio.php?category=graduation">Graduation</a><a href="portfolio.php?category=wedding">Wedding</a><a href="portfolio.php?category=roora">Roora</a><a href="portfolio.php?category=indoor">Indoor shoots</a><a href="portfolio.php?category=outdoor">Outdoor shoots</a><a href="portfolio.php?category=commercial">Commercial</a></div></div>
        <a href="testimonials.php">Testimonials</a>
        <a href="contact.php">Contact</a>
      </nav>
    </div>
  </header>

  <section class="section" id="portfolio">
    <div class="container">
      <h2>Portfolio</h2>
      <div class="portfolio-controls">
        <label for="portfolioFilter">Category</label>
        <select id="portfolioFilter" class="portfolio-filter">
          <option value="all">All</option>
          <option value="graduation">Graduation</option>
          <option value="wedding">Wedding</option>
          <option value="roora">Roora</option>
          <option value="indoor">Indoor shoots</option>
          <option value="outdoor">Outdoor shoots</option>
          <option value="commercial">Commercial</option>
        </select>
      </div>
      <div class="gallery-grid">
        <figure class="gallery-item" data-category="wedding"><img loading="lazy" src="assets/pictures/Wedding%201.jpeg" alt="Wedding 1 image" /><figcaption class="gallery-label">Wedding_1</figcaption></figure>
        <figure class="gallery-item" data-category="graduation"><img loading="lazy" src="assets/pictures/Graduation%201.jpeg" alt="Graduation 1 image" /><figcaption class="gallery-label">Graduation_1</figcaption></figure>
        <figure class="gallery-item" data-category="roora"><img loading="lazy" src="assets/pictures/rooro1.jpeg" alt="Roora 1 image" /><figcaption class="gallery-label">Roora_1</figcaption></figure>
        <figure class="gallery-item" data-category="indoor"><img loading="lazy" src="assets/pictures/Indoor%201.jpeg" alt="Indoor 1 image" /><figcaption class="gallery-label">Indoor_1</figcaption></figure>
        <figure class="gallery-item" data-category="outdoor"><img loading="lazy" src="assets/pictures/Outdoor1.jpeg" alt="Outdoor 1 image" /><figcaption class="gallery-label">Outdoor_1</figcaption></figure>
        <figure class="gallery-item" data-category="commercial"><img loading="lazy" src="assets/pictures/Outdoor%203.jpeg" alt="Commercial 1 image" /><figcaption class="gallery-label">Commercial_1</figcaption></figure>
        <figure class="gallery-item" data-category="wedding"><img loading="lazy" src="assets/pictures/Wedding%202.jpeg" alt="Wedding 2 image" /><figcaption class="gallery-label">Wedding_2</figcaption></figure>
        <figure class="gallery-item" data-category="graduation"><img loading="lazy" src="assets/pictures/Graduation%202.jpeg" alt="Graduation 2 image" /><figcaption class="gallery-label">Graduation_2</figcaption></figure>
        <figure class="gallery-item" data-category="roora"><img loading="lazy" src="assets/pictures/rooro1.jpeg" alt="Roora image" /><figcaption class="gallery-label">Roora_1</figcaption></figure>
        <figure class="gallery-item" data-category="indoor"><img loading="lazy" src="assets/pictures/Indoor%202.jpeg" alt="Indoor 2 image" /><figcaption class="gallery-label">Indoor_2</figcaption></figure>
        <figure class="gallery-item" data-category="outdoor"><img loading="lazy" src="assets/pictures/Outdoor%202.jpeg" alt="Outdoor 2 image" /><figcaption class="gallery-label">Outdoor_2</figcaption></figure>
        <figure class="gallery-item" data-category="graduation"><img loading="lazy" src="assets/pictures/Graduation%203.jpeg" alt="Graduation 3 image" /><figcaption class="gallery-label">Graduation_3</figcaption></figure>
        <figure class="gallery-item" data-category="indoor"><img loading="lazy" src="assets/pictures/Indoor%203.jpeg" alt="Indoor 3 image" /><figcaption class="gallery-label">Indoor_3</figcaption></figure>
        <figure class="gallery-item" data-category="outdoor"><img loading="lazy" src="assets/pictures/Outdoor%203.jpeg" alt="Outdoor 3 image" /><figcaption class="gallery-label">Outdoor_3</figcaption></figure>
        <figure class="gallery-item" data-category="commercial"><img loading="lazy" src="assets/pictures/Indoor%203.jpeg" alt="Commercial 2 image" /><figcaption class="gallery-label">Commercial_2</figcaption></figure>
      </div>
    </div>
  </section>

    <footer class="site-footer">
    <div class="footer-socials" aria-label="Footer social links">
      <a href="https://www.instagram.com/zecherphotography?igsh=ZjZrZGlyZjc5NGdn" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><img src="assets/socials%20logo/Instagram-Logo.png" alt="Instagram" /></a>
      <a href="https://www.facebook.com/share/1CZBjTZMed/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><img src="assets/socials%20logo/Facebook_Logo.png" alt="Facebook" /></a>
      <a href="https://www.tiktok.com/@zecherphotography?_r=1&_t=ZS-96bNVHbwwV8" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><img src="assets/socials%20logo/tiktok.png" alt="TikTok" /></a>
      <a href="https://wa.me/263771112299" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"><img src="assets/socials%20logo/Whatsapp.png" alt="WhatsApp" /></a>
    </div>
    <p class="footer-copy">&copy; <span id="year"></span> Zecher Photography</p>
    <p class="footer-powered">Powered by CodeDev Solutions</p>
  </footer>
  <script src="assets/script.js"></script>
</body>
</html>



