@extends('layout.sidebar')

@section('main')

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

    {{-- head start --}}
    <div>
        <a href="{{ route('create') }}">
            <button class="bg-[#025E5A] py-2 px-4 mt-6 rounded-md">
                <i class="ri-add-line"></i>
                Tambah Yudisium
            </button>
        </a>
        <div class="flex items-center justify-between ">
            <div class="text-[#404D61] mt-5">
                <p class="font-semibold  text-3xl">Yudisium</p>
                <p class="font-regular text-xl">1000 results found</p>
            </div>
            <div class="flex items-center">
                <ul class="ml-auto flex items-center">
                    <li class="mr-4">
                        <button type="button"
                            class="text-[#4C8F8B] w-8 h-8 bg-[#FBFFFC] shadow-md shadow-black/15 rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                            <i class="ri-filter-line"></i>
                        </button>
                    </li>
                    <li class="mr-4">
                        <button type="button"
                            class="text-[#4C8F8B] h-8 py-4 px-4 bg-[#FBFFFC] shadow-md shadow-black/15 rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                            <i class="ri-sort-desc"></i>
                            <span class="text-[12px] ml-2">Sort Chronological</span>
                        </button>
                    </li>
                    <li class="mr-4">
                        <button type="button"
                            class="text-[#4C8F8B] w-8 h-8 bg-[#FBFFFC] shadow-md shadow-black/15 rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                            <i class="ri-calendar-2-line"></i>
                        </button>
                    </li>
                </ul>

            </div>
        </div>

    </div>
    {{-- head end --}}

    {{-- table start --}}
    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md mt-10 w-[1139px]">
        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nama Berkas</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Status</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4">lorem ipsum</td>
                    <td class="px-6 py-4 text-[#0064FF]">Accept</td>
                    <td class="px-6 py-4 text-white ">
                        <div class="flex justify-start gap-4 ">
                            <a x-data="{ tooltip: 'Edite' }" href="#" class="bg-[#344948] rounded-md px-1 py-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="h-5 w-5">
                                    <path
                                        d="M15.7279 9.57627L14.3137 8.16206L5 17.4758V18.89H6.41421L15.7279 9.57627ZM17.1421 8.16206L18.5563 6.74785L17.1421 5.33363L15.7279 6.74785L17.1421 8.16206ZM7.24264 20.89H3V16.6473L16.435 3.21231C16.8256 2.82179 17.4587 2.82179 17.8492 3.21231L20.6777 6.04074C21.0682 6.43126 21.0682 7.06443 20.6777 7.45495L7.24264 20.89Z">
                                    </path>
                                </svg>
                            </a>


                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- table end --}}


</main>
{{-- main end --}}
@endsection
