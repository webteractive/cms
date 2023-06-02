<!-- the items i want to put in a 3 grid layout !-->


<img src="img/web.jpeg" class=" object-fill h-40 w-63 object-center px-9 py-5" />


<div class="hover:bg-white text-center text-3xl bg-slate-500 uppercase h-4 bg-auto bg-no-repeat bg-left py-10">
    <a href="{{ route('dashboard') }}">Dashboard</a>
</div>
<br>
<div
    class="hover:bg-white text-center text-3xl bg-slate-500 uppercase rounded-lg h-4 bg-auto bg-no-repeat bg-left py-10  ">
    <a href="{{ route('dashboard') }}">My Content</a>
</div>
<br>

<div
    class=" hover:bg-white text-center text-3xl bg-slate-500 uppercase rounded-lg h-4 bg-auto bg-no-repeat bg-left py-10  ">
    <a href="{{ route('content') }}">Publish Content</a>
</div><br>
<div
    class=" hover:bg-white text-center text-3xl bg-slate-500 uppercase rounded-lg h-4 bg-auto bg-no-repeat bg-left py-10  ">
    <a href="{{ route('dashboard') }}">Log-Out</a>
</div>


</div>
<div class="col-span-9   ">
    <nav class="flex justify-between px-6 py-5 items-center bg-gray-300">
        <h1 class="uppercase font-Josefin Sans text-4xl text-gray-800 font-bold">dashboard</h1>
        <div class="flex items-center">
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                class=" uppercase justify-items-end text-white  hover: focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center   "
                type="button">
                <div>
                    <label
                        class="font-extrabold text-transparent text-base bg-clip-text bg-gradient-to-r from-orange-500 via-red-500 to-purple-500"
                        for="category">Authors:</label>
                    <select class="font-semibold bg-slate-700" name="category_name">

                        <option value="news">
                            <li>Glen</li>
                        </option>
                        <option value="videos">
                            <li>Kin</li>
                        </option>
                        <option value="Podcasts">
                            <li>Yan</li>
                        </option>
                        <option value="Blogs">
                            <li>Drin</li>
                        </option>
                        <option value="Tutorials">
                            <li>Lip</li>
                        </option>
                    </select>
                </div><br>
        </div>

        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 pt-0.5 text-gray-600" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" class="ml-2 outline-none bg-transparent font-"
                    type="text" name="search" id="search" placeholder="Search..." />
            </svg>
            <input class="ml-2 outline-none bg-transparent font-" type="text" name="search" id="search"
                placeholder="Search..." />
        </div>
    </nav>

    <div>
        <div class="bg-gray-200 text-sm text-gray-500 leading-none border-2 border-gray-200 rounded-full inline-flex">
            <button
                class="inline-flex items-center transition-colors
            duration-300 ease-in focus:outline-none hover:text-blue-400 focus:text-blue-400 rounded-l-full px-4 py-2
            active"
                id="grid" <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="fill-current w-4 h-4 mr-2">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
                </svg>
                <span><a href="dashboard">Grid</a></span>
            </button>
            <button
                class=" inline-flex items-center transition-colors duration-300 ease-in focus:outline-none hover:text-blue-400 focus:text-blue-400 rounded-r-full px-4 py-2"
                id="list">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="fill-current w-4 h-4 mr-2">
                    <line x1="8" y1="6" x2="21" y2="6"></line>
                    <line x1="8" y1="12" x2="21" y2="12"></line>
                    <line x1="8" y1="18" x2="21" y2="18"></line>
                    <line x1="3" y1="6" x2="3.01" y2="6"></line>
                    <line x1="3" y1="12" x2="3.01" y2="12"></line>
                    <line x1="3" y1="18" x2="3.01" y2="18"></line>
                </svg>
                <span><a href="tileview">List</a></span>
            </button>
        </div>

    </div>
    @for ($i = 1; $i < 6; $i++)
        <x-gridview />
    @endfor
</div>
</div>
