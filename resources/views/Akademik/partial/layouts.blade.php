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

    </script>
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

            <ul class="mt-8 ms-2 me-4 z-30">
                <li class="mb-1 group py-2">
                    <a id="to_dashboard" href="{{ route('mahasiswa.dashboard') }}"
                        class="flex items-center py-2 px-4 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                        <img src="{{ asset('icon/Property 1=icon, Property 2=mahasiswa.png') }}" class="w-4 h-auto mr-4"
                            alt="" />
                        <span class="text-md">Dashboard</span>
                    </a>
                </li>

                <li class="mb-1 group py-2">
                    <a id="to_profile" href="{{ route('akademik.showpengumuman') }}"
                        class="flex items-center py-2 px-4 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 22 23"
                            fill="none">
                            <path
                                d="M21.5375 15.6893C21.4425 15.5911 21.3492 15.4929 21.2576 15.3981C19.9982 14.0914 19.2363 13.3027 19.2363 9.60348C19.2363 7.6883 18.7022 6.11687 17.6495 4.9383C16.8733 4.06763 15.824 3.40714 14.441 2.91902C14.4232 2.91053 14.4074 2.89938 14.3941 2.88612C13.8967 1.4571 12.5354 0.5 11.0001 0.5C9.46487 0.5 8.1042 1.4571 7.60675 2.88464C7.59348 2.89742 7.57781 2.90821 7.56039 2.91656C4.33301 4.05634 2.76454 6.24308 2.76454 9.60201C2.76454 13.3027 2.00377 14.0914 0.743273 15.3967C0.651684 15.4914 0.558377 15.5877 0.463353 15.6879C0.217894 15.9418 0.0623751 16.2508 0.0152022 16.5782C-0.0319707 16.9056 0.0311766 17.2377 0.197171 17.5353C0.550363 18.1737 1.30311 18.57 2.16234 18.57H19.8442C20.6995 18.57 21.4471 18.1742 21.8014 17.5387C21.9681 17.2411 22.0319 16.9087 21.9851 16.5809C21.9383 16.2531 21.783 15.9437 21.5375 15.6893ZM11.0001 22.5C11.8273 22.4994 12.6389 22.3068 13.3488 21.9426C14.0587 21.5783 14.6405 21.056 15.0324 20.4311C15.0508 20.4012 15.0599 20.3676 15.0588 20.3338C15.0577 20.2999 15.0464 20.2669 15.026 20.2378C15.0056 20.2088 14.9768 20.1848 14.9424 20.1682C14.908 20.1516 14.8692 20.1428 14.8297 20.1429H7.17171C7.13216 20.1427 7.09326 20.1514 7.05878 20.168C7.02431 20.1846 6.99543 20.2086 6.97497 20.2376C6.95451 20.2667 6.94316 20.2997 6.94202 20.3336C6.94089 20.3675 6.95001 20.4011 6.96849 20.4311C7.36034 21.056 7.942 21.5782 8.65179 21.9424C9.36159 22.3067 10.1731 22.4993 11.0001 22.5Z"
                                fill="#F8F8F8" />
                        </svg>
                        <span class="text-sm ps-4">Pengumuman</span>
                    </a>
                </li>

                <li class="mb-1 group py-2">
                    {{-- <a id="to_tugas_akhir" href="{{ route('mahasiswa.tugasakhir') }}"
                        class="flex items-center py-2 px-4 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" viewBox="0 0 20 14"
                            fill="none">
                            <path
                                d="M10.9805 6.04287C11.5373 5.26486 11.8367 4.33211 11.8367 3.37537C11.8367 2.41864 11.5373 1.48588 10.9805 0.707874C11.5016 0.352166 12.1187 0.163527 12.7497 0.16704C13.6006 0.16704 14.4166 0.50506 15.0183 1.10674C15.62 1.70842 15.958 2.52447 15.958 3.37537C15.958 4.22628 15.62 5.04233 15.0183 5.64401C14.4166 6.24569 13.6006 6.58371 12.7497 6.58371C12.1187 6.58722 11.5016 6.39858 10.9805 6.04287ZM4.04134 3.37537C4.04134 2.74083 4.22951 2.12053 4.58204 1.59292C4.93458 1.06531 5.43565 0.654091 6.0219 0.41126C6.60814 0.168429 7.25323 0.104894 7.87559 0.228688C8.49794 0.352482 9.06961 0.658046 9.51831 1.10674C9.967 1.55543 10.2726 2.1271 10.3964 2.74946C10.5202 3.37181 10.4566 4.0169 10.2138 4.60315C9.97096 5.18939 9.55974 5.69047 9.03213 6.043C8.50452 6.39554 7.88422 6.58371 7.24967 6.58371C6.39877 6.58371 5.58272 6.24569 4.98104 5.64401C4.37936 5.04233 4.04134 4.22628 4.04134 3.37537ZM5.87467 3.37537C5.87467 3.64732 5.95532 3.91316 6.1064 4.13928C6.25749 4.3654 6.47224 4.54164 6.72348 4.64571C6.97473 4.74978 7.2512 4.77701 7.51792 4.72395C7.78465 4.6709 8.02965 4.53994 8.22195 4.34765C8.41424 4.15535 8.5452 3.91035 8.59825 3.64362C8.65131 3.3769 8.62408 3.10043 8.52001 2.84918C8.41594 2.59794 8.2397 2.38319 8.01358 2.2321C7.78747 2.08102 7.52162 2.00037 7.24967 2.00037C6.885 2.00037 6.53526 2.14524 6.2774 2.4031C6.01954 2.66096 5.87467 3.0107 5.87467 3.37537ZM13.6663 12.0837V13.917H0.833008V12.0837C0.833008 12.0837 0.833008 8.41704 7.24967 8.41704C13.6663 8.41704 13.6663 12.0837 13.6663 12.0837ZM11.833 12.0837C11.7047 11.3687 10.6138 10.2504 7.24967 10.2504C3.88551 10.2504 2.73051 11.4512 2.66634 12.0837M13.6205 8.41704C14.1823 8.85404 14.6417 9.40874 14.9663 10.0422C15.291 10.6756 15.473 11.3724 15.4997 12.0837V13.917H19.1663V12.0837C19.1663 12.0837 19.1663 8.75621 13.6113 8.41704H13.6205Z"
                                fill="white" />
                        </svg>
                        <span class=" text-sm ps-4">User</span>
                    </a> --}}
                    <div
                        class="flex items-center py-2 px-4 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md transition-all transition-transform">
                        <button class="flex flex-row items-center w-full" type="button" onclick="openNavbar(1)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" viewBox="0 0 20 14"
                                fill="none">
                                <path
                                    d="M10.9805 6.04287C11.5373 5.26486 11.8367 4.33211 11.8367 3.37537C11.8367 2.41864 11.5373 1.48588 10.9805 0.707874C11.5016 0.352166 12.1187 0.163527 12.7497 0.16704C13.6006 0.16704 14.4166 0.50506 15.0183 1.10674C15.62 1.70842 15.958 2.52447 15.958 3.37537C15.958 4.22628 15.62 5.04233 15.0183 5.64401C14.4166 6.24569 13.6006 6.58371 12.7497 6.58371C12.1187 6.58722 11.5016 6.39858 10.9805 6.04287ZM4.04134 3.37537C4.04134 2.74083 4.22951 2.12053 4.58204 1.59292C4.93458 1.06531 5.43565 0.654091 6.0219 0.41126C6.60814 0.168429 7.25323 0.104894 7.87559 0.228688C8.49794 0.352482 9.06961 0.658046 9.51831 1.10674C9.967 1.55543 10.2726 2.1271 10.3964 2.74946C10.5202 3.37181 10.4566 4.0169 10.2138 4.60315C9.97096 5.18939 9.55974 5.69047 9.03213 6.043C8.50452 6.39554 7.88422 6.58371 7.24967 6.58371C6.39877 6.58371 5.58272 6.24569 4.98104 5.64401C4.37936 5.04233 4.04134 4.22628 4.04134 3.37537ZM5.87467 3.37537C5.87467 3.64732 5.95532 3.91316 6.1064 4.13928C6.25749 4.3654 6.47224 4.54164 6.72348 4.64571C6.97473 4.74978 7.2512 4.77701 7.51792 4.72395C7.78465 4.6709 8.02965 4.53994 8.22195 4.34765C8.41424 4.15535 8.5452 3.91035 8.59825 3.64362C8.65131 3.3769 8.62408 3.10043 8.52001 2.84918C8.41594 2.59794 8.2397 2.38319 8.01358 2.2321C7.78747 2.08102 7.52162 2.00037 7.24967 2.00037C6.885 2.00037 6.53526 2.14524 6.2774 2.4031C6.01954 2.66096 5.87467 3.0107 5.87467 3.37537ZM13.6663 12.0837V13.917H0.833008V12.0837C0.833008 12.0837 0.833008 8.41704 7.24967 8.41704C13.6663 8.41704 13.6663 12.0837 13.6663 12.0837ZM11.833 12.0837C11.7047 11.3687 10.6138 10.2504 7.24967 10.2504C3.88551 10.2504 2.73051 11.4512 2.66634 12.0837M13.6205 8.41704C14.1823 8.85404 14.6417 9.40874 14.9663 10.0422C15.291 10.6756 15.473 11.3724 15.4997 12.0837V13.917H19.1663V12.0837C19.1663 12.0837 19.1663 8.75621 13.6113 8.41704H13.6205Z"
                                    fill="white" />
                            </svg>
                            <span class=" text-sm ps-4">User</span>
                        </button>
                        <i id="panah" class="ri-arrow-right-s-line"
                            style="
                            transition: transform 0.3s ease,
                                display 0.3s ease;">
                        </i>
                    </div>
                    <div id="menu1" class="justify-start mt-4 ms-5 hidden" style="transition: all 1s ease">
                        <div class="flex items-center" style="transition: all 1s ease">
                            <div class="w-2 h-2 rounded bg-white"></div>
                            <a href="{{ route('akademik.showUser') }}"
                                class="ms-2 text-white font-medium hover:border-b-2 hover:border-white hover:text-gray-100">
                                <span class="text-sm">Mahasiswa</span>
                            </a>
                        </div>

                        <div class="flex items-center mt-4" style="transition: all 1s ease">
                            <div class="w-2 h-2 rounded bg-white"></div>
                            <a href="{{ route('akademik.showAkunDosen') }}"
                                class="ms-2 text-white font-medium hover:border-b-2 hover:border-white hover:text-gray-100">
                                <span class="text-sm">Dosen</span>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="mb-1 group py-2">
                    {{-- <a id="to_pengajuan_tugas_akhir" href="#"
                        class="flex items-center py-2 px-4 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 20 19"
                            fill="none">
                            <path
                                d="M13.4005 10.1507C14.2992 9.4436 14.9551 8.47401 15.2771 7.37678C15.5991 6.27955 15.5711 5.10924 15.1969 4.02867C14.8228 2.94811 14.1212 2.01102 13.1897 1.34778C12.2582 0.684539 11.1431 0.328125 9.99963 0.328125C8.85613 0.328125 7.74107 0.684539 6.80957 1.34778C5.87806 2.01102 5.17645 2.94811 4.80233 4.02867C4.4282 5.10924 4.40018 6.27955 4.72216 7.37678C5.04414 8.47401 5.7001 9.4436 6.5988 10.1507C5.05887 10.7676 3.71523 11.7909 2.71112 13.1114C1.707 14.4319 1.08006 16.0002 0.897131 17.649C0.883889 17.7694 0.894488 17.8912 0.928321 18.0075C0.962154 18.1237 1.01856 18.2322 1.09432 18.3267C1.24731 18.5175 1.46985 18.6398 1.71296 18.6665C1.95608 18.6932 2.19986 18.6223 2.39068 18.4693C2.5815 18.3163 2.70372 18.0938 2.73046 17.8507C2.93175 16.0588 3.78618 14.4038 5.1305 13.2021C6.47482 12.0003 8.21479 11.3359 10.018 11.3359C11.8211 11.3359 13.5611 12.0003 14.9054 13.2021C16.2498 14.4038 17.1042 16.0588 17.3055 17.8507C17.3304 18.0759 17.4379 18.2839 17.6071 18.4346C17.7764 18.5853 17.9955 18.6679 18.2221 18.6665H18.323C18.5633 18.6388 18.7829 18.5173 18.934 18.3285C19.0851 18.1396 19.1554 17.8987 19.1296 17.6582C18.9458 16.0047 18.3155 14.4324 17.3062 13.1098C16.297 11.7873 14.9468 10.7644 13.4005 10.1507ZM9.99963 9.49983C9.27443 9.49983 8.56552 9.28478 7.96254 8.88188C7.35956 8.47899 6.88959 7.90633 6.61207 7.23634C6.33455 6.56634 6.26194 5.8291 6.40342 5.11783C6.5449 4.40657 6.89411 3.75323 7.40691 3.24044C7.9197 2.72765 8.57304 2.37843 9.2843 2.23695C9.99556 2.09547 10.7328 2.16808 11.4028 2.4456C12.0728 2.72313 12.6455 3.19309 13.0484 3.79607C13.4513 4.39905 13.6663 5.10796 13.6663 5.83316C13.6663 6.80562 13.28 7.73826 12.5924 8.42589C11.9047 9.11352 10.9721 9.49983 9.99963 9.49983Z"
                                fill="white" />
                        </svg>
                        <span class="text-sm ps-4">Account</span>
                    </a> --}}
                    <div
                        class="w-full flex items-center py-2 px-4 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md transition-all transition-transform">
                        <button class="w-full flex flex-row items-center" type="button" onclick="openNavbar(2)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 20 19"
                                fill="none">
                                <path
                                    d="M13.4005 10.1507C14.2992 9.4436 14.9551 8.47401 15.2771 7.37678C15.5991 6.27955 15.5711 5.10924 15.1969 4.02867C14.8228 2.94811 14.1212 2.01102 13.1897 1.34778C12.2582 0.684539 11.1431 0.328125 9.99963 0.328125C8.85613 0.328125 7.74107 0.684539 6.80957 1.34778C5.87806 2.01102 5.17645 2.94811 4.80233 4.02867C4.4282 5.10924 4.40018 6.27955 4.72216 7.37678C5.04414 8.47401 5.7001 9.4436 6.5988 10.1507C5.05887 10.7676 3.71523 11.7909 2.71112 13.1114C1.707 14.4319 1.08006 16.0002 0.897131 17.649C0.883889 17.7694 0.894488 17.8912 0.928321 18.0075C0.962154 18.1237 1.01856 18.2322 1.09432 18.3267C1.24731 18.5175 1.46985 18.6398 1.71296 18.6665C1.95608 18.6932 2.19986 18.6223 2.39068 18.4693C2.5815 18.3163 2.70372 18.0938 2.73046 17.8507C2.93175 16.0588 3.78618 14.4038 5.1305 13.2021C6.47482 12.0003 8.21479 11.3359 10.018 11.3359C11.8211 11.3359 13.5611 12.0003 14.9054 13.2021C16.2498 14.4038 17.1042 16.0588 17.3055 17.8507C17.3304 18.0759 17.4379 18.2839 17.6071 18.4346C17.7764 18.5853 17.9955 18.6679 18.2221 18.6665H18.323C18.5633 18.6388 18.7829 18.5173 18.934 18.3285C19.0851 18.1396 19.1554 17.8987 19.1296 17.6582C18.9458 16.0047 18.3155 14.4324 17.3062 13.1098C16.297 11.7873 14.9468 10.7644 13.4005 10.1507ZM9.99963 9.49983C9.27443 9.49983 8.56552 9.28478 7.96254 8.88188C7.35956 8.47899 6.88959 7.90633 6.61207 7.23634C6.33455 6.56634 6.26194 5.8291 6.40342 5.11783C6.5449 4.40657 6.89411 3.75323 7.40691 3.24044C7.9197 2.72765 8.57304 2.37843 9.2843 2.23695C9.99556 2.09547 10.7328 2.16808 11.4028 2.4456C12.0728 2.72313 12.6455 3.19309 13.0484 3.79607C13.4513 4.39905 13.6663 5.10796 13.6663 5.83316C13.6663 6.80562 13.28 7.73826 12.5924 8.42589C11.9047 9.11352 10.9721 9.49983 9.99963 9.49983Z"
                                    fill="white" />
                            </svg>
                            <span class="text-sm ps-4">Account</span>
                        </button>
                        <i id="panah" class="ri-arrow-right-s-line"
                            style="
                                    transition: transform 0.3s ease,
                                        display 0.3s ease;">
                        </i>

                    </div>
                    <div id="menu2" class="justify-start mt-4 ms-5 hidden" style="transition: all 1s ease">
                        <div class="flex items-center" style="transition: all 1s ease">
                            <div class="w-2 h-2 rounded bg-white"></div>
                            <a href="{{ route('dosen.mahasiswaPendadaran') }}"
                                class="ms-2 text-white font-medium hover:border-b-2 hover:border-white hover:text-gray-100">
                                <span class="text-sm">Mahasiswa</span>
                            </a>
                        </div>

                        <div class="flex items-center mt-4" style="transition: all 1s ease">
                            <div class="w-2 h-2 rounded bg-white"></div>
                            <a href="{{ route('akademik.showAkunDosen') }}"
                                class="ms-2 text-white font-medium hover:border-b-2 hover:border-white hover:text-gray-100">
                                <span class="text-sm">Dosen</span>
                            </a>
                        </div>

                        <div class="flex items-center mt-4" style="transition: all 1s ease">
                            <div class="w-2 h-2 rounded bg-white"></div>
                            <a href="{{ route('dosen.mahasiswaBimbingan') }}"
                                class="ms-2 text-white font-medium hover:border-b-2 hover:border-white hover:text-gray-100">
                                <span class="text-sm">Akademik</span>
                            </a>
                        </div>

                        <div class="flex items-center mt-4" style="transition: all 1s ease">
                            <div class="w-2 h-2 rounded bg-white"></div>
                            <a href="{{ route('dosen.mahasiswaBimbingan') }}"
                                class="ms-2 text-white font-medium hover:border-b-2 hover:border-white hover:text-gray-100">
                                <span class="text-sm">Kaprodi</span>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="mb-1 group py-2">
                    {{-- <a id="to_pengumuman" href="{{ route('mahasiswa.pengumuman') }}"
                        class="flex items-center py-2 px-4 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                        <img src="{{ asset('icon/Mahasiswa/nav_pengajuan.png') }}" class="w-4 h-auto mr-4"
                            alt="" />
                        <span class="text-sm">Persetujuan</span>
                    </a> --}}
                    <div
                        class="w-full flex items-center py-2 px-4 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md transition-all transition-transform">
                        <button class="w-full flex flex-row items-center" type="button" onclick="openNavbar(3)">
                            <img src="{{ asset('icon/Mahasiswa/nav_pengajuan.png') }}" class="w-4 h-auto mr-4"
                                alt="" />
                            <span class="text-sm">Persetujuan</span>
                        </button>
                        <i id="panah" class="ri-arrow-right-s-line ms-20"
                            style="
                                    transition: transform 0.3s ease,
                                        display 0.3s ease;">
                        </i>
                    </div>
                    <div id="menu3" class="justify-start mt-4 ms-5 hidden" style="transition: all 1s ease">
                        <div class="flex items-center" style="transition: all 1s ease">
                            <div class="w-2 h-2 rounded bg-white"></div>
                            <a href="{{ route('akademik.showPersetujuan') }}"
                                class="ms-2 text-white font-medium hover:border-b-2 hover:border-white hover:text-gray-100">
                                <span class="text-sm">Tugas Akhir</span>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="mb-1 group py-2">
                    <a id="to_pengumuman" href="{{ route('akademik.showPeriode') }}"
                        class="flex items-center py-2 px-4 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 20 19"
                            fill="none">
                            <path
                                d="M9.99967 0.333496C15.0624 0.333496 19.1663 4.43741 19.1663 9.50016C19.1663 14.5629 15.0624 18.6668 9.99967 18.6668C4.93692 18.6668 0.833008 14.5629 0.833008 9.50016C0.833008 4.43741 4.93692 0.333496 9.99967 0.333496ZM9.99967 2.16683C8.05475 2.16683 6.18949 2.93945 4.81422 4.31471C3.43896 5.68998 2.66634 7.55524 2.66634 9.50016C2.66634 11.4451 3.43896 13.3103 4.81422 14.6856C6.18949 16.0609 8.05475 16.8335 9.99967 16.8335C11.9446 16.8335 13.8099 16.0609 15.1851 14.6856C16.5604 13.3103 17.333 11.4451 17.333 9.50016C17.333 7.55524 16.5604 5.68998 15.1851 4.31471C13.8099 2.93945 11.9446 2.16683 9.99967 2.16683ZM9.99967 4.00016C10.2242 4.00019 10.4409 4.08262 10.6087 4.23182C10.7765 4.38101 10.8837 4.5866 10.9099 4.80958L10.9163 4.91683V9.12066L13.3978 11.6021C13.5622 11.767 13.6576 11.9884 13.6647 12.2212C13.6718 12.454 13.5901 12.6807 13.436 12.8554C13.282 13.0301 13.0673 13.1396 12.8354 13.1617C12.6036 13.1838 12.372 13.1168 12.1878 12.9743L12.1016 12.8982L9.35159 10.1482C9.20912 10.0057 9.11762 9.82008 9.09126 9.62025L9.08301 9.50016V4.91683C9.08301 4.67371 9.17959 4.44056 9.35149 4.26865C9.5234 4.09674 9.75656 4.00016 9.99967 4.00016Z"
                                fill="#F8F8F8" />
                        </svg>
                        <span class="text-sm ps-4">Periode Registrasi</span>
                    </a>
                </li>
                <li class="mb-1 group py-2">
                    <a id="to_pengumuman" href="{{ route('akademik.showProyek') }}"
                        class="flex items-center py-2 px-4 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 20 19"
                            fill="none">
                            <path
                                d="M18.406 0.388526C17.7489 0.275348 17.0835 0.217091 16.4168 0.214359C14.142 0.212495 11.9146 0.864802 10.0001 2.09353C8.08075 0.880935 5.85371 0.244638 3.58345 0.260193C2.91671 0.262925 2.25136 0.321182 1.59428 0.434359C1.37906 0.471465 1.18415 0.584196 1.04466 0.752253C0.905177 0.920309 0.830277 1.13265 0.833452 1.35103V12.351C0.831488 12.4857 0.859234 12.6192 0.914714 12.7419C0.970194 12.8647 1.05205 12.9737 1.15444 13.0612C1.25684 13.1487 1.37727 13.2126 1.50716 13.2483C1.63705 13.284 1.77321 13.2906 1.90595 13.2677C3.21955 13.0403 4.56539 13.078 5.86418 13.3787C7.16297 13.6794 8.38846 14.2369 9.46845 15.0185L9.57845 15.0827H9.67928C9.78094 15.1251 9.88999 15.1469 10.0001 15.1469C10.1102 15.1469 10.2193 15.1251 10.321 15.0827H10.4218L10.5318 15.0185C11.6042 14.2195 12.8262 13.6438 14.1253 13.3258C15.4243 13.0077 16.774 12.9537 18.0943 13.1669C18.227 13.1898 18.3632 13.1832 18.4931 13.1475C18.623 13.1118 18.7434 13.0479 18.8458 12.9604C18.9482 12.8729 19.03 12.7638 19.0855 12.6411C19.141 12.5183 19.1687 12.3849 19.1668 12.2502V1.25019C19.1572 1.04133 19.0766 0.842011 18.9382 0.685286C18.7998 0.528561 18.612 0.423851 18.406 0.388526ZM9.08345 12.571C7.38751 11.6788 5.49976 11.2132 3.58345 11.2144C3.28095 11.2144 2.97845 11.2144 2.66678 11.2144V2.04769C2.97209 2.0301 3.27815 2.0301 3.58345 2.04769C5.53906 2.04553 7.45198 2.61941 9.08345 3.69769V12.571ZM17.3335 11.251C17.0218 11.251 16.7193 11.251 16.4168 11.251C14.5005 11.2498 12.6127 11.7155 10.9168 12.6077V3.69769C12.5483 2.61941 14.4612 2.04553 16.4168 2.04769C16.7221 2.0301 17.0281 2.0301 17.3335 2.04769V11.251ZM18.406 15.0552C17.7489 14.942 17.0835 14.8838 16.4168 14.881C14.142 14.8792 11.9146 15.5315 10.0001 16.7602C8.08567 15.5315 5.85828 14.8792 3.58345 14.881C2.91671 14.8838 2.25136 14.942 1.59428 15.0552C1.47496 15.0741 1.36056 15.1165 1.25765 15.1798C1.15475 15.2431 1.06537 15.3261 0.994663 15.4241C0.923956 15.522 0.873313 15.633 0.845647 15.7506C0.81798 15.8682 0.813836 15.9901 0.833452 16.1094C0.880035 16.3474 1.01907 16.5573 1.22009 16.693C1.42112 16.8288 1.66775 16.8793 1.90595 16.8335C3.21955 16.6061 4.56539 16.6438 5.86418 16.9445C7.16297 17.2452 8.38846 17.8028 9.46845 18.5844C9.6237 18.6949 9.80954 18.7543 10.0001 18.7543C10.1907 18.7543 10.3765 18.6949 10.5318 18.5844C11.6118 17.8028 12.8373 17.2452 14.1361 16.9445C15.4348 16.6438 16.7807 16.6061 18.0943 16.8335C18.3325 16.8793 18.5791 16.8288 18.7801 16.693C18.9812 16.5573 19.1202 16.3474 19.1668 16.1094C19.1864 15.9901 19.1823 15.8682 19.1546 15.7506C19.1269 15.633 19.0763 15.522 19.0056 15.4241C18.9349 15.3261 18.8455 15.2431 18.7426 15.1798C18.6397 15.1165 18.5253 15.0741 18.406 15.0552Z"
                                fill="white" />
                        </svg>
                        <span class="text-sm ps-4">Proyek</span>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        let counter = false;
        const menu1 = document.getElementById("menu1");
        const menu2 = document.getElementById("menu2");
        const menu3 = document.getElementById("menu3");
        let tmpmenu = menu1;
        // const panah = document.getElementById("panah");

        function openNavbar(id) {
            const listmenu = [menu1, menu2, menu3];
            listmenu.forEach(menu => {
                menu.classList.remove("block");
                menu.classList.add("hidden");
            });
            if (id == 1) {
                tmpmenu = menu1;
            } else if (id == 2) {
                tmpmenu = menu2;
            } else {
                tmpmenu = menu3;
            }
            if (counter == true) {
                tmpmenu.classList.remove("block");
                tmpmenu.classList.add("hidden");
                // panah.classList.remove("rotate-90")
                // panah.classList.add("rotate-0")
                counter = false;
            } else if (counter == false) {
                tmpmenu.classList.remove("hidden");
                tmpmenu.classList.add("block");
                // panah.classList.remove("rotate-0")
                // panah.classList.add("rotate-90")
                counter = true;
            }
            console.log(counter);
        }


        // const listUser = document.getElementById("list_user");
        // const listAccount = document.getElementById("list_account");
        // const listPersetujuan = document.getElementById("list_persetujuan");
        // const listBerkas = document.getElementById("list_berkas");

        // const arrayList = [
        //     listUser,
        //     listAccount,
        //     listBerkas,
        //     listPersetujuan,
        // ];

        // function tutupDropDown(list, menu) {
        //     const iconElement = list.querySelector("i");
        //     menu.style.display = "none";
        //     list.style.backgroundColor = "#4C8F8B";
        //     iconElement.style.transform = "rotate(0deg)";
        // }


        // arrayList.forEach((item) => {
        //     item.addEventListener("click", function() {
        //         const parentList = this.parentNode;
        //         const menu = parentList.querySelector("#menu");
        //         if (menu.style.display == "none") {
        //             arrayList.forEach((element) => {
        //                 const tmpParentList = element.parentNode;
        //                 const tmpMenu =
        //                     tmpParentList.querySelector("#menu");
        //                 tutupDropDown(element, tmpMenu);
        //             });
        //             const iconElement = item.querySelector("i");
        //             iconElement.style.transform = "rotate(90deg)";
        //             menu.style.display = "inline-block";
        //             item.style.backgroundColor = "#5B9692";
        //         } else {
        //             tutupDropDown(item, menu);
        //         }
        //     });
        // });

        // function openItemDropdown(item) {
        //     const parentList = item.parentNode;
        //     const menu = parentList.querySelector("#menu");
        //     const iconElement = item.querySelector("i");

        //     // Open the dropdown
        //     iconElement.style.transform = "rotate(90deg)";
        //     menu.style.display = "inline-block";
        //     item.style.backgroundColor = "#5B9692";
        // }

        // function getCurrentRoute() {
        //     return window.location.pathname;
        // }

        // const validRoutes = [
        //     ["/user_mahasiswa", "/user_dosen"],
        //     ["/mahasiswa", "/dosen", "/akademik", "/kaprodi"],
        //     ["/berkas_sidang", "/berkas_yudisium"],
        //     ["/persetujuan", "/persetujuan_sidang", "/persetujuan_yudisium"]


        // ];
        // const currentRoute = getCurrentRoute();
        // // Account
        // if (validRoutes[1].includes(currentRoute)) {
        //     openItemDropdown(listAccount);
        //     const parentList = listAccount.parentNode;
        //     const menu = parentList.querySelector("#menu");
        //     if (currentRoute === validRoutes[1][0]) {
        //         const firstChildDiv = menu.querySelector("div:nth-child(1) > a");
        //         firstChildDiv.classList.add("bg-main_green_hover", "text-gray-100");
        //     } else if (currentRoute === validRoutes[1][1]) {
        //         const firstChildDiv = menu.querySelector("div:nth-child(2) > a");
        //         firstChildDiv.classList.add("bg-main_green_hover", "text-gray-100");
        //     } else if (currentRoute === validRoutes[1][2]) {
        //         const firstChildDiv = menu.querySelector("div:nth-child(3) > a");
        //         firstChildDiv.classList.add("bg-main_green_hover", "text-gray-100");
        //     } else if (currentRoute === validRoutes[1][3]) {
        //         const firstChildDiv = menu.querySelector("div:nth-child(4) > a");
        //         firstChildDiv.classList.add("bg-main_green_hover", "text-gray-100");
        //     }
        // }

        // // Berkas
        // if (validRoutes[3].includes(currentRoute)) {
        //     openItemDropdown(listBerkas);
        //     const parentList = listBerkas.parentNode;
        //     const menu = parentList.querySelector("#menu");
        //     if (currentRoute === validRoutes[2][0]) {
        //         const firstChildDiv = menu.querySelector("div:nth-child(1) > a");
        //         firstChildDiv.classList.add("bg-main_green_hover", "text-gray-100");
        //     } else if (currentRoute === validRoutes[2][1]) {
        //         const firstChildDiv = menu.querySelector("div:nth-child(2) > a");
        //         firstChildDiv.classList.add("bg-main_green_hover", "text-gray-100");
        //     }
        // }

        // // Persetujuan
        // if (validRoutes[3].includes(currentRoute)) {
        //     openItemDropdown(listPersetujuan);
        //     const parentList = listPersetujuan.parentNode;
        //     const menu = parentList.querySelector("#menu");
        //     if (currentRoute === validRoutes[3][0]) {
        //         const firstChildDiv = menu.querySelector("div:nth-child(1) > a");
        //         firstChildDiv.classList.add("bg-main_green_hover", "text-gray-100");
        //     } else if (currentRoute === validRoutes[3][1]) {
        //         const firstChildDiv = menu.querySelector("div:nth-child(2) > a");
        //         firstChildDiv.classList.add("bg-main_green_hover", "text-gray-100");
        //     } else if (currentRoute === validRoutes[3][2]) {
        //         const firstChildDiv = menu.querySelector("div:nth-child(3) > a");
        //         firstChildDiv.classList.add("bg-main_green_hover", "text-gray-100");
        //     }
        // }
    </script>
</body>

</html>
