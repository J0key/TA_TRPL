@extends('partial.layouts')

@section('main')

{{-- main start --}}
<main class="w-[1139px] ml-[322px] min-h-screen my-10  text-white">
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
        <a href="{{ route('createMahasiswa') }}">
            <button class="bg-[#025E5A] py-2 px-4 mt-6 rounded-md">
                <i class="ri-add-line"></i>
                Tambah Akun
            </button>
        </a>
        <div class="flex items-center justify-between ">
            <div class="text-[#404D61] mt-5">
                <p class="font-semibold  text-3xl">Kaprodi</p>
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
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Action</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Email </th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Username</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Status</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Last Login</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                <tr class="hover:bg-gray-50">
                    <th class="px-6 py-4 text-white ">
                        <div class="flex justify-start gap-4 ">
                            <a x-data="{ tooltip: 'Edite' }" href="#" class="bg-[#344948] rounded-md px-1 py-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="h-5 w-5">
                                    <path
                                        d="M15.7279 9.57627L14.3137 8.16206L5 17.4758V18.89H6.41421L15.7279 9.57627ZM17.1421 8.16206L18.5563 6.74785L17.1421 5.33363L15.7279 6.74785L17.1421 8.16206ZM7.24264 20.89H3V16.6473L16.435 3.21231C16.8256 2.82179 17.4587 2.82179 17.8492 3.21231L20.6777 6.04074C21.0682 6.43126 21.0682 7.06443 20.6777 7.45495L7.24264 20.89Z">
                                    </path>
                                </svg>
                            </a>
                            <a x-data="{ tooltip: 'Delete' }" href="#" class="bg-[#E41313] px-1 py-1 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-5 w-5"
                                    x-tooltip="tooltip">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </a>

                        </div>
                    </th>
                    <td class="flex gap-3 px-6 py-4 font-normal text-gray-900 items-center">
                        <div class="relative h-10 w-10">
                            <img class="h-full w-full rounded-full object-cover object-center"
                                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="" />
                            <span
                                class="absolute right-0 bottom-0 h-2 w-2 rounded-full bg-green-400 ring ring-white"></span>
                        </div>
                        <div class="font-medium text-gray-700 ">
                            <p class="text-center">Divi Galih</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">athaya@gmail.com</td>
                    <td class="px-6 py-4 text-[#0064FF]">shyra7636</td>
                    <td class="px-6 py-4">active</td>
                    <td class="px-6 py-4">2 mins ago</td>

                </tr>
            </tbody>
        </table>
    </div>
    {{-- table end --}}


</main>
{{-- main end --}}
@endsection
