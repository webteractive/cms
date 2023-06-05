<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Inputtag Autocomplete</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">




    <title>Classic editor with custom styles</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.21.0/standard-all/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/4.21.0/standard-all/ckeditor.js"></script>
    <script src="ckfinder/ckfinder.js"></script>
    <script src="ckfinder/ckfinder.js"></script>
    <script src="https://unpkg.com/@yaireo/tagify"></script>
    <script src="https://unpkg.com/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />






    @vite('resources/js/app.js')
    @vite('node_modules/flowbite/dist/flowbite.js')


</head>




<div class="grid grid-cols-12 ">

    <div class="col-span-3 bg-gray-800 py-12 ">
        <img src="img/web.jpeg" class="  ml-7 h-40 w-63 object-center px-9 py-5" />

        <div class=" hover:bg-white text-center text-3xl bg-slate-500 uppercase h-4 bg-auto bg-no-repeat bg-left py-10">
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </div>
        <br>
        <div
            class=" hover:bg-white  text-center text-3xl bg-slate-500 uppercase rounded-lg h-4 bg-auto bg-no-repeat bg-left py-10  ">
            <a href="{{ route('dashboard') }}">My Content</a>
        </div><br>
        <div
            class=" hover:bg-white text-center text-3xl bg-slate-500 uppercase rounded-lg h-4 bg-auto bg-no-repeat bg-left py-10  ">
            <a href="{{ route('content') }}">Publish Content</a>
        </div><br>
        <div
            class=" hover:bg-white text-center text-3xl bg-slate-500 uppercase rounded-lg h-4 bg-auto bg-no-repeat bg-left py-10  ">
            <a href="">Log-Out</a>
        </div>

    </div>
    <div class="col-span-9 ">
        <nav class="flex justify-between py-5 items-center bg-gray-200">
            <p class="ml-6 font-bold uppercase text-3xl">publish content</p>
            <div class=" mt-4 h-12  pr-32">
                <img class="rounded-full float-left h-full" src="https://randomuser.me/api/portraits/women/34.jpg">
                {{ Auth::user()->name }}
            </div>
        </nav>
=======
<div class="grid grid-cols-12 gap-2">

    <div class="col-span-3 bg-gray-800 py-12">

        <div class="text-center text-3xl bg-slate-500 uppercase h-4 bg-auto bg-no-repeat bg-left py-10">
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </div>
        <br>
        <div class="text-center text-3xl bg-slate-500 uppercase rounded-lg h-4 bg-auto bg-no-repeat bg-left py-10  ">
            <a href="{{ route('dashboard') }}">publish content</a>
        </div>

    </div>

    <div class="col-span-9">
        <p class="py-4 text-4xl uppercase">publish content</p><br>




        <!-- Dropdown menu -->

        <br>
        <div class="gap-4">

            <label class="font-semibold" for="category"></label>
            <select class="font-semibold" name="category_name">

                <option value="news" class=" bg-gradient-to-r from-orange-500 via-red-500 to-purple-500">
                    <li>News</li>
                </option>
                <option value="videos">
                    <li>Videos</li>
                </option>
                <option value="Podcasts">
                    <li>Podcasts</li>
                </option>
                <option value="Blogs">
                    <li>Blogs</li>
                </option>
                <option value="Tutorials">
                    <li>Tutorials</li>
                </option>
            </select>
        </div>
        <!-- Dropdown menu -->

        <div class="col-span-9 px-72 ">

            <div class="mt-4">
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input id="title" class="block mt-1 w-half" type="text" name="title" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div></br>


            <br> <label for="">Slug:</label><br>
            <textarea name="summary" id="" cols="70" rows="3" class=" static form-control"></textarea>

            @error('summary')
                <div style="color:red;">{{ $message }}</div>
            @enderror

            <br> <label for="">Summary:</label><br><br>
            <textarea name="summary" id="" cols="70" rows="3" class=" static form-control"></textarea>

            @error('summary')
                <div style="color:red;">{{ $message }}</div>
            @enderror

            <br>
            <br> <label for="">Content:</label><br>
            <textarea id="editor2" name="editor2" rows="1"></textarea>
            <script>
                CKEDITOR.replace('editor2', {
                    height: 150,
                    /* Default CKEditor 4 styles are included as well to avoid copying default styles. */
                    contentsCss: [
                        'http://cdn.ckeditor.com/4.21.0/full-all/contents.css',
                        'https://ckeditor.com/docs/ckeditor4/4.21.0/examples/assets/css/classic.css'
                    ],
                });
            </script>
            </body>
            <!--Add More Content-->
            <!--Tags-->
            <div class="flex items-start justify-self-start mt-10">
                <div class="w-1/2 pr-4">
                    <label for="Tags" class="block mb-2 text-m text-gray-700">Tags:</label>
                    <input type="text" class="w-full px-4 py-6 text- border border-gray-300 rounded outline-none"
                        name="tags" value=" " autofocus />
                </div>
            </div>
            <script>
                // The DOM element you wish to replace with Tagify
                var input = document.querySelector('input[name=tags]');
                // initialize Tagify on the above input node reference
                new Tagify(input);
            </script>
            </body>
            <br> <br>
            <div class="ml-40">
                <x-primary-button class="ml-2 bg-gradient-to-r from-orange-500 via-red-500 to-purple-500"
                    type="submit">
                    <br>
                    Save as Draft
                </x-primary-button>
                <x-primary-button class="ml-3 bg-gradient-to-r from-orange-500 via-red-500 to-purple-500"
                    type="submit">
                    Publish Content
                </x-primary-button>
            </div>
        </div>
    </div>
