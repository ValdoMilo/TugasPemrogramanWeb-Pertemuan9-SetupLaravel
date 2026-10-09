@extends('layouts.app')

@section('title', 'Revaldo Ginting — Home')

@section('content')
<!-- HERO SECTION -->
<section class="max-w-6xl mx-auto px-6 pt-16 pb-24">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

        <!-- Left: Text -->
        <div>
            <div class="fade-up fade-up-1 inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-red-500/10 border border-red-500/30 text-red-400 text-xs font-semibold mb-6">
                <span class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></span>
                Sedang Belajar Laravel
            </div>

            <h1 class="fade-up fade-up-2 text-5xl md:text-6xl font-black leading-tight tracking-tight mb-6">
                Halo, saya
                <span class="block text-gradient-red mt-2">{{ $nama }}</span>
            </h1>

            <p class="fade-up fade-up-3 text-lg text-slate-400 leading-relaxed mb-8 max-w-lg">
                {{ $role }} di <strong class="text-white">{{ $universitas }}</strong>.
                {{ $tagline }}
            </p>

            <!-- Meta info -->
            <div class="fade-up fade-up-4 flex flex-wrap gap-3 mb-8">
                <div class="px-4 py-2 rounded-xl bg-slate-800/50 border border-slate-700/50">
                    <p class="text-xs text-slate-500 uppercase tracking-wider mb-1">NIM</p>
                    <p class="font-mono font-bold text-sm">{{ $nim }}</p>
                </div>
                <div class="px-4 py-2 rounded-xl bg-slate-800/50 border border-slate-700/50">
                    <p class="text-xs text-slate-500 uppercase tracking-wider mb-1">Kelas</p>
                    <p class="font-bold text-sm">{{ $kelas }}</p>
                </div>
            </div>

            <div class="flex flex-wrap gap-3">
                <a href="/about" class="btn-primary">
                    Kenali Saya
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
                <a href="https://github.com/valdomilo" target="_blank" rel="noopener" class="btn-ghost">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                    </svg>
                    @valdomilo
                </a>
            </div>
        </div>

        <!-- Right: Avatar Card -->
        <div class="fade-up fade-up-3 relative">
            <div class="relative">
                <!-- Glow -->
                <div class="absolute inset-0 bg-gradient-to-br from-red-500 to-purple-600 rounded-3xl blur-3xl opacity-20"></div>

                <!-- Card -->
                <div class="relative bg-slate-900/80 backdrop-blur-xl border border-slate-700/50 rounded-3xl p-8 shadow-2xl">
                    <!-- Avatar -->
                    <div class="flex justify-center mb-6">
                        <div class="relative float-anim">
                            <div class="absolute inset-0 bg-gradient-to-br from-red-500 to-red-600 rounded-full blur-2xl opacity-50"></div>
                            <div class="relative w-32 h-32 rounded-full bg-gradient-to-br from-red-500 via-red-600 to-purple-600 flex items-center justify-center shadow-2xl">
                                <span class="text-white text-5xl font-black">R</span>
                            </div>
                            <div class="absolute -bottom-2 -right-2 w-10 h-10 bg-green-500 rounded-full border-4 border-slate-900 flex items-center justify-center">
                                <span class="text-white text-xs font-bold">✓</span>
                            </div>
                        </div>
                    </div>

                    <!-- Info -->
                    <div class="text-center mb-6">
                        <h3 class="text-2xl font-bold mb-1">{{ $nama }}</h3>
                        <p class="text-sm text-slate-400">Ilmu Komputer · Unimed</p>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-3 pt-6 border-t border-slate-700/50">
                        @foreach ($stats as $stat)
                            <div class="text-center">
                                <p class="text-2xl font-black text-gradient-red">{{ $stat['value'] }}</p>
                                <p class="text-xs text-slate-500 uppercase tracking-wider mt-1">{{ $stat['label'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SKILLS SECTION -->
<section class="max-w-6xl mx-auto px-6 pb-24">
    <div class="mb-12">
        <span class="text-xs font-bold uppercase tracking-widest text-red-400 mb-2 block">Kemampuan</span>
        <h2 class="text-3xl md:text-4xl font-bold mb-3">Skill yang Sedang Dipelajari</h2>
        <p class="text-slate-400 max-w-2xl">
            Terus mengasah kemampuan di bidang web development dan pemrograman.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        @foreach ($skills as $skill)
            <div class="card">
                <div class="flex justify-between items-center mb-3">
                    <span class="font-semibold">{{ $skill['nama'] }}</span>
                    <span class="text-sm font-mono text-red-400">{{ $skill['level'] }}%</span>
                </div>
                <div class="skill-bar">
                    <div class="skill-bar-fill" style="width: {{ $skill['level'] }}%"></div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<!-- CHECKLIST SECTION -->
<section class="max-w-6xl mx-auto px-6 pb-24">
    <div class="card">
        <div class="flex items-center gap-3 mb-6">
            <div class="w-10 h-10 rounded-xl bg-green-500/10 border border-green-500/30 flex items-center justify-center">
                <span class="text-green-400">✅</span>
            </div>
            <div>
                <h3 class="font-bold text-lg">Tugas Rutin 9 — Progress</h3>
                <p class="text-xs text-slate-500">Checklist pengerjaan Setup Laravel</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
            @foreach ($items as $item)
                <div class="flex items-center gap-3 p-3 rounded-xl bg-slate-800/40 border border-slate-700/40">
                    <span class="text-green-400">✓</span>
                    <span class="text-sm">{{ $item }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection