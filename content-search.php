 <div class="max-w-sm w-full lg:max-w-full lg:flex my-4">
     <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url(<?php the_post_thumbnail_url() ?>)" title="Woman holding a mug">
     </div>
     <div class=" shadow-lg break-all  bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
         <div class="mb-8">

             <div class="font-bold text-xl capitalize hover:text-gray-500 mb-2 hover"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></div>
             <p class="text-gray-700 text-base break-all"><?php the_excerpt() ?></p>
         </div>
         <div class="flex items-center">
             <!-- <img class="w-10 h-10 rounded-full mr-4" src="/img/jonathan.jpg" alt="Avatar of Jonathan Reinink"> -->
             <div class="text-sm">
                 <p class="text-gray-900 leading-none"><?php the_author_nickname() ?></p>
                 <p class="text-gray-600"><?php the_date(); ?></p>
             </div>
         </div>
     </div>
 </div>