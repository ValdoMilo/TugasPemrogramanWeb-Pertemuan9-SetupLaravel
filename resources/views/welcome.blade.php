<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="theme-color" content="#0a0e1a">
    <meta name="description" content="Laravel — Framework PHP modern untuk membangun aplikasi web yang elegan dan powerful.">

    <title>Laravel — Web Application Framework</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="icon" href="https://laravel.com/img/favicon/favicon-32x32.png" type="image/png">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Background decoration -->
    <div class="bg-grid" aria-hidden="true"></div>
    <div class="bg-glow bg-glow--1" aria-hidden="true"></div>
    <div class="bg-glow bg-glow--2" aria-hidden="true"></div>

    <!-- ================= HEADER ================= -->
    <header class="site-header">
        <div class="container site-header__inner">
            <a href="/" class="brand" aria-label="Laravel">
                <svg class="brand__logo" viewBox="0 0 50 52" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1-.402.694l-9.209 5.302V39.25c0 .286-.152.55-.4.694L20.42 51.01c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1-.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054L.402 39.944A.801.801 0 0 1 0 39.25V6.334c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.024-.021.048-.043.076-.06.03-.018.062-.029.093-.043.027-.013.053-.028.082-.037a.791.791 0 0 1 .45 0c.03.009.055.023.083.037.03.014.063.025.092.043.028.017.052.039.076.06.026.02.056.037.079.06.027.028.048.061.07.093.019.024.04.045.056.07.022.04.036.083.05.125.01.023.022.044.03.067.017.068.026.138.026.21v32.104l8.515-4.902V22.95c0-.072.01-.142.029-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.07-.093.023-.023.054-.04.08-.06.024-.021.048-.043.076-.06.029-.018.061-.029.093-.043.027-.013.052-.028.081-.037a.791.791 0 0 1 .45 0c.03.009.055.023.083.037.03.014.063.025.092.043.028.017.052.039.076.06.026.02.056.037.079.06.027.028.048.061.07.093.019.024.04.045.056.07.022.04.036.083.05.125.01.023.022.044.03.067.017.068.026.138.026.21v12.403l8.515 4.902V12.199l-15.666 9.02-8.515-4.902 24.464-14.086a.801.801 0 0 1 .816 0l9.211 5.302a.803.803 0 0 1 .402.694v6.513l.001.001Z" fill="currentColor"/>
                </svg>
                <span class="brand__text">Laravel</span>
            </a>

            <nav class="site-nav" aria-label="Navigasi utama">
                <a href="#features" class="site-nav__link">Fitur</a>
                <a href="#install" class="site-nav__link">Instalasi</a>
                <a href="#stack" class="site-nav__link">Stack</a>
                <a href="https://laravel.com/docs" target="_blank" rel="noopener" class="site-nav__link">Docs ↗</a>
            </nav>

            <div class="site-header__actions">
                <button class="theme-toggle" id="theme-toggle" type="button" aria-label="Ubah tema">
                    <span class="theme-toggle__icon theme-toggle__icon--sun" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="4"/>
                            <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"/>
                        </svg>
                    </span>
                    <span class="theme-toggle__icon theme-toggle__icon--moon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
                        </svg>
                    </span>
                </button>

                <a href="https://laravel.com/docs/installation" target="_blank" rel="noopener" class="btn btn--primary">
                    Mulai
                </a>
            </div>
        </div>
    </header>

    <main>
        <!-- ================= HERO ================= -->
        <section class="hero">
            <div class="container hero__inner">
                <div class="hero__content">
                    <span class="badge">
                        <span class="badge__dot"></span>
                        Laravel 10.x — Rilis Terbaru
                    </span>

                    <h1 class="hero__title">
                        Framework PHP untuk
                        <span class="text-gradient">Artisan Modern</span>
                    </h1>

                    <p class="hero__desc">
                        Laravel adalah framework web application dengan sintaks ekspresif dan elegan.
                        Kami percaya pengembangan harus menyenangkan dan kreatif agar benar-benar memuaskan.
                    </p>

                    <div class="hero__actions">
                        <a href="https://laravel.com/docs/installation" target="_blank" rel="noopener" class="btn btn--primary btn--lg">
                            Mulai Belajar
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                        <a href="https://github.com/laravel/laravel" target="_blank" rel="noopener" class="btn btn--ghost btn--lg">
                            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                            </svg>
                            Lihat di GitHub
                        </a>
                    </div>

                    <div class="hero__meta">
                        <div class="hero__meta-item">
                            <strong>76k+</strong>
                            <span>GitHub Stars</span>
                        </div>
                        <div class="hero__meta-divider"></div>
                        <div class="hero__meta-item">
                            <strong>10+</strong>
                            <span>Tahun Berkembang</span>
                        </div>
                        <div class="hero__meta-divider"></div>
                        <div class="hero__meta-item">
                            <strong>1M+</strong>
                            <span>Website Aktif</span>
                        </div>
                    </div>
                </div>

                <div class="hero__visual">
                    <div class="code-window">
                        <div class="code-window__bar">
                            <div class="code-window__dots">
                                <span class="code-window__dot code-window__dot--red"></span>
                                <span class="code-window__dot code-window__dot--yellow"></span>
                                <span class="code-window__dot code-window__dot--green"></span>
                            </div>
                            <span class="code-window__title">routes/web.php</span>
                        </div>
                        <pre class="code-window__body"><code><span class="code-comment">// Rute sederhana &amp; ekspresif</span>
