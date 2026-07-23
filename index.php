<?php require __DIR__ . '/ajax.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-0LY0HY7L01');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dynamic Fashion - Kinetic Streetwear Atelier, Avant-Garde Runway Capsules, 480 GSM Organic Heavy Terry Hoodies, and Sculptural Tailored Outerwear.">
    <title>Dynamic Fashion | Kinetic Streetwear & Avant-Garde Runway Atelier</title>
    
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header Navigation -->
    <header>
        <nav class="navbar">
            <a href="index.php" class="logo">Dynamic<span>Fashion</span></a>
            <ul class="nav-links">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="collections.html">Collections</a></li>
                <li><a href="blog/index.html">Blogs</a></li>
                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                <li><a href="terms.html">Terms & Conditions</a></li>
            </ul>
            <button class="menu-btn" aria-label="Toggle Navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        
        <!-- SECTION 1: MODAVE FULL-SCREEN LUXURY FASHION SPLIT HERO -->
        <section class="hero-modave-section">
            <div class="hero-modave-container">
                
                <!-- Left Text Column -->
                <div class="hero-modave-text reveal-item">
                    <span class="hero-badge">PARISIAN KINETIC ATELIER 2026</span>
                    <h1><span class="gradient-text">Dynamic Fashion</span> & Kinetic Streetwear</h1>
                    <p class="hero-desc">Discover high-fashion kinetic streetwear engineered with 480 GSM organic heavy French terry cotton, 3D ergonomic seam paneling, zero-waste tailoring, and electric neon accents.</p>
                    
                    <div class="hero-btns" style="justify-content: flex-start; margin-bottom: 2.5rem;">
                        <a href="collections.html" class="btn btn-primary">Explore Runway Capsule</a>
                        <a href="#blueprint" class="btn btn-secondary">Atelier Blueprint</a>
                    </div>

                    <div style="display: flex; gap: 2rem; border-top: 1px solid rgba(0, 229, 255, 0.25); padding-top: 2rem; flex-wrap: wrap;">
                        <div><strong style="color: var(--color-primary); font-size: 1.6rem; display: block; font-family: var(--font-heading);">480 GSM</strong> <span style="font-size: 0.8rem; color: var(--color-fg-muted);">Organic Heavy Terry</span></div>
                        <div><strong style="color: var(--color-primary); font-size: 1.6rem; display: block; font-family: var(--font-heading);">3D Pattern</strong> <span style="font-size: 0.8rem; color: var(--color-fg-muted);">Ergonomic Seam Cuts</span></div>
                        <div><strong style="color: var(--color-primary); font-size: 1.6rem; display: block; font-family: var(--font-heading);">Zero-Waste</strong> <span style="font-size: 0.8rem; color: var(--color-fg-muted);">Sustainable Tailoring</span></div>
                    </div>
                </div>

                <!-- Right Hero Editorial Image Column with Floating Badge -->
                <div class="hero-modave-image reveal-item">
                    <div class="hero-modave-img-wrapper">
                        <img src="img/hero_fashion.jpg" alt="Editorial model wearing avant-garde kinetic streetwear hoodie" loading="lazy">
                    </div>
                    
                    <div class="floating-badge">
                        <div class="floating-badge-icon">⚡</div>
                        <div>
                            <strong style="color: var(--color-fg); display: block; font-size: 1rem;">2026 PARIS RUNWAY</strong>
                            <span style="font-size: 0.8rem; color: var(--color-primary);">Kinetic Capsule Collection</span>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- SECTION 2: CONTINUOUS FASHION MARQUEE TICKER BAND -->
        <div class="marquee-band">
            <div class="marquee-content">
                KINETIC STREETWEAR /// AVANT-GARDE CAPSULES /// 100% SUSTAINABLE TEXTILES /// DESIGNER ATELIER /// 480 GSM HEAVY FLEECE ///
            </div>
            <div class="marquee-content">
                KINETIC STREETWEAR /// AVANT-GARDE CAPSULES /// 100% SUSTAINABLE TEXTILES /// DESIGNER ATELIER /// 480 GSM HEAVY FLEECE ///
            </div>
        </div>

        <!-- SECTION 3: 4-COLUMN INTERACTIVE CATEGORY SHOWCASE GRID -->
        <section style="padding: 6rem 2rem 3rem;">
            <div class="section-title reveal-item" style="text-align: center;">
                <h2>THE RUNWAY CAPSULES</h2>
                <p>Curated architectural garments engineered for fluid movement and high-fashion aesthetics.</p>
            </div>

            <div class="product-grid reveal-item">
                
                <!-- Capsule 1 -->
                <div class="luxury-card" onclick="window.location.href='collections.html'">
                    <span class="blog-tag">CAPSULE 01</span>
                    <h3>Kinetic Heavy Terry Hoodies</h3>
                    <p class="blog-excerpt">480 GSM organic cotton hoodies with double-layered oversized hoods and ribbed kinetic thumbhole cuffs.</p>
                </div>

                <!-- Capsule 2 -->
                <div class="luxury-card" onclick="window.location.href='collections.html'">
                    <span class="blog-tag">CAPSULE 02</span>
                    <h3>Sculptural Tailored Blazers</h3>
                    <p class="blog-excerpt">Structured wool-blend blazers featuring asymmetrical lapels, hidden magnetic closures, and electric neon lining.</p>
                </div>

                <!-- Capsule 3 -->
                <div class="luxury-card" onclick="window.location.href='collections.html'">
                    <span class="blog-tag">CAPSULE 03</span>
                    <h3>Avant-Garde Outerwear Shells</h3>
                    <p class="blog-excerpt">3-layer recycled tech shell coats with weather-sealed zippers and modular detachable storm collars.</p>
                </div>

            </div>
        </section>

        <!-- SECTION 4: STUDIO BLUEPRINT & CRAFTSMANSHIP BLOCK -->
        <section id="blueprint" style="background-color: var(--color-secondary); border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border);">
            <div class="section-title reveal-item" style="text-align: center;">
                <h2>THE MODAVE STUDIO BLUEPRINT</h2>
                <p>Inspecting 3D ergonomic draping, zero-waste cutting, and electric neon thread embroidery.</p>
            </div>
            
            <div class="luxury-card manifesto-box reveal-item" style="max-width: 980px; margin: 0 auto; padding: 4rem 3.5rem;">
                <div style="display: flex; gap: 3.5rem; align-items: center; flex-wrap: wrap;">
                    <div style="flex: 1; min-width: 300px; height: 380px; border-radius: 18px; overflow: hidden; border: 1px solid var(--color-border);">
                        <img src="img/craft.jpg" alt="Fashion designer draping fabric on mannequin at Parisian atelier studio" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div style="flex: 1.3; min-width: 300px;">
                        <span class="hero-badge">ATELIER MANIFESTO</span>
                        <h3 style="font-size: 2rem; margin-top: 0.5rem; margin-bottom: 1.2rem;">Sculptural 3D Ergonomic Patterning</h3>
                        <p style="color: var(--color-fg-muted); font-size: 1.05rem; line-height: 1.9; margin-bottom: 1.5rem;">"Fast-fashion brands manufacture flat 2D clothing using cheap synthetic polyester that loses shape after two washes. At Dynamic Fashion, every garment is sculpted directly on 3D mannequins using 480 GSM organic cotton and reinforced flatlock seams."</p>
                        <p style="color: var(--color-primary); font-weight: 700; font-family: var(--font-heading); font-size: 0.9rem; letter-spacing: 1.5px;">&mdash; HEAD OF DESIGN &bull; DYNAMIC FASHION PARIS</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 5: CURATED RUNWAY COLLECTION GRID -->
        <section id="runway-catalog">
            <div class="section-title reveal-item">
                <h2>CURATED RUNWAY SELECTIONS</h2>
                <p>Limited-edition kinetic garments available for immediate dispatch.</p>
            </div>
            
            <div class="product-grid">
                
                <!-- Item 1 -->
                <div class="luxury-card fashion-card reveal-item" data-category="hoodie">
                    <div class="product-img-wrapper">
                        <span class="category-tag">HEAVY HOODIE</span>
                        <span class="price-badge">$220</span>
                        <img src="img/fashion1.jpg" alt="Oversized heavy fleece kinetic hoodie with sculptural paneling" loading="lazy">
                    </div>
                    <div class="rating-stars">★★★★★ &bull; (185 Designer Reviews)</div>
                    <h3>Cyber Cyan Kinetic Heavy Hoodie</h3>
                    <p class="blog-excerpt">480 GSM GOTS organic French terry cotton with cyan seam piping and magnetic collar flap.</p>
                    <div class="product-footer">
                        <span style="font-size: 0.85rem; color: var(--color-primary); font-weight: 600;">Textile: 480 GSM French Terry</span>
                        <a href="collections.html" class="btn btn-primary" style="padding: 0.6rem 1.2rem; font-size: 0.75rem;">View Garment</a>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="luxury-card fashion-card reveal-item" data-category="blazer">
                    <div class="product-img-wrapper">
                        <span class="category-tag">RUNWAY BLAZER</span>
                        <span class="price-badge">$380</span>
                        <img src="img/fashion2.jpg" alt="Tailored asymmetrical blazer with structured shoulder silhouette" loading="lazy">
                    </div>
                    <div class="rating-stars">★★★★★ &bull; (140 Designer Reviews)</div>
                    <h3>Asymmetrical Sculptural Tailored Blazer</h3>
                    <p class="blog-excerpt">Virgin merino wool blend with structured shoulder pads, concealed magnetic closure, and neon silk lining.</p>
                    <div class="product-footer">
                        <span style="font-size: 0.85rem; color: var(--color-primary); font-weight: 600;">Textile: Virgin Merino Wool</span>
                        <a href="collections.html" class="btn btn-primary" style="padding: 0.6rem 1.2rem; font-size: 0.75rem;">View Garment</a>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="luxury-card fashion-card reveal-item" data-category="outerwear">
                    <div class="product-img-wrapper">
                        <span class="category-tag">TECH TRENCH</span>
                        <span class="price-badge">$480</span>
                        <img src="img/fashion3.jpg" alt="Technical hardshell trench coat with neon accents" loading="lazy">
                    </div>
                    <div class="rating-stars">★★★★★ &bull; (210 Designer Reviews)</div>
                    <h3>Modular Cyber Tech Trench Shell</h3>
                    <p class="blog-excerpt">3-layer waterproof recycled nylon trench coat with magnetic storm flap and reflective cyan logos.</p>
                    <div class="product-footer">
                        <span style="font-size: 0.85rem; color: var(--color-primary); font-weight: 600;">Textile: 3-Layer Recycled Nylon</span>
                        <a href="collections.html" class="btn btn-primary" style="padding: 0.6rem 1.2rem; font-size: 0.75rem;">View Garment</a>
                    </div>
                </div>

            </div>
            
            <div style="text-align: center; margin-top: 4rem;" class="reveal-item">
                <a href="collections.html" class="btn btn-secondary">Explore Complete Runway Collections</a>
            </div>
        </section>

        <!-- SECTION 6: FASHION QUALITY AUDIT MATRIX TABLE -->
        <section class="comparison-section">
            <div class="section-title reveal-item">
                <h2>FASHION QUALITY AUDIT MATRIX</h2>
                <p>Compare Dynamic Fashion standards against commercial fast-fashion polyester garments.</p>
            </div>
            
            <div class="luxury-card reveal-item" style="padding: 2.5rem; overflow-x: auto; border-radius: 20px;">
                <table style="width: 100%; border-collapse: collapse; text-align: left; min-width: 600px;">
                    <thead>
                        <tr style="border-bottom: 2px solid var(--color-border); font-weight: 600;">
                            <th style="padding: 1rem; font-family: var(--font-heading); font-size: 1.3rem;">Garment Standard</th>
                            <th style="padding: 1rem; color: var(--color-primary); font-family: var(--font-heading); font-size: 1.3rem;">Dynamic Fashion Atelier</th>
                            <th style="padding: 1rem; color: var(--color-fg-muted); font-family: var(--font-heading); font-size: 1.3rem;">Commercial Fast Fashion Brands</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid var(--color-border);">
                            <td style="padding: 1rem; font-weight: 600;">Cotton Fleece Density</td>
                            <td style="padding: 1rem; color: var(--color-primary);">480 GSM Heavy Organic GOTS Cotton</td>
                            <td style="padding: 1rem; color: var(--color-fg-muted);">180-220 GSM cheap synthetic blend fleece</td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--color-border);">
                            <td style="padding: 1rem; font-weight: 600;">Pattern Engineering</td>
                            <td style="padding: 1rem; color: var(--color-primary);">3D Ergonomic Draping & Zero-Waste Cutting</td>
                            <td style="padding: 1rem; color: var(--color-fg-muted);">Flat 2D machine stamping with excessive fabric waste</td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--color-border);">
                            <td style="padding: 1rem; font-weight: 600;">Seam Construction</td>
                            <td style="padding: 1rem; color: var(--color-primary);">4-Needle Flatlock & Reinforced Bar-Tacks</td>
                            <td style="padding: 1rem; color: var(--color-fg-muted);">Single overlock stitching prone to unraveling</td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--color-border);">
                            <td style="padding: 1rem; font-weight: 600;">Zipper & Hardware</td>
                            <td style="padding: 1rem; color: var(--color-primary);">YKK AquaGuard Waterproof Metal Zippers</td>
                            <td style="padding: 1rem; color: var(--color-fg-muted);">Generic plastic coil zippers that jam easily</td>
                        </tr>
                        <tr>
                            <td style="padding: 1rem; font-weight: 600;">Dyeing & Sustainability</td>
                            <td style="padding: 1rem; color: var(--color-primary);">OEKO-TEX Standard 100 Non-Toxic Dyes</td>
                            <td style="padding: 1rem; color: var(--color-fg-muted);">Chemical heavy-metal dyes polluting waterways</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- SECTION 7: PRESS REVIEWS & LOUNGE TESTIMONIALS -->
        <section id="testimonials">
            <div class="section-title reveal-item">
                <h2>PRESS & RUNWAY REVIEWS</h2>
                <p>Read reviews from fashion editors, runway stylists, and streetwear collectors.</p>
            </div>
            
            <div class="testimonials-grid">
                
                <!-- Review 1 -->
                <div class="luxury-card testimonial-card reveal-item">
                    <div class="quote-icon">“</div>
                    <div class="rating-stars">★★★★★</div>
                    <p style="color: var(--color-fg-muted); font-size: 1rem; line-height: 1.8;">"The 480 GSM heavy hoodie weight is unmatched. The electric cyan piping brings cyber elegance to daily streetwear."</p>
                    <div class="guest-profile">
                        <div class="guest-avatar">VJ</div>
                        <div>
                            <strong style="color: var(--color-fg); display: block;">Vogue Journal</strong>
                            <span style="font-size: 0.8rem; color: var(--color-primary);">Editorial Review &bull; Paris</span>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="luxury-card testimonial-card reveal-item">
                    <div class="quote-icon">“</div>
                    <div class="rating-stars">★★★★★</div>
                    <p style="color: var(--color-fg-muted); font-size: 1rem; line-height: 1.8;">"The asymmetrical blazer magnetic closures are revolutionary. High fashion meets functional tech seamlessly."</p>
                    <div class="guest-profile">
                        <div class="guest-avatar">SL</div>
                        <div>
                            <strong style="color: var(--color-fg); display: block;">Streetwear Lab</strong>
                            <span style="font-size: 0.8rem; color: var(--color-primary);">Fashion Critic &bull; Tokyo</span>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="luxury-card testimonial-card reveal-item">
                    <div class="quote-icon">“</div>
                    <div class="rating-stars">★★★★★</div>
                    <p style="color: var(--color-fg-muted); font-size: 1rem; line-height: 1.8;">"Wore the Cyber Tech Trench in torrential rain during London Fashion Week. Kept me bone dry while turning heads."</p>
                    <div class="guest-profile">
                        <div class="guest-avatar">AR</div>
                        <div>
                            <strong style="color: var(--color-fg); display: block;">Alex R.</strong>
                            <span style="font-size: 0.8rem; color: var(--color-primary);">Runway Stylist &bull; London</span>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- SECTION 8: INTERACTIVE ACCORDION FAQ -->
        <section id="faq" style="background-color: var(--color-secondary); border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border);">
            <div class="section-title reveal-item" style="text-align: center;">
                <h2>FREQUENTLY ASKED QUESTIONS</h2>
                <p>Everything you need to know about sizing, garment care, and international courier dispatch.</p>
            </div>
            
            <div class="faq-container reveal-item">
                
                <!-- FAQ 1 -->
                <div class="faq-item active">
                    <div class="faq-question">
                        <h3>What makes 480 GSM heavy French terry cotton superior?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>High-density 480 GSM cotton provides structured drape, thermal insulation, and exceptional longevity without shrinking or piling after washing.</p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How should I clean and care for kinetic technical outerwear?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Machine wash cold on gentle cycle with mild liquid detergent. Hang dry inside out to preserve electric cyan piping and DWR coatings.</p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you ship internationally with tracked courier services?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Yes! We ship worldwide via DHL Express with full tracking and signature delivery protection on all orders.</p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Are your garments produced with sustainable practices?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Absolutely. All cotton is 100% GOTS organic certified, and our technical nylon fabrics utilize 100% recycled ocean plastics.</p>
                    </div>
                </div>

            </div>
        </section>

        <!-- REGISTRY NEWSLETTER & FOOTER -->
        <section class="newsletter-section reveal-item">
            <div class="luxury-card newsletter-box">
                <h2>JOIN THE RUNWAY REGISTRY</h2>
                <p>Subscribe to our private fashion registry. Receive early access to limited capsule drops, runway invitations, and private atelier discounts.</p>
                <form class="newsletter-form" onsubmit="event.preventDefault(); alert('Thank you for joining the Runway Registry!');">
                    <input type="email" class="newsletter-input" placeholder="Enter your email address" required aria-label="Email address">
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </section>

        <!-- Recent Gazette Articles -->
        <section class="recent-blogs">
            <div class="section-title reveal-item">
                <h2>FROM THE FASHION GAZETTE</h2>
                <p>Expert articles on kinetic streetwear design, 3D ergonomic patterning, and sustainable textiles.</p>
            </div>
            
            <div class="blog-grid">
                <!-- Blog 1 -->
                <div class="luxury-card reveal-item">
                    <div class="feature-img-wrapper">
                        <img src="img/journal1.jpg" alt="The evolution of kinetic streetwear and 3D ergonomic patterning" loading="lazy">
                    </div>
                    <div class="feature-content">
                        <span class="blog-tag">Streetwear Evolution</span>
                        <h3>Kinetic Streetwear Design Evolution</h3>
                        <p class="blog-excerpt">Understanding 3D ergonomic seam cuts, oversized silhouettes, and active draping.</p>
                        <a href="blog/kinetic-streetwear-design-evolution.html" class="blog-link">Read Article &rarr;</a>
                    </div>
                </div>

                <!-- Blog 2 -->
                <div class="luxury-card reveal-item">
                    <div class="feature-img-wrapper">
                        <img src="img/craft.jpg" alt="Sustainable organic cotton and recycled nylon high fashion textiles" loading="lazy">
                    </div>
                    <div class="feature-content">
                        <span class="blog-tag">Textile Innovation</span>
                        <h3>Sustainable High-Fashion Textiles</h3>
                        <p class="blog-excerpt">Exploring 480 GSM GOTS organic cotton and recycled nylon tech fabrics.</p>
                        <a href="blog/sustainable-high-fashion-textiles.html" class="blog-link">Read Article &rarr;</a>
                    </div>
                </div>

                <!-- Blog 3 -->
                <div class="luxury-card reveal-item">
                    <div class="feature-img-wrapper">
                        <img src="img/journal2.jpg" alt="Sculptural tailoring and asymmetrical blazer architecture" loading="lazy">
                    </div>
                    <div class="feature-content">
                        <span class="blog-tag">Tailoring Craft</span>
                        <h3>Sculptural Tailoring Techniques</h3>
                        <p class="blog-excerpt">Structured shoulders, hidden magnetic closures, and asymmetrical lapel cuts.</p>
                        <a href="blog/sculptural-tailoring-techniques.html" class="blog-link">Read Article &rarr;</a>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-col" style="flex: 1.5;">
                <a href="index.php" class="logo" style="margin-bottom: 2rem; display: inline-block;">Dynamic<span>Fashion</span></a>
                <p>Dynamic Fashion produces kinetic streetwear, 480 GSM organic heavy French terry hoodies, sculptural blazers, and 3-layer technical outerwear.</p>
            </div>
            <div class="footer-col">
                <h4>Atelier Navigation</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="collections.html">Collections</a></li>
                    <li><a href="blog/index.html">Blogs / Gazette</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Compliance</h4>
                <ul>
                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                    <li><a href="terms.html">Terms & Conditions</a></li>
                    <li><a href="disclaimer.html">Disclaimer</a></li>
                    <li><a href="cookies.html">Cookies Policy</a></li>
                </ul>
            </div>
            <div class="footer-col" style="flex: 1.2;">
                <h4>Studio Headquarters</h4>
                <p><strong>Address:</strong><br>181 Mercer Street, New York, NY 10012, United States</p>
                <p><strong>Phone:</strong><br>+1-888-777-5845</p>
                <p><strong>Email:</strong><br>concierge@dynamicfashion.com</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Dynamic Fashion. All rights reserved.</p>
            <div class="footer-bottom-links">
                <a href="privacy-policy.html">Privacy Policy</a>
                <a href="terms.html">Terms</a>
                <a href="cookies.html">Cookies</a>
            </div>
        </div>
    </footer>

    <!-- Cookie Consent Popup Banner -->
    <div class="cookie-banner" id="cookieConsentBanner">
        <h4 class="cookie-title">We Value Your Privacy</h4>
        <p class="cookie-text">We use cookies to analyze web traffic metrics, verify order checkout security, and deliver personalized fashion recommendations. By clicking "Accept All", you agree to our policies.</p>
        <div class="cookie-btns">
            <button class="btn btn-primary" id="acceptCookiesBtn">Accept All</button>
            <button class="btn btn-secondary" id="rejectCookiesBtn">Reject</button>
        </div>
    </div>

    <!-- JS Scripts -->
    <script src="script.js"></script>
</body>
</html>
