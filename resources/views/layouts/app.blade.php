<!DOCTYPE html>
<html lang="id" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="theme-color" content="#0a0e1a">
    <title>@yield('title', 'Revaldo Ginting')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    },
                },
            },
        };
    </script>

    <style>
        body {
            font-family: 'Inter', system-ui, sans-serif;
            background: #0a0e1a;
            color: #e8edf5;
            min-height: 100vh;
            overflow-x: hidden;
        }

        [data-theme="light"] body {
            background: #fafbfc;
            color: #0f172a;
        }

        .bg-grid {
            position: fixed;
            inset: 0;
            z-index: 0;
            background-image:
                linear-gradient(to right, rgba(148, 163, 184, 0.08) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(148, 163, 184, 0.08) 1px, transparent 1px);
            background-size: 48px 48px;
            mask-image: radial-gradient(ellipse 80% 60% at 50% 0%, #000 30%, transparent 80%);
            -webkit-mask-image: radial-gradient(ellipse 80% 60% at 50% 0%, #000 30%, transparent 80%);
            opacity: 0.5;
            pointer-events: none;
        }

        .bg-glow {
            position: fixed;
            border-radius: 50%;
            filter: blur(120px);
            pointer-events: none;
            z-index: 0;
        }

        .bg-glow-1 {
            width: 500px;
            height: 500px;
            background: #ff2d20;
            opacity: 0.1;
            top: -200px;
            left: -100px;
        }

        .bg-glow-2 {
            width: 600px;
            height: 600px;
            background: #6366f1;
            opacity: 0.08;
            top: 30%;
            right: -200px;
        }

        .content-wrapper {
            position: relative;
            z-index: 1;
        }

        .text-gradient-red {
            background: linear-gradient(135deg, #ff2d20 0%, #ff7a5c 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(10, 14, 26, 0.75);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            border-bottom: 1px solid rgba(148, 163, 184, 0.12);
        }

        [data-theme="light"] .navbar {
            background: rgba(250, 251, 252, 0.85);
            border-bottom-color: rgba(15, 23, 42, 0.08);
        }

        .nav-link {
            padding: 8px 16px;
            font-size: 0.88rem;
            font-weight: 500;
            color: #94a3b8;
            border-radius: 8px;
            transition: all 0.2s ease;
            text-decoration: none;
        }

        .nav-link:hover {
            color: #e8edf5;
            background: rgba(148, 163, 184, 0.08);
        }

        .nav-link.active {
            color: #ff2d20;
            background: rgba(255, 45, 32, 0.1);
        }

        [data-theme="light"] .nav-link {
            color: #475569;
        }

        .theme-toggle {
            width: 38px;
            height: 38px;
            display: grid;
            place-items: center;
            border-radius: 12px;
            border: 1px solid rgba(148, 163, 184, 0.12);
            background: rgba(148, 163, 184, 0.05);
            color: #e8edf5;
            cursor: pointer;
            transition: all 0.2s ease;
            position: relative;
            overflow: hidden;
        }

        .theme-toggle:hover {
            background: rgba(148, 163, 184, 0.09);
            border-color: rgba(148, 163, 184, 0.22);
        }

        .theme-toggle .icon-sun,
        .theme-toggle .icon-moon {
            position: absolute;
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.3s ease;
        }

        .theme-toggle .icon-sun { transform: translateY(100%); opacity: 0; }
        .theme-toggle .icon-moon { transform: translateY(0); opacity: 1; }
        [data-theme="light"] .theme-toggle .icon-sun { transform: translateY(0); opacity: 1; }
        [data-theme="light"] .theme-toggle .icon-moon { transform: translateY(-100%); opacity: 0; }

        .card {
            background: rgba(148, 163, 184, 0.04);
            border: 1px solid rgba(148, 163, 184, 0.12);
            border-radius: 18px;
            padding: 28px;
            transition: all 0.22s ease;
        }

        .card:hover {
            border-color: rgba(148, 163, 184, 0.22);
            transform: translateY(-2px);
        }

        [data-theme="light"] .card {
            background: #ffffff;
            border-color: rgba(15, 23, 42, 0.08);
        }

        .skill-bar {
            height: 8px;
            background: rgba(148, 163, 184, 0.1);
            border-radius: 999px;
            overflow: hidden;
        }

        .skill-bar-fill {
            height: 100%;
            background: linear-gradient(90deg, #ff2d20, #ff7a5c);
            border-radius: 999px;
            transition: width 1s cubic-bezier(0.4, 0, 0.2, 1);
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .float-anim {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-up { animation: fadeInUp 0.6s ease forwards; }
        .fade-up-1 { animation-delay: 0.1s; opacity: 0; }
        .fade-up-2 { animation-delay: 0.2s; opacity: 0; }
        .fade-up-3 { animation-delay: 0.3s; opacity: 0; }
        .fade-up-4 { animation-delay: 0.4s; opacity: 0; }

        .btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 24px;
            background: #ff2d20;
            color: white;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.9rem;
            text-decoration: none;
            transition: all 0.2s ease;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 16px rgba(255, 45, 32, 0.25);
        }

        .btn-primary:hover {
            background: #e0261b;
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(255, 45, 32, 0.35);
        }

        .btn-ghost {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 24px;
            background: rgba(148, 163, 184, 0.05);
            color: #e8edf5;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.9rem;
            text-decoration: none;
            transition: all 0.2s ease;
            border: 1px solid rgba(148, 163, 184, 0.22);
            cursor: pointer;
        }

        .btn-ghost:hover {
            background: rgba(148, 163, 184, 0.09);
            border-color: #ff2d20;
            color: #ff2d20;
        }

        ::-webkit-scrollbar { width: 10px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: rgba(148, 163, 184, 0.2); border-radius: 5px; }
        ::-webkit-scrollbar-thumb:hover { background: rgba(148, 163, 184, 0.3); }
    </style>

    @stack('styles')
</head>
<body>
    <div class="bg-grid" aria-hidden="true"></div>
    <div class="bg-glow bg-glow-1" aria-hidden="true"></div>
    <div class="bg-glow bg-glow-2" aria-hidden="true"></div>

    <div class="content-wrapper">
        <!-- Navbar -->
        <nav class="navbar">
            <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between gap-6">
                <a href="/" class="flex items-center gap-3 group">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center shadow-lg shadow-red-500/30 group-hover:scale-105 transition-transform">
                        <span class="text-white font-bold text-lg">R</span>
                    </div>
                    <div class="hidden sm:block">
                        <p class="font-bold text-sm leading-tight">Revaldo Ginting</p>
                        <p class="text-xs text-slate-500 leading-tight">PSIK 25B · Unimed</p>
                    </div>
                </a>

                <div class="flex items-center gap-1">
                    <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                    <a href="/about" class="nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                    <a href="/contact" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                </div>

                <button id="theme-toggle" class="theme-toggle" aria-label="Ubah tema">
                    <svg class="icon-moon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
                    </svg>
                    <svg class="icon-sun" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="4"/>
                        <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"/>
                    </svg>
                </button>
            </div>
        </nav>

        <!-- Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="border-t border-slate-800/60 mt-20">
            <div class="max-w-6xl mx-auto px-6 py-12">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center">
                                <span class="text-white font-bold">R</span>
                            </div>
                            <div>
                                <p class="font-bold text-sm">Revaldo Ginting</p>
                                <p class="text-xs text-slate-500">4253250033 · PSIK 25B</p>
                            </div>
                        </div>
                        <p class="text-sm text-slate-400 leading-relaxed">
                            Mahasiswa Ilmu Komputer Universitas Negeri Medan. Sedang belajar Laravel dan web development.
                        </p>
                    </div>

                    <div>
                        <h4 class="font-semibold text-xs uppercase tracking-widest text-slate-500 mb-4">Navigasi</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="/" class="text-slate-400 hover:text-red-400 transition">Home</a></li>
                            <li><a href="/about" class="text-slate-400 hover:text-red-400 transition">About</a></li>
                            <li><a href="/contact" class="text-slate-400 hover:text-red-400 transition">Contact</a></li>
                            <li><a href="/hello/Revaldo" class="text-slate-400 hover:text-red-400 transition">Hello Demo</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold text-xs uppercase tracking-widest text-slate-500 mb-4">Terkait</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="https://github.com/valdomilo" target="_blank" rel="noopener" class="text-slate-400 hover:text-red-400 transition">GitHub · @valdomilo</a></li>
                            <li><a href="https://unimed.ac.id" target="_blank" rel="noopener" class="text-slate-400 hover:text-red-400 transition">Universitas Negeri Medan</a></li>
                            <li><a href="https://laravel.com/docs" target="_blank" rel="noopener" class="text-slate-400 hover:text-red-400 transition">Laravel Docs</a></li>
                        </ul>
                    </div>
                </div>

                <div class="pt-6 border-t border-slate-800/60 flex flex-col md:flex-row justify-between items-center gap-2 text-xs text-slate-500">
                    <p>&copy; {{ date('Y') }} Revaldo Ginting · Tugas Rutin 9 — Setup Laravel</p>
                    <p class="font-mono">Laravel v{{ Illuminate\Foundation\Application::VERSION }}</p>
                </div>
            </div>
        </footer>
    </div>

    <script>
        const THEME_KEY = 'revaldo_theme';
        const html = document.documentElement;

        const saved = localStorage.getItem(THEME_KEY);
        const preferred = saved || (window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'dark');
        html.dataset.theme = preferred;

        document.getElementById('theme-toggle').addEventListener('click', () => {
            const next = html.dataset.theme === 'dark' ? 'light' : 'dark';
            html.dataset.theme = next;
            localStorage.setItem(THEME_KEY, next);
        });
    </script>

    @stack('scripts')
</body>
</html>