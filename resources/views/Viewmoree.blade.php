<x-app-layout>
    <div class="max-w-7xl mx-auto space-y-9 ">
        <div class="grid gap-4 grid-cols-4">
            @for ($i = 0; $i < 12; $i++)
                <x-viewmore />
            @endfor
        </div>
    </div>



</x-app-layout>
