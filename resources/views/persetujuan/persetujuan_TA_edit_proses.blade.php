@extends('partial.layouts')

@section('content')
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
                muhammadiyah yogyakarta - parttime di telkom (bagian riset) - parttime sebagai freelancer fullstack web dev
                - membuat sistem e learning untuk perusahaan campus today - membuat sistem ppdb sma - membuat web company
                profile untuk banyak perusahaan</p>
            <p class="text-md mt-8 ps-4">Kemampuan</p>
            <p class="text-sm mt-2 ps-4">PHP, Laravel, Python, Machine Learning, MySQL, Frontend Webdev, Backend Webdev</p>
        </div>
    </div>

    <div class="bg-white shadow-md mt-10 w-full rounded-xl shadow-md shadow-slate-500">

        <p class="text-xl font-semibold ps-6 pt-6 pb-2">Pengajuan Tugas Akhir</p>

        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500 overflow-scroll rounded-xl">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Jenis</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Projek</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nama Perusahaan Mitra</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Proposal</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Deskripsi</th>
                </tr>
            </thead>

            <tbody class="divide-y bg-white border-t border-gray-100">
                <tr class="mx-4 bg-grey-100 w-full h-full px-2 pb-2">
                    <td class="px-6 py-4">Usulan</td>
                    <td class="px-6 py-4">Pengembangan Backend Sistem Informasi berbasis web (propertio.id)</td>
                    <td class="px-6 py-4">PT Jetorbit Teknologi</td>
                    <td class="px-6 py-4 ">Proposal</td>
                    <td class="px-6 py-4 overflow-auto">Membuat back-end</td>

                </tr>
                <tr class="mx-4 bg-grey-100 w-full h-full px-2 pb-2">
                    <td class="px-6 py-4">Usulan</td>
                    <td class="px-6 py-4">Pengembangan Backend Sistem Informasi berbasis web (propertio.id)</td>
                    <td class="px-6 py-4">PT Jetorbit Teknologi</td>
                    <td class="px-6 py-4 ">Proposal</td>
                    <td class="px-6 py-4">Membuat back-end</td>

                </tr>
            </tbody>
        </table>
    </div>


    <div class="w-full h-fit p-4 px-6 bg-white rounded-lg shadow-md shadow-slate-500 flex flex-row mt-10">

        <div class="w-[50%] h-fit p-8 flex flex-col">
            <p class="text-lg font-semibold">Dosen Pembimbing 1</p>
            <select id="search_item" name="query_type" class="border rounded p-2">
                <option value="Project" class="py-2 w-fit block">Project</option>
                <option value="Lecturer" class="py-2 w-fit block">Lecturer</option>
            </select>
        </div>

        <div class="w-[50%] h-fit p-8 flex flex-col">
            <p class="text-lg font-semibold">Dosen Pembimbing 2</p>
            <select id="search_item" name="query_type" class="border rounded p-2">
                <option value="Project" class="py-2 w-fit block">Project</option>
                <option value="Lecturer" class="py-2 w-fit block">Lecturer</option>
            </select>
        </div>
    </div>

    <div class="flex flex-row-reverse w-full h-fit space-x-6 mb-8">
        <button class=" bg-main_green px-4 py-2 w-fit h-fit mt-10 rounded-lg text-white text-lg ms-10">
            Setujui</button>
        <button class=" bg-red-600 px-4 py-2 w-fit h-fit mt-10 rounded-lg text-white text-lg">
            Revisi</button>
    </div>
@endsection
