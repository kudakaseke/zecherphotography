<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Zecher Photography | Home</title>
  <link rel="stylesheet" href="assets/styles.css" />
</head>
<body id="top">
  <header class="nav">
    <div class="nav-inner">
      <a class="brand" href="index.php">Zecher Photography</a>
      <nav class="nav-links" aria-label="Main navigation"> <a href="index.php">Home</a> <a href="about.php">About</a>
        <a href="services.php">Services</a>
        <div class="nav-dropdown"><a href="portfolio.php" class="nav-drop-link">Portfolio</a><div class="nav-dropdown-menu"><a href="portfolio.php?category=graduation">Graduation</a><a href="portfolio.php?category=wedding">Wedding</a><a href="portfolio.php?category=roora">Roora</a><a href="portfolio.php?category=indoor">Indoor shoots</a><a href="portfolio.php?category=outdoor">Outdoor shoots</a><a href="portfolio.php?category=commercial">Commercial</a></div></div>
        <a href="testimonials.php">Testimonials</a>
        <a href="contact.php">Contact</a>
      </nav>
    </div>
  </header>

  <section class="hero" aria-label="Hero">
    <div class="hero-slide active" style="background-image: url('https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=1600&q=80');"></div>
    <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1520854221256-17451cc331bf?auto=format&fit=crop&w=1600&q=80');"></div>
    <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1469371670807-013ccf25f16a?auto=format&fit=crop&w=1600&q=80');"></div>
    <div class="hero-content">
      <h1>Zecher Photography</h1>
      <p>Capturing Life's Milestones - Weddings, Graduations, Roora &amp; Indoors.</p>
      <a href="portfolio.php" class="btn btn-primary">View Portfolio</a>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <h2>Explore</h2>
      <div class="services-grid">
        <article class="service-card"><h3>About</h3><p>Meet Zecher Photography and the storytelling vision.</p><a href="about.php" class="btn">Open Page</a></article>
        <article class="service-card"><h3>Services</h3><p>Weddings, Graduations, Roora, and Indoors sessions.</p><a href="services.php" class="btn">Open Page</a></article>
        <article class="service-card"><h3>Portfolio</h3><p>Browse paired images arranged down the page.</p><a href="portfolio.php" class="btn">Open Page</a></article>
        <article class="service-card"><h3>Testimonials</h3><p>Read client reviews from recent events.</p><a href="testimonials.php" class="btn">Open Page</a></article>
        <article class="service-card"><h3>Contact</h3><p>Send an inquiry and secure your date.</p><a href="contact.php" class="btn">Open Page</a></article>
      </div>
    </div>
  </section>

  <section class="section portfolio-clean" id="portfolio">
    <div class="container">
      <h2>Portfolio</h2>
      <div class="portfolio-controls">
        <label for="homePortfolioFilter">Category</label>
        <select id="homePortfolioFilter" class="portfolio-filter">
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
        <figure class="gallery-item gallery-trigger" data-category="wedding" tabindex="0" role="button" aria-label="View gallery images"><img loading="lazy" src="assets/pictures/Wedding%201.jpeg" alt="Wedding 1 image" /><figcaption class="gallery-label">View Gallery</figcaption></figure>
        <figure class="gallery-item gallery-trigger" data-category="graduation" tabindex="0" role="button" aria-label="View gallery images"><img loading="lazy" src="assets/pictures/Graduation%201.jpeg" alt="Graduation 1 image" /><figcaption class="gallery-label">View Gallery</figcaption></figure>
        <figure class="gallery-item gallery-trigger" data-category="roora" tabindex="0" role="button" aria-label="View gallery images"><img loading="lazy" src="assets/pictures/rooro1.jpeg" alt="Roora 1 image" /><figcaption class="gallery-label">View Gallery</figcaption></figure>
        <figure class="gallery-item gallery-trigger" data-category="indoor" tabindex="0" role="button" aria-label="View gallery images"><img loading="lazy" src="assets/pictures/Indoor%201.jpeg" alt="Indoor 1 image" /><figcaption class="gallery-label">View Gallery</figcaption></figure>
      </div>
      <div id="morePortfolio" class="gallery-grid hidden-gallery">
        <figure class="gallery-item" data-category="wedding"><img loading="lazy" src="assets/pictures/Wedding%202.jpeg" alt="Wedding 2 image" /><figcaption class="gallery-label">Wedding_2</figcaption></figure>
        <figure class="gallery-item" data-category="graduation"><img loading="lazy" src="assets/pictures/Graduation%202.jpeg" alt="Graduation 2 image" /><figcaption class="gallery-label">Graduation_2</figcaption></figure>
        <figure class="gallery-item" data-category="roora"><img loading="lazy" src="assets/pictures/rooro1.jpeg" alt="Roora image" /><figcaption class="gallery-label">Roora_1</figcaption></figure>
        <figure class="gallery-item" data-category="indoor"><img loading="lazy" src="assets/pictures/Indoor%202.jpeg" alt="Indoor 2 image" /><figcaption class="gallery-label">Indoor_2</figcaption></figure>
        <figure class="gallery-item" data-category="outdoor"><img loading="lazy" src="assets/pictures/Outdoor1.jpeg" alt="Outdoor 1 image" /><figcaption class="gallery-label">Outdoor_1</figcaption></figure>
        <figure class="gallery-item" data-category="commercial"><img loading="lazy" src="assets/pictures/Outdoor%203.jpeg" alt="Commercial 1 image" /><figcaption class="gallery-label">Commercial_1</figcaption></figure>
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