</div>

        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
            class="justify-items-end text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">Category<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg></button>
        <!-- Dropdown menu -->

        <div id="dropdown"
            class=" justify-self-end text-center z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-36 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                    <a href="News"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">News</a>
                </li>
                <li>
                    <a href="Blogs"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Blog</a>
                </li>
                <li>
                    <a href="Tutorial"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tutorial</a>
                </li>
                <li>
                    <a href="Video"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Video</a>
                </li>
            </ul>
        </div>
        <!-- Dropdown menu -->
        <div id="dropdown"
            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 darAuthor

            <x-input-error :messages="$errors->get('user_id')" class="mt-2" />


        <div class="mt-4">
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" class="block mt-1 w-half" type="text" name="title" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div></br>


        <br> <label for="">Summary:</label><br>
        <textarea name="summary" id="" cols="70" rows="10" class=" static form-control"></textarea>

        @error('summary')
            <div style="color:red;">{{ $message }}</div>
        @enderror

        <br>
        <br> <label for="">Content:</label><br>
        <textarea id="editor2" name="editor2" rows="2"></textarea>
        <script>
            CKEDITOR.replace('editor2', {
                height: 150,
                /* Default CKEditor 4 styles are included as well to avoid copying default styles. */
                contentsCss: [
                    'http://cdn.ckeditor.com/4.21.0/full-all/contents.css',
                    'https://ckeditor.com/docs/ckeditor4/4.21.0/examples/assets/css/classic.css'
                ],
            });
        </script>
        </body>
        <!--Add More Content-->
        <br><br>
        <p> Add More Content</p><br>
        <a onClick="$('#form1').hide();">Hide</a>
        <a button class="hover:bg-cyan-700" onClick="$('#form1').show();">Show</a>
        <form action="sample_posteddata.php" method="post" id="form1">
            <textarea id="editor1" name="editor1">blabla</textarea>
            <script type="text/javascript">
                CKEDITOR.replace('editor1');
            </script>
        </form>






        <!--Tags-->
        <div class="flex items-start justify-self-start mt-10">
            <div class="w-1/2 pr-4">
                <label for="Tags" class="block mb-2 text-m text-gray-700">Tags</label>
                <input type="text" class="w-full px-4 py-6 text- border border-gray-300 rounded outline-none"
                    name="tags" value=" " autofocus />
            </div>
        </div>
        <br><br> <br>
        <script>
            // The DOM element you wish to replace with Tagify
            var input = document.querySelector('input[name=tags]');
            // initialize Tagify on the above input node reference
            new Tagify(input);
        </script>
        </body>
        <br< <br>
            <x-primary-button class="ml-2" type="submit">
                Save as Draft
            </x-primary-button>
            <x-primary-button class="ml-3" type="submit">
                Publish Content
            </x-primary-button>
    </div>
</div>
</div>






</html>
