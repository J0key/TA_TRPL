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


        <button class="bg-main_green px-4 py-2 w-fit h-fit mt-10 rounded-lg text-white text-lg">
            <i class="ri-arrow-left-s-line mr-2"
                style="
        transition: transform 0.3s ease,
            display 0.3s ease;
    "></i>Back</button>

        <div class="w-full h-fit flex flex-row mt-10 space-x-8">
            <div class="w-[40%] h-full p-8 px-10 bg-white rounded-lg shadow-md shadow-slate-500 flex flex-col">
                <p class="text-xl font-semibold">Biodata</p>

                <div class="flex flex-row justify-between mt-12">
                    <p class="flex w-[50%]">Name</p>
                    <div class="w-full h-fit flex flex-row">
                        <p class="flex text-left">SHyra Athaya</p>
                    </div>
                </div>
                <div class="flex flex-row justify-between mt-8">
                    <p class="flex w-[50%]">NIM</p>
                    <div class="w-full h-fit flex flex-row">
                        <p class="flex text-left">22/3242134/SV/3123</p>
                    </div>
                </div>
                <div class="flex flex-row justify-between mt-8">
                    <p class="flex w-[50%]">SKS</p>
                    <div class="w-full h-fit flex flex-row">
                        <p class="flex text-left">110</p>
                    </div>
                </div>
                <div class="flex flex-row justify-between mt-8">
                    <p class="flex w-[50%]">IPK</p>
                    <div class="w-full h-fit flex flex-row">
                        <p class="flex text-left">3.7</p>
                    </div>
                </div>
                <div class="flex flex-row justify-between mt-8">
                    <p class="flex w-[50%]">TMT</p>
                    <div class="w-full h-fit flex flex-row">
                        <p class="flex text-left">2023/2024</p>
                    </div>
                </div>
            </div>
            <div class="w-[60%] h-fit p-8 px-10 bg-white rounded-lg shadow-md shadow-slate-500 flex flex-col">
                <p class="text-xl font-semibold">Pengalaman dan Kemampuan</p>
                <p class="text-md mt-8 ps-4">Pengalaman</p>
                <p class="text-sm mt-2 ps-4">Membuat aplikasi kalkulator pakan udang untuk perusahaan teramina - membuat web
                    company profile untuk alhijaz, perusahaan haji - membuat web sistem administrasi rumah sakit untuk rs
                    muhammadiyah yogyakarta - parttime di telkom (bagian riset) - parttime sebagai freelancer fullstack web
                    dev
                    - membuat sistem e learning untuk perusahaan campus today - membuat sistem ppdb sma - membuat web
                    company
                    profile untuk banyak perusahaan</p>
                <p class="text-md mt-8 ps-4">Kemampuan</p>
                <p class="text-sm mt-2 ps-4">PHP, Laravel, Python, Machine Learning, MySQL, Frontend Webdev, Backend Webdev
                </p>
            </div>
        </div>

        <div class="bg-white shadow-md mt-10 w-full rounded-xl shadow-slate-500 p-4 mb-10">

            <p class="text-xl font-semibold ps-6 pt-2 pb-2">Project Terpilih</p>

            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500 overflow-scroll rounded-xl">
                <thead class="bg-white border-b-2 border-gray-300">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Project</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Instansi</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Deskripsi</th>
                    </tr>
                </thead>

                <tbody class="divide-y bg-gray-100 border-t border-gray-100">
                    <tr class="mx-4 bg-grey-100 w-full h-full px-2 pb-2">
                        <td class="px-6 py-4">Pengembangan Backend Sistem Informasi berbasis web (propertio.id)</td>
                        <td class="px-6 py-4">cinnurawa</td>
                        <td class="px-6 py-4 overflow-auto">Membuat back-end</td>

                    </tr>
                    <tr class="mx-4 bg-grey-100 w-full h-full px-2 pb-2">
                        <td class="px-6 py-4">Pengembangan Backend Sistem Informasi berbasis web (propertio.id)</td>
                        <td class="px-6 py-4">cinnurawa</td>
                        <td class="px-6 py-4 overflow-auto">Membuat back-end</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </main>
@endsection