<span class="code-keyword">Route</span>::<span class="code-func">get</span>(<span class="code-string">'/'</span>, <span class="code-keyword">function</span> () {
    <span class="code-keyword">return</span> <span class="code-func">view</span>(<span class="code-string">'welcome'</span>);
});

<span class="code-comment">// Route dengan controller</span>
<span class="code-keyword">Route</span>::<span class="code-func">resource</span>(<span class="code-string">'users'</span>, <span class="code-type">UserController</span>::<span class="code-keyword">class</span>);

<span class="code-comment">// API route</span>
<span class="code-keyword">Route</span>::<span class="code-func">apiResource</span>(<span class="code-string">'posts'</span>, <span class="code-type">PostController</span>::<span class="code-keyword">class</span>);</code></pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= FEATURES ================= -->
        <section class="section" id="features">
            <div class="container">
                <header class="section__header">
                    <span class="section__eyebrow">Fitur Unggulan</span>
                    <h2 class="section__title">Semua yang Kamu Butuhkan</h2>
                    <p class="section__desc">
                        Laravel menyediakan tools lengkap untuk membangun aplikasi modern tanpa harus reinvent the wheel.
                    </p>
                </header>

                <div class="features-grid">
                    <article class="feature-card">
                        <div class="feature-card__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 17l6-6-6-6M12 19h8"/>
                            </svg>
                        </div>
                        <h3 class="feature-card__title">Routing Ekspresif</h3>
                        <p class="feature-card__desc">
                            Routing engine yang cepat, sederhana, dan mudah dipahami untuk aplikasi apapun.
                        </p>
                    </article>

                    <article class="feature-card">
                        <div class="feature-card__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <ellipse cx="12" cy="5" rx="9" ry="3"/>
                                <path d="M3 5v14a9 3 0 0 0 18 0V5M3 12a9 3 0 0 0 18 0"/>
                            </svg>
                        </div>
                        <h3 class="feature-card__title">Eloquent ORM</h3>
                        <p class="feature-card__desc">
                            ORM yang indah dan intuitif untuk bekerja dengan database tanpa query SQL yang rumit.
                        </p>
                    </article>

                    <article class="feature-card">
                        <div class="feature-card__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2v20M2 12h20"/>
                                <circle cx="12" cy="12" r="9"/>
                            </svg>
                        </div>
                        <h3 class="feature-card__title">Blade Templating</h3>
                        <p class="feature-card__desc">
                            Template engine yang powerful dengan inheritance, components, dan directives.
                        </p>
                    </article>

                    <article class="feature-card">
                        <div class="feature-card__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="11" width="18" height="11" rx="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                        </div>
                        <h3 class="feature-card__title">Authentication</h3>
                        <p class="feature-card__desc">
                            Sistem autentikasi lengkap dengan scaffolding siap pakai untuk memulai cepat.
                        </p>
                    </article>

                    <article class="feature-card">
                        <div class="feature-card__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                            </svg>
                        </div>
                        <h3 class="feature-card__title">Queue & Jobs</h3>
                        <p class="feature-card__desc">
                            Background processing dengan queue untuk menangani tugas berat tanpa blocking.
                        </p>
                    </article>

                    <article class="feature-card">
                        <div class="feature-card__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            </svg>
                        </div>
                        <h3 class="feature-card__title">Security First</h3>
                        <p class="feature-card__desc">
                            Perlindungan bawaan terhadap SQL injection, XSS, CSRF, dan berbagai ancaman umum.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <!-- ================= INSTALL ================= -->
        <section class="section section--alt" id="install">
            <div class="container">
                <header class="section__header">
                    <span class="section__eyebrow">Mulai Cepat</span>
                    <h2 class="section__title">Install dalam 3 Langkah</h2>
                    <p class="section__desc">
                        Setup Laravel hanya butuh beberapa detik. Pastikan PHP 8.1+ dan Composer sudah terinstall.
                    </p>
                </header>

                <div class="install-grid">
                    <div class="install-step">
                        <div class="install-step__num">01</div>
                        <h3 class="install-step__title">Install Composer</h3>
                        <p class="install-step__desc">Download dan install Composer dari situs resmi.</p>
                        <div class="terminal">
                            <div class="terminal__header">
                                <span class="terminal__label">Terminal</span>
                                <button class="terminal__copy" data-copy="curl -sS https://getcomposer.org/installer | php" type="button" aria-label="Salin">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="9" y="9" width="13" height="13" rx="2"/>
                                        <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/>
                                    </svg>
                                </button>
                            </div>
                            <pre class="terminal__body"><code><span class="term-prompt">$</span> curl -sS https://getcomposer.org/installer | php</code></pre>
                        </div>
                    </div>

                    <div class="install-step">
                        <div class="install-step__num">02</div>
                        <h3 class="install-step__title">Buat Project</h3>
                        <p class="install-step__desc">Generate project Laravel baru dengan Composer.</p>
                        <div class="terminal">
                            <div class="terminal__header">
                                <span class="terminal__label">Terminal</span>
                                <button class="terminal__copy" data-copy="composer create-project laravel/laravel my-app" type="button" aria-label="Salin">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="9" y="9" width="13" height="13" rx="2"/>
                                        <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/>
                                    </svg>
                                </button>
                            </div>
                            <pre class="terminal__body"><code><span class="term-prompt">$</span> composer create-project laravel/laravel my-app</code></pre>
                        </div>
                    </div>

                    <div class="install-step">
                        <div class="install-step__num">03</div>
                        <h3 class="install-step__title">Jalankan Server</h3>
                        <p class="install-step__desc">Masuk ke folder project dan jalankan dev server.</p>
                        <div class="terminal">
                            <div class="terminal__header">
                                <span class="terminal__label">Terminal</span>
                                <button class="terminal__copy" data-copy="cd my-app && php artisan serve" type="button" aria-label="Salin">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="9" y="9" width="13" height="13" rx="2"/>
                                        <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/>
                                    </svg>
                                </button>
                            </div>
                            <pre class="terminal__body"><code><span class="term-prompt">$</span> cd my-app
