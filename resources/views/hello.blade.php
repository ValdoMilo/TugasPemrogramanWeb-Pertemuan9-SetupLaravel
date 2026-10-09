@extends('layouts.app')

@section('title', 'Hello, ' . $nama)

@section('content')
<section class="min-h-[70vh] flex items-center justify-center px-6 py-16">
    <div class="text-center max-w-2xl mx-auto">

        <!-- Icon -->
        <div class="mb-8 fade-up fade-up-1">
            <div class="inline-flex w-24 h-24 rounded-3xl bg-gradient-to-br from-red-500 to-purple-600 items-center justify-center shadow-2xl shadow-red-500/30 float-anim">
                <span class="text-5xl">👋</span>
            </div>
        </div>

        <!-- Greeting -->
        <h1 class="fade-up fade-up-2 text-5xl md:text-7xl font-black tracking-tight mb-4">
            Halo, <span class="text-gradient-red">{{ $nama }}</span>!
        </h1>

        <p class="fade-up fade-up-3 text-lg text-slate-400 mb-8 max-w-lg mx-auto">
            Ini contoh <strong class="text-white">route parameter</strong> — nama Anda diambil dari URL
            dan dikirim ke view melalui controller.
        </p>

        <!-- Code Preview -->
        <div class="fade-up fade-up-4 max-w-lg mx-auto mb-8">
            <div class="bg-slate-900/80 backdrop-blur-xl border border-slate-700/50 rounded-2xl overflow-hidden shadow-2xl text-left">
                <div class="flex items-center gap-2 px-4 py-3 bg-slate-800/50 border-b border-slate-700/50">
                    <div class="flex gap-1.5">
                        <span class="w-3 h-3 rounded-full bg-red-500"></span>
                        <span class="w-3 h-3 rounded-full bg-yellow-500"></span>
                        <span class="w-3 h-3 rounded-full bg-green-500"></span>
                    </div>
                    <span class="text-xs text-slate-500 font-mono ml-2">routes/web.php</span>
                </div>
                <pre class="p-4 text-xs font-mono text-slate-300 overflow-x-auto"><code><span class="text-slate-500">// Bonus: route parameter</span>
<span class="text-pink-400">Route</span>::<span class="text-blue-400">get</span>(<span class="text-green-400">'/hello/{nama}'</span>,
    [<span class="text-yellow-400">PageController</span>::<span class="text-pink-400">class</span>, <span class="text-green-400">'hello'</span>]
);</code></pre>
            </div>
        </div>

        <!-- URL Display -->
        <div class="fade-up fade-up-4 inline-flex items-center gap-2 px-4 py-2 rounded-full bg-slate-800/50 border border-slate-700/50 font-mono text-sm">
            <span class="text-slate-500">URL:</span>
            <span class="text-red-400">/hello/{{ $nama }}</span>
        </div>

        <!-- Actions -->
        <div class="fade-up fade-up-4 flex flex-wrap gap-3 justify-center mt-8">
            <a href="/" class="btn-primary">
                ← Kembali ke Home
            </a>
            <a href="/hello/{{ urlencode($nama) }}" class="btn-ghost">
                🔄 Reload Halaman
            </a>
        </div>

        <!-- Other names -->
        <div class="mt-12">
            <p class="text-xs text-slate-500 uppercase tracking-widest mb-3">Coba nama lain:</p>
            <div class="flex flex-wrap gap-2 justify-center">
                <a href="/hello/Revaldo" class="px-3 py-1.5 rounded-full bg-slate-800/50 border border-slate-700/50 text-xs hover:border-red-500/50 hover:text-red-400 transition">Revaldo</a>
                <a href="/hello/Ginting" class="px-3 py-1.5 rounded-full bg-slate-800/50 border border-slate-700/50 text-xs hover:border-red-500/50 hover:text-red-400 transition">Ginting</a>
                <a href="/hello/Unimed" class="px-3 py-1.5 rounded-full bg-slate-800/50 border border-slate-700/50 text-xs hover:border-red-500/50 hover:text-red-400 transition">Unimed</a>
                <a href="/hello/Dunia" class="px-3 py-1.5 rounded-full bg-slate-800/50 border border-slate-700/50 text-xs hover:border-red-500/50 hover:text-red-400 transition">Dunia</a>
            </div>
        </div>

    </div>
</section>
@endsection