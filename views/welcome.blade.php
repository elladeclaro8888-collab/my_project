<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ELLA STUDIO — Editorial & Visual Arts</title>

  <!-- Google Fonts: Playfair Display for editorial headings, Plus Jakarta Sans for modern body text -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,700;0,800;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

  <style>
    /* --- CSS Variables & Modern Palette --- */
    :root {
      --bg-main: #08090c;
      --bg-surface: #101216;
      --bg-glass: rgba(255, 255, 255, 0.03);
      --glass-border: rgba(255, 255, 255, 0.08);
      --accent-gold: #f3b169;
      --accent-gold-glow: rgba(243, 177, 105, 0.25);
      --text-heading: #f9fafe;
      --text-body: #a0a5b5;
      --font-heading: 'Playfair Display', serif;
      --font-body: 'Plus Jakarta Sans', sans-serif;
      --radius-lg: 16px;
      --radius-md: 10px;
      --transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }

    *, *::before, *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html { scroll-behavior: smooth; }

    body {
      font-family: var(--font-body);
      background-color: var(--bg-main);
      color: var(--text-body);
      line-height: 1.6;
      overflow-x: hidden;
    }

    h1, h2, h3, h4 {
      font-family: var(--font-heading);
      color: var(--text-heading);
    }

    a { text-decoration: none; color: inherit; }

    /* --- Ambient Background Lights --- */
    .glow-blob {
      position: fixed;
      width: 500px;
      height: 500px;
      background: radial-gradient(circle, var(--accent-gold-glow) 0%, rgba(0,0,0,0) 70%);
      top: -100px;
      right: -100px;
      z-index: -1;
      pointer-events: none;
    }

    /* --- Navigation Bar --- */
    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1.2rem 6%;
      background: rgba(8, 9, 12, 0.7);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      z-index: 1000;
      border-bottom: 1px solid var(--glass-border);
    }

    .logo {
      font-family: var(--font-heading);
      font-size: 1.4rem;
      font-weight: 800;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: var(--text-heading);
    }

    .logo span { color: var(--accent-gold); }

    .nav-links {
      display: flex;
      list-style: none;
      align-items: center;
      gap: 2.5rem;
    }

    .nav-links a {
      font-size: 0.82rem;
      text-transform: uppercase;
      letter-spacing: 2px;
      font-weight: 500;
      transition: var(--transition);
    }

    .nav-links a:hover { color: var(--accent-gold); }

    .btn-nav {
      padding: 0.6rem 1.4rem;
      background: transparent;
      border: 1px solid var(--accent-gold);
      border-radius: 50px;
      color: var(--accent-gold) !important;
    }

    .btn-nav:hover {
      background: var(--accent-gold);
      color: var(--bg-main) !important;
      box-shadow: 0 0 20px var(--accent-gold-glow);
    }

    /* --- Hero Section --- */
    .hero {
      min-height: 100vh;
      display: flex;
      align-items: center;
      padding: 0 6%;
      position: relative;
    }

    .hero-content {
      max-width: 850px;
      margin-top: 80px;
    }

    .badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 0.4rem 1.2rem;
      background: var(--bg-glass);
      border: 1px solid var(--glass-border);
      border-radius: 50px;
      font-size: 0.75rem;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      color: var(--accent-gold);
      margin-bottom: 2rem;
    }

    .badge::before {
      content: '';
      width: 6px;
      height: 6px;
      background: var(--accent-gold);
      border-radius: 50%;
    }

    .hero h1 {
      font-size: clamp(3rem, 6vw, 5.2rem);
      line-height: 1.1;
      font-weight: 700;
      margin-bottom: 1.8rem;
      letter-spacing: -0.5px;
    }

    .hero p {
      font-size: 1.2rem;
      max-width: 600px;
      margin-bottom: 3rem;
    }

    .hero-buttons {
      display: flex;
      align-items: center;
      gap: 1.5rem;
    }

    .btn {
      display: inline-block;
      padding: 1rem 2.2rem;
      font-size: 0.85rem;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1.5px;
      border-radius: 50px;
      transition: var(--transition);
    }

    .btn-primary {
      background-color: var(--accent-gold);
      color: var(--bg-main);
    }

    .btn-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 25px var(--accent-gold-glow);
    }

    .btn-secondary {
      background: var(--bg-glass);
      border: 1px solid var(--glass-border);
      color: var(--text-heading);
    }

    .btn-secondary:hover {
      background: rgba(255, 255, 255, 0.08);
      transform: translateY(-3px);
    }

    /* --- General Section Layout --- */
    section {
      padding: 8rem 6%;
      position: relative;
    }

    .section-header {
      margin-bottom: 4rem;
    }

    .section-header p {
      color: var(--accent-gold);
      font-size: 0.8rem;
      text-transform: uppercase;
      letter-spacing: 3px;
      font-weight: 600;
      margin-bottom: 0.5rem;
    }

    .section-header h2 {
      font-size: clamp(2rem, 4vw, 3.2rem);
      font-weight: 700;
    }

    /* --- Portfolio Gallery Section --- */
    .gallery-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
      gap: 2rem;
    }

    .gallery-item {
      position: relative;
      border-radius: var(--radius-lg);
      overflow: hidden;
      aspect-ratio: 3 / 4;
      background-color: var(--bg-surface);
      border: 1px solid var(--glass-border);
    }

    .gallery-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: var(--transition);
      filter: grayscale(20%);
    }

    .gallery-item:hover img {
      transform: scale(1.08);
      filter: grayscale(0%);
    }

    .overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(8, 9, 12, 0.95) 0%, rgba(8, 9, 12, 0.2) 60%, transparent 100%);
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 2rem;
      opacity: 0;
      transition: var(--transition);
    }

    .gallery-item:hover .overlay { opacity: 1; }

    .overlay-text h3 {
      font-size: 1.4rem;
      margin-bottom: 0.3rem;
    }

    .overlay-text p {
      font-size: 0.75rem;
      color: var(--accent-gold);
      text-transform: uppercase;
      letter-spacing: 1.5px;
      font-weight: 600;
    }

    .overlay-text small {
      display: block;
      margin-top: 0.5rem;
      color: var(--text-body);
      font-size: 0.8rem;
    }

    /* --- Capabilities / Services Section --- */
    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
    }

    .service-card {
      background: var(--bg-glass);
      padding: 2.8rem 2rem;
      border-radius: var(--radius-lg);
      border: 1px solid var(--glass-border);
      backdrop-filter: blur(10px);
      transition: var(--transition);
    }

    .service-card:hover {
      border-color: var(--accent-gold);
      transform: translateY(-6px);
      box-shadow: 0 15px 30px rgba(0,0,0,0.5);
    }

    .service-number {
      font-family: var(--font-heading);
      font-size: 1.8rem;
      font-weight: 700;
      font-style: italic;
      color: var(--accent-gold);
      margin-bottom: 1rem;
      display: block;
    }

    .service-card h3 {
      font-size: 1.4rem;
      margin-bottom: 1rem;
    }

    /* --- Team Section --- */
    .team-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 2rem;
    }

    .team-card {
      background: var(--bg-surface);
      padding: 2.5rem 1.5rem;
      border-radius: var(--radius-lg);
      border: 1px solid var(--glass-border);
      text-align: center;
      transition: var(--transition);
    }

    .team-card:hover {
      border-color: rgba(255, 255, 255, 0.2);
      transform: translateY(-5px);
    }

    .member-img-wrapper {
      width: 120px;
      height: 120px;
      margin: 0 auto 1.5rem;
      border-radius: 50%;
      padding: 4px;
      background: linear-gradient(135deg, var(--accent-gold), transparent);
    }

    .member-img {
      width: 100%;
      height: 100%;
      border-radius: 50%;
      object-fit: cover;
    }

    .member-name { font-size: 1.3rem; }

    .member-role {
      font-size: 0.75rem;
      color: var(--accent-gold);
      text-transform: uppercase;
      letter-spacing: 1.5px;
      display: block;
      margin: 0.3rem 0 1rem;
      font-weight: 600;
    }

    .member-bio {
      font-size: 0.85rem;
      margin-bottom: 1.2rem;
    }

    .social-links a {
      font-size: 0.8rem;
      color: var(--text-body);
      margin: 0 0.4rem;
      transition: var(--transition);
    }

    .social-links a:hover { color: var(--accent-gold); }

    /* --- Contact Section --- */
    .contact-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 4rem;
      background: var(--bg-glass);
      border: 1px solid var(--glass-border);
      padding: 4rem 3rem;
      border-radius: var(--radius-lg);
      backdrop-filter: blur(10px);
    }

    .contact-info h2 {
      font-size: 2.5rem;
      line-height: 1.2;
      margin-bottom: 1rem;
    }

    .contact-info p { margin-bottom: 2rem; }

    .details p {
      margin-bottom: 0.8rem;
      font-size: 0.95rem;
    }

    .details strong { color: var(--text-heading); }

    .contact-form input, 
    .contact-form select, 
    .contact-form textarea {
      width: 100%;
      padding: 1.1rem;
      margin-bottom: 1.2rem;
      background: rgba(0, 0, 0, 0.4);
      border: 1px solid var(--glass-border);
      border-radius: var(--radius-md);
      color: var(--text-heading);
      font-family: var(--font-body);
      outline: none;
      transition: var(--transition);
    }

    .contact-form input:focus, 
    .contact-form select:focus, 
    .contact-form textarea:focus {
      border-color: var(--accent-gold);
      box-shadow: 0 0 10px var(--accent-gold-glow);
    }

    /* --- Footer --- */
    footer {
      text-align: center;
      padding: 2.5rem;
      border-top: 1px solid var(--glass-border);
      font-size: 0.85rem;
      color: var(--text-body);
    }
  </style>
