<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.tailwindcss.com"></script>
    <title>TA - TRPL</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
        }

        /* CSS untuk modal */
        .relative:hover .absolute {
            display: block;
        }

        /* Fix alignment of dropdown items */
        .relative {
            display: inline-block;
        }
    </style>
</head>

<body id="body" class="text-gray-800 font-inter bg-[#EFEFEF]">
    <!-- start: Sidebar -->
    <div class="flex flex-row flex-auto">
        <div class="fixed left-0 top-0 w-72 h-full p-4 z-50 sidebar-menu transition-transform bg-semi_dark_green shadow-lg shadow-slate-800 overflow-hidden"
            style="text-align: center">
            <div class="flex flex-row justify-center items-center my-6">
                <img class="w-16" src="{{ asset('icon/ugm_logo.png') }}" alt="" />
                <a href="#" class="flex items-center ml-3 text-white text-2xl font-semibold"
                    style="font-weight: 200px">
                    TA - TRPL
                </a>
            </div>

            <ul class="mt-6">
                <li class="mb-1 group py-2">
                    <a href="{{ route('dosen.dashboard') }}"
                        class="flex items-center py-2 px-4 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                        <img src="{{ asset('icon/Dosen/icon (1).png') }}" class="w-4 h-auto mr-4" alt="" />
                        <span class="text-md">Dashboard</span>
                    </a>
                </li>

                <li class="mb-1 group py-2">
                    <a href="{{ route('dosen.profile') }}"
                        class="flex items-center py-2 px-4 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                        <img src="{{ asset('icon/Dosen/u_user (1).png') }}" class="w-4 h-auto mr-4" alt="" />
                        <span class="text-md">Profile</span>
                    </a>
                </li>

                <li class="mb-1 py-2">
                    <div
                        class="flex items-center py-2 px-4 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md transition-all transition-transform">
                        <button class="flex flex-row items-center" type="button" onclick="navbarMahasiswa()">
                            <img src="{{ asset('icon/Dosen/Vector (7).png') }}" class="w-4 h-auto mr-4"
                                alt="" />
                            <span class="text-md">Mahasiswa</span>
                            <i id="panah" class="ri-arrow-right-s-line ms-20"
                                style="
                                        transition: transform 0.3s ease,
                                            display 0.3s ease;">
                            </i>
                        </button>

                    </div>
                    <div id="menu" class="justify-start mt-4 ms-5 hidden" style="transition: all 1s ease">
                        <div class="flex items-center" style="transition: all 1s ease">
                            <div class="w-2 h-2 rounded bg-white"></div>
                            <a href="{{ route('dosen.mahasiswaPendadaran') }}"
                                class="ms-2 text-white font-medium hover:border-b-2 hover:border-white hover:text-gray-100">
                                <span class="text-sm">Pendadaran</span>
                            </a>
                        </div>

                        <div class="flex items-center mt-4" style="transition: all 1s ease">
                            <div class="w-2 h-2 rounded bg-white"></div>
                            <a href="{{ route('dosen.mahasiswaBimbingan') }}"
                                class="ms-2 text-white font-medium hover:border-b-2 hover:border-white hover:text-gray-100">
                                <span class="text-sm">Bimbingan</span>
                            </a>
                        </div>
                    </div>

                </li>

                <li class="mb-1 group py-2">
                    <a href="#"
                        class="flex items-center py-2 px-4 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                        <img src="{{ asset('icon/Dosen/icon (2).png') }}" class="w-4 h-auto mr-4" alt="" />
                        <span class="text-md">Project</span>
                    </a>
                </li>


            </ul>
            <div class="absolute bottom-0 left-0 ms-[-160px] mb-[-160px] w-80 h-96 bg-[#347677] rounded-full z-0">
            </div>
            <div class="absolute bottom-0 right-0 me-[-120px] mb-[-190px] w-80 h-80 bg-main_green rounded-full z-0">
            </div>
        </div>
        <div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
        <!-- end: Sidebar -->

        @yield('main')

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>

    <script>
        let counter = false;
        const menu = document.getElementById("menu");
        const panah = document.getElementById("panah");

        function navbarMahasiswa() {
            if (counter == true) {
                menu.classList.remove("block");
                menu.classList.add("hidden");
                panah.classList.remove("rotate-90")
                panah.classList.add("rotate-0")
                counter = false;
            } else if (counter == false) {
                menu.classList.remove("hidden");
                menu.classList.add("block");
                panah.classList.remove("rotate-0")
                panah.classList.add("rotate-90")
                counter = true;
            }
            console.log(counter);
        }
    </script>

</body>

</html>
