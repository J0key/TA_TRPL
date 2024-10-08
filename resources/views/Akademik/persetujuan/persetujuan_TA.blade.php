@extends('akademik.partial.layouts')

@section('main')
    <main class="w-full ml-[330px] mr-[50px] min-h-screen  flex flex-col">


        <div class="flex items-center justify-between mt-4">

            <form class="" action="">
                <div class="flex flex-row w-fit bg-semi_dark_green p-2 rounded-full items-center mt-4">
                    <img class="w-8 h-8 ms-2" src="{{ asset('icon/Mahasiswa/Tugas akhir/u_search (1).png') }}" alt="">
                    <input class="h-fit bg-transparent border-semi_dark_green text-white rounded-3xl active:bg-transparent"
                        type="text" placeholder="Search here...">
                </div>
            </form>

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


        <div class="flex items-center justify-between mt-8">

            <div class="text-[#404D61] mt-5">
                <p class="font-semibold  text-3xl">Project Need Approval</p>
                <p id="jml_TA" class="font-regular text-xl">1000 results found</p>
            </div>

            <div class="flex items-center">

                <ul class="ml-auto flex flex-row mt-6">
                    <li class="mr-4">
                        <button type="button"
                            class="text-[#4C8F8B] w-12 h-12 bg-[#FBFFFC] shadow-md shadow-black/15 rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                            <img src="{{ asset('icon/sort1.png') }}" class="w-6 h-6" alt="">
                        </button>
                    </li>
                    <li class="mr-4">
                        <button type="button"
                            class="text-[#4C8F8B] h-12 py-4 px-4 bg-[#FBFFFC] shadow-md shadow-black/15 rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                            <img src="{{ asset('icon/sort1.png') }}" class="w-6 h-6" alt="">
                            <span class="text-[15px] ml-2">Sort Chronological</span>
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


        <div class="rounded-lg border border-gray-200 shadow-md mt-10 w-full">

            <table id="tabel_projek"
                class="w-full border-collapse bg-white text-left text-sm text-gray-500 overflow-scroll">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900 w-[5%]">Action</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900 w-[35%]">Judul</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900 w-[15%]">Di upload oleh</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nama Pengaju</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900 w-[15%]">Tanggal Pengajuan</th>
                    </tr>
                </thead>

                <tbody id="isi_tabel" class="divide-y bg-white border-t border-gray-100">
                    {{-- <tr class="mx-4 bg-grey-100 w-full h-full px-2 pb-2">
                        <th class="px-6 py-4 text-white ">

                            <button type="button" onclick="goToBimbingan()" class="bg-main_green w-fit p-2 rounded-xl">
                                <img src="{{ asset('icon/eye.png') }}" alt="">
                            </button>

                        </th>
                        <td class="px-6 py-4">Shyra Athaya</td>
                        <td class="px-6 py-4">ganjil</td>
                        <td class="px-6 py-4 ">active</td>
                        <td class="px-6 py-4">0</td>
                        <td class="px-6 py-4 text-[#0064FF]">bimbingan</td>

                    </tr>
                    <tr class="mx-4 bg-grey-100 w-full h-full px-2 pb-2">
                        <th class="px-6 py-4 text-white ">

                            <button onclick="goToEditProses()" class="bg-dark_green w-fit p-2 rounded-xl">
                                <img src="{{ asset('icon/pencil.png') }}" alt="">
                            </button>

                        </th>
                        <td class="px-6 py-4">Ikhwan Hanif</td>
                        <td class="px-6 py-4">ganjil</td>
                        <td class="px-6 py-4 ">active</td>
                        <td class="px-6 py-4">0</td>
                        <td class="px-6 py-4 text-green-600">proses</td>

                    </tr> --}}
                </tbody>
            </table>
        </div>

        {{-- pagination start --}}
        <div class="w-fit h-fit flex flex-row self-center justify-center mt-12 ">
            <button type="button" onclick="prevpage()" id="prev-page"
                class="bg-semi_dark_green w-fit h-10 px-6 py-2 border-semi_dark_green border-2 rounded-s-xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15"
                    fill="none">
                    <path
                        d="M4.96016 8L8.28516 11.5C8.51849 11.75 8.86849 11.75 9.10182 11.5C9.33516 11.25 9.33516 10.875 9.10182 10.625L6.24349 7.5L9.10182 4.375C9.33516 4.125 9.33516 3.75 9.10182 3.5C8.98516 3.375 8.86849 3.3125 8.69349 3.3125C8.51849 3.3125 8.40182 3.375 8.28516 3.5L4.96016 7C4.72682 7.3125 4.72682 7.6875 4.96016 8C4.96016 7.9375 4.96016 7.9375 4.96016 8Z"
                        fill="white" />
                </svg>
            </button>
            <button id="page1"
                class="bg-white hover:bg-[#D4DFDE] w-fit h-10 px-6 py-2 border-slate-400 border-y-2 border-x-2 text-md">1</button>
            <button id="page2"
                class="bg-white  hover:bg-[#D4DFDE]  w-fit h-10 px-6 py-2 border-slate-400 border-y-2 border-x-2 text-md">2</button>
            <button id="page3"
                class="bg-white  hover:bg-[#D4DFDE]  w-fit h-10 px-6 py-2 border-slate-400 border-y-2 border-x-2 text-md">3</button>
            <button id="page4"
                class="bg-white  hover:bg-[#D4DFDE]  w-fit h-10 px-6 py-2 border-slate-400 border-y-2 border-x-2 text-md">4</button>
            <button id="page5"
                class="bg-white  hover:bg-[#D4DFDE]  w-fit h-10 px-6 py-2 border-slate-400 border-y-2 text-md">5</button>
            <button type="button" onclick="nextpage()" id="next-page"
                class=" bg-semi_dark_green w-fit h-10 px-6 py-2 border-semi_dark_green border-2 rounded-e-xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15"
                    fill="none">
                    <path
                        d="M9.06525 7.05646L5.76359 3.52521C5.70936 3.46663 5.64484 3.42013 5.57376 3.3884C5.50267 3.35667 5.42643 3.34033 5.34942 3.34033C5.27241 3.34033 5.19617 3.35667 5.12508 3.3884C5.054 3.42013 4.98948 3.46663 4.93525 3.52521C4.82661 3.64231 4.76563 3.80071 4.76562 3.96583C4.76563 4.13095 4.82661 4.28935 4.93525 4.40646L7.82275 7.53146L4.93525 10.6252C4.82661 10.7423 4.76562 10.9007 4.76562 11.0658C4.76562 11.2309 4.82661 11.3894 4.93525 11.5065C4.98928 11.5655 5.05371 11.6125 5.1248 11.6447C5.19589 11.6769 5.27224 11.6936 5.34942 11.694C5.4266 11.6936 5.50295 11.6769 5.57404 11.6447C5.64514 11.6125 5.70956 11.5655 5.76359 11.5065L9.06525 7.97521C9.12446 7.91668 9.17172 7.84565 9.20404 7.76659C9.23636 7.68752 9.25305 7.60214 9.25305 7.51583C9.25305 7.42952 9.23636 7.34414 9.20404 7.26508C9.17172 7.18601 9.12446 7.11498 9.06525 7.05646Z"
                        fill="white" fill-opacity="0.75" />
                </svg>
            </button>
        </div>
        {{-- pagination end --}}
    </main>

    @stack('script')
