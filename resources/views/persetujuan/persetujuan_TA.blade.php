@extends('partial.layouts')

@section('content')
    <div class="flex items-center justify-between mt-8">

        <div class="text-[#404D61] mt-5">
            <p class="font-semibold  text-3xl">Mahasiswa</p>
            <p class="font-regular text-xl">1000 results found</p>
        </div>

        <div class="flex items-center">

            <ul class="ml-auto flex flex-row mt-6">
                <li class="mr-4">
                    <button type="button"
                        class="text-[#4C8F8B] w-12 h-12 bg-[#FBFFFC] shadow-md shadow-black/15 rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                        <img src="{{ asset('icon/sort1.png') }}" class="w-6 h-6" alt="">
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


    <div class="rounded-lg border border-gray-200 shadow-md mt-10 w-full">

        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500 overflow-scroll">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Action</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Semester </th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Tahun Ajaran</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Proses Bimbingan</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Status</th>
                </tr>
            </thead>

            <tbody class="divide-y bg-white border-t border-gray-100">
                <tr class="mx-4 bg-grey-100 w-full h-full px-2 pb-2">
                    <th class="px-6 py-4 text-white ">

                        <div class="bg-main_green w-fit p-2 rounded-xl">
                            <img src="{{ asset('icon/eye.png') }}" alt="">
                        </div>

                    </th>
                    <td class="px-6 py-4">Shyra Athaya</td>
                    <td class="px-6 py-4">ganjil</td>
                    <td class="px-6 py-4 ">active</td>
                    <td class="px-6 py-4">0</td>
                    <td class="px-6 py-4 text-[#0064FF]">bimbingan</td>

                </tr>
                <tr class="mx-4 bg-grey-100 w-full h-full px-2 pb-2">
                    <th class="px-6 py-4 text-white ">

                        <div class="bg-dark_green w-fit p-2 rounded-xl">
                            <img src="{{ asset('icon/pencil.png') }}" alt="">
                        </div>

                    </th>
                    <td class="px-6 py-4">Ikhwan Hanif</td>
                    <td class="px-6 py-4">ganjil</td>
                    <td class="px-6 py-4 ">active</td>
                    <td class="px-6 py-4">0</td>
                    <td class="px-6 py-4 text-green-600">proses</td>

                </tr>

                <tr class="mx-4 bg-grey-100 w-full h-full px-2 pb-2">
                    <th class="px-6 py-4 text-white ">

                        <div class="bg-dark_green w-fit p-2 rounded-xl">
                            <img src="{{ asset('icon/pencil.png') }}" alt="">
                        </div>

                    </th>
                    <td class="px-6 py-4">Andromedha Cynosura</td>
                    <td class="px-6 py-4">ganjil</td>
                    <td class="px-6 py-4">active</td>
                    <td class="px-6 py-4">0</td>
                    <td class="px-6 py-4 text-red-600">revisi</td>

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
        <button class="bg-white  hover:bg-[#D4DFDE]  w-fit h-10 px-6 py-2 border-slate-400 border-y-2 text-md">5</button>
        <button class="bg-light_green w-fit h-10 px-6 py-2 border-main_green border-2 rounded-e-xl">
            <i class="ri-arrow-right-s-line ml-auto"
                style="
                transition: transform 0.3s ease,
                    display 0.3s ease;
            "></i>
        </button>
    </div>
@endsection