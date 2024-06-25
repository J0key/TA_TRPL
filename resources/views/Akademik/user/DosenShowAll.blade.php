@extends('Akademik.partial.layouts')

@section('main')
    <main class="w-[1139px] ml-[330px] min-h-screen my-10 flex flex-col">


        <form action="" method="POST">
            @csrf
            <div
                class="py-3 px-6 mt-2 bg-[#FBFFFC] flex item-center shadow-md rounded-xl shadow-slate-800 border-2 border-main_green">
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


        <div class="flex items-center justify-between mt-4">

            <div class="text-[#404D61] mt-5">
                <p class="font-semibold  text-3xl">Dosen</p>
                <p class="font-regular text-xl">10 results found</p>
            </div>

            <div class="flex items-center">

                <ul class="ml-auto flex flex-row mt-6">
                    <li class="mr-4">
                        <button type="button"
                            class="text-[#4C8F8B] h-12 py-4 px-4 bg-[#FBFFFC] shadow-md shadow-black/15 rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                            <img src="{{ asset('icon/sort1.png') }}" class="w-6 h-6" alt="">
                            <span class="text-[15px] ml-2">Sort All</span>
                        </button>
                    </li>
                    <li class="mr-4">
                        <button type="button"
                            class="text-[#4C8F8B] h-12 py-4 px-4 bg-[#FBFFFC] shadow-md shadow-black/15 rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                            <img src="{{ asset('icon/sort1.png') }}" class="w-6 h-6" alt="">
                            <span class="text-[15px] ml-2">Sort Dosen</span>
                        </button>
                    </li>
                    <li class="mr-4">
                        <button type="button"
                            class="text-[#4C8F8B] w-auto h-12 bg-[#FBFFFC] shadow-md shadow-black/15 rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                            <i class="ri-arrow-left-s-line ml-auto ps-6"
                                style="
                                transition: transform 0.3s ease,
                                    display 0.3s ease;
                            "></i>
                            <span class="text-[15px] px-2">August, 2021
                            </span>
                            <i class="ri-arrow-right-s-line ml-auto pe-6"
                                style="
                            transition: transform 0.3s ease,
                                display 0.3s ease;
                        "></i>
                        </button>
                    </li>
                </ul>

            </div>
        </div>

        <div class="rounded-lg border border-gray-200 shadow-md mt-10 w-full overflow-scroll">

            <table class="border-collapse w-full bg-white text-left text-sm text-gray-500">
                <thead class="bg-gray-50 w-full">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">NID</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nama</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">No HP</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Bimbingan mahasiswa</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Partisipasi Pendadaran</th>
                    </tr>
                </thead>

                <tbody id="project-list" class="divide-y w-full bg-white border-t border-gray-100">


                    <tr class="mx-4 bg-grey-100 w-fit h-full px-2 pb-2">
                        <td class="px-6 py-4">000000000032</td>
                        <td class="px-6 py-4 ">Dinar Nugroho Pratomo, S.Kom, M.IM., M. Cs.</td>
                        <td class="px-6 py-4 ">085774126866</td>
                        <td class="px-6 py-4 flex flex-row justify-around items-center">
                            <p class="inline">12/30</p>
                            <button onclick="goToDetail()" class="p-2 rounded-lg bg-main_green w-fit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16"
                                    fill="none">
                                    <g clip-path="url(#clip0_145_21229)">
                                        <path
                                            d="M9.11153 9.00012C9.63541 9.00012 10.1378 8.78941 10.5083 8.41433C10.8787 8.03926 11.0868 7.53055 11.0868 7.00012C11.0868 6.46969 10.8787 5.96098 10.5083 5.58591C10.1378 5.21084 9.63541 5.00012 9.11153 5.00012C9.08066 5.00012 9.0535 5.00762 9.02357 5.00918C9.11875 5.2746 9.1372 5.56199 9.07673 5.83764C9.01627 6.1133 8.87941 6.36577 8.68221 6.56543C8.48501 6.7651 8.23565 6.90367 7.9634 6.96489C7.69115 7.02611 7.40731 7.00744 7.14517 6.91106C7.14517 6.94231 7.13622 6.96981 7.13622 7.00012C7.13622 7.26277 7.18731 7.52284 7.28658 7.76549C7.38585 8.00814 7.53135 8.22862 7.71477 8.41433C8.08522 8.78941 8.58764 9.00012 9.11153 9.00012ZM17.893 7.54387C16.2192 4.23731 12.9057 2.00012 9.11153 2.00012C5.31739 2.00012 2.00289 4.23887 0.330047 7.54418C0.259442 7.68559 0.222656 7.84183 0.222656 8.00028C0.222656 8.15873 0.259442 8.31496 0.330047 8.45637C2.00381 11.7629 5.31739 14.0001 9.11153 14.0001C12.9057 14.0001 16.2202 11.7614 17.893 8.45606C17.9636 8.31465 18.0004 8.15842 18.0004 7.99997C18.0004 7.84151 17.9636 7.68528 17.893 7.54387ZM9.11153 3.00012C9.89289 3.00012 10.6567 3.23472 11.3064 3.67424C11.956 4.11377 12.4624 4.73848 12.7614 5.46939C13.0604 6.20029 13.1387 7.00456 12.9862 7.78048C12.8338 8.55641 12.4575 9.26914 11.905 9.82855C11.3525 10.388 10.6486 10.7689 9.88226 10.9233C9.11591 11.0776 8.32157 10.9984 7.59969 10.6956C6.87781 10.3929 6.26081 9.8802 5.82671 9.2224C5.39261 8.56461 5.16091 7.79125 5.16091 7.00012C5.16205 5.93961 5.57865 4.92287 6.31928 4.17297C7.05992 3.42308 8.06411 3.00128 9.11153 3.00012ZM9.11153 13.0001C5.79795 13.0001 2.77017 11.0842 1.21029 8.00012C2.08759 6.25634 3.49056 4.84076 5.21585 3.95856C4.57171 4.80293 4.17326 5.84918 4.17326 7.00012C4.17326 8.3262 4.69354 9.59797 5.61964 10.5357C6.54575 11.4733 7.80182 12.0001 9.11153 12.0001C10.4212 12.0001 11.6773 11.4733 12.6034 10.5357C13.5295 9.59797 14.0498 8.3262 14.0498 7.00012C14.0498 5.84918 13.6513 4.80293 13.0072 3.95856C14.7325 4.84076 16.1355 6.25634 17.0128 8.00012C15.4532 11.0842 12.4251 13.0001 9.11153 13.0001Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_145_21229">
                                            <rect width="17.7778" height="16" fill="white"
                                                transform="translate(0.222656 0.00012207)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                        </td>
                        <td class="px-6 py-4 "> - </td>
                    </tr>

                    <tr class="mx-4 bg-grey-100 w-fit h-full px-2 pb-2">
                        <td class="px-6 py-4">000000000032</td>
                        <td class="px-6 py-4 ">Dinar Nugroho Pratomo, S.Kom, M.IM., M. Cs.</td>
                        <td class="px-6 py-4 ">085774126866</td>
                        <td class="px-6 py-4 flex flex-row justify-around items-center">
                            <p class="inline">12/30</p>
                            <button onclick="goToDetail()" class="p-2 rounded-lg bg-main_green w-fit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16"
                                    viewBox="0 0 18 16" fill="none">
                                    <g clip-path="url(#clip0_145_21229)">
                                        <path
                                            d="M9.11153 9.00012C9.63541 9.00012 10.1378 8.78941 10.5083 8.41433C10.8787 8.03926 11.0868 7.53055 11.0868 7.00012C11.0868 6.46969 10.8787 5.96098 10.5083 5.58591C10.1378 5.21084 9.63541 5.00012 9.11153 5.00012C9.08066 5.00012 9.0535 5.00762 9.02357 5.00918C9.11875 5.2746 9.1372 5.56199 9.07673 5.83764C9.01627 6.1133 8.87941 6.36577 8.68221 6.56543C8.48501 6.7651 8.23565 6.90367 7.9634 6.96489C7.69115 7.02611 7.40731 7.00744 7.14517 6.91106C7.14517 6.94231 7.13622 6.96981 7.13622 7.00012C7.13622 7.26277 7.18731 7.52284 7.28658 7.76549C7.38585 8.00814 7.53135 8.22862 7.71477 8.41433C8.08522 8.78941 8.58764 9.00012 9.11153 9.00012ZM17.893 7.54387C16.2192 4.23731 12.9057 2.00012 9.11153 2.00012C5.31739 2.00012 2.00289 4.23887 0.330047 7.54418C0.259442 7.68559 0.222656 7.84183 0.222656 8.00028C0.222656 8.15873 0.259442 8.31496 0.330047 8.45637C2.00381 11.7629 5.31739 14.0001 9.11153 14.0001C12.9057 14.0001 16.2202 11.7614 17.893 8.45606C17.9636 8.31465 18.0004 8.15842 18.0004 7.99997C18.0004 7.84151 17.9636 7.68528 17.893 7.54387ZM9.11153 3.00012C9.89289 3.00012 10.6567 3.23472 11.3064 3.67424C11.956 4.11377 12.4624 4.73848 12.7614 5.46939C13.0604 6.20029 13.1387 7.00456 12.9862 7.78048C12.8338 8.55641 12.4575 9.26914 11.905 9.82855C11.3525 10.388 10.6486 10.7689 9.88226 10.9233C9.11591 11.0776 8.32157 10.9984 7.59969 10.6956C6.87781 10.3929 6.26081 9.8802 5.82671 9.2224C5.39261 8.56461 5.16091 7.79125 5.16091 7.00012C5.16205 5.93961 5.57865 4.92287 6.31928 4.17297C7.05992 3.42308 8.06411 3.00128 9.11153 3.00012ZM9.11153 13.0001C5.79795 13.0001 2.77017 11.0842 1.21029 8.00012C2.08759 6.25634 3.49056 4.84076 5.21585 3.95856C4.57171 4.80293 4.17326 5.84918 4.17326 7.00012C4.17326 8.3262 4.69354 9.59797 5.61964 10.5357C6.54575 11.4733 7.80182 12.0001 9.11153 12.0001C10.4212 12.0001 11.6773 11.4733 12.6034 10.5357C13.5295 9.59797 14.0498 8.3262 14.0498 7.00012C14.0498 5.84918 13.6513 4.80293 13.0072 3.95856C14.7325 4.84076 16.1355 6.25634 17.0128 8.00012C15.4532 11.0842 12.4251 13.0001 9.11153 13.0001Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_145_21229">
                                            <rect width="17.7778" height="16" fill="white"
                                                transform="translate(0.222656 0.00012207)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                        </td>
                        <td class="px-6 py-4 "> - </td>
                    </tr>

                    <tr class="mx-4 bg-grey-100 w-fit h-full px-2 pb-2">
                        <td class="px-6 py-4">000000000032</td>
                        <td class="px-6 py-4 ">Dinar Nugroho Pratomo, S.Kom, M.IM., M. Cs.</td>
                        <td class="px-6 py-4 ">085774126866</td>
                        <td class="px-6 py-4 flex flex-row justify-around items-center">
                            <p class="inline">12/30</p>
                            <button onclick="goToDetail()" class="p-2 rounded-lg bg-main_green w-fit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16"
                                    viewBox="0 0 18 16" fill="none">
                                    <g clip-path="url(#clip0_145_21229)">
                                        <path
                                            d="M9.11153 9.00012C9.63541 9.00012 10.1378 8.78941 10.5083 8.41433C10.8787 8.03926 11.0868 7.53055 11.0868 7.00012C11.0868 6.46969 10.8787 5.96098 10.5083 5.58591C10.1378 5.21084 9.63541 5.00012 9.11153 5.00012C9.08066 5.00012 9.0535 5.00762 9.02357 5.00918C9.11875 5.2746 9.1372 5.56199 9.07673 5.83764C9.01627 6.1133 8.87941 6.36577 8.68221 6.56543C8.48501 6.7651 8.23565 6.90367 7.9634 6.96489C7.69115 7.02611 7.40731 7.00744 7.14517 6.91106C7.14517 6.94231 7.13622 6.96981 7.13622 7.00012C7.13622 7.26277 7.18731 7.52284 7.28658 7.76549C7.38585 8.00814 7.53135 8.22862 7.71477 8.41433C8.08522 8.78941 8.58764 9.00012 9.11153 9.00012ZM17.893 7.54387C16.2192 4.23731 12.9057 2.00012 9.11153 2.00012C5.31739 2.00012 2.00289 4.23887 0.330047 7.54418C0.259442 7.68559 0.222656 7.84183 0.222656 8.00028C0.222656 8.15873 0.259442 8.31496 0.330047 8.45637C2.00381 11.7629 5.31739 14.0001 9.11153 14.0001C12.9057 14.0001 16.2202 11.7614 17.893 8.45606C17.9636 8.31465 18.0004 8.15842 18.0004 7.99997C18.0004 7.84151 17.9636 7.68528 17.893 7.54387ZM9.11153 3.00012C9.89289 3.00012 10.6567 3.23472 11.3064 3.67424C11.956 4.11377 12.4624 4.73848 12.7614 5.46939C13.0604 6.20029 13.1387 7.00456 12.9862 7.78048C12.8338 8.55641 12.4575 9.26914 11.905 9.82855C11.3525 10.388 10.6486 10.7689 9.88226 10.9233C9.11591 11.0776 8.32157 10.9984 7.59969 10.6956C6.87781 10.3929 6.26081 9.8802 5.82671 9.2224C5.39261 8.56461 5.16091 7.79125 5.16091 7.00012C5.16205 5.93961 5.57865 4.92287 6.31928 4.17297C7.05992 3.42308 8.06411 3.00128 9.11153 3.00012ZM9.11153 13.0001C5.79795 13.0001 2.77017 11.0842 1.21029 8.00012C2.08759 6.25634 3.49056 4.84076 5.21585 3.95856C4.57171 4.80293 4.17326 5.84918 4.17326 7.00012C4.17326 8.3262 4.69354 9.59797 5.61964 10.5357C6.54575 11.4733 7.80182 12.0001 9.11153 12.0001C10.4212 12.0001 11.6773 11.4733 12.6034 10.5357C13.5295 9.59797 14.0498 8.3262 14.0498 7.00012C14.0498 5.84918 13.6513 4.80293 13.0072 3.95856C14.7325 4.84076 16.1355 6.25634 17.0128 8.00012C15.4532 11.0842 12.4251 13.0001 9.11153 13.0001Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_145_21229">
                                            <rect width="17.7778" height="16" fill="white"
                                                transform="translate(0.222656 0.00012207)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                        </td>
                        <td class="px-6 py-4 "> - </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="w-fit h-fit flex flex-row self-center justify-center mt-12 shadow-md shadow-slate-500">
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
    const prevButton = document.getElementById('prev-page');
    const nextButton = document.getElementById('next-page');
    let data;
    let currentPage = 1;
    let totalPages = 1;
    let sortcounter = 0;

    function goToDetailMahasiswa() {
        window.location.href = "{{ route('akademik.showUserDetail') }}";
    }

    function goToDetail() {
        window.location.href = "{{ route('akademik.showDosenBimbingan') }}";
    }

    async function fetchProjects(page = 1, filterName = '') {
        try {
            const response = await fetch(`http://127.0.0.1:8001/api/student?page=${page}&name=${filterName}`);
            data = await response.json();
            totalPages = data.data.last_page;
            displayProjects(data.data.data);
            updatePagination();
            setPageIndicator();
        } catch (error) {
            console.error('Error:', error);
        }
    }

    function sortProjectsChanger(sortField) {
        if (sortcounter == 0) {
            sortProjects(sortField, 'asc')
            sortcounter++;
        } else {
            sortProjects(sortField, 'desc')
            sortcounter--;
        }
        // console.log()
    }

    function sortProjects(sortField, sortDirection) {
        const projectsData = data.data.data;
        if (sortField == "lecturer") {
            projectsData.sort((a, b) => {
                if (a.lecturer.user['first_name'] < b.lecturer.user['first_name']) return sortDirection ===
                    'asc' ? -
                    1 : 1;
                if (a.lecturer.user['first_name'] > b.lecturer.user['first_name']) return sortDirection ===
                    'asc' ?
                    1 : -1;
                return 0;
            });
        } else {
            projectsData.sort((a, b) => {
                if (a[sortField] < b[sortField]) return sortDirection === 'asc' ? -1 : 1;
                if (a[sortField] > b[sortField]) return sortDirection === 'asc' ? 1 : -1;
                return 0;
            });
        }
        displayProjects(projectsData);
    }

    function displayProjects(projects) {
        const projectList = document.getElementById('project-list');
        projectList.innerHTML = ''; // Hapus semua project cards sebelumnya
        // console.log(projects)


        projects.forEach(project => {
            const newTableRow = document.createElement('tr');
            newTableRow.classList.add('mx-4', 'bg-grey-100', 'w-full', 'h-full', 'px-2', 'pb-2');

            const td1 = document.createElement('td');
            td1.classList.add('px-6', 'py-4');
            td1.textContent = project['NIM'];

            const td2 = document.createElement('td');
            td2.classList.add('px-6');
            td2.textContent = (project.user['first_name'] + project.user['last_name']);

            const td3 = document.createElement('td');
            td3.classList.add('px-6');
            td3.textContent = project['phone_number'];

            const td4 = document.createElement('td');
            td4.classList.add('px-6', 'flex', 'flex-row', 'h-full', 'bg-slate-300', 'w-full', 'items-center',
                'justify-center');
            let imgButton = document.createElement('div');
            imgButton.classList.add('bg-slate-900', 'p-2', 'px-2', 'rounded-lg', 'h-fit');
            let img = document.createElement('img');
            img.classList.add('w-2')
            if (project['judul'] == 0) {
                img.setAttribute('src', "{{ asset('icon/false.png') }}");
            } else {
                img.setAttribute('src', "{{ asset('icon/true.png') }}");
            }
            // imgButton.appendChild(img);
            // td4.appendChild(imgButton);


            const td5 = document.createElement('td');
            td5.classList.add('px-6', 'flex', 'flex-row', 'h-fit');
            imgButton.innerHTML = '';
            if (project['sidang'] == 0) {
                img.setAttribute('src', "{{ asset('icon/false.png') }}");
            } else {
                img.setAttribute('src', "{{ asset('icon/true.png') }}");
            }
            imgButton.appendChild(img);
            td5.appendChild(imgButton);

            const td6 = document.createElement('td');
            td6.classList.add('px-6', 'flex', 'flex-row', 'h-fit');
            imgButton.innerHTML = '';
            if (project['yudisium'] == 0) {
                img.setAttribute('src', "{{ asset('icon/false.png') }}");
            } else {
                img.setAttribute('src', "{{ asset('icon/true.png') }}");
            }
            imgButton.appendChild(img);
            td6.appendChild(imgButton);


            newTableRow.appendChild(td1);
            newTableRow.appendChild(td2);
            newTableRow.appendChild(td3);
            newTableRow.appendChild(td4);
            newTableRow.appendChild(td5);
            newTableRow.appendChild(td6);
            projectList.appendChild(newTableRow);

        });
        // }
    }

    function updatePagination() {
        const prevButton = document.getElementById("prev-page");
        const nextButton = document.getElementById("next-page");
        prevButton.disabled = currentPage === 1;
        nextButton.disabled = currentPage === totalPages;
    }

    function prevpage() {
        if (currentPage > 1) {
            currentPage--;
            fetchProjects(currentPage);
        }
    };

    function nextpage() {
        if (currentPage < totalPages) {
            currentPage++;
            fetchProjects(currentPage);
        }
    }

    function setPageIndicator() {
        for (let i = 0; i < 5; i++) {
            let buttonPage = document.getElementById("page" + (i + 1).toString());
            // console.log(buttonPage.textContent);
            buttonPage.style.backgroundColor = "#FFFFFF";
            buttonPage.style.borderColor = "#FFFFFF";

        }

        const buttonCurrentPage = document.getElementById("page" + currentPage);
        buttonCurrentPage.style.backgroundColor = "#D4DFDE";
        buttonCurrentPage.style.borderColor = "#025E5A";
    };

    // fetchProjects();
</script>
