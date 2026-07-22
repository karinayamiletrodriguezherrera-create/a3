document.addEventListener('DOMContentLoaded', () => {
    // 1. Scroll-Reveal Observer
    const revealItems = document.querySelectorAll('.reveal-item');
    
    if ('IntersectionObserver' in window) {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        revealItems.forEach(item => {
            revealObserver.observe(item);
        });
    } else {
        revealItems.forEach(item => {
            item.classList.add('revealed');
        });
    }

    // 2. Mobile Navigation Toggle
    const menuBtn = document.querySelector('.menu-btn');
    const navLinks = document.querySelector('.nav-links');
    
    if (menuBtn && navLinks) {
        menuBtn.addEventListener('click', () => {
            menuBtn.classList.toggle('active');
            navLinks.classList.toggle('active');
        });
        
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                menuBtn.classList.remove('active');
                navLinks.classList.remove('active');
            });
        });
    }

    // 3. Interactive Fashion Category Filter
    const filterBtns = document.querySelectorAll('.fashion-filter-btn');
    const fashionCards = document.querySelectorAll('.fashion-card');

    if (filterBtns.length > 0 && fashionCards.length > 0) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filter = btn.getAttribute('data-filter');

                fashionCards.forEach(card => {
                    const category = card.getAttribute('data-category');
                    if (filter === 'all' || category === filter) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    }

    // 4. Interactive Accordion FAQ
    const faqItems = document.querySelectorAll('.faq-item');

    if (faqItems.length > 0) {
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            if (question) {
                question.addEventListener('click', () => {
                    const isOpen = item.classList.contains('active');
                    
                    faqItems.forEach(otherItem => otherItem.classList.remove('active'));
                    
                    if (!isOpen) {
                        item.classList.add('active');
                    }
                });
            }
        });
    }

    // 5. Cookie Consent Notice (Safeguarded with try-catch)
    const cookieBanner = document.getElementById('cookieConsentBanner');
    const acceptBtn = document.getElementById('acceptCookiesBtn');
    const rejectBtn = document.getElementById('rejectCookiesBtn');

    if (cookieBanner && acceptBtn && rejectBtn) {
        let consent = null;
        try {
            consent = localStorage.getItem('cookieConsent');
        } catch (e) {
            console.warn('localStorage is not accessible in this environment.');
        }
        
        if (consent === null) {
            setTimeout(() => {
                cookieBanner.style.display = 'block';
                cookieBanner.offsetHeight; // force reflow
                cookieBanner.classList.add('show');
            }, 1200);
        }

        acceptBtn.addEventListener('click', () => {
            try {
                localStorage.setItem('cookieConsent', 'accepted');
            } catch (e) {
                console.warn('Unable to write to localStorage.');
            }
            cookieBanner.classList.remove('show');
            setTimeout(() => {
                cookieBanner.style.display = 'none';
            }, 600);
        });

        rejectBtn.addEventListener('click', () => {
            try {
                localStorage.setItem('cookieConsent', 'rejected');
            } catch (e) {
                console.warn('Unable to write to localStorage.');
            }
            cookieBanner.classList.remove('show');
            setTimeout(() => {
                cookieBanner.style.display = 'none';
            }, 600);
        });
    }
});
