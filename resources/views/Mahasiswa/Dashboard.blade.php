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

@section('main')
    <main class="w-full ml-[330px] mr-[50px] min-h-screen  flex flex-col">
        <div class="flex items-center justify-between">

            <div class="text-[#404D61]">
                <p class="font-semibold text-2xl">Dashboard</p>
            </div>

            <div class="flex flex-row items-center">
                {{-- modal --}}
                <div class=" flex justify-center items-center z-10">
                    <div class="mr-1 font-bold">
                        <div class="\">
                               <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" class="text-[#025E5A] w-6 h-6" viewBox="0 0 16 16">
                            <path
                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                            </svg>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class=" w-64 flex justify-center items-center z-10">
                        <div @click="open = !open" class="relative border-b-4 border-transparent py-3"
                            :class="{ 'border-[#025E5A] transform transition duration-300 ': open }"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100">
                            <div class="flex justify-center items-center space-x-3 cursor-pointer">
                                <div
                                    class="w-12 h-12 rounded-full overflow-hidden border-2 dark:border-white border-gray-900">
                                    <img src="https://images.unsplash.com/photo-1610397095767-84a5b4736cbd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
                                        alt="" class="w-full h-full object-cover">
                                </div>
                                <div class="font-semibold  text-[#404D61] text-lg " id="username_txt">
                                    <div class="cursor-pointer"></div>
                                </div>
                            </div>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                class="absolute w-60 px-5 py-3  bg-white rounded-lg shadow border dark:border-transparent mt-5">
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
                                        <button type="button" id="logout-button"
                                            class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-red-600">
                                            <div class="mr-3 text-red-600" id="logout-button">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                                    </path>
                                                </svg>
                                            </div>
                                            Logout
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- modal --}}
            </div>

        </div>

        <div class="w-full mt-8 py-8 px-8 pb-20 bg-semi_dark_green flex flex-col rounded-3xl relative ">
            <p class="text-xl text-white">Periode Semester Ganjil 2024</p>
            <p class="text-lg text-white mt-4">28 February 2024</p>
            <img src="{{ asset('icon/Mahasiswa/buletan.png') }}" class=" absolute top-0 right-0 rounded-tr-3xl"
                alt="">
        </div>

        <div class="w-full flex flex-row justify-center items-center relative space-x-16 px-8">
            <div id="box1"
                class="bg-white rounded-3xl p-4 px-8 flex flex-col mt-[-50px] shadow-lg shadow-main_green min-h-52 min-w-80">
                <div id="modal_empty" class="flex flex-col hidden">
                    <p class="text-lg font-semibold">Sistem Pengajuan Judul</p>
                    <div class="flex flex-row w-full justify-start items-center space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54"
                            fill="none">
                            <path
                                d="M26.9987 0.333008C12.2787 0.333008 0.332031 12.2797 0.332031 26.9997C0.332031 41.7197 12.2787 53.6663 26.9987 53.6663C41.7187 53.6663 53.6654 41.7197 53.6654 26.9997C53.6654 12.2797 41.7187 0.333008 26.9987 0.333008ZM37.6654 29.6663H16.332C14.8654 29.6663 13.6654 28.4663 13.6654 26.9997C13.6654 25.533 14.8654 24.333 16.332 24.333H37.6654C39.132 24.333 40.332 25.533 40.332 26.9997C40.332 28.4663 39.132 29.6663 37.6654 29.6663Z"
                                fill="#757D8A" />
                        </svg>
                        <div class="flex flex-col w-64 mt-2">
                            <p class="text-sm mt-4 font-semibold">Ajukan Judul</p>
                            <p class="text-sm mt-4">Kamu belum mengajukan judul proyek akhir. Pilih judul proyek akhir yang
                                tersedia!.</p>
                        </div>
                    </div>

                </div>

                <div id="modal_acc" class="flex flex-col hidden">
                    <p class="text-lg font-semibold">Sistem Pengajuan Judul</p>
                    <div class="flex flex-row w-full justify-start items-center space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="71" height="70" viewBox="0 0 71 70"
                            fill="none">
                            <path
                                d="M62.2532 35.8375C62.2532 50.9788 49.9788 63.2532 34.8375 63.2532C19.6963 63.2532 7.42188 50.9788 7.42188 35.8375C7.42188 20.6963 19.6963 8.42188 34.8375 8.42188C49.9788 8.42188 62.2532 20.6963 62.2532 35.8375Z"
                                fill="#344948" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M49.3954 25.6161C49.7894 26.0103 50.0108 26.5448 50.0108 27.1022C50.0108 27.6596 49.7894 28.1941 49.3954 28.5883L33.6405 44.3431C33.4323 44.5514 33.1851 44.7166 32.9131 44.8293C32.641 44.942 32.3494 45 32.055 45C31.7605 45 31.4689 44.942 31.1968 44.8293C30.9248 44.7166 30.6776 44.5514 30.4694 44.3431L22.6417 36.5169C22.4409 36.323 22.2808 36.091 22.1707 35.8346C22.0605 35.5781 22.0025 35.3023 22.0001 35.0232C21.9977 34.7441 22.0508 34.4673 22.1565 34.209C22.2622 33.9507 22.4183 33.716 22.6156 33.5186C22.813 33.3213 23.0477 33.1652 23.306 33.0595C23.5643 32.9538 23.8411 32.9006 24.1202 32.9031C24.3993 32.9055 24.6751 32.9635 24.9316 33.0736C25.188 33.1838 25.42 33.3439 25.6139 33.5447L32.0542 39.9851L46.4218 25.6161C46.617 25.4208 46.8488 25.2658 47.1039 25.1601C47.359 25.0544 47.6324 25 47.9086 25C48.1847 25 48.4582 25.0544 48.7133 25.1601C48.9684 25.2658 49.2002 25.4208 49.3954 25.6161Z"
                                fill="white" />
                        </svg>
                        <div class="flex flex-col w-64 mt-2">
                            <p class="text-sm mt-4 font-semibold">Proyek Akhirmu di Setujui</p>
                            <p class="text-sm mt-4">Proyek akhirmu telah memenuhi krieria untuk menuju ketahap selanjutnya..
                            </p>
                        </div>
                    </div>
                </div>


            </div>

            <div id="box2"
                class="bg-white h-min-52 rounded-3xl p-4 px-8 w-80 flex flex-col mt-[-54px] shadow-lg shadow-main_green">
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
                class="bg-white h-min-52 rounded-3xl p-4 px-8 w-80 flex flex-col mt-[-54px] shadow-lg shadow-main_green">
                <p class="text-lg mt-2 font-semibold">Kuota Dosen</p>
                <div class="flex flex-row items-center w-full">
                    <img src="{{ asset('icon/Mahasiswa/game-icons_graduate-cap (2).png') }}" alt="">
                    <p id="quota_txt" class="text-3xl ps-4 font-bold"></p>
                </div>
                <div class="flex flex-row mt-2 items-center">
                    <p class="text-sm mt-2">Lihat detail dosen.</p>
                    <button>
                        <img class="mt-4 mx-10" src="{{ asset('icon/Mahasiswa/long-arrow-right (1).png') }}"
                            alt="">
                    </button>
                </div>
            </div>

        </div>

        <p class="font-medium text-2xl mt-12">Report Bimbingan</p>

        <div >
            <div class=" border border-gray-200 shadow-md mt-10 w-full rounded-full">
                <table class="w-full border-collapse bg-white text-left text-sm text-gray-500 overflow-scroll">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-4 font-bold text-gray-900">Ke</th>
                            <th scope="col" class="px-6 py-4 font-bold text-gray-900">Tanggal</th>
                            <th scope="col" class="px-6 py-4 font-bold text-gray-900">Proyek Akhir</th>
                            <th scope="col" class="px-6 py-4 font-bold text-gray-900">Deskripsi</th>
                            <th scope="col" class="px-6 py-4 font-bold text-gray-900">Catatan</th>
                        </tr>
                    </thead>

                <tbody id="table_body" class="divide-y bg-white border-t border-gray-100">

                </tbody>
            </table>
            <div id="empty_filed" class="w-full bg-white">

            </div>
        </div>
    </main>
    @stack('script')
