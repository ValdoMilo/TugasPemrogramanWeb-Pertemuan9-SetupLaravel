@extends('layouts.app')

@section('title', 'Contact — ' . 'Revaldo')

@section('content')
<section class="max-w-6xl mx-auto px-6 pt-16 pb-24">

    <!-- Header -->
    <div class="mb-16 text-center fade-up fade-up-1">
        <span class="text-xs font-bold uppercase tracking-widest text-red-400 mb-3 block">Hubungi</span>
        <h1 class="text-5xl md:text-6xl font-black tracking-tight mb-4">
            Mari <span class="text-gradient-red">Terhubung</span>
        </h1>
        <p class="text-slate-400 text-lg max-w-2xl mx-auto">
            Punya pertanyaan atau ingin berkolaborasi? Jangan ragu untuk menghubungi saya.
        </p>
    </div>

    <!-- Contact Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-16">
        @foreach ($kontak as $k)
            <div class="card fade-up fade-up-2">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-red-500/10 border border-red-500/30 flex items-center justify-center flex-shrink-0 text-2xl">
                        {{ $k['icon'] }}
                    </div>
                    <div class="min-w-0 flex-1">
                        <p class="text-xs text-slate-500 uppercase tracking-wider mb-1">{{ $k['label'] }}</p>
                        @if ($k['link'])
                            <a href="{{ $k['link'] }}" target="_blank" rel="noopener"
                               class="font-semibold text-white hover:text-red-400 transition break-all">
                                {{ $k['value'] }}
                            </a>
                        @else
                            <p class="font-semibold text-white break-all">{{ $k['value'] }}</p>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Social Media -->
    <div class="mb-16 fade-up fade-up-3">
        <div class="mb-6">
            <span class="text-xs font-bold uppercase tracking-widest text-red-400 mb-2 block">Sosial Media</span>
            <h2 class="text-3xl font-bold">Follow Saya</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @foreach ($sosmed as $s)
                <a href="{{ $s['link'] }}" target="_blank" rel="noopener" class="card group">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0 transition-transform group-hover:scale-110"
                             style="background: {{ $s['color'] }}20; border: 1px solid {{ $s['color'] }}40;">
                            <span class="text-xl">{{ $s['nama'] === 'GitHub' ? '🐙' : ($s['nama'] === 'Instagram' ? '📷' : '🐦') }}</span>
                        </div>
                        <div class="min-w-0">
                            <p class="font-semibold group-hover:text-red-400 transition">{{ $s['nama'] }}</p>
                            <p class="text-sm text-slate-500">{{ $s['user'] }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <!-- CTA -->
    <div class="card text-center fade-up fade-up-4 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-red-500/10 to-purple-600/10 pointer-events-none"></div>
        <div class="relative">
            <div class="text-5xl mb-4">💬</div>
            <h3 class="text-2xl font-bold mb-3">Ada Pertanyaan?</h3>
            <p class="text-slate-400 mb-6 max-w-lg mx-auto">
                Kirim email dan saya akan membalas secepat mungkin.
            </p>
            <a href="mailto:revaldo@example.com" class="btn-primary">
                Kirim Email
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>

</section>
@endsection