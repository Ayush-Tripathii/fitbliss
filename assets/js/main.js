/* FitBliss Main JavaScript */
(function() {
    'use strict';

    // ── HEADER SCROLL EFFECT ───────────────────────────────────────
    var header = document.getElementById('site-header');
    function handleScroll() {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }
    window.addEventListener('scroll', handleScroll, { passive: true });

    // ── MOBILE MENU TOGGLE ─────────────────────────────────────────
    var menuToggle = document.getElementById('menuToggle');
    var mainNav = document.querySelector('.main-nav');
    if (menuToggle && mainNav) {
        menuToggle.addEventListener('click', function() {
            var expanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !expanded);
            mainNav.classList.toggle('open');
        });

        // Handle dropdown toggles on mobile
        document.querySelectorAll('.nav-item.has-dropdown > .nav-link').forEach(function(link) {
            link.addEventListener('click', function(e) {
                if (window.innerWidth <= 767) {
                    e.preventDefault();
                    var parent = this.parentElement;
                    parent.classList.toggle('open');
                }
            });
        });
    }

    // Close menu on outside click
    document.addEventListener('click', function(e) {
        if (mainNav && mainNav.classList.contains('open')) {
            if (!mainNav.contains(e.target) && !menuToggle.contains(e.target)) {
                mainNav.classList.remove('open');
                menuToggle.setAttribute('aria-expanded', 'false');
            }
        }
    });

    // ── CHATY FLOATING WIDGET ──────────────────────────────────────
    var chatyToggle = document.getElementById('chatyToggle');
    var chatyChannels = document.getElementById('chatyChannels');
    if (chatyToggle && chatyChannels) {
        chatyToggle.addEventListener('click', function() {
            chatyChannels.classList.toggle('open');
        });
    }

    // ── JOIN MODAL ─────────────────────────────────────────────────
    var joinModal = document.getElementById('joinModal');
    var closeModal = document.getElementById('closeModal');

    function openJoinModal() {
        if (joinModal) {
            joinModal.classList.add('open');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeJoinModal() {
        if (joinModal) {
            joinModal.classList.remove('open');
            document.body.style.overflow = '';
        }
    }

    if (closeModal) closeModal.addEventListener('click', closeJoinModal);
    if (joinModal) {
        joinModal.addEventListener('click', function(e) {
            if (e.target === joinModal) closeJoinModal();
        });
    }

    // Open modal on joinnow buttons
    document.querySelectorAll('.joinnow').forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            openJoinModal();
        });
    });

    // Handle form submission (placeholder)
    var joinForm = document.getElementById('joinForm');
    if (joinForm) {
        joinForm.addEventListener('submit', function(e) {
            e.preventDefault();
            // Show success message
            joinForm.innerHTML = '<div style="text-align:center;padding:40px 0;"><p style="font-family:\'Bebas Neue\',Impact,sans-serif;font-size:2rem;color:#37c080;margin-bottom:12px;">Thank You!</p><p style="color:#9b998b;font-size:14px;">We\'ll be in touch soon to book your free trial.</p></div>';
        });
    }

    // ── GALLERY LIGHTBOX ───────────────────────────────────────────
    var lightboxOverlay = document.getElementById('lightboxOverlay');
    var lightboxImg = document.getElementById('lightboxImg');
    var lightboxClose = document.getElementById('lightboxClose');

    if (lightboxOverlay && lightboxImg) {
        document.querySelectorAll('.gallery-item[data-src]').forEach(function(item) {
            item.addEventListener('click', function() {
                lightboxImg.src = this.getAttribute('data-src');
                lightboxOverlay.classList.add('open');
                document.body.style.overflow = 'hidden';
            });
        });

        function closeLightbox() {
            lightboxOverlay.classList.remove('open');
            document.body.style.overflow = '';
        }

        if (lightboxClose) lightboxClose.addEventListener('click', closeLightbox);
        lightboxOverlay.addEventListener('click', function(e) {
            if (e.target === lightboxOverlay) closeLightbox();
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeLightbox();
                closeJoinModal();
            }
        });
    }

    // ── VIDEO TESTIMONIAL SLIDER ───────────────────────────────────
    var fbtTrack = document.getElementById('fbtTrack');
    if (fbtTrack) {
        var fbtDotEls = document.querySelectorAll('[data-dot]');
        var fbtCounter = document.getElementById('fbtCount');
        var fbtN = 12, fbtGAP = 16, fbtCur = 0;

        function fbtGetShow() {
            var w = window.innerWidth;
            if (w < 600) return 1;
            if (w < 960) return 2;
            return 3;
        }

        function fbtCardW() {
            var SHOW = fbtGetShow();
            return (fbtTrack.parentElement.offsetWidth - (SHOW - 1) * fbtGAP) / SHOW;
        }

        function fbtUpdateWidths() {
            var cw = fbtCardW();
            fbtTrack.querySelectorAll('.fbt-card').forEach(function(c) {
                c.style.flex = '0 0 ' + cw + 'px';
                c.style.width = cw + 'px';
            });
        }

        function fbtGoTo(idx, animate) {
            document.querySelectorAll('video').forEach(function(v) {
                v.pause(); v.currentTime = 0;
                var o = document.getElementById(v.id + 'Ov');
                if (o) o.style.display = 'flex';
            });
            fbtCur = ((idx % fbtN) + fbtN) % fbtN;
            var tx = fbtCur * (fbtCardW() + fbtGAP);
            fbtTrack.style.transition = animate === false ? 'none' : 'transform .55s cubic-bezier(.4,0,.2,1)';
            fbtTrack.style.transform = 'translateX(-' + tx + 'px)';
            fbtDotEls.forEach(function(d, i) {
                d.style.width = i === fbtCur ? '32px' : '16px';
                d.style.background = i === fbtCur ? '#37c080' : 'rgba(244,242,234,0.2)';
            });
            if (fbtCounter) fbtCounter.textContent = String(fbtCur + 1).padStart(2, '0') + ' / ' + String(fbtN).padStart(2, '0');
        }

        window.fbPlayVideo = function(id) {
            var vid = document.getElementById(id);
            var ov = document.getElementById(id + 'Ov');
            if (!vid) return;
            document.querySelectorAll('video').forEach(function(v) {
                if (v.id !== id) { v.pause(); v.currentTime = 0; }
                var o = document.getElementById(v.id + 'Ov');
                if (o && v.id !== id) o.style.display = 'flex';
            });
            if (vid.paused) {
                vid.play();
                if (ov) ov.style.display = 'none';
            } else {
                vid.pause();
                if (ov) ov.style.display = 'flex';
            }
            vid.addEventListener('ended', function() {
                if (ov) ov.style.display = 'flex';
            }, { once: true });
        };

        window.fbtSlide = function(d) { fbtGoTo(fbtCur + d, true); };
        window.fbtGo = function(i) { fbtGoTo(i, true); };

        // Touch swipe
        var startX = 0, currentX = 0, isDragging = false;
        fbtTrack.addEventListener('touchstart', function(e) { startX = currentX = e.touches[0].clientX; isDragging = true; }, { passive: true });
        fbtTrack.addEventListener('touchmove', function(e) { if (!isDragging) return; currentX = e.touches[0].clientX; }, { passive: true });
        fbtTrack.addEventListener('touchend', function() {
            if (!isDragging) return;
            isDragging = false;
            var diff = startX - currentX;
            if (Math.abs(diff) > 40) fbtSlide(diff > 0 ? 1 : -1);
        }, { passive: true });

        window.addEventListener('resize', function() { fbtUpdateWidths(); fbtGoTo(fbtCur, false); });
        window.addEventListener('load', function() { fbtUpdateWidths(); fbtGoTo(0, false); });
        fbtUpdateWidths();
        fbtGoTo(0, false);
    }

    // ── INTERSECTION OBSERVER FADE-IN ──────────────────────────────
    var fadeEls = document.querySelectorAll('.fade-in');
    if (fadeEls.length > 0 && 'IntersectionObserver' in window) {
        var fadeObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    fadeObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
        fadeEls.forEach(function(el) { fadeObserver.observe(el); });
    } else {
        fadeEls.forEach(function(el) { el.classList.add('visible'); });
    }

    // ── STATS COUNTER ANIMATION ────────────────────────────────────
    function animateCounter(el, target, suffix) {
        var start = 0;
        var duration = 1800;
        var startTime = null;
        function step(timestamp) {
            if (!startTime) startTime = timestamp;
            var progress = Math.min((timestamp - startTime) / duration, 1);
            var eased = 1 - Math.pow(1 - progress, 3);
            el.textContent = Math.floor(eased * target) + suffix;
            if (progress < 1) requestAnimationFrame(step);
        }
        requestAnimationFrame(step);
    }

    var statsObserver = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                var el = entry.target;
                var val = el.getAttribute('data-count');
                var suffix = el.getAttribute('data-suffix') || '';
                if (val) animateCounter(el, parseFloat(val), suffix);
                statsObserver.unobserve(el);
            }
        });
    }, { threshold: 0.5 });

    document.querySelectorAll('[data-count]').forEach(function(el) { statsObserver.observe(el); });

    // ── HERO YOUTUBE PLAYER (if present) ──────────────────────────
    var heroIframe = document.getElementById('heroYTPlayer');
    if (heroIframe) {
        // The YouTube IFrame API will handle playback
        window.onYouTubeIframeAPIReady = function() {
            // Player initialization handled inline on page
        };
    }

    // ── SMOOTH ANCHOR SCROLL ───────────────────────────────────────
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            var target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                var headerH = header ? header.offsetHeight : 80;
                var targetPos = target.getBoundingClientRect().top + window.scrollY - headerH;
                window.scrollTo({ top: targetPos, behavior: 'smooth' });
            }
        });
    });

})();
