@extends('Mahasiswa.LayoutMahasiswa')
<style>
    /* #box1:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease-in-out;
    }

    #box2:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease-in-out;
    }

    #box3:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease-in-out;
    } */
</style>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

@section('main')
    <main class="w-[1139px] ml-[330px] min-h-screen my-10 flex flex-col">
        <div class="flex items-center justify-between">

            <div class="text-[#404D61]">
                <p class="font-semibold text-2xl">Dashboard</p>
            </div>

            <div class="flex flex-row items-center">
                {{-- <ul class="ml-auto flex flex-row">
                    <li class="mr-8">
                        <div class="">
                            <div class="\">
                                   <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                class="text-gray-600 w-6 h-6"
                                viewBox="0 0 16 16"
                              >
                                <path
                                  d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"
                                />
                              </svg>
                            </div>
                          </div>
                    </li>
                    <li class="mr-8">
                        <img src="{{ asset('icon/dosen.png') }}" alt="">
                    </li>
                    <li class="mr-4">
                        <p id="username_txt" class="text-xl font-semibold"></p>
                    </li>
                </ul>
                <div class="px-6 py-3 bg-main_green text-white rounded-lg shadow-sm shadow-gray-700">
                    <button id="logout-button" type="button">logout</button>
                </div> --}}

                {{-- modal --}}
                <div class=" flex justify-center items-center z-10">
                    <div class="mr-1 font-bold">
                        <div class="\">
                               <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor"
                            class="text-[#025E5A] w-6 h-6"
                            viewBox="0 0 16 16"
                          >
                            <path
                              d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"
                            />
                          </svg>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class=" w-64 flex justify-center items-center z-10">
                        <div @click="open = !open" class="relative border-b-4 border-transparent py-3" :class="{'border-[#025E5A] transform transition duration-300 ': open}" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100">
                          <div class="flex justify-center items-center space-x-3 cursor-pointer">
                            <div class="w-12 h-12 rounded-full overflow-hidden border-2 dark:border-white border-gray-900">
                              <img src="https://images.unsplash.com/photo-1610397095767-84a5b4736cbd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="" class="w-full h-full object-cover">
                            </div>
                            <div class="font-semibold  text-[#404D61] text-lg " id="username_txt">
                              <div class="cursor-pointer"></div>
                            </div>
                          </div>
                          <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute w-60 px-5 py-3  bg-white rounded-lg shadow border dark:border-transparent mt-5">
                            <ul class="space-y-3 text-gray-900">
                              {{-- <li class="font-medium">
                                <a href="#" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                                  <div class="mr-3">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                  </div>
                                  Account
                                </a>
                              </li>
                              <li class="font-medium">
                                <a href="#" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                                  <div class="mr-3">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                  </div>
                                  Setting
                                </a>
                              </li>
                              <hr class="dark:border-gray-700"> --}}
                              <li class="font-medium">
                                <a href="#" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-red-600">
                                  <div class="mr-3 text-red-600" id="logout-button">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                                  </div>
                                  Logout
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                    </div>
                </div>
                {{-- modal --}}
            </div>
        </div>

        <div class="w-full mt-8 py-8 px-8 pb-20 bg-semi_dark_green flex flex-col rounded-3xl relative">
            <p class="text-xl text-white">Periode Semester Ganjil 2024</p>
            <p class="text-lg text-white mt-4">28 February 2024</p>
            <img src="{{ asset('icon/Mahasiswa/buletan.png') }}" class=" absolute top-0 right-0 rounded-tr-3xl"
                alt="">
        </div>

        <div class="w-full flex flex-row justify-center items-center relative space-x-16 px-8">
            <div id="box1" class="bg-white rounded-3xl p-4 px-8 flex flex-col mt-[-50px] shadow-lg shadow-main_green">
                <p class="text-lg font-semibold">Sistem Pengajuan Judul</p>
                <div class="flex flex-row w-full justify-start items-center">
                    <img class="ms-[-24px]" src="{{ asset('icon/Mahasiswa/icon X.png') }}" alt="">
                    <div class="flex flex-col w-64 mt-2">
                        <p class="text-sm mt-4 font-semibold">Proyek Akhirmu di tolak</p>
                        <p class="text-sm mt-4">mohon maaf, proyek akhirmu belum memenuhi krieria untuk disetujui.</p>
                    </div>
                </div>
                <div class="flex flex-row items-center">
                    <p class="text-sm mt-4">Ajukan judul lain.</p>
                    <button>
                        <img class="mt-4 mx-10" src="{{ asset('icon/Mahasiswa/long-arrow-right (1).png') }}" alt="">
                    </button>
                </div>
            </div>

            <div id="box2"
                class="bg-white rounded-3xl p-4 px-8 w-80 flex flex-col mt-[-54px] shadow-lg shadow-main_green">
                <p class="text-lg mt-4 font-semibold">Judul Proyek akhir</p>
                <div class="flex flex-row items-center w-full">
                    <img src="{{ asset('icon/Mahasiswa/game-icons_graduate-cap (1).png') }}" alt="">
                    <p id="projek_count_txt" class="text-3xl ps-4 font-bold"></p>
                </div>
                <div class="flex flex-row mt-2 items-center">
                    <p class="text-sm mt-4">Lihat judul.</p>
                    <button>
                        <img class="mt-4 mx-10" src="{{ asset('icon/Mahasiswa/long-arrow-right (1).png') }}" alt="">
                    </button>
                </div>
            </div>

            <div id="box3"
                class="bg-white rounded-3xl p-4 px-8 w-80 flex flex-col mt-[-54px] shadow-lg shadow-main_green">
                <p class="text-lg mt-4 font-semibold">Kuota Dosen</p>
                <div class="flex flex-row items-center w-full">
                    <img src="{{ asset('icon/Mahasiswa/game-icons_graduate-cap (2).png') }}" alt="">
                    <p id="quota_txt" class="text-3xl ps-4 font-bold"></p>
                </div>
                <div class="flex flex-row mt-2 items-center">
                    <p class="text-sm mt-4">Lihat detail dosen.</p>
                    <button>
                        <img class="mt-4 mx-10" src="{{ asset('icon/Mahasiswa/long-arrow-right (1).png') }}" alt="">
                    </button>
                </div>
            </div>

        </div>

        <p class="font text-2xl mt-12">Report Bimbingan</p>

        <div class="rounded-lg border border-gray-200 shadow-md mt-10 w-full">

            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500 overflow-scroll">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Ke</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Tanggal</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Proyek Akhir</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Deskripsi</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Catatan</th>
                    </tr>
                </thead>

                <tbody class="divide-y bg-white border-t border-gray-100">
                    <tr class="mx-4 bg-grey-100 w-full h-full px-2 pb-2">
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">30/04/2024</td>
                        <td class="px-6 py-4 ">Rancang Bangun Aplikasi Sistem Informasi Portofolio TA</td>
                        <td class="px-6 py-4">Lorem Ipsum</td>
                        <td class="px-6 py-4 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor</td>
                    </tr>
                    <tr class="mx-4 bg-grey-100 w-full h-full px-2 pb-2">
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4">30/04/2024</td>
                        <td class="px-6 py-4 ">Rancang Bangun Aplikasi Sistem Informasi Portofolio TA</td>
                        <td class="px-6 py-4">Lorem Ipsum</td>
                        <td class="px-6 py-4 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor</td>
                    </tr>
                    <tr class="mx-4 bg-grey-100 w-full h-full px-2 pb-2">
                        <td class="px-6 py-4">3</td>
                        <td class="px-6 py-4">30/04/2024</td>
                        <td class="px-6 py-4 ">Rancang Bangun Aplikasi Sistem Informasi Portofolio TA</td>
                        <td class="px-6 py-4">Lorem Ipsum</td>
                        <td class="px-6 py-4 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor</td>
                    </tr>
                    <tr class="mx-4 bg-grey-100 w-full h-full px-2 pb-2">
                        <td class="px-6 py-4">4</td>
                        <td class="px-6 py-4">30/04/2024</td>
                        <td class="px-6 py-4 ">Rancang Bangun Aplikasi Sistem Informasi Portofolio TA</td>
                        <td class="px-6 py-4">Lorem Ipsum</td>
                        <td class="px-6 py-4 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    @stack('script')
