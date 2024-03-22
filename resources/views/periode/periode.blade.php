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
                <p class="font-semibold text-3xl">Periode Semester Ganjil 2023/2024 </p>
                <p class="font-regular text-xl">29 February 2024</p>
            </div>

            <div class="flex items-center">

                <ul class="ml-auto flex flex-row mt-6">

                    <li class="mr-4">
                        <button onclick="openModal('periode')" type="button"
                            class="w-auto h-12 bg-[#025E5A] text-white px-4 shadow-md shadow-black/15 rounded flex items-center justify-center">
                            <img class="me-2" src="{{ asset('icon/jam.png') }}" alt="">
                            <p>Ganti Periode</p>
                        </button>
                    </li>
                </ul>

            </div>
        </div>

        <div class="w-full h-fit flex flex-row mt-10 space-x-8">
            <div
                class="w-[50%] h-full p-8 px-10 bg-white rounded-lg shadow-md shadow-slate-500 flex flex-col items-center ">
                <p class="text-3xl font-semibold">TUGAS AKHIR</p>
                <div class=" w-full border-b-2 border-gray-500 my-4"></div>
                <p class="text-md font-regular mb-4">Status Registrasi</p>

                <div type="button"
                    class="w-auto bg-[#025E5A] text-white px-6 py-2 shadow-md shadow-black/15 rounded flex items-center justify-center mb-6">
                    <p>Aktif</p>
                </div>

                <div class="w-full flex flex-row justify-between px-10">
                    <div class="flex flex-col">
                        <p class="text-l font-regular mb-4 text-center">Tanggal Awal</p>
                        <p class="text-l font-regular mb-4 text-center font-semibold text-2xl">01 / 01 / 2024</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-l font-regular mb-4 text-center">Tanggal Akhir</p>
                        <p class="text-l font-regular mb-4 text-center font-semibold text-2xl">19 / 01 / 2024</p>
                    </div>
                </div>

                <p class="text-l font-regular mt-8 mb-4">Ubah Tanggal Registrasi</p>

                <button type="button" onclick="openModal('waktu')"
                    class="w-auto h-12 bg-[#344948] text-white px-4 shadow-md shadow-black/15 rounded flex items-center justify-center hover:bg-[$344948]">
                    <img class="me-2" src="{{ asset('icon/pencil.png') }}" alt="">
                    <p>Ubah</p>
                </button>

            </div>

            <div
                class="w-[50%] h-full p-8 px-10 bg-white rounded-lg shadow-md shadow-slate-500 flex flex-col items-center ">
                <p class="text-3xl font-semibold">YUDISIUM</p>
                <div class=" w-full border-b-2 border-gray-500 my-4"></div>
                <p class="text-md font-regular mb-4">Status Registrasi</p>

                <div
                    class="w-auto bg-gray-500 text-white px-6 py-2 shadow-md shadow-black/15 rounded flex items-center justify-center mb-6">
                    <p>Tidak Aktif</p>
                </div>

                <div class="w-full flex flex-row justify-between px-10">
                    <div class="flex flex-col">
                        <p class="text-l font-regular mb-4 text-center">Tanggal Awal</p>
                        <p class="text-l font-regular mb-4 text-center font-semibold text-2xl">Belum di set</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-l font-regular mb-4 text-center">Tanggal Akhir</p>
                        <p class="text-l font-regular mb-4 text-center font-semibold text-2xl">Belum di set</p>
                    </div>
                </div>

                <p class="text-l font-regular mt-8 mb-4">Ubah Tanggal Registrasi</p>

                <button type="button" onclick="openModal('waktu')"
                    class="w-auto h-12 bg-[#344948] text-white px-4 shadow-md shadow-black/15 rounded flex items-center justify-center hover:bg-[$344948]">
                    <img class="me-2" src="{{ asset('icon/pencil.png') }}" alt="">
                    <p>Ubah</p>

                </button>

            </div>


        </div>
    </main>


    <div id="modal_gantiWaktu" class="absolute top-0 left-0 w-full h-full flex-col justify-center items-center hidden">
        <div class="w-full h-full bg-white opacity-50 absolute"></div>
        <div class="w-[35rem] py-4 bg-white shadow-md shadow-slate-600 z-10 absolute ms-20 rounded-md">
            <div class="flex flex-col w-full h-full px-4 z-20">
                <div class="w-full flex flex-row-reverse">
                    <button onclick="closeModal('waktu')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <p class="w-full h-fit text-lg font-semibold text-gray-700 ps-6">Ubah Tanggal Registrasi Tugas Akhir
                </p>
                <div class="flex flex-col mt-16 px-10">
                    <div class="flex flex-row w-full justify-between">
                        <p class="text-md font-regular mb-4">Tanggal Awal Registrasi
                        </p>
                        <input type="date" id="tanggal" name="tanggal">
                    </div>
                    <div class="flex flex-row w-full justify-between mt-8">
                        <p class="text-md font-regular mb-4">Tanggal Awal Registrasi
                        </p>
                        <input type="date" id="tanggal" name="tanggal">
                    </div>
                </div>


                <div class="flex flex-row w-full items-center justify-end my-10 px-10">
                    <button onclick="closeModal('waktu')"
                        class="bg-red-600 px-4 py-2 w-fit h-fit rounded-lg text-white text-sm me-4 flex flex-row items-center justify-center">
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
    </div>

    <div id="modal_gantiPeriode" class="absolute top-0 left-0 w-full h-full flex-col justify-center items-center hidden">
        <div class="w-full h-full bg-white opacity-50 absolute"></div>
        <div class="w-[35rem] py-4 bg-white shadow-md shadow-slate-600 z-10 absolute ms-20 rounded-lg">
            <div class="flex flex-col w-full h-full px-4 z-20 items-center">
                <div class="w-full flex flex-row-reverse">
                    <button onclick="closeModal('periode')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <p class="w-full h-fit text-2xl font-semibold text-gray-700 ps-6">Ganti Periode</p>
                <div class="flex flex-col mt-10">
                    <p class="text-md font-regular mb-4 text-center">Apakah anda yakin ingin merubah periode menjadi </p>
                    <p class="text-md font-regular mb-4 text-center font-semibold">Tahun
                        Ajaran 2024/2025 Semester Ganjil?</p>
                </div>
                <div class="flex flex-row w-full items-center justify-center my-6">
                    <button onclick="closeModal('periode')"
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
    </div>




    @stack('script')
@endsection

<script>
    function openModal(cek) {
        let modal; // Deklarasi variabel modal di luar blok if-else

        if (cek == 'periode') {
            modal = document.getElementById('modal_gantiPeriode');
        } else {
            modal = document.getElementById('modal_gantiWaktu');
        }

        // Ubah tampilan modal menjadi flex
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    function closeModal(cek) {
        let modal; // Deklarasi variabel modal di luar blok if-else

        if (cek == 'periode') {
            modal = document.getElementById('modal_gantiPeriode');
        } else {
            modal = document.getElementById('modal_gantiWaktu');
        } // Ubah tampilan modal menjadi flex
        modal.classList.remove('flex');
        modal.classList.add('hidden');
    }
</script>
