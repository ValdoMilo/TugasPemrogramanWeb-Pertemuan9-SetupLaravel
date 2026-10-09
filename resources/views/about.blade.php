@extends('layouts.app')

@section('title', 'About — ' . $nama)

@section('content')
<section class="max-w-6xl mx-auto px-6 pt-16 pb-24">

    <!-- Header -->
    <div class="mb-16 fade-up fade-up-1">
        <span class="text-xs font-bold uppercase tracking-widest text-red-400 mb-3 block">Tentang Saya</span>
        <h1 class="text-5xl md:text-6xl font-black tracking-tight mb-4">
            Kenalan <span class="text-gradient-red">Yuk</span>
        </h1>
        <p class="text-slate-400 text-lg max-w-2xl">
            Sedikit cerita tentang siapa saya dan apa yang saya kerjakan.
        </p>
    </div>

    <!-- Bio + Photo -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">

        <!-- Photo Card -->
        <div class="fade-up fade-up-2">
            <div class="card text-center">
                <div class="flex justify-center mb-6">
                    <div class="relative">
                        <div class="w-32 h-32 rounded-full bg-gradient-to-br from-red-500 via-red-600 to-purple-600 flex items-center justify-center shadow-xl">
                            <span class="text-white text-5xl font-black">R</span>
                        </div>
                    </div>
                </div>
                <h2 class="text-xl font-bold mb-1">{{ $nama }}</h2>
                <p class="text-sm text-slate-500 mb-4">{{ $prodi }}</p>
                <div class="flex flex-wrap gap-2 justify-center">
                    <span class="px-3 py-1 rounded-full bg-red-500/10 border border-red-500/30 text-red-400 text-xs font-semibold">
                        {{ $kelas }}
                    </span>
                    <span class="px-3 py-1 rounded-full bg-slate-700/50 text-slate-300 text-xs font-semibold">
                        NIM {{ $nim }}
                    </span>
                </div>
            </div>
        </div>

        <!-- Info -->
        <div class="lg:col-span-2 fade-up fade-up-3">
            <div class="card h-full">
                <h3 class="text-xl font-bold mb-6">Informasi Akademik</h3>

                <div class="space-y-4">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 p-4 rounded-xl bg-slate-800/40 border border-slate-700/40">
                        <span class="text-sm text-slate-400">Nama Lengkap</span>
                        <span class="font-semibold">{{ $nama }}</span>
                    </div>
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 p-4 rounded-xl bg-slate-800/40 border border-slate-700/40">
                        <span class="text-sm text-slate-400">NIM</span>
                        <span class="font-mono font-semibold">{{ $nim }}</span>
                    </div>
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 p-4 rounded-xl bg-slate-800/40 border border-slate-700/40">
                        <span class="text-sm text-slate-400">Kelas</span>
                        <span class="font-semibold">{{ $kelas }}</span>
                    </div>
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 p-4 rounded-xl bg-slate-800/40 border border-slate-700/40">
                        <span class="text-sm text-slate-400">Program Studi</span>
                        <span class="font-semibold">{{ $prodi }}</span>
                    </div>
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 p-4 rounded-xl bg-slate-800/40 border border-slate-700/40">
                        <span class="text-sm text-slate-400">Fakultas</span>
                        <span class="font-semibold">{{ $fakultas }}</span>
                    </div>
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 p-4 rounded-xl bg-slate-800/40 border border-slate-700/40">
                        <span class="text-sm text-slate-400">Universitas</span>
                        <span class="font-semibold text-red-400">{{ $universitas }}</span>
                    </div>
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 p-4 rounded-xl bg-slate-800/40 border border-slate-700/40">
                        <span class="text-sm text-slate-400">GitHub</span>
                        <a href="https://github.com/{{ $github }}" target="_blank" rel="noopener" class="font-semibold text-red-400 hover:underline">
                            @{{ $github }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Skills -->
    <div class="mb-16 fade-up fade-up-4">
        <div class="mb-8">
            <span class="text-xs font-bold uppercase tracking-widest text-red-400 mb-2 block">Keahlian</span>
            <h2 class="text-3xl font-bold mb-3">Skills & Kemampuan</h2>
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
    </div>

    <!-- Interests -->
    <div>
        <div class="mb-8">
            <span class="text-xs font-bold uppercase tracking-widest text-red-400 mb-2 block">Minat</span>
            <h2 class="text-3xl font-bold mb-3">Bidang yang Diminati</h2>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach ($interests as $interest)
                <div class="card text-center">
                    <div class="text-4xl mb-3">{{ $interest['icon'] }}</div>
                    <p class="font-semibold text-sm">{{ $interest['nama'] }}</p>
                </div>
            @endforeach
        </div>
    </div>

</section>
@endsection