@endsection

<script>
    let userData = null;
    let currentPage = 1;

    const token = localStorage.getItem('token');
    if (token == null) {
        window.location.href = "{{ route('login') }}";
    }

    function goToAccTA(id) {
        window.location.href = `{{ route('akademik.acc_TA') }}?id=${id}`;
    }

    async function fetchProjects(page = 1) {
        try {
            response = await fetch(`http://127.0.0.1:8001/api/project?page=${page}&kaprodi=Not yet Approved`, {
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'X-CSRF-TOKEN': token // Sertakan token CSRF
                }
            });

            const jml_TA = document.getElementById("jml_TA");
            data = await response.json();
            totalPages = data.meta.last_page;

            totalProject = data.meta.total;
            jml_TA.textContent = totalProject + " results found";
            console.log(data.data);
            const isi_tabel = document.getElementById('isi_tabel');
            isi_tabel.innerHTML = "";
            data.data.forEach(data_projek => {
                addRow(data_projek);
            });
            updatePagination();
            setPageIndicator();

        } catch (error) {
            console.error('Error:', error);
        }
    }

    function addRow(data) {
        const isi_tabel = document.getElementById('isi_tabel');

        const row = document.createElement('tr');
        row.className = 'mx-4 bg-grey-100 w-full h-full px-2 pb-2';

        const th = document.createElement('th');
        th.className = 'px-6 py-4 text-white';

        const button = document.createElement('button');
        button.type = 'button';
        button.setAttribute('onclick', 'goToAccTA(' + data["id"] + ')');
        button.className = 'bg-main_green w-fit p-2 rounded-xl';

        const img = document.createElement('img');
        img.src = '{{ asset('icon/pencil.png') }}';
        img.alt = '';

        button.appendChild(img);
        th.appendChild(button);
        row.appendChild(th);

        const projectCreatedAt = new Date(data.Created_at);
        const tdNames = [data.title, data.uploadedBy, "nama_orang", projectCreatedAt.toLocaleDateString()];

        let index = 1;
        tdNames.forEach(dataPengajuan => {
            if (dataPengajuan == "nama_orang") {
                console.log(index);
                index++;
                if (tdNames[1] == "Dosen") {
                    if (data.Dosen_1 != null) {
                        const td = document.createElement('td');
                        td.className = 'px-6 py-4';
                        td.textContent = data.Dosen_1.user.first_name + " " + data.Dosen_1.user.last_name;
                        row.appendChild(td);
                    } else {
                        const td = document.createElement('td');
                        td.className = 'px-6 py-4';
                        td.textContent = "Dosen NULL";
                        row.appendChild(td);
                    }
                } else {
                    if (data.Mahasiswa != null) {
                        const td = document.createElement('td');
                        td.className = 'px-6 py-4';
                        td.textContent = data.Mahasiswa.user.first_name + " " + data.Mahasiswa.user.last_name;
                        row.appendChild(td);
                    } else {
                        const td = document.createElement('td');
                        td.className = 'px-6 py-4';
                        td.textContent = "MAHASISWA NULL";
                        row.appendChild(td);
                    }
                }
            } else {
                const td = document.createElement('td');
                td.className = 'px-6 py-4';
                td.textContent = dataPengajuan;
                row.appendChild(td);
            }
        });

        isi_tabel.appendChild(row);
    }

    function updatePagination() {
        const prevButton = document.getElementById("prev-page");
        const nextButton = document.getElementById("next-page");
        prevButton.disabled = currentPage === 1;
        nextButton.disabled = currentPage === totalPages;
    }

    function prevpage() {
        if (currentPage > 1) {
            currentPage--;
            fetchProjects(currentPage);
        }
    };

    function nextpage() {
        if (currentPage < totalPages) {
            currentPage++;
            fetchProjects(currentPage);
        }
    }

    function setPageIndicator() {
        for (let i = 0; i < 5; i++) {
            let buttonPage = document.getElementById("page" + (i + 1).toString());
            // console.log(buttonPage.textContent);
            buttonPage.style.backgroundColor = "#FFFFFF";
            buttonPage.style.borderColor = "#FFFFFF";

        }

        const buttonCurrentPage = document.getElementById("page" + currentPage);
        buttonCurrentPage.style.backgroundColor = "#D4DFDE";
        buttonCurrentPage.style.borderColor = "#025E5A";
    };



    async function fetchUser() {
        // FETCH DATA USER
        let response = await fetch('http://127.0.0.1:8001/api/user', {
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
    }

    fetchUser();
    fetchProjects();
</script>
