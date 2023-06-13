
<x-app-layout>
    <div class="max-w-7xl mx-auto space-y-9 ">
        <div class=" text-right max-w-9xl mx-auto space-y-9 ">
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
        </div>
        <div class=" grid grid-cols-12  ">
            {{-- Banner --}}
            <div class="col-span-12  ">
                <div>
                    <x-blogs-banner-card />
                </div>
                <x-blogs-banner-card2 />
                <x-blogs-banner-card3 />
                <x-blogs-banner-card4 />
                <x-blogs-banner-card5 />

            </div>



        </div>
        <form action="viewmoree">
            <div class="text-center py-4">
                <button
                    class=" bg-gradient-to-r from-orange-500 via-red-500 to-purple-500 h-10 px-10 rounded-md items center justify-center ">
                    View More
                </button>
            </div>
        </form>
        <hr class="w-3/4  h-1 rounded-lg bg-gradient-to-r from-orange-500 via-red- 500 to-purple-500 ">
        <P class=" .tracking-widest uppercase text-5xl font-bold tracking-wide">s h a r e </P>
        <hr class="w-full  h-1 rounded-lg bg-gradient-to-r from-orange-500 via-red- 500 to-purple-500 ">

        <p class=" text-4xl font-extrabold font-Josefin Sans tracking-wide">More from Webteractive</p>

        <div class="grid gap-4 grid-cols-4">
            <x-buttom-banner />
            <x-buttom-banner2 />
            <x-buttom-banner3 />
            <x-buttom-banner4 />
            <br>
        </div>

    </div>
    @include('layouts.footer')

</x-app-layout>