@endsection

<script>
    const token = localStorage.getItem('token');
    if (token == null) {
        window.location.href = "{{ route('login') }}";
    }

    async function fetchProjects() {
        try {
            let url = `http://127.0.0.1:8001/api/project`;
            // FETCH TOTAL SLOT DOSEN
            let totalSlotDosen = 0;
            let kuotaTerpakai = 0;
            let tmpArrayDosen = [];
            let totalProjekTersedia = 0;
            let totalProjekDiambil = 0;


            // FETCH DATA USER
            console.log(token);
            response = await fetch('http://127.0.0.1:8001/api/user', {
                headers: {
                    'Authorization': `Bearer ${token}`
                }
            });
            if (response.ok) {
                const userData = await response.json();
                console.log(userData.username);
                const usernameObj = document.getElementById('username_txt');
                usernameObj.textContent = userData.username;
            }

            while (url != null) {
                let response = await fetch(url);
                data = await response.json();
                url = data.data.next_page_url;
                data.data.data.forEach(detailProjek => {
                    if (detailProjek.status == "bimbingan") {
                        kuotaTerpakai += 1;
                    }
                    if (detailProjek.isApproved == "Approved") {
                        totalProjekTersedia += 1;
                    }
                    if (!tmpArrayDosen.includes(detailProjek['lecturer'].id)) {
                        tmpArrayDosen.push(detailProjek['lecturer'].id);
                        totalSlotDosen += detailProjek['lecturer'].max_quota;
                    }
                    detailProjek
                });
            }

            const quota_txt = document.getElementById("quota_txt");
            const projek_count_txt = document.getElementById("projek_count_txt");
            quota_txt.textContent = kuotaTerpakai + " / " + totalSlotDosen;
            projek_count_txt.textContent = kuotaTerpakai + " / " + totalProjekTersedia;

        } catch (error) {
            console.error('Error:', error);
        }

    }


    document.addEventListener("DOMContentLoaded", async () => {
        const logoutButton = document.getElementById('logout-button');
        logoutButton.addEventListener('click', async () => {
            try {
                // Kirim permintaan logout ke server
                const response = await fetch('http://127.0.0.1:8001/api/logout', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': `Bearer ${token}`
                    }
                });

                if (response.ok) {
                    // Hapus token dari localStorage
                    localStorage.removeItem('token');
                    alert('Anda berhasil logout');
                    // Arahkan kembali ke halaman login
                    window.location.href = "{{ route('login') }}";
                } else {
                    const data = await response.json();
                    alert(`Error: ${data.message}`);
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat logout. Silakan coba lagi.');
            }
        });
    });
    fetchProjects();
</script>
