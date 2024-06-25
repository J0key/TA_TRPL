@extends('Akademik.partial.layouts')

@section('main')
    <main class="w-[1139px] ml-[322px] min-h-screen my-10 flex flex-col">
        <form action="">
            <div class="flex flez-col "></div>
            <div class="py-4 px-6 bg-[#FBFFFC] flex item-center shadow-md rounded-md shadow-slate-800">
                <ul class="ml-4 flex items-center">
                    <li class="mr-4">
                        <p class="text-xl font-semibold text-gray-700">Add Project</p>
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

            <button class="bg-semi_dark_green px-6 py-2 w-fit h-fit mt-12 rounded-lg text-white text-lg">
                <i class="ri-arrow-left-s-line mr-2"
                    style="
        transition: transform 0.3s ease,
            display 0.3s ease;
    "></i>Back</button>

            <div class="w-full h-fit p-4 bg-white border-2 rounded-xl border-slate-700 mt-8">
                <div class="w-full h-fit p-8 flex flex-col">
                    <p class="text-lg font-semibold">Penanggung Jawab</p>
                    <select id="search_item" name="query_type" class="border rounded p-2 mt-4">
                        <option value="Project" class="py-2 w-fit block">Dosen 1</option>
                        <option value="Lecturer" class="py-2 w-fit block">Dosen 2</option>
                        <option value="Lecturer" class="py-2 w-fit block">Dosen 3</option>
                    </select>
                </div>
                <div class="w-full h-fit p-8 flex flex-col">
                    <p class="text-lg font-semibold">Judul Proyek</p>
                    <input id="search_item" name="query_type" class="border border-gray-600 rounded p-2 mt-4"
                        value="Pengembangan Backend Sistem Informasi berbasis web (propertio.id)" />
                </div>
                <div class="w-full h-fit p-8 flex flex-col">
                    <p class="text-lg font-semibold">Deskripsi Proyek</p>
                    <textarea id="search_item" name="query_type" class="border border-gray-600 rounded p-2 mt-4">membuat back-end</textarea>
                </div>
                <div class="w-full h-fit p-8 flex flex-col">
                    <p class="text-lg font-semibold">Tools Proyek</p>
                    <input id="search_item" name="query_type" class="border border-gray-600 rounded p-2 mt-4"
                        value="laravel" />
                </div>
                <div class="w-full h-fit p-8 flex flex-col">
                    <p class="text-lg font-semibold">Instansi</p>
                    <input id="search_item" name="query_type" class="border border-gray-600 rounded p-2 mt-4"
                        value="cinurawa" />
                </div>
            </div>

            <div class="flex flex-row-reverse w-full h-fit space-x-6 mb-8">
                <button type="button" onclick="openModal()"
                    class=" bg-[#4C8F8B] px-4 py-2 w-fit h-fit mt-10 rounded-lg text-white text-lg ms-10">
                    Submit</button>
                <button class=" bg-red-600 px-4 py-2 w-fit h-fit mt-10 rounded-lg text-white text-lg">
                    Cancel</button>
            </div>



        </form>

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
                <p class="w-full h-fit text-3xl font-semibold text-center text-gray-700">Save</p>
                <p class="w-full h-fit text-md font-semibold text-center text-gray-700 mt-4">Apakah Yakin Untuk
                    Menyimpan ?</p>
                <img class="w-48 h-auto" src="{{ asset('icon/folder.png') }}" alt="">
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
