@extends('Akademik.partial.layouts')

@section('main')
    <main class="w-[1139px] ml-[322px] min-h-screen flex flex-col">

        <div class="flex flez-col mt-10"></div>

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


        <div class="w-full h-fit flex flex-row mt-10 space-x-8">
            <div class="w-[25%] fit bg-white rounded-lg flex flex-col">
                <div class="bg-gray-200">
                    <img src="{{ asset('icon/dosen_kotak.png') }}" class="w-full h-auto" alt="">
                </div>
            </div>
            <div
                class="w-[75%] h-full p-8 px-10 bg-white rounded-lg shadow-md shadow-slate-500 flex flex-col justify-center">

                <div class="flex flex-row justify-between">
                    <p class="flex w-[50%] font-semibold">Name</p>
                    <div class="w-full h-fit flex flex-row border-b-2 border-gray-400 pb-2">
                        <p class="flex text-left">Dinar Nugroho Pratomo, S.Kom, M.IM., M. Cs.</p>
                    </div>
                </div>
                <div class="flex flex-row justify-between mt-10">
                    <p class="flex w-[50%] font-semibold">Specialities</p>
                    <div class="w-full h-fit flex flex-row border-b-2 border-gray-400 pb-2">
                        <p class="flex text-left">Software Engineering, Data Science, Machine
                            Learning</p>
                    </div>
                </div>
                <div class="flex flex-row justify-between mt-10">
                    <p class="flex w-[50%] font-semibold">Number of Projects</p>
                    <div class="w-full h-fit flex flex-row border-b-2 border-gray-400 pb-2xx">
                        <p class="flex text-left">32 projects</p>
                    </div>
                </div>
                <div class="flex flex-row justify-between mt-10">
                    <p class="flex w-[50%] font-semibold">Contact</p>
                    <div class="w-full h-fit flex flex-row">
                        <p class="flex text-left">dinar.nugroho.p@ugm.ac.id</p>
                    </div>
                </div>
            </div>
        </div>

        <button type="button" onclick="goToAddProject()"
            class="bg-semi_dark_green px-4 py-2 w-fit h-fit mt-12 rounded-lg text-white text-lg">
            <i class="ri-arrow-left-s-line mr-2"
                style="
        transition: transform 0.3s ease,
            display 0.3s ease;
    "></i>Add
            Project</button>

        <div class="flex items-center justify-between mt-4">

            <div class="text-[#404D61] mt-5">
                <p class="font-semibold  text-3xl">Projects</p>
                <p class="font-regular text-xl">1000 results found</p>
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

        <div class="rounded-lg border border-gray-200 bg-white shadow-md mt-10 p-4 overflow-x-scroll">

            <table class="w-[1200px] border-collapse bg-white text-left text-sm p-4 text-gray-500">

                <thead class="bg-white border-b-2 border-gray-300">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900 text-center">Action</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900 text-center">Approval</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Project</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Instansi</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Deskripsi</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Tools</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900 text-center">Status</th>
                    </tr>
                </thead>

                <tbody class="divide-y bg-gray-100 border-t border-gray-100">
                    <tr class="mx-4 bg-grey-100 h-fit px-2">
                        <th class="px-4 py-4 text-white">
                            <div class="flex flex-row justify-center">
                                <button onclick="goToEditProject()" class="bg-dark_green w-fit p-2 rounded-xl">
                                    <img class="w-4 h-auto" src="{{ asset('icon/pencil.png') }}" alt="">
                                </button>
                                <button onclick="openModal()" class=" bg-red-600 w-fit p-2 rounded-xl ms-2">
                                    <img class="w-4 h-auto" src="{{ asset('icon/trash_bin.png') }}" alt="">
                                </button>
                            </div>
                        </th>

                        <td class="px-4 py-4 text-white">
                            <div class="flex flex-row justify-center">
                                <div class="bg-main_green w-fit p-2 rounded-xl">
                                    <img class="w-4 h-auto" src="{{ asset('icon/check.png') }}" alt="">
                                </div>
                                <div class=" bg-red-600 w-fit p-2 rounded-xl ms-2">
                                    <img class="w-4 h-auto" src="{{ asset('icon/x.png') }}" alt="">
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">Pengembangan Backend Sistem Informasi berbasis web (propertio.id)</td>
                        <td class="px-6 py-4">cinurawa</td>
                        <td class="px-6 py-4">Membuat back-end</td>
                        <td class="px-6 py-4">laravel</td>
                        <td class="px-6 py-4 text-[#0064FF] text-center">accept</td>
                    </tr>
                </tbody>
            </table>
        </div>


        <div class="w-fit h-fit flex flex-row self-center justify-center mt-12 shadow-md shadow-slate-500 mb-10">
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

    <div id="modal" class="fixed w-full h-full flex-col justify-center items-center hidden">
        <div class="w-full h-full bg-white opacity-50 absolute"></div>
        <div class="w-[35rem] py-4 bg-white shadow-md shadow-slate-600 z-10 absolute ms-20 rounded-lg">
            <div class="flex flex-col w-full h-full px-4 z-20 items-center">
                <div class="w-full flex flex-row-reverse">
                    <button onclick="closeModal()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <p class="w-full h-fit text-3xl font-semibold text-center text-gray-700">Hapus</p>
                <p class="w-full h-fit text-md font-semibold text-center text-gray-700 mt-4">Apakah Yakin Untuk
                    Menghapus ?</p>
                <img class="w-48 h-auto" src="{{ asset('icon/trash_bin2.png') }}" alt="">
                <div class="w-[80%] mt-[-15px] border-b-2 border-gray-500"></div>
                <div class="flex flex-row w-full items-center justify-center my-6">
                    <button onclick="closeModal()"
                        class="bg-red-600 px-4 py-2 w-fit h-fit rounded-lg text-white text-sm me-16 flex flex-row items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white me-2" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        <p>tidak</p>
                    </button>
                    <button
                        class="bg-main_green px-4 py-2 w-fit h-fit rounded-lg text-white text-sm flex flex-row items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white me-2" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <p>iya</p>
                    </button>
                </div>
            </div>
        </div>
    </div>

    @stack('script')
@endsection

<script>
    function goToAddProject() {
        window.location.href = "{{ route('akademik.addProyek') }}"
    }

    function goToEditProject() {
        window.location.href = "{{ route('akademik.updateProyek') }}"
    }

    function openModal() {
        const modal = document.getElementById('modal');
        // Ubah tampilan modal menjadi flex
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    function closeModal() {
        const modal = document.getElementById('modal');
        // Ubah tampilan modal menjadi flex
        modal.classList.remove('flex');
        modal.classList.add('hidden');
    }
</script>
