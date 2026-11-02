@extends('layouts.app')
@section('content')
<section class="flex-1 mt-6 px-4 md:px-8">
   <div class="max-w-2xl mx-auto">
      <div class="mb-4">
         <h2 class="text-3xl font-bold mb-6 text-slate-900 md:text-4xl dark:text-slate-50">Latest Blog Posts</h2>
      </div>

      <div class="grid divide-y divide-slate-300 dark:divide-neutral-700">
         <article class="overflow-hidden py-8">
               <h3
                  class="text-lg font-semibold mb-4 text-slate-900 group-hover:text-blue-700 dark:text-slate-50 dark:group-hover:text-blue-500">
                 Memahami apa itu Laravel dan bagaimana cara kerjanya</h3>
               <p class="text-base text-slate-600 leading-relaxed line-clamp-3 dark:text-slate-400">
                  Laravel adalah framework PHP yang digunakan untuk membangun aplikasi web. Framework ini menyediakan berbagai fitur dan alat yang memudahkan pengembangan aplikasi web, termasuk routing, ORM (Object-Relational Mapping), dan sistem templating. 
               </p>
            </a>
            
         </article>

         <article class="overflow-hidden py-8">
               <h3
                  class="text-lg font-semibold mb-4 text-slate-900 group-hover:text-blue-700 dark:text-slate-50 dark:group-hover:text-blue-500">
                  Memahami PHP dan Konsep Dasar OOP</h3>
               <p class="text-base text-slate-600 leading-relaxed line-clamp-3 dark:text-slate-400">
                  PHP (Hypertext Preprocessor) adalah bahasa pemrograman yang digunakan untuk pengembangan web. Konsep dasar OOP (Object-Oriented Programming) dalam PHP membantu dalam membuat kode yang lebih terstruktur dan mudah dipelihara. 
               </p>
            </a>
         </article>

         <article class="overflow-hidden py-8">
               <h3
                  class="text-lg font-semibold mb-4 text-slate-900 group-hover:text-blue-700 dark:text-slate-50 dark:group-hover:text-blue-500">
                  Memahami Laragon dan cara kerjanya</h3>
               <p class="text-base text-slate-600 leading-relaxed line-clamp-3 dark:text-slate-400">
                  Laragon adalah lingkungan pengembangan web yang memudahkan proses pengembangan aplikasi web dengan menyediakan semua alat yang diperlukan dalam satu paket.
               </p>
            </a>
         </article>
      </div>
   </div>
</section>
@endsection