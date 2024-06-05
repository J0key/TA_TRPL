@extends('Mahasiswa.LayoutMahasiswa')

@section('main')
    <main class="w-[1139px] ml-[330px] min-h-screen my-10 flex flex-col">


        <div class="flex items-center justify-between">

            <div class="flex flex-row bg-semi_dark_green p-2 rounded-full items-center ">
                <img class="w-8 h-8 ms-2" src="{{ asset('icon/Mahasiswa/Tugas akhir/u_search (1).png') }}" alt="">
                <form action="">
                    <input class=" bg-semi_dark_green border-semi_dark_green text-white rounded-3xl" type="text"
                        value="Search here...">
                </form>
            </div>


            <div class="flex items-center">
                <ul class="ml-auto flex flex-row mt-6">
                    <li class="mr-8">
                        <img src="{{ asset('icon/lonceng.png') }}" alt="">
                    </li>
                    <li class="mr-8">
                        <img src="{{ asset('icon/dosen.png') }}" alt="">
                    </li>
                    <li class="mr-4">
                        <p class="text-xl font-semibold">Syra Athaya</p>
                    </li>
                </ul>
            </div>
        </div>


        <div class="flex items-center justify-between mt-8">

            <div class="text-[#404D61] mt-5">
                <p class="font-semibold  text-3xl">Pengumuman</p>
                <p class="font-regular text-xl">10 results found</p>
            </div>

        </div>

        <div class="flex flex-col rounded-lg border border-gray-200 shadow-lg mt-10 w-full overflow-scroll p-10">
            <div class="flex flex-col">
                <p class="text-xl font-semibold">PENGISIAN SKRINING KESEHATAN MENTAL MAHASISWA UGM</p>
                <p class="text-sm mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                    qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.</p>

                <button>
                    <img class="bg-slate-900 rounded-xl p-2 w-8 h-8 mt-10"
                        src="{{ asset('icon/Mahasiswa/octicon_project-16.png') }}" alt="">
                </button>

                <div class="flex flex-row items-center text-xs mt-12 space-x-4 text-slate-500">
                    <p>22 - 04 -2024 </p>
                    <div class="w-1 h-1 bg-slate-500 rounded-full"></div>
                    <p>updated 12 - 04 - 2024 </p>
                </div>
                <div class="w-full h-1 bg-slate-300 my-10"></div>

            </div>

            <div class="flex flex-col">
                <p class="text-xl font-semibold">PENGISIAN SKRINING KESEHATAN MENTAL MAHASISWA UGM</p>
                <p class="text-sm mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                    qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.</p>

                <button>
                    <img class="bg-slate-900 rounded-xl p-2 w-8 h-8 mt-10"
                        src="{{ asset('icon/Mahasiswa/octicon_project-16.png') }}" alt="">
                </button>

                <div class="flex flex-row items-center text-xs mt-12 space-x-4 text-slate-500">
                    <p>22 - 04 -2024 </p>
                    <div class="w-1 h-1 bg-slate-500 rounded-full"></div>
                    <p>updated 12 - 04 - 2024 </p>
                </div>
                <div class="w-full h-1 bg-slate-300 my-10"></div>

            </div>


            <div class="flex flex-col">
                <p class="text-xl font-semibold">PENGISIAN SKRINING KESEHATAN MENTAL MAHASISWA UGM</p>
                <p class="text-sm mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                    qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.</p>

                <button>
                    <img class="bg-slate-900 rounded-xl p-2 w-8 h-8 mt-10"
                        src="{{ asset('icon/Mahasiswa/octicon_project-16.png') }}" alt="">
                </button>


                <div class="flex flex-row items-center text-xs mt-12 space-x-4 text-slate-500">
                    <p>22 - 04 -2024 </p>
                    <div class="w-1 h-1 bg-slate-500 rounded-full"></div>
                    <p>updated 12 - 04 - 2024 </p>
                </div>
                <div class="w-full h-1 bg-slate-300 my-10"></div>

            </div>




        </div>

        <div class="w-fit h-fit flex flex-row self-center justify-center mt-12 shadow-md shadow-slate-500">
            <button class="bg-light_green w-fit h-10 px-6 py-2 border-main_green border-2 rounded-s-xl">
                <i class="ri-arrow-left-s-line ml-auto"
                    style="
                transition: transform 0.3s ease,
                    display 0.3s ease;
            "></i>
            </button>
            <button
                class="bg-white hover:bg-[#D4DFDE] w-fit h-10 px-6 py-2 border-slate-400 border-y-2 border-e-2 text-md">1</button>
            <button
                class="bg-white  hover:bg-[#D4DFDE]  w-fit h-10 px-6 py-2 border-slate-400 border-y-2 border-e-2 text-md">2</button>
            <button
                class="bg-white  hover:bg-[#D4DFDE]  w-fit h-10 px-6 py-2 border-slate-400 border-y-2 border-e-2 text-md">3</button>
            <button
                class="bg-white  hover:bg-[#D4DFDE]  w-fit h-10 px-6 py-2 border-slate-400 border-y-2 border-e-2 text-md">4</button>
            <button
                class="bg-white  hover:bg-[#D4DFDE]  w-fit h-10 px-6 py-2 border-slate-400 border-y-2 text-md">5</button>
            <button class="bg-light_green w-fit h-10 px-6 py-2 border-main_green border-2 rounded-e-xl">
                <i class="ri-arrow-right-s-line ml-auto"
                    style="
                transition: transform 0.3s ease,
                    display 0.3s ease;
            "></i>
            </button>
        </div>
    </main>
@endsection
