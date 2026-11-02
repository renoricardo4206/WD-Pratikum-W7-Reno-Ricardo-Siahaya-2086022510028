 @extends('layouts.app')
 @section('content')
 <section class="flex-1 mt-6 px-4 md:px-8">
   <div class="max-w-2xl mx-auto">
      <div class="mb-4">
         <h2 class="text-3xl font-bold mb-6 text-slate-900 md:text-4xl dark:text-slate-50">About Me</h2>
      </div>

      <div class="grid divide-y divide-slate-300 dark:divide-neutral-700">
         <article class="overflow-hidden py-8">
               <h3
                  class="text-lg font-semibold mb-4 text-slate-900 group-hover:text-blue-700 dark:text-slate-50 dark:group-hover:text-blue-500">
                 Life Background</h3>
               <p class="text-base text-slate-600 leading-relaxed line-clamp-3 dark:text-slate-400">
                 Sejak kecil Saya sudah tertarik dengan dunia teknologi. Dengan minat dan bakat itu, saya memilih untuk mendalami bidang tersebut dan ingin menjadi AI Engineer. 
               </p>
               <p class="text-base text-slate-600 leading-relaxed line-clamp-3 dark:text-slate-400">
                 Saya percaya bahwa teknologi dapat memberikan dampak positif bagi kehidupan manusia, dan saya ingin menjadi bagian dari perubahan tersebut.
               </p>
         </article>

         <article class="overflow-hidden py-8">
               <h3
                  class="text-lg font-semibold mb-4 text-slate-900 group-hover:text-blue-700 dark:text-slate-50 dark:group-hover:text-blue-500">
                  Education</h3>
               <p class="text-base text-slate-600 leading-relaxed line-clamp-3 dark:text-slate-400">
                  Saat ini, saya sedang menempuh pendidikan di Universitas Ciputra Surabaya kampus kota makassar, jurusan Teknik Informatika spesialisasi AI. Saya berkomitmen untuk terus belajar dan mengembangkan keterampilan saya dalam bidang teknologi.
               </p>
            </a>
         </article>

         <article class="overflow-hidden py-8">
               <h3
                  class="text-lg font-semibold mb-4 text-slate-900 group-hover:text-blue-700 dark:text-slate-50 dark:group-hover:text-blue-500">
                  Experience</h3>
               <p class="text-base text-slate-600 leading-relaxed line-clamp-3 dark:text-slate-400">
                  Saat ini Saya telah memiliki pengalaman dalam mengembangkan beberapa proyek berbasis web. Saya memiliki kemampuan dalam merancang dan mengimplementasikan solusi teknologi yang inovatif dan efektif.
               </p>
            </a>
         </article>
      </div>
   </div>
</section>
@endsection