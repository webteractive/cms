<x-app-layout>

    <div class="max-w-7xl mx-auto space-y-9 pt-7 ">

        <div>
            <p>
                <hr class="w-full h-1.5 rounded-lg bg-gradient-to-r from-orange-500 via-red- 500 to-purple-500 ">
            </p>

            <a class="uppercase text-5xl font-Josefin Sans ">Latest</a>
            <a
                class="uppercase font-Josefin Sans text-5xl ps-8 font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-orange-500 via-red- 500 to-purple-500">Blog</a>
            </p>
        </div>

        {{-- Top Content --}}
        <div class="grid grid-cols-12 gap-4">
            {{-- Banner --}}
            <div class="shadow-lg col-span-6">
                <x-article-banner-card />
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
        <form action="newspage">
            <div class="text-center py-4">
                <button
                    class=" bg-gradient-to-r from-orange-500 via-red-500 to-purple-500 h-10 px-10 rounded-md items center justify-center ">
                    View More
                </button>
            </div>
    </div>






</x-app-layout>