@endsection

<script>
    let userData = null;

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
                userData = await response.json();
                console.log(userData);
                const usernameObj = document.getElementById('username_txt');
                usernameObj.textContent = userData.user_data.username;
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

            displayCounselingData();
            // // FETCH DATA counseling
            // response = await fetch('http://127.0.0.1:8001/api/counseling', {
            //     headers: {
            //         'Authorization': `Bearer ${token}`
            //     }
            // });

            // if (response.ok) {
            //     const counselingData = await response.json();
            //     displayCounselingData(counselingData.data.data);
            // }


        } catch (error) {
            console.error('Error:', error);
        }

    }

    async function displayCounselingData() {
        const tableBody = document.getElementById("table_body");
        tableBody.innerHTML = "";
        let isEmpty = true;
        url = "http://127.0.0.1:8001/api/counseling";
        while (url != null) {
            let response = await await fetch(url, {
                headers: {
                    'Authorization': `Bearer ${token}`
                }
            });
            data = await response.json();
            url = data.data.next_page_url;
            let index = 1;
            // console.log(data.data.data);

            if (data.data.data.length != 0) {
                isEmpty = false;
                data.data.data.forEach(detailCounseling => {
                    let tanggal = "sq";
                    let title = "1";
                    let description = "1";
                    let catatan = "1";

                    if (detailCounseling.student_id == userData.profile_data.id) {
                        tanggal = detailCounseling.tanggal;
                        title = detailCounseling.project.title;
                        description = detailCounseling.subject;
                        catatan = detailCounseling.catatan_dosen;
                    }
                    tableBody.innerHTML += (createTableBody(detailCounseling, index));
                    index += 1;
                });
            }
            console.log(isEmpty);
            if (isEmpty == false) {
                const modal_acc = document.getElementById("modal_acc");
                modal_acc.classList.remove('hidden');
            } else {
                const empty_filed = document.getElementById("empty_filed");
                const modal_empty = document.getElementById("modal_empty");
                modal_empty.classList.remove('hidden');
                const tableBodyHTML = `<div class="px-6 py-4 flex flex-row justify-center w-full">BELUM ADA</div>`;
                empty_filed.innerHTML += tableBodyHTML;
            }
        }
    }

    function createTableBody(data, index) {
        let tableBodyHTML = '';
        tableBodyHTML += `
         <tr class="mx-4 bg-grey-100 w-full h-full px-2 pb-2">
            <td class="px-6 py-4">${index}</td>
            <td class="px-6 py-4">${data.tanggal}</td>
            <td class="px-6 py-4 ">${data.project.title}</td>
            <td class="px-6 py-4">${data.subjek}</td>
            <td class="px-6 py-4 ">${data.catatan_dosen}</td>
        </tr>`;
        return tableBodyHTML;
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
