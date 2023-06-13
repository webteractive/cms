<x-app-layout>

    <div class="max-w-7xl mx-auto space-y-9 ">
        <ul class="flex flex-wrap border-b border-gray-200 dark:border-gray-700 text-right bg-gray-500">
            <li class="mr-2">
                <a href="Blogs"
                    class="inline-block text-slate-50 hover:text-gray-50 hover:bg-gray-50 rounded-t-lg py-4 px-4 text-m font-medium text-center  dark:hover:bg-gray-800 dark:hover:text-white-300">Blogs</a>
            </li>
            <li class="mr-2">
                <a href="News"
                    class="inline-block text-slate-50  hover:bg-gray-50 rounded-t-lg py-4 px-4 text-m font-medium text-center dark:text-gray-400  dark:hover:bg-gray-800 dark:hover:text-gray-300">News</a>
            </li>
            <li class="mr-2">
                <a href="Tutorial"
                    class="inline-block text-slate-50 hover:bg-gray-50 rounded-t-lg py-4 px-4 text-m font-medium text-center dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-gray-300">Tutorial</a>
            </li>
            <li class="mr-2">
                <a href="Video"
                    class="inline-block text-slate-50  hover:bg-gray-50 rounded-t-lg py-4 px-4 text-m font-medium text-center dark:text-gray-400  dark:hover:bg-gray-800 dark:hover:text-gray-300">Video</a>
            </li>
            <li class="mr-2 text-right ">
                <a href="Podcast"
                    class="inline-block text-slate-50  hover:bg-gray-50 rounded-t-lg py-4 px-4 text-m font-bold text-center dark:text-gray-400  dark:hover:bg-gray-800 dark:hover:text-gray-300">Podcast</a>
            </li>
        </ul>



        <div class="max-w-7xl mx-auto space-y-9 pt-7 ">
            <div>
                <p>

                    <a class="uppercase text-5xl font-Josefin Sans ">Latest</a>
                    <a
                        class="uppercase font-Josefin Sans text-5xl ps-8 font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-orange-500 via-red- 500 to-purple-500">Blog</a>
                    <span>
                    </span>
                </p>

            </div>

            {{-- Top Content --}}
            <div class="grid grid-cols-12 gap-4">
                {{-- Banner --}}
                <div class="shadow-lg col-span-6">
                    <x-article-banner-card :test="2" />
                </div>


                <div class="col-span-4 space-y-4">
                    <x-article-featured-card /><br>

                    <hr class="w-full h-1 rounded-lg bg-gradient-to-r from-orange-500 via-red- 500 to-purple-500 ">
                    <x-article-featured-card />
                </div>

                <div class="col-span-2 space-y-5">
                    <x-article-featured-small />
                    <x-article-featured-small />
                    <x-article-featured-small />

                </div>
            </div>
            <hr class="w-full h-1.5 rounded-lg bg-gradient-to-r from-orange-500 via-red- 500 to-purple-500 ">
            {{-- Main Content --}}

            <div class="grid gap-4 grid-cols-4">
                @for ($i = 0; $i < 12; $i++)
                    <x-article-card />
                @endfor
            </div>
            <form action="Viewmoree">
                <div class="text-center py-4">
                    <button a href="Viewmoree" id="loadMoreclass="
                        class=" bg-gradient-to-r from-orange-500 via-red-500 to-purple-500 h-10 px-10 rounded-md items center justify-center">
                        View More
                    </button>
                </div>
        </div>
   </div>


    @include('layouts.footer')



</x-app-layout>
