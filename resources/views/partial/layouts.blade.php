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
    <title>Dashboard</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
        }

        /* CSS untuk modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 99;
        }

        .modal-content {
            background-color: #fff;
            padding: 50px;
            border-radius: 8px;
            text-align: center;
        }

        .confirm-button {
            background-color: #ff0000;
            color: #fff;
            padding: 50px 50px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 30px;
        }

        .cancel-button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 10px;
        }
    </style>
</head>

<body id="body" class="text-gray-800 font-inter">
    <!-- start: Sidebar -->

    <div class="flex flex-row flex-auto">
        <div class="fixed left-0 top-0 w-80 h-full p-4 z-50 sidebar-menu transition-transform bg-main_green shadow-lg shadow-slate-800"
            style="text-align: center">
            <div class="flex flex-row justify-center items-center my-6">
                <img class="w-16" src="../assets/ugm_logo.png" alt="" />
                <a href="#" class="flex items-center ml-8 text-white text-2xl font-semibold"
                    style="font-weight: 200px">
                    TA - TRPL
                </a>
            </div>

            <ul class="mt-6">
                <li class="mb-1 group py-2">
                    <a href="#"
                        class="flex items-center py-2 px-4 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                        <img src="../assets/Property 1=icon, Property 2=mahasiswa.png" class="w-4 h-auto mr-4"
                            alt="" />
                        <span class="text-md">Dashboard</span>
                    </a>
                </li>

                <li class="mb-1 group py-2">
                    <a href="#"
                        class="flex items-center py-2 px-4 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                        <img src="../assets/Property 1=icon, Property 2=pengumuman.png" class="w-4 h-auto mr-4"
                            alt="" />
                        <span class="text-md">Pengumuman</span>
                    </a>
                </li>

                <li class="mb-1 py-2">
                    <a id="list_user" href="#"
                        class="flex items-center py-2 px-4 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md">
                        <img src="../assets/Property 1=icon, Property 2=user.png" class="w-4 h-auto mr-4"
                            alt="" />
                        <span class="text-md">User</span>
                        <i class="ri-arrow-right-s-line ml-auto"
                            style="
                                    transition: transform 0.3s ease,
                                        display 0.3s ease;
                                "></i>
                    </a>

                    <div id="menu" class="justify-start mt-6 ms-[-120px]"
                        style="transition: display 0.3s ease; display: none">
                        <div class="flex items-center">
                            <div class="w-2 h-2 rounded bg-white"></div>
                            <a href="#"
                                class="px-2 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md">
                                <span class="text-md">Mahasiswa</span>
                            </a>
                        </div>

                        <div class="flex items-center mt-2">
                            <div class="w-2 h-2 rounded bg-white"></div>
                            <a href="#"
                                class="px-2 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md">
                                <span class="text-md">Dosen</span>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="mb-1 py-2">
                    <a id="list_account" href="#"
                        class="flex items-center py-2 px-4 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md">
                        <img src="../assets/Property 1=icon, Property 2=account.png" class="w-4 h-auto mr-4"
                            alt="" />
                        <span class="text-md">Account</span>
                        <i class="ri-arrow-right-s-line ml-auto"
                            style="
                                    transition: transform 0.3s ease,
                                        display 0.3s ease;
                                "></i>
                    </a>

                    <div id="menu" class="justify-start mt-6 ms-[-120px]"
                        style="transition: display 0.3s ease; display: none">
                        <div class="flex items-center">
                            <div class="w-2 h-2 rounded bg-white"></div>
                            <a href="#"
                                class="px-2 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md">
                                <span class="text-md">Mahasiswa</span>
                            </a>
                        </div>

                        <div class="flex items-center mt-2">
                            <div class="w-2 h-2 rounded bg-white"></div>
                            <a href="#"
                                class="px-2 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md">
                                <span class="text-md">Dosen</span>
                            </a>
                        </div>

                        <div class="flex items-center mt-2">
                            <div class="w-2 h-2 rounded bg-white"></div>
                            <a href="#"
                                class="px-2 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md">
                                <span class="text-md">Akademik</span>
                            </a>
                        </div>

                        <div class="flex items-center mt-2">
                            <div class="w-2 h-2 rounded bg-white"></div>
                            <a href="#"
                                class="px-2 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md">
                                <span class="text-md">Kaprodi</span>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="mb-1 py-2">
                    <a id="list_berkas" href="#"
                        class="flex items-center py-2 px-4 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md">
                        <img src="../assets/Property 1=icon, Property 2=berkas.png" class="w-4 h-auto mr-4"
                            alt="" />
                        <span class="text-md">Berkas</span>
                        <i class="ri-arrow-right-s-line ml-auto"
                            style="
                                    transition: transform 0.3s ease,
                                        display 0.3s ease;
                                "></i>
                    </a>

                    <div id="menu" class="justify-start mt-6 ms-[-120px]"
                        style="transition: display 0.3s ease; display: none">
                        <div class="flex items-center">
                            <div class="w-2 h-2 rounded bg-white"></div>
                            <a href="#"
                                class="px-2 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md">
                                <span class="text-md">Sidang</span>
                            </a>
                        </div>

                        <div class="flex items-center mt-2">
                            <div class="w-2 h-2 rounded bg-white"></div>
                            <a href="#"
                                class="px-2 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md">
                                <span class="text-md">Yudisium</span>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="mb-1 py-2">
                    <a id="list_persetujuan" href="#"
                        class="flex items-center py-2 px-4 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md">
                        <img src="../assets/Property 1=icon, Property 2=persetujuan.png" class="w-4 h-auto mr-4"
                            alt="" />
                        <span class="text-md font-semi">Persetujuan</span>
                        <i class="ri-arrow-right-s-line ml-auto"
                            style="
                                    transition: transform 0.3s ease,
                                        display 0.3s ease;
                                "></i>
                    </a>

                    <div id="menu" class="justify-start mt-6 ms-[-120px]"
                        style="transition: display 0.3s ease; display: none">
                        <div class="flex items-center">
                            <div class="w-2 h-2 rounded bg-white"></div>
                            <a href="#"
                                class="px-2 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md">
                                <span class="text-md">Tugas Akhir</span>
                            </a>
                        </div>

                        <div class="flex items-center mt-2">
                            <div class="w-2 h-2 rounded bg-white"></div>
                            <a href="#"
                                class="px-2 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md">
                                <span class="text-md">Sidang</span>
                            </a>
                        </div>

                        <div class="flex items-center mt-2">
                            <div class="w-2 h-2 rounded bg-white"></div>
                            <a href="#"
                                class="px-2 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md">
                                <span class="text-md">Yudisium</span>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="mb-1 group py-2">
                    <a href="#"
                        class="flex items-center py-2 px-4 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                        <img src="../assets/Property 1=ico, Property 2=periode.png" class="w-4 h-auto mr-4"
                            alt="" />
                        <span class="text-md">Periode Registrasi</span>
                    </a>
                </li>

                <li class="mb-1 group py-2">
                    <a href="#"
                        class="flex items-center py-2 px-4 text-white font-medium hover:bg-main_green_hover hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                        <img src="../assets/Property 1=icon, Property 2=project.png" class="w-4 h-auto mr-4"
                            alt="" />
                        <span class="text-md">Proyek</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
        <!-- end: Sidebar -->

        <!-- start: Main -->

        <main class="pt-10 flex ms-80 px-20 flex-auto min-h-screen transition-all" style="background-color: #efefef">
            <div class="w-full flex flex-row h-16 bg-white rounded-md items-center shadow-md shadow-slate-400">
                <div class="flex flex-auto w-auto">
                    <form action="" method="GET"
                        class="flex flex-row text-sm items-center justify-centerself-center">
                        <button type="submit" class="p-2 ms-2 rounded-l-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 41 38" fill="none">
                                <path
                                    d="M36.2276 32.1258L30.0889 26.2992C32.4718 23.4562 33.6257 19.8476 33.3135 16.2154C33.0013 12.5832 31.2466 9.20357 28.4103 6.77135C25.574 4.33914 21.8717 3.03923 18.0645 3.13891C14.2574 3.2386 10.6348 4.73031 7.94178 7.30731C5.24872 9.88431 3.68983 13.3507 3.58566 16.9938C3.48148 20.6369 4.83993 24.1797 7.38169 26.8937C9.92345 29.6078 13.4553 31.2869 17.2511 31.5856C21.0468 31.8844 24.8179 30.7802 27.789 28.5L33.8781 34.3267C34.0319 34.4751 34.2149 34.5929 34.4165 34.6732C34.6181 34.7536 34.8344 34.795 35.0529 34.795C35.2713 34.795 35.4876 34.7536 35.6892 34.6732C35.8908 34.5929 36.0738 34.4751 36.2276 34.3267C36.5259 34.0314 36.6926 33.6369 36.6926 33.2263C36.6926 32.8156 36.5259 32.4211 36.2276 32.1258V32.1258ZM18.5064 28.5C16.2156 28.5 13.9763 27.85 12.0715 26.6321C10.1668 25.4143 8.68226 23.6833 7.80561 21.6581C6.92896 19.6329 6.69959 17.4044 7.1465 15.2544C7.59341 13.1045 8.69654 11.1296 10.3164 9.57957C11.9362 8.02954 14 6.97395 16.2468 6.5463C18.4936 6.11864 20.8224 6.33813 22.9389 7.177C25.0553 8.01587 26.8642 9.43645 28.1369 11.2591C29.4096 13.0817 30.0889 15.2246 30.0889 17.4167C30.0889 20.3562 28.8686 23.1752 26.6965 25.2538C24.5244 27.3323 21.5783 28.5 18.5064 28.5V28.5Z"
                                    fill="#025E5A" />
                            </svg>
                        </button>
                        <input type="text" placeholder="Search here..." name="query"
                            class="p-2 text-slate-800 rounded-r-md focus:outline-none ml-4 text-lg"
                            style="
                                    input::placeholder {
                                        color: #008080;
                                    }
                                " />
                    </form>
                </div>

                <div class="flex flex-row me-12 space-x-4">
                    <img class="w-6 h-6" src="../assets/lampu.png" alt="" />
                    <img class="w-6 h-6" src="../assets/lonceng.png" alt="" />
                    <div class="rounded-xl bg-slate-300 w-8 h-8"></div>
                </div>
            </div>
        </main>
    </div>

    <!-- end: Main -->

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
    </script>
</body>

</html>
