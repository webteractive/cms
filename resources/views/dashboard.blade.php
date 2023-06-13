<x-app-layout>


    <div class=" md:max-lg:flex grid grid-cols-12 ">
        <div class="  col-span-3 bg-gray-800 py-12 ">

            <x-dashboard />



        </div>



    </div>
    </div>
    <form action="viewmoree">
        <div class="text-center py-4">
            <button
                class=" bg-gradient-to-r from-orange-500 via-red-500 to-purple-500 h-10 px-10 rounded-md items center justify-center ">
                View More
            </button>
            @include('layouts.footer')
        </div>


</x-app-layout>
