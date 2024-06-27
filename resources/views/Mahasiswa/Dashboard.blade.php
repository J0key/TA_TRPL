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
    <main class="w-[1139px] ml-[330px] min-h-screen my-10 flex flex-col">
        <div class="flex items-center justify-between">

            <div class="text-[#404D61]">
                <p class="font-semibold text-2xl">Dashboard</p>
            </div>

            <div class="flex flex-row items-center">
                <ul class="ml-auto flex flex-row">
                    <li class="mr-8">
                        <img src="{{ asset('icon/lonceng.png') }}" alt="">
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
                </div>
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
