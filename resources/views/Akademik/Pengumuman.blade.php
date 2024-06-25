@extends('Akademik.partial.layouts')

@section('main')
    <main class="w-[1139px] ml-[322px] min-h-screen flex flex-col ps-6">

        <form action="" method="POST">
            @csrf
            <div
                class="py-3 px-6 mt-10 bg-[#FBFFFC] flex item-center shadow-md rounded-xl shadow-slate-800 border-2 border-main_green">
                <ul class="ml-4 flex items-center">
                    <li class="mr-4">
                        <button type="button"
                            class="text-[#4C8F8B] ms-[-20px] rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                            <svg class="me-8" xmlns="http://www.w3.org/2000/svg" width="24" height="20"
                                viewBox="0 0 34 32" fill="none">
                                <path
                                    d="M32.9862 29.1261L26.8367 23.2994C29.2238 20.4564 30.3797 16.8478 30.067 13.2156C29.7542 9.58344 27.9965 6.20379 25.1552 3.77157C22.3139 1.33935 18.605 0.0394391 14.7912 0.139126C10.9773 0.238814 7.34843 1.73052 4.65063 4.30752C1.95283 6.88452 0.391198 10.3509 0.286838 13.994C0.182477 17.6371 1.54332 21.1799 4.08955 23.894C6.63578 26.608 10.1739 28.2871 13.9763 28.5858C17.7787 28.8846 21.5564 27.7804 24.5327 25.5002L30.6325 31.3269C30.7866 31.4753 30.9699 31.5931 31.1719 31.6735C31.3739 31.7538 31.5906 31.7952 31.8094 31.7952C32.0282 31.7952 32.2449 31.7538 32.4468 31.6735C32.6488 31.5931 32.8322 31.4753 32.9862 31.3269C33.285 31.0316 33.452 30.6371 33.452 30.2265C33.452 29.8158 33.285 29.4213 32.9862 29.1261ZM15.2339 25.5002C12.939 25.5002 10.6957 24.8502 8.78766 23.6323C6.87957 22.4145 5.39241 20.6835 4.51421 18.6583C3.63602 16.6331 3.40624 14.4046 3.85394 12.2546C4.30164 10.1047 5.40671 8.12981 7.0294 6.57978C8.65209 5.02975 10.7195 3.97416 12.9703 3.54651C15.221 3.11886 17.5539 3.33835 19.6741 4.17722C21.7942 5.01609 23.6064 6.43667 24.8813 8.25931C26.1562 10.082 26.8367 12.2248 26.8367 14.4169C26.8367 17.3564 25.6143 20.1755 23.4383 22.254C21.2624 24.3325 18.3111 25.5002 15.2339 25.5002Z"
                                    fill="#347677" />
                            </svg>
                            <input class=" border-none text-text-main_green" type="text" name="searchBar" id="searchBar"
                                placeholder="Search here...">
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
        </form>

        <button type="button" onclick="goToAddPengumuman()"
            class="p-3 bg-semi_dark_green w-fit flex flex-row mt-8 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg"
                width="23" height="22" viewBox="0 0 23 22" fill="none">
                <path class="inline"
                    d="M17.917 10.0832H12.417V4.58317C12.417 4.34006 12.3204 4.1069 12.1485 3.93499C11.9766 3.76308 11.7434 3.6665 11.5003 3.6665C11.2572 3.6665 11.0241 3.76308 10.8521 3.93499C10.6802 4.1069 10.5837 4.34006 10.5837 4.58317V10.0832H5.08366C4.84054 10.0832 4.60739 10.1797 4.43548 10.3517C4.26357 10.5236 4.16699 10.7567 4.16699 10.9998C4.16699 11.243 4.26357 11.4761 4.43548 11.648C4.60739 11.8199 4.84054 11.9165 5.08366 11.9165H10.5837V17.4165C10.5837 17.6596 10.6802 17.8928 10.8521 18.0647C11.0241 18.2366 11.2572 18.3332 11.5003 18.3332C11.7434 18.3332 11.9766 18.2366 12.1485 18.0647C12.3204 17.8928 12.417 17.6596 12.417 17.4165V11.9165H17.917C18.1601 11.9165 18.3933 11.8199 18.5652 11.648C18.7371 11.4761 18.8337 11.243 18.8337 10.9998C18.8337 10.7567 18.7371 10.5236 18.5652 10.3517C18.3933 10.1797 18.1601 10.0832 17.917 10.0832Z"
                    fill="white" />
            </svg>
            <p class="text-white text-md inline ms-2">Buat Pengumuman</p>
        </button>


        <div class=" flex flex-row w-full items-center space-x-6 mt-6">
            <button id="filter" class=" bg-white py-2 px-4 rounded-xl shadow-md shadow-slate-500 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M22 3H2L10 12.46V19L14 21V12.46L22 3Z" stroke="#757D8A" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>

            <button id="sort_time"
                class=" bg-white py-2 px-4 rounded-xl shadow-md shadow-slate-500 flex flex-row items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M11 5H21" stroke="#757D8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M11 9H18" stroke="#757D8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M11 13H15" stroke="#757D8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3 17L6 20L9 17" stroke="#757D8A" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M6 18V4" stroke="#757D8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="text-lg text-slate-500 ms-2">Sort Chrorogical</p>
            </button>

            <div id="date"
                class=" bg-white py-2 px-4 rounded-xl shadow-md shadow-slate-500 flex flex-row items-center ">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <path d="M15 18L9 12L15 6" stroke="#757D8A" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
                <p class="text-lg text-slate-500 ms-2">August 2021</p>
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <path d="M9 18L15 12L9 6" stroke="#757D8A" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="rounded-lg border border-gray-200 shadow-md mt-10 w-full overflow-scroll">

            <table class="border-collapse w-full bg-white text-left text-sm text-gray-500">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900 w-[20%]">Judul Pengumuman</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900 w-[40%]">Detail</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900 w-[15%]">Dibuat Pada</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900 w-[15%]">Terupdate Pada</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900 w-[10%]">Detail</th>
                    </tr>
                </thead>

                <tbody id="project-list" class="divide-y w-[200px] bg-white border-t border-gray-100">

                    {{-- <tr class="mx-4 bg-grey-100 w-[100rem] h-full px-2 pb-2">
                        <td class="px-6 py-4">Pembukaan Registrasi Sidang</td>
                        <td class="px-6 py-4 line-clamp-1 text-overflow">Periode registrasi
                            Sidang Akan di buka Lorem ipsum dolor Lorem ipsum dolor sit amet consectetur adipisicing elit. A delectus recusandae dicta est officiis error, quia explicabo voluptatem impedit consequatur repellendus repudiandae facere ipsam eveniet similique unde aliquam alias dignissimos! sit amet consectetur adipisicing elit. Corporis aspernatur velit praesentium cum asperiores officia repellat, vero at doloribus labore cupiditate ducimus numquam nesciunt, nam exercitationem! Laudantium, consequuntur facere. Vero!.</td>
                        <td class="px-6 py-4 ">20 Juni 2021</td>
                        <td class="px-6 py-4">20 Juni 2021</td>
                        <td class="px-6 py-4">
                            <button class="p-2 b-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="13"
                                    viewBox="0 0 18 13" fill="none">
                                    <path
                                        d="M8.88887 7.50009C9.41276 7.50009 9.91518 7.28938 10.2856 6.9143C10.6561 6.53923 10.8642 6.03052 10.8642 5.50009C10.8642 4.96966 10.6561 4.46095 10.2856 4.08588C9.91518 3.7108 9.41276 3.50009 8.88887 3.50009C8.85801 3.50009 8.83085 3.50759 8.80091 3.50915C8.8961 3.77457 8.91454 4.06196 8.85408 4.33761C8.79361 4.61327 8.65675 4.86574 8.45955 5.0654C8.26235 5.26507 8.01299 5.40364 7.74075 5.46486C7.4685 5.52608 7.18465 5.5074 6.92251 5.41103C6.92251 5.44228 6.91356 5.46978 6.91356 5.50009C6.91356 5.76273 6.96466 6.02281 7.06392 6.26546C7.16319 6.50811 7.30869 6.72859 7.49212 6.9143C7.86256 7.28938 8.36499 7.50009 8.88887 7.50009ZM17.6704 6.04384C15.9966 2.73728 12.683 0.500092 8.88887 0.500092C5.09474 0.500092 1.78023 2.73884 0.107391 6.04415C0.0367862 6.18556 0 6.3418 0 6.50025C0 6.6587 0.0367862 6.81493 0.107391 6.95634C1.78116 10.2629 5.09474 12.5001 8.88887 12.5001C12.683 12.5001 15.9975 10.2613 17.6704 6.95603C17.741 6.81462 17.7777 6.65839 17.7777 6.49993C17.7777 6.34148 17.741 6.18525 17.6704 6.04384ZM8.88887 1.50009C9.67023 1.50009 10.434 1.73469 11.0837 2.17421C11.7334 2.61374 12.2398 3.23845 12.5388 3.96936C12.8378 4.70026 12.916 5.50453 12.7636 6.28045C12.6111 7.05638 12.2349 7.76911 11.6824 8.32852C11.1299 8.88793 10.4259 9.26889 9.6596 9.42323C8.89325 9.57757 8.09892 9.49836 7.37704 9.19561C6.65516 8.89286 6.03815 8.38017 5.60405 7.72237C5.16995 7.06458 4.93825 6.29122 4.93825 5.50009C4.9394 4.43958 5.35599 3.42284 6.09663 2.67294C6.83726 1.92305 7.84145 1.50125 8.88887 1.50009ZM8.88887 11.5001C5.57529 11.5001 2.54751 9.58415 0.987637 6.50009C1.86493 4.75631 3.26791 3.34073 4.99319 2.45853C4.34906 3.3029 3.9506 4.34915 3.9506 5.50009C3.9506 6.82617 4.47088 8.09794 5.39699 9.03562C6.32309 9.97331 7.57916 10.5001 8.88887 10.5001C10.1986 10.5001 11.4547 9.97331 12.3808 9.03562C13.3069 8.09794 13.8271 6.82617 13.8271 5.50009C13.8271 4.34915 13.4287 3.3029 12.7846 2.45853C14.5098 3.34073 15.9128 4.75631 16.7901 6.50009C15.2305 9.58415 12.2025 11.5001 8.88887 11.5001Z"
                                        fill="white" />
                                </svg>
                            </button>
                        </td>
                    </tr> --}}
                </tbody>
            </table>

        </div>
        <p id="textEmpty" class="text-2xl w-full text-center py-40">No data avaible in table</p>

        <div class="w-fit h-fit flex flex-row self-center justify-center mt-12 mb-16 shadow-md shadow-slate-500">
            <button type="button" onclick="prevpage()" id="prev-page"
                class="bg-semi_dark_green w-fit h-10 px-6 py-2 border-semi_dark_green border-2 rounded-s-xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15"
                    fill="none">
                    <path
                        d="M4.96016 8L8.28516 11.5C8.51849 11.75 8.86849 11.75 9.10182 11.5C9.33516 11.25 9.33516 10.875 9.10182 10.625L6.24349 7.5L9.10182 4.375C9.33516 4.125 9.33516 3.75 9.10182 3.5C8.98516 3.375 8.86849 3.3125 8.69349 3.3125C8.51849 3.3125 8.40182 3.375 8.28516 3.5L4.96016 7C4.72682 7.3125 4.72682 7.6875 4.96016 8C4.96016 7.9375 4.96016 7.9375 4.96016 8Z"
                        fill="white" />
                </svg>
            </button>
            <button id="page1"
                class="bg-white hover:bg-[#D4DFDE] w-fit h-10 px-6 py-2 border-slate-400 border-y-2 border-x-2 text-md">1</button>
            <button id="page2"
                class="bg-white  hover:bg-[#D4DFDE]  w-fit h-10 px-6 py-2 border-slate-400 border-y-2 border-x-2 text-md">2</button>
            <button id="page3"
                class="bg-white  hover:bg-[#D4DFDE]  w-fit h-10 px-6 py-2 border-slate-400 border-y-2 border-x-2 text-md">3</button>
            <button id="page4"
                class="bg-white  hover:bg-[#D4DFDE]  w-fit h-10 px-6 py-2 border-slate-400 border-y-2 border-x-2 text-md">4</button>
            <button id="page5"
                class="bg-white  hover:bg-[#D4DFDE]  w-fit h-10 px-6 py-2 border-slate-400 border-y-2 text-md">5</button>
            <button type="button" onclick="nextpage()" id="next-page"
                class=" bg-semi_dark_green w-fit h-10 px-6 py-2 border-semi_dark_green border-2 rounded-e-xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15"
                    fill="none">
                    <path
                        d="M9.06525 7.05646L5.76359 3.52521C5.70936 3.46663 5.64484 3.42013 5.57376 3.3884C5.50267 3.35667 5.42643 3.34033 5.34942 3.34033C5.27241 3.34033 5.19617 3.35667 5.12508 3.3884C5.054 3.42013 4.98948 3.46663 4.93525 3.52521C4.82661 3.64231 4.76563 3.80071 4.76562 3.96583C4.76563 4.13095 4.82661 4.28935 4.93525 4.40646L7.82275 7.53146L4.93525 10.6252C4.82661 10.7423 4.76562 10.9007 4.76562 11.0658C4.76562 11.2309 4.82661 11.3894 4.93525 11.5065C4.98928 11.5655 5.05371 11.6125 5.1248 11.6447C5.19589 11.6769 5.27224 11.6936 5.34942 11.694C5.4266 11.6936 5.50295 11.6769 5.57404 11.6447C5.64514 11.6125 5.70956 11.5655 5.76359 11.5065L9.06525 7.97521C9.12446 7.91668 9.17172 7.84565 9.20404 7.76659C9.23636 7.68752 9.25305 7.60214 9.25305 7.51583C9.25305 7.42952 9.23636 7.34414 9.20404 7.26508C9.17172 7.18601 9.12446 7.11498 9.06525 7.05646Z"
                        fill="white" fill-opacity="0.75" />
                </svg>
            </button>

        </div>
    </main>
    @stack('script')
@endsection
<script>
    // console.log("sbuqsq");

    function goToAddPengumuman() {
        window.location.href = "{{ route('akademik.addPengumuman') }}";
    }
</script>