<span class="term-prompt">$</span> php artisan serve

<span class="term-success">→ Server running on http://127.0.0.1:8000</span></code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= STACK ================= -->
        <section class="section" id="stack">
            <div class="container">
                <header class="section__header">
                    <span class="section__eyebrow">Ekosistem</span>
                    <h2 class="section__title">Dibangun dengan Tools Terbaik</h2>
                    <p class="section__desc">
                        Laravel didukung oleh ekosistem package dan tools yang matang untuk produktivitas maksimal.
                    </p>
                </header>

                <div class="stack-grid">
                    <div class="stack-card">
                        <div class="stack-card__icon" style="--color: #f55247;">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                            </svg>
                        </div>
                        <h3 class="stack-card__title">Laravel Framework</h3>
                        <p class="stack-card__desc">Core framework dengan semua fitur modern.</p>
                    </div>

                    <div class="stack-card">
                        <div class="stack-card__icon" style="--color: #61dafb;">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <circle cx="12" cy="12" r="2"/>
                                <ellipse cx="12" cy="12" rx="10" ry="4" fill="none" stroke="currentColor" stroke-width="1.5"/>
                                <ellipse cx="12" cy="12" rx="10" ry="4" fill="none" stroke="currentColor" stroke-width="1.5" transform="rotate(60 12 12)"/>
                                <ellipse cx="12" cy="12" rx="10" ry="4" fill="none" stroke="currentColor" stroke-width="1.5" transform="rotate(120 12 12)"/>
                            </svg>
                        </div>
                        <h3 class="stack-card__title">Vite</h3>
                        <p class="stack-card__desc">Build tool super cepat untuk asset frontend.</p>
                    </div>

                    <div class="stack-card">
                        <div class="stack-card__icon" style="--color: #38bdf8;">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                            </svg>
                        </div>
                        <h3 class="stack-card__title">Tailwind CSS</h3>
                        <p class="stack-card__desc">Utility-first CSS untuk UI yang konsisten.</p>
                    </div>

                    <div class="stack-card">
                        <div class="stack-card__icon" style="--color: #a78bfa;">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </div>
                        <h3 class="stack-card__title">MySQL / PostgreSQL</h3>
                        <p class="stack-card__desc">Database support untuk berbagai kebutuhan.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= CTA ================= -->
        <section class="cta">
            <div class="container">
                <div class="cta__inner">
                    <h2 class="cta__title">Siap Membangun Sesuatu yang Hebat?</h2>
                    <p class="cta__desc">
                        Bergabung dengan ribuan developer yang telah memilih Laravel sebagai framework utama mereka.
                    </p>
                    <div class="cta__actions">
                        <a href="https://laravel.com/docs/installation" target="_blank" rel="noopener" class="btn btn--primary btn--lg">
                            Baca Dokumentasi
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                        <a href="https://laracasts.com" target="_blank" rel="noopener" class="btn btn--ghost btn--lg">
                            Tonton Video Tutorial
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- ================= FOOTER ================= -->
    <footer class="site-footer">
        <div class="container">
            <div class="site-footer__grid">
                <div class="site-footer__brand">
                    <div class="brand brand--footer">
                        <svg class="brand__logo" viewBox="0 0 50 52" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1-.402.694l-9.209 5.302V39.25c0 .286-.152.55-.4.694L20.42 51.01c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1-.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054L.402 39.944A.801.801 0 0 1 0 39.25V6.334c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.024-.021.048-.043.076-.06.03-.018.062-.029.093-.043.027-.013.053-.028.082-.037a.791.791 0 0 1 .45 0c.03.009.055.023.083.037.03.014.063.025.092.043.028.017.052.039.076.06.026.02.056.037.079.06.027.028.048.061.07.093.019.024.04.045.056.07.022.04.036.083.05.125.01.023.022.044.03.067.017.068.026.138.026.21v32.104l8.515-4.902V22.95c0-.072.01-.142.029-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.07-.093.023-.023.054-.04.08-.06.024-.021.048-.043.076-.06.029-.018.061-.029.093-.043.027-.013.052-.028.081-.037a.791.791 0 0 1 .45 0c.03.009.055.023.083.037.03.014.063.025.092.043.028.017.052.039.076.06.026.02.056.037.079.06.027.028.048.061.07.093.019.024.04.045.056.07.022.04.036.083.05.125.01.023.022.044.03.067.017.068.026.138.026.21v12.403l8.515 4.902V12.199l-15.666 9.02-8.515-4.902 24.464-14.086a.801.801 0 0 1 .816 0l9.211 5.302a.803.803 0 0 1 .402.694v6.513l.001.001Z" fill="currentColor"/>
                        </svg>
                        <span class="brand__text">Laravel</span>
                    </div>
                    <p class="site-footer__tagline">
                        Framework PHP untuk artisan modern. Dibuat dengan ❤ untuk komunitas global.
                    </p>
                </div>

                <div class="site-footer__col">
                    <h4 class="site-footer__title">Produk</h4>
                    <ul class="site-footer__list">
                        <li><a href="https://laravel.com/docs" target="_blank" rel="noopener">Dokumentasi</a></li>
                        <li><a href="https://laracasts.com" target="_blank" rel="noopener">Laracasts</a></li>
                        <li><a href="https://forge.laravel.com" target="_blank" rel="noopener">Forge</a></li>
                        <li><a href="https://vapor.laravel.com" target="_blank" rel="noopener">Vapor</a></li>
                    </ul>
                </div>

                <div class="site-footer__col">
                    <h4 class="site-footer__title">Komunitas</h4>
                    <ul class="site-footer__list">
                        <li><a href="https://github.com/laravel/laravel" target="_blank" rel="noopener">GitHub</a></li>
                        <li><a href="https://twitter.com/laravelphp" target="_blank" rel="noopener">Twitter</a></li>
                        <li><a href="https://discord.gg/laravel" target="_blank" rel="noopener">Discord</a></li>
                        <li><a href="https://laravel.com/blog" target="_blank" rel="noopener">Blog</a></li>
                    </ul>
                </div>

                <div class="site-footer__col">
                    <h4 class="site-footer__title">Sumber Daya</h4>
                    <ul class="site-footer__list">
                        <li><a href="https://laravel.com/docs/contributions" target="_blank" rel="noopener">Kontribusi</a></li>
                        <li><a href="https://laravel.com/docs/security" target="_blank" rel="noopener">Keamanan</a></li>
                        <li><a href="https://laravel.com/partners" target="_blank" rel="noopener">Partners</a></li>
                        <li><a href="https://laravel.com/license" target="_blank" rel="noopener">Lisensi</a></li>
                    </ul>
                </div>
            </div>

            <div class="site-footer__bottom">
                <p>&copy; {{ date('Y') }} Laravel LLC. All rights reserved.</p>
                <p class="site-footer__version">v{{ Illuminate\Foundation\Application::VERSION }}</p>
            </div>
        </div>
    </footer>

    <!-- Toast notification -->
    <div class="toast" id="toast" role="status" aria-live="polite"></div>
</body>
</html>