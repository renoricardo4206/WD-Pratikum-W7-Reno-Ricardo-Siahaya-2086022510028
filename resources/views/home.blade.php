@extends('layouts.app')
@section('content')

    <div class="relative isolate overflow-hidden bg-white dark:bg-neutral-900">
        <!-- Backdrop: Mesh Gradient -->
        <div aria-hidden="true" class="pointer-events-none absolute inset-0 -z-10 overflow-hidden">
            <div class="absolute inset-0 bg-radial-[60%_70%_at_0%_0%] from-blue-300/45 to-transparent dark:from-blue-500/25"></div>
            <div class="absolute inset-0 bg-radial-[55%_65%_at_100%_100%] from-blue-400/35 to-transparent dark:from-blue-600/25"></div>
            <div class="absolute inset-0 bg-radial-[40%_40%_at_80%_10%] from-blue-100/80 to-transparent dark:from-blue-300/10"></div>
        </div>

        <!-- 1. HERO & SKILLS SECTION -->
        <section class="py-12 px-4 lg:py-16 md:px-8">
            <div class="max-w-7xl mx-auto flex flex-col items-center">
                
                <div class="max-w-4xl mx-auto text-center">
                    <h1 class="text-slate-900 text-4xl font-bold !leading-tight md:text-5xl lg:text-6xl dark:text-slate-50">
                        Halo, Saya Reno Ricardo Siahaya
                    </h1>
                </div>
                
                <div class="mt-6 max-w-2xl mx-auto text-center">
                    <p class="text-slate-600 text-lg leading-relaxed dark:text-slate-400">
                        Saya adalah seorang mahasiswa yang sedang menempuh pendidikan di Universitas Ciputra Surabaya kampus kota makassar. Saya sedang belajar membuat website menggunakan framework Laravel dan Tailwind CSS.
                    </p>               

                    <h1 class="mt-16 text-slate-900 text-2xl font-bold !leading-tight md:text-3xl lg:text-4xl dark:text-slate-50">
                        Skills
                    </h1>
                    
                    <div class="mt-12 flex flex-wrap justify-center gap-x-8 gap-y-6">
                        <img src="img/HTML.png" class="w-28 shrink-0" alt="HTML" />
                        <img src="img/CSS.png" class="w-28 shrink-0" alt="CSS" />
                        <img src="img/JS.png" class="w-28 shrink-0" alt="JS" />
                        <img src="img/PHP.png" class="w-28 shrink-0" alt="PHP" />
                        <img src="img/Python.png" class="w-28 shrink-0" alt="Python" />
                        <img src="img/Java.png" class="w-28 shrink-0" alt="Java" />
                        <img src="img/Dart.png" class="w-28 shrink-0" alt="Dart" />
                        <img src="img/Flutter.png" class="w-28 shrink-0" alt="Flutter" />
                        <img src="img/Laravel.png" class="w-28 shrink-0" alt="Laravel" />
                        <img src="img/Spring.png" class="w-28 shrink-0" alt="Spring" />
                        <img src="img/Tailwind.png" class="w-28 shrink-0" alt="Tailwind" />
                        <img src="img/MySQL.png" class="w-28 shrink-0" alt="MySQL" />
                    </div>
                </div>   
            </div>
        </section>
      </div>
@endsection
