<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>testing</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body class="text-white bg-[#EFEFEF]">

    {{-- sidebar start --}}
    <div class="fixed w-64 bg-[#4C8F8B] left-0 top-0 h-full p-6">
        <a href="" class="flex items-center">
            <img src="https://placehold.co/40x40" alt="" class="w-10 h-10 rounded object-cover">
            <span class="font-bold text-lg ml-3">TA - TRPL</span>
        </a>
        <ul class="mt-10">
            <li class="group active">
                <a href="#" class="flex items-center px-2 py-2 hover:bg-[#5B9692] rounded-md">
                    <i class="ri-home-line pr-4"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center px-2 py-5">
                    <i class="ri-notification-2-line pr-4"></i>
                    <span>Pengumuman</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center px-2 py-5">
                    <i class="ri-group-fill pr-4"></i>
                    <span>User</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center px-2 py-5">
                    <i class="ri-user-line pr-4"></i>
                    <span>Account</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center px-2 py-5">
                    <i class="ri-file-chart-line pr-4"></i>
                    <span>Berkas</span>
                </a>
            </li>

        </ul>


    </div>
    {{-- sidebar end --}}

    {{-- main start --}}
    <main class="w-[1139px] ml-[322px] min-h-screen my-10 ">
        {{-- navbar start --}}
        <div class="py-4 px-6 bg-[#FBFFFC] flex item-center shadow-md rounded-md shadow-black/5">
            <ul class="ml-4 flex items-center">
                <li class="mr-4">
                    <button type="button"
                        class="text-[#4C8F8B] w-8 h-8 rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                        <i class="ri-search-line mr-4"></i>
                        Search
                    </button>
                </li>
            </ul>
            <ul class="ml-auto flex items-center">
                <li class="mr-1">
                    <button type="button"
                        class="text-[#4C8F8B] w-8 h-8 rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                        <i class="ri-sun-line"></i>
                    </button>
                </li>
                <li class="mr-1">
                    <button type="button"
                        class="text-[#4C8F8B] w-8 h-8 rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                        <i class="ri-notification-4-fill"></i>
                    </button>
                </li>
                <li class="mr-1">
                    <button type="button"
                        class="text-[#4C8F8B] w-8 h-8 rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                        <i class="ri-account-circle-line"></i>

                    </button>
                </li>
            </ul>
        </div>
        {{-- navbar end --}}

        <a href="{{ route('main') }}">
            <button class="bg-[#025E5A] py-2 px-4 mt-6 rounded-md">
                <i class="ri-arrow-left-line"></i>
                Kembali
            </button>
        </a>

        {{-- image upload start --}}
        <div class="flex items-center justify-center w-full  mt-11 rounded-full ">
            <label for="dropzone-file"
                class="flex flex-col items-center justify-center w-56 h-56 border-2 rounded-full border-gray-300 border-dashed cursor-pointer bg-[#132B2A]/5 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mb-2 text-[#132B2A]/55" viewBox="0 0 24 24"
                        fill="currentColor">
                        <path
                            d="M9.82843 5L7.82843 7H4V19H20V7H16.1716L14.1716 5H9.82843ZM9 3H15L17 5H21C21.5523 5 22 5.44772 22 6V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V6C2 5.44772 2.44772 5 3 5H7L9 3ZM12 18C8.96243 18 6.5 15.5376 6.5 12.5C6.5 9.46243 8.96243 7 12 7C15.0376 7 17.5 9.46243 17.5 12.5C17.5 15.5376 15.0376 18 12 18ZM12 16C13.933 16 15.5 14.433 15.5 12.5C15.5 10.567 13.933 9 12 9C10.067 9 8.5 10.567 8.5 12.5C8.5 14.433 10.067 16 12 16Z">
                        </path>
                    </svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Set profile
                            picture</p>
                </div>
                <input id="dropzone-file" type="file" class="hidden" />
            </label>
        </div>

        {{-- image upload end --}}


        <div class="flex justify-end">
            <label for="dropzone-file" >
                <a class="bg-[#344948] py-2 px-4 mt-6 rounded-md " >
                    <i class="ri-file-2-line"></i>
                    Upload via File
                    <input id="dropzone-file" type="file" class="hidden" />
                </a>
            </label>

        </div>

        {{-- form start --}}
        <form class="w-full border border-[#344948] mt-8 px-10 py-5 rounded-md bg-white " method="POST" action="{{ route('store') }}">
            @csrf
            <div class="grid md:grid-cols-2 md:gap-6 mt-5">
                <div class="relative z-0 w-full mb-5 group">
                    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white after:content-['*'] after:text-[#E41313] after:ml-0.5 after:font-black">Nama Depan</label>
                    <input type="text" id="base-input" class="bg-gray-50 border border-[#585958] text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white after:content-['*'] after:text-[#E41313] after:ml-0.5 after:font-black">Nama Belakang</label>
                    <input type="text" id="base-input" class="bg-gray-50 border border-[#585958] text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6 mt-5">
                <div class="relative z-0 w-full mb-5 group">
                    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white after:content-['*'] after:text-[#E41313] after:ml-0.5 after:font-black">NIM</label>
                    <input type="text" id="base-input" class="bg-gray-50 border border-[#585958] text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white after:content-['*'] after:text-[#E41313] after:ml-0.5 after:font-black">Username</label>
                    <input type="text" id="base-input" class="bg-gray-50 border border-[#585958] text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6 mt-5">
                <div class="relative z-0 w-full mb-5 group">
                    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white after:content-['*'] after:text-[#E41313] after:ml-0.5 after:font-black">Password</label>
                    <input type="text" id="base-input" class="bg-gray-50 border border-[#585958] text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white after:content-['*'] after:text-[#E41313] after:ml-0.5 after:font-black">Confirm Password</label>
                    <input type="text" id="base-input" class="bg-gray-50 border border-[#585958] text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <div class="w-full flex justify-end" >
                <button type="submit"
                class="text-white  mt-5 bg-[#025E5A] hover:bg-[#344948] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-[#025E5A] dark:hover:bg-[#025E5A] dark:focus:ring-[#344948]">Submit</button>
            </div>

        </form>

        {{-- form end --}}







    </main>
    {{-- main end --}}

</body>

</html>
