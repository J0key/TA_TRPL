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

            <ul class="mt-8 ms-2 me-4">
                <li class="mb-1 group py-2">
                    <a id="to_dashboard" href="{{ route('mahasiswa.dashboard') }}"
                        class="flex items-center py-2 px-4 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                        <img src="{{ asset('icon/Property 1=icon, Property 2=mahasiswa.png') }}" class="w-4 h-auto mr-4"
                            alt="" />
                        <span class="text-md">Dashboard</span>
                    </a>
                </li>

                <li class="mb-1 group py-2">
                    <a id="to_profile" href="{{ route('mahasiswa.profile') }}"
                        class="flex items-center py-2 px-4 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                        <img src="{{ asset('icon/Mahasiswa/nav_profile.png') }}" class="w-4 h-auto mr-4"
                            alt="" />
                        <span class="text-sm">Profile</span>
                    </a>
                </li>

                <li class="mb-1 group py-2">
                    <a id="to_tugas_akhir" href="{{ route('mahasiswa.tugasakhir') }}"
                        class="flex items-center py-2 px-4 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                        <img src="{{ asset('icon/Mahasiswa/nav_ta.png') }}" class="w-4 h-auto mr-4" alt="" />
                        <span class=" text-sm">Tugas Akhir</span>
                    </a>
                </li>

                <li class="mb-1 group py-2">
                    <a id="to_pengajuan_tugas_akhir" href="#"
                        class="flex items-center py-2 px-4 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                        <img src="{{ asset('icon/Mahasiswa/nav_pengajuan.png') }}" class="w-4 h-auto mr-4"
                            alt="" />
                        <span class="text-sm">Pengajuan Tugas Akhir</span>
                    </a>
                </li>

                <li class="mb-1 group py-2">
                    <a id="to_pengumuman" href="{{ route('mahasiswa.pengumuman') }}"
                        class="flex items-center py-2 px-4 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                        <img src="{{ asset('icon/Property 1=icon, Property 2=pengumuman.png') }}"
                            class="w-4 h-auto mr-4" alt="" />
                        <span class="text-sm">Pengumuman</span>
                    </a>
                </li>
            </ul>

            <div class="absolute bottom-0 left-0 ms-[-160px] mb-[-120px] w-80 h-96 bg-[#347677] rounded-full">
            </div>

            <div class="absolute bottom-0 right-0 me-[-120px] mb-[-150px] w-80 h-80 bg-main_green rounded-full">
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
        // function openProfile() {
        //     var popup = document.getElementById("profile_popup");
        //     popup.style.display = "flex";
        // }

        // document
        //     .getElementById("search_item")
        //     .addEventListener("change", function () {
        //         // Fungsi yang akan dieksekusi saat nilai dropdown berubah
        //         var selectedValue = this.value; // Mendapatkan nilai yang dipilih
        //         var dropdowncontainerprojek = document.getElementById(
        //             "dropdowncontainerprojek"
        //         );
        //         var dropdowncontainerdosen = document.getElementById(
        //             "dropdowncontainerdosen"
        //         );
        //         if (selectedValue == "Project") {
        //             dropdowncontainerprojek.style.display = "flex";
        //             dropdowncontainerdosen.style.display = "none";
        //         } else {
        //             dropdowncontainerprojek.style.display = "none";
        //             dropdowncontainerdosen.style.display = "flex";
        //         }
        //     });

        // document.addEventListener("click", function (event) {
        //     var profilePopup = document.getElementById("profile_popup");
        //     var popup = document.getElementById("profile");
        //     var targetElement = event.target; // Element yang di-klik

        //     // Periksa apakah element yang di-klik berada di dalam atau sama dengan profilePopup
        //     if (
        //         profilePopup &&
        //         !profilePopup.contains(targetElement) &&
        //         !popup.contains(targetElement)
        //     ) {
        //         // Klik di luar area profile, tutup profile
        //         profilePopup.style.display = "none";
        //     }
        // });

        // const menu = document.getElementById("menu");
        const listUser = document.getElementById("list_user");
        const listAccount = document.getElementById("list_account");
        const listPersetujuan = document.getElementById("list_persetujuan");
        const listBerkas = document.getElementById("list_berkas");

        const arrayList = [
            listUser,
            listAccount,
            listBerkas,
            listPersetujuan,
        ];

        function tutupDropDown(list, menu) {
            const iconElement = list.querySelector("i");
            menu.style.display = "none";
            list.style.backgroundColor = "#4C8F8B";
            iconElement.style.transform = "rotate(0deg)";
        }


        arrayList.forEach((item) => {
            item.addEventListener("click", function() {
                const parentList = this.parentNode;
                const menu = parentList.querySelector("#menu");
                if (menu.style.display == "none") {
                    arrayList.forEach((element) => {
                        const tmpParentList = element.parentNode;
                        const tmpMenu =
                            tmpParentList.querySelector("#menu");
                        tutupDropDown(element, tmpMenu);
                    });
                    const iconElement = item.querySelector("i");
                    iconElement.style.transform = "rotate(90deg)";
                    menu.style.display = "inline-block";
                    item.style.backgroundColor = "#5B9692";
                } else {
                    tutupDropDown(item, menu);
                }
            });
        });

        function openItemDropdown(item) {
            const parentList = item.parentNode;
            const menu = parentList.querySelector("#menu");
            const iconElement = item.querySelector("i");

            // Open the dropdown
            iconElement.style.transform = "rotate(90deg)";
            menu.style.display = "inline-block";
            item.style.backgroundColor = "#5B9692";
        }

        function getCurrentRoute() {
            return window.location.pathname;
        }

        const validRoutes = [
            ["/user_mahasiswa", "/user_dosen"],
            ["/mahasiswa", "/dosen", "/akademik", "/kaprodi"],
            ["/berkas_sidang", "/berkas_yudisium"],
            ["/persetujuan", "/persetujuan_sidang", "/persetujuan_yudisium"]


        ];
        const currentRoute = getCurrentRoute();
        // Account
        if (validRoutes[1].includes(currentRoute)) {
            openItemDropdown(listAccount);
            const parentList = listAccount.parentNode;
            const menu = parentList.querySelector("#menu");
            if (currentRoute === validRoutes[1][0]) {
                const firstChildDiv = menu.querySelector("div:nth-child(1) > a");
                firstChildDiv.classList.add("bg-main_green_hover", "text-gray-100");
            } else if (currentRoute === validRoutes[1][1]) {
                const firstChildDiv = menu.querySelector("div:nth-child(2) > a");
                firstChildDiv.classList.add("bg-main_green_hover", "text-gray-100");
            } else if (currentRoute === validRoutes[1][2]) {
                const firstChildDiv = menu.querySelector("div:nth-child(3) > a");
                firstChildDiv.classList.add("bg-main_green_hover", "text-gray-100");
            } else if (currentRoute === validRoutes[1][3]) {
                const firstChildDiv = menu.querySelector("div:nth-child(4) > a");
                firstChildDiv.classList.add("bg-main_green_hover", "text-gray-100");
            }
        }

        // Berkas
        if (validRoutes[3].includes(currentRoute)) {
            openItemDropdown(listBerkas);
            const parentList = listBerkas.parentNode;
            const menu = parentList.querySelector("#menu");
            if (currentRoute === validRoutes[2][0]) {
                const firstChildDiv = menu.querySelector("div:nth-child(1) > a");
                firstChildDiv.classList.add("bg-main_green_hover", "text-gray-100");
            } else if (currentRoute === validRoutes[2][1]) {
                const firstChildDiv = menu.querySelector("div:nth-child(2) > a");
                firstChildDiv.classList.add("bg-main_green_hover", "text-gray-100");
            }
        }

        // Persetujuan
        if (validRoutes[3].includes(currentRoute)) {
            openItemDropdown(listPersetujuan);
            const parentList = listPersetujuan.parentNode;
            const menu = parentList.querySelector("#menu");
            if (currentRoute === validRoutes[3][0]) {
                const firstChildDiv = menu.querySelector("div:nth-child(1) > a");
                firstChildDiv.classList.add("bg-main_green_hover", "text-gray-100");
            } else if (currentRoute === validRoutes[3][1]) {
                const firstChildDiv = menu.querySelector("div:nth-child(2) > a");
                firstChildDiv.classList.add("bg-main_green_hover", "text-gray-100");
            } else if (currentRoute === validRoutes[3][2]) {
                const firstChildDiv = menu.querySelector("div:nth-child(3) > a");
                firstChildDiv.classList.add("bg-main_green_hover", "text-gray-100");
            }
        }
    </script>
</body>

</html>
