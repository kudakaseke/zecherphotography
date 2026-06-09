<?php
$formStatus = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $eventType = trim($_POST["eventType"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if ($name !== "" && $email !== "" && $eventType !== "" && $message !== "") {
        $safeName = htmlspecialchars($name, ENT_QUOTES, "UTF-8");
        $safeEvent = htmlspecialchars($eventType, ENT_QUOTES, "UTF-8");
        $formStatus = "Thanks, {$safeName}. Your {$safeEvent} inquiry has been received.";
    } else {
        $formStatus = "Please complete all form fields.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact | Zecher Photography</title>
  <link rel="stylesheet" href="assets/styles.css" />
</head>
<body id="top">
  <header class="nav"><div class="nav-inner"><a class="brand" href="index.php">Zecher Photography</a><nav class="nav-links" aria-label="Main navigation"> <a href="index.php">Home</a> <a href="about.php">About</a><a href="services.php">Services</a><div class="nav-dropdown"><a href="portfolio.php" class="nav-drop-link">Portfolio</a><div class="nav-dropdown-menu"><a href="portfolio.php?category=graduation">Graduation</a><a href="portfolio.php?category=wedding">Wedding</a><a href="portfolio.php?category=roora">Roora</a><a href="portfolio.php?category=indoor">Indoor shoots</a><a href="portfolio.php?category=outdoor">Outdoor shoots</a><a href="portfolio.php?category=commercial">Commercial</a></div></div><a href="testimonials.php">Testimonials</a><a href="contact.php">Contact</a></nav></div></header>
  <section class="section" id="contact"><div class="container"><h2>Contact</h2><div class="contact-grid"><aside class="contact-card"><h3 class="contact-title">Book Your Session</h3><p>Email: <a href="mailto:zecherphotography@gmail.com">zecherphotography@gmail.com</a></p><div class="socials" aria-label="Social media"><a class="social social-whatsapp" href="https://wa.me/263771112299" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"><img src="assets/socials%20logo/Whatsapp.png" alt="WhatsApp" /></a><a class="social" href="https://www.facebook.com/share/1CZBjTZMed/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><img src="assets/socials%20logo/Facebook_Logo.png" alt="Facebook" /></a><a class="social" href="https://www.tiktok.com/@zecherphotography?_r=1&_t=ZS-96bNVHbwwV8" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><img src="assets/socials%20logo/tiktok.png" alt="TikTok" /></a><a class="social" href="https://www.instagram.com/zecherphotography?igsh=ZjZrZGlyZjc5NGdn" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><img src="assets/socials%20logo/Instagram-Logo.png" alt="Instagram" /></a><a class="social social-gmail" href="mailto:zecherphotography@gmail.com" aria-label="Email"><img src="assets/socials%20logo/Gmail_Logo.png" alt="Email" /></a></div></aside><form class="contact-form" action="contact.php#contact" method="post"><?php if ($formStatus !== ""): ?><p class="form-status"><?php echo htmlspecialchars($formStatus, ENT_QUOTES, "UTF-8"); ?></p><?php endif; ?><div class="field"><label for="name">Name</label><input id="name" name="name" type="text" required /></div><div class="field"><label for="email">Email</label><input id="email" name="email" type="email" required /></div><div class="field"><label for="eventType">Event Type</label><select id="eventType" name="eventType" required><option value="">Select event type</option><option>Wedding</option><option>Graduation</option><option>Roora</option><option>Indoors</option></select></div><div class="field"><label for="message">Message</label><textarea id="message" name="message" required></textarea></div><button class="btn btn-primary" type="submit">Send Inquiry</button></form></div></div></section>
    <footer class="site-footer">
    <div class="footer-socials" aria-label="Footer social links">
      <a href="https://www.instagram.com/zecherphotography?igsh=ZjZrZGlyZjc5NGdn" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><img src="assets/socials%20logo/Instagram-Logo.png" alt="Instagram" /></a>
      <a href="https://www.facebook.com/share/1CZBjTZMed/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><img src="assets/socials%20logo/Facebook_Logo.png" alt="Facebook" /></a>
      <a href="https://www.tiktok.com/@zecherphotography?_r=1&_t=ZS-96bNVHbwwV8" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><img src="assets/socials%20logo/tiktok.png" alt="TikTok" /></a>
      <a href="https://wa.me/263771112299" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"><img src="assets/socials%20logo/Whatsapp.png" alt="WhatsApp" /></a>
    </div>
    <p class="footer-copy">&copy; <span id="year"></span> Zecher Photography</p>
    <p class="footer-powered">Powered by CodeDev Solutions</p>
  </footer><script src="assets/script.js"></script>
</body></html>






