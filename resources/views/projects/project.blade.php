@extends('partial.layouts')

@section('main')
    <main class="w-[1139px] ml-[322px] min-h-screen my-10 flex flex-col">
        <div class="flex flez-col "></div>
        <div class="py-4 px-6 bg-[#FBFFFC] flex item-center shadow-md rounded-md shadow-slate-800">
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
        <div class="flex items-center justify-between mt-8">

            <div class="text-[#404D61] mt-5">
                <p class="font-semibold  text-3xl">Projects</p>
                <p class="font-regular text-xl">100 results found</p>
            </div>

            <div class="flex items-center">

                <ul class="ml-auto flex flex-row mt-6">
                    <li class="mr-4">
                        <button type="button"
                            class="text-[#4C8F8B] w-12 h-12 bg-[#FBFFFC] shadow-md shadow-black/15 rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                            <img src="{{ asset('icon/sort2.png') }}" class="w-6 h-6" alt="">
                        </button>
                    </li>
                    <li class="mr-4">
                        <button type="button"
                            class="text-[#4C8F8B] h-12 py-4 px-4 bg-[#FBFFFC] shadow-md shadow-black/15 rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                            <img src="{{ asset('icon/sort1.png') }}" class="w-6 h-6" alt="">
                            <span class="text-[15px] ml-2">Sort Chronological</span>
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


        <div class="rounded-lg border border-gray-200 bg-white shadow-md mt-10 w-full p-4">

            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500 overflow-scroll">
                <thead class="bg-white border-b-2 border-gray-300">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Dosen</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Total Project</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Status</th>
                        <th scope="col" class="w-40 px-6 py-4 font-medium text-gray-900 text-center">Action</th>
                    </tr>
                </thead>

                <tbody class="divide-y bg-gray-100 border-t border-gray-100">
                    <tr class="mx-4 bg-grey-100 w-full h-fit px-2">
                        <td class="px-6 py-4 flex flex-row items-center">
                            <img src="{{ asset('icon/dosen.png') }}" class="w-8 h-auto" alt="">
                            <p class="ps-4"> Dinar Nugroho Pratomo, S.Kom, M.IM., M. Cs. </p>
                        </td>
                        <td class="px-6 py-4">34</td>
                        <td class="px-6 py-4">Active</td>
                        <td class="px-6 py-4 w-40 flex flex-row justify-center">
                            <div
                                class="bg-dark_green py-2 px-4 w-fit h-fit flex flex-row items-center justify-center rounded-lg self-center">
                                <p class="text-white">lihat detail</p>
                                <i class="ri-arrow-right-s-line ml-auto text-white"
                                    style="
                            transition: transform 0.3s ease,
                                display 0.3s ease;
                        "></i>
                            </div>
                        </td>
                    </tr>
                    <tr class="mx-4 bg-grey-100 w-full h-fit px-2">
                        <td class="px-6 py-4 flex flex-row items-center">
                            <img src="{{ asset('icon/dosen.png') }}" class="w-8 h-auto" alt="">
                            <p class="ps-4"> Dinar Nugroho Pratomo, S.Kom, M.IM., M. Cs. </p>
                        </td>
                        <td class="px-6 py-4">34</td>
                        <td class="px-6 py-4">Active</td>
                        <td class="px-6 py-4 w-40 flex flex-row justify-center">
                            <div
                                class="bg-dark_green py-2 px-4 w-fit h-fit flex flex-row items-center justify-center rounded-lg self-center">
                                <p class="text-white">lihat detail</p>
                                <i class="ri-arrow-right-s-line ml-auto text-white"
                                    style="
                            transition: transform 0.3s ease,
                                display 0.3s ease;
                        "></i>
                            </div>
                        </td>
                    </tr>
                    <tr class="mx-4 bg-grey-100 w-full h-fit px-2">
                        <td class="px-6 py-4 flex flex-row items-center">
                            <img src="{{ asset('icon/dosen.png') }}" class="w-8 h-auto" alt="">
                            <p class="ps-4"> Dinar Nugroho Pratomo, S.Kom, M.IM., M. Cs. </p>
                        </td>
                        <td class="px-6 py-4">34</td>
                        <td class="px-6 py-4">Active</td>
                        <td class="px-6 py-4 w-40 flex flex-row justify-center">
                            <div
                                class="bg-dark_green py-2 px-4 w-fit h-fit flex flex-row items-center justify-center rounded-lg self-center">
                                <p class="text-white">lihat detail</p>
                                <i class="ri-arrow-right-s-line ml-auto text-white"
                                    style="
                            transition: transform 0.3s ease,
                                display 0.3s ease;
                        "></i>
                            </div>
                        </td>
                    </tr>
                    <tr class="mx-4 bg-grey-100 w-full h-fit px-2">
                        <td class="px-6 py-4 flex flex-row items-center">
                            <img src="{{ asset('icon/dosen.png') }}" class="w-8 h-auto" alt="">
                            <p class="ps-4"> Dinar Nugroho Pratomo, S.Kom, M.IM., M. Cs. </p>
                        </td>
                        <td class="px-6 py-4">34</td>
                        <td class="px-6 py-4">Active</td>
                        <td class="px-6 py-4 w-40 flex flex-row justify-center">
                            <div
                                class="bg-dark_green py-2 px-4 w-fit h-fit flex flex-row items-center justify-center rounded-lg self-center">
                                <p class="text-white">lihat detail</p>
                                <i class="ri-arrow-right-s-line ml-auto text-white"
                                    style="
                            transition: transform 0.3s ease,
                                display 0.3s ease;
                        "></i>
                            </div>
                        </td>
                    </tr>
                    <tr class="mx-4 bg-grey-100 w-full h-fit px-2">
                        <td class="px-6 py-4 flex flex-row items-center">
                            <img src="{{ asset('icon/dosen.png') }}" class="w-8 h-auto" alt="">
                            <p class="ps-4"> Dinar Nugroho Pratomo, S.Kom, M.IM., M. Cs. </p>
                        </td>
                        <td class="px-6 py-4">34</td>
                        <td class="px-6 py-4">Active</td>
                        <td class="px-6 py-4 w-40 flex flex-row justify-center">
                            <div
                                class="bg-dark_green py-2 px-4 w-fit h-fit flex flex-row items-center justify-center rounded-lg self-center">
                                <p class="text-white">lihat detail</p>
                                <i class="ri-arrow-right-s-line ml-auto text-white"
                                    style="
                            transition: transform 0.3s ease,
                                display 0.3s ease;
                        "></i>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
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