</head>
<body>

  <!-- Ambient Light Blob -->
  <div class="glow-blob"></div>

  <!-- Navigation -->
  <header class="navbar">
    <div class="logo">ELLA STUDIO<span>.</span></div>
    <nav>
      <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#works">Works</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact" class="btn-nav">Book Session</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero Section -->
  <section id="home" class="hero">
    <div class="hero-content">
      <div class="badge">Commercial & Editorial Visuals</div>
      <h1>Capturing raw emotions through light and shadow.</h1>
      <p>We build compelling visual narratives, fashion editorials, and intimate portraiture for visionaries and iconic brands.</p>
      <div class="hero-buttons">
        <a href="#works" class="btn btn-primary">Explore Portfolio</a>
        <a href="#contact" class="btn btn-secondary">Get in Touch</a>
      </div>
    </div>
  </section>

  <!-- Selected Works / Portfolio Section -->
  <section id="works" class="portfolio">
    <div class="section-header">
      <p>Selected Archive</p>
      <h2>Featured Works</h2>
    </div>

    <div class="gallery-grid">
      @php 
        $items = $portfolios ?? $projects ?? []; 
      @endphp

      @forelse($items as $item)
        <div class="gallery-item">
          <img src="{{ asset('images/' . basename($item->image_path ?? $item->image ?? '')) }}" 
               alt="{{ $item->title ?? 'Portfolio Image' }}"
               onerror="this.onerror=null; this.src='https://via.placeholder.com/400x500?text=No+Image';">
          
          <div class="overlay">
            <div class="overlay-text">
              <h3>{{ $item->title }}</h3>
              <p>{{ $item->category }}</p>
              @if(!empty($item->description))
                <small>{{ $item->description }}</small>
              @endif
            </div>
          </div>
        </div>
      @empty
        <p style="color: var(--text-body); text-align: center; grid-column: 1 / -1;">No projects found.</p>
      @endforelse
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="services">
    <div class="section-header">
      <p>What We Offer</p>
      <h2>Capabilities</h2>
    </div>

    <div class="services-grid">
      <div class="service-card">
        <span class="service-number">01</span>
        <h3>Commercial & Brand</h3>
        <p>High-converting imagery for campaigns, website redesigns, and product launches designed to elevate brand authority.</p>
      </div>
      <div class="service-card">
        <span class="service-number">02</span>
        <h3>Fashion & Lookbooks</h3>
        <p>Full-scale fashion productions including studio lighting setup, model staging, and professional color grading.</p>
      </div>
      <div class="service-card">
        <span class="service-number">03</span>
        <h3>Fine Art Portraiture</h3>
        <p>Intimate, expressive individual or group portraits crafted with cinematic direction and modern aesthetics.</p>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="about">
    <div class="section-header">
      <p>The Creative Minds</p>
      <h2>Meet Our Team</h2>
    </div>

    <div class="team-grid">
      <div class="team-card">
        <div class="member-img-wrapper">
          <img class="member-img" src="{{ asset('images/ellsss.jpg') }}" alt="Ella Mae Daep">
        </div>
        <h3 class="member-name">Ella Mae Daep</h3>
        <span class="member-role">IT Student</span>
        <p class="member-bio">Leads our vision and technical strategy with creative direction.</p>
        <div class="social-links">
          <a href="#">LinkedIn</a>
          <a href="#">Twitter</a>
        </div>
      </div>

      <div class="team-card">
        <div class="member-img-wrapper">
          <img class="member-img" src="{{ asset('images/niks.jpg') }}" alt="Niccole Trilles">
        </div>
        <h3 class="member-name">Niccole Trilles</h3>
        <span class="member-role">Graduated</span>
        <p class="member-bio">Architects our core system infrastructure and digital platforms.</p>
        <div class="social-links">
          <a href="#">GitHub</a>
          <a href="#">LinkedIn</a>
        </div>
      </div>

      <div class="team-card">
        <div class="member-img-wrapper">
          <img class="member-img" src="{{ asset('images/hazel.jpg') }}" alt="Hazel Daep">
        </div>
        <h3 class="member-name">Hazel Daep</h3>
        <span class="member-role">BSOA Student</span>
        <p class="member-bio">Crafts intuitive user experiences and elegant interface designs.</p>
        <div class="social-links">
          <a href="#">Dribbble</a>
          <a href="#">LinkedIn</a>
        </div>
      </div>

      <div class="team-card">
        <div class="member-img-wrapper">
          <img class="member-img" src="{{ asset('images/mj.jpg') }}" alt="MJ Daep">
        </div>
        <h3 class="member-name">MJ Daep</h3>
        <span class="member-role">Graduated</span>
        <p class="member-bio">Bridges user interactions with high-performance execution.</p>
        <div class="social-links">
          <a href="#">Twitter</a>
          <a href="#">LinkedIn</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="contact">
    <div class="contact-container">
      <div class="contact-info">
        <h2>Let's build something bold together.</h2>
        <p>Have an upcoming shoot or commercial campaign? Reach out to us.</p>
        <div class="details">
          <p><strong>Studio:</strong> Studio 404, Creative Quarter</p>
          <p><strong>Email:</strong> hello@ellastudio.com</p>
          <p><strong>Instagram:</strong> @ellastudio.archive</p>
        </div>
      </div>

      <form class="contact-form" onsubmit="event.preventDefault(); alert('Message sent successfully!');">
        <input type="text" placeholder="Your Name" required>
        <input type="email" placeholder="Your Email" required>
        <select required>
          <option value="" disabled selected>Select Session Type</option>
          <option value="commercial">Commercial / Product</option>
          <option value="editorial">Fashion / Editorial</option>
          <option value="portrait">Studio Portraiture</option>
        </select>
        <textarea rows="4" placeholder="Tell us about your project..." required></textarea>
        <button type="submit" class="btn btn-primary" style="width:100%; border:none; cursor:pointer;">Send Inquiry</button>
      </form>
    </div>
  </section>

  <footer>
    <p>&copy; {{ date('Y') }} ELLA STUDIO. All rights reserved.</p>
  </footer>

</body>
</html>