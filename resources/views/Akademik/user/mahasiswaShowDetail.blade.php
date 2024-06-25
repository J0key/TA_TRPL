@extends('Akademik.partial.layouts')

@section('main')
    <main class="w-[1139px] ml-[330px] min-h-screen my-10 flex flex-col">


        <form action="" method="POST">
            @csrf
            <div
                class="py-3 px-6 mt-2 bg-[#FBFFFC] flex item-center shadow-md rounded-xl shadow-slate-800 border-2 border-main_green">
                <ul class="ml-4 flex items-center">
                    <li class="mr-4">
                        <button type="button"
                            class="text-[#4C8F8B] ms-[-20px] rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                            <svg class="me-8" xmlns="http://www.w3.org/2000/svg" width="24" height="20"
                                viewBox="0 0 34 32" fill="none">
                                <path
                                    d="M32.9862 29.1261L26.8367 23.2994C29.2238 20.4564 30.3797 16.8478 30.067 13.2156C29.7542 9.58344 27.9965 6.20379 25.1552 3.77157C22.3139 1.33935 18.605 0.0394391 14.7912 0.139126C10.9773 0.238814 7.34843 1.73052 4.65063 4.30752C1.95283 6.88452 0.391198 10.3509 0.286838 13.994C0.182477 17.6371 1.54332 21.1799 4.08955 23.894C6.63578 26.608 10.1739 28.2871 13.9763 28.5858C17.7787 28.8846 21.5564 27.7804 24.5327 25.5002L30.6325 31.3269C30.7866 31.4753 30.9699 31.5931 31.1719 31.6735C31.3739 31.7538 31.5906 31.7952 31.8094 31.7952C32.0282 31.7952 32.2449 31.7538 32.4468 31.6735C32.6488 31.5931 32.8322 31.4753 32.9862 31.3269C33.285 31.0316 33.452 30.6371 33.452 30.2265C33.452 29.8158 33.285 29.4213 32.9862 29.1261ZM15.2339 25.5002C12.939 25.5002 10.6957 24.8502 8.78766 23.6323C6.87957 22.4145 5.39241 20.6835 4.51421 18.6583C3.63602 16.6331 3.40624 14.4046 3.85394 12.2546C4.30164 10.1047 5.40671 8.12981 7.0294 6.57978C8.65209 5.02975 10.7195 3.97416 12.9703 3.54651C15.221 3.11886 17.5539 3.33835 19.6741 4.17722C21.7942 5.01609 23.6064 6.43667 24.8813 8.25931C26.1562 10.082 26.8367 12.2248 26.8367 14.4169C26.8367 17.3564 25.6143 20.1755 23.4383 22.254C21.2624 24.3325 18.3111 25.5002 15.2339 25.5002Z"
                                    fill="#347677" />
                            </svg>
                            <input class=" border-none text-text-main_green" type="text" name="searchBar" id="searchBar"
                                placeholder="Search here...">
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
        </form>


        <div class="flex flex-row items-center w-full justify-between mt-8">

            <button type="button" onclick="goToPrevPage()"
                class="p-3 bg-semi_dark_green w-fit flex flex-row rounded-lg"><svg xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M15 18L9 12L15 6" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <p class="text-white text-md inline">Kembali</p>
            </button>
        </div>

        <div id="container_content"
            class="w-full h-fit p-12 mt-8 flex bg-white flex-row items-center justify-center rounded-lg shadow-md shadow-slate-500">

            <div class="flex flex-row w-full justify-center">
                <div id="container_img" class="flex flex-col items-center w-[22%] h-[22rem] bg-gray-300 rounded-lg mt-32">
                    <div class="flex flex-row w-full justify-end">
                        <button id="del_button" type="button" class="me-2 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26"
                                fill="none">
                                <path
                                    d="M20.2411 4.72467H16.6204L15.5859 3.69019H10.4135L9.37899 4.72467H5.7583V6.79363H20.2411M6.79278 20.2419C6.79278 20.7906 7.01076 21.3169 7.39877 21.7049C7.78678 22.0929 8.31303 22.3109 8.86175 22.3109H17.1376C17.6863 22.3109 18.2126 22.0929 18.6006 21.7049C18.9886 21.3169 19.2066 20.7906 19.2066 20.2419V7.82812H6.79278V20.2419Z"
                                    fill="#757D8A" />
                            </svg>
                        </button>
                    </div>
                    <svg class="mt-[40%]" xmlns="http://www.w3.org/2000/svg" width="53" height="46"
                        viewBox="0 0 53 46" fill="none">
                        <path
                            d="M45.3678 19.4622C44.7423 19.4622 44.1424 19.7107 43.7001 20.153C43.2578 20.5953 43.0093 21.1952 43.0093 21.8207V38.3303C43.0093 38.9558 42.7608 39.5557 42.3185 39.998C41.8762 40.4403 41.2763 40.6888 40.6508 40.6888H7.63167C7.00616 40.6888 6.40626 40.4403 5.96396 39.998C5.52165 39.5557 5.27317 38.9558 5.27317 38.3303V19.4622C5.27317 18.8367 5.52165 18.2368 5.96396 17.7945C6.40626 17.3522 7.00616 17.1037 7.63167 17.1037H12.3487C12.863 17.1306 13.372 16.9883 13.7978 16.6987C14.2237 16.4091 14.5431 15.9881 14.7072 15.4999L15.9808 11.632C16.139 11.1635 16.4405 10.7567 16.8425 10.4689C17.2446 10.1811 17.7269 10.0269 18.2214 10.0282H31.2167C31.8423 10.0282 32.4422 9.77972 32.8845 9.33741C33.3268 8.89511 33.5752 8.29521 33.5752 7.6697C33.5752 7.04418 33.3268 6.44429 32.8845 6.00198C32.4422 5.55968 31.8423 5.31119 31.2167 5.31119H18.1034C16.6212 5.31396 15.1773 5.78215 13.9755 6.64966C12.7737 7.51717 11.8746 8.7402 11.4053 10.1461L10.6506 12.5046H7.63167C5.75513 12.5046 3.95544 13.2501 2.62852 14.577C1.30161 15.9039 0.556152 17.7036 0.556152 19.5802V38.4482C0.556152 40.3248 1.30161 42.1244 2.62852 43.4514C3.95544 44.7783 5.75513 45.5237 7.63167 45.5237H40.6508C42.5273 45.5237 44.327 44.7783 45.6539 43.4514C46.9808 42.1244 47.7263 40.3248 47.7263 38.4482V21.9387C47.7423 21.6192 47.6931 21.2997 47.5818 20.9998C47.4704 20.6999 47.2992 20.4258 47.0786 20.1942C46.858 19.9625 46.5926 19.7782 46.2984 19.6523C46.0043 19.5265 45.6877 19.4618 45.3678 19.4622V19.4622ZM24.1412 17.1037C22.2753 17.1037 20.4514 17.657 18.9 18.6936C17.3485 19.7303 16.1394 21.2037 15.4253 22.9275C14.7113 24.6513 14.5245 26.5482 14.8885 28.3782C15.2525 30.2083 16.151 31.8892 17.4704 33.2086C18.7897 34.528 20.4707 35.4265 22.3007 35.7905C24.1308 36.1545 26.0276 35.9677 27.7515 35.2537C29.4753 34.5396 30.9487 33.3304 31.9853 31.779C33.022 30.2276 33.5752 28.4036 33.5752 26.5378C33.5752 24.0357 32.5813 21.6361 30.8121 19.8669C29.0429 18.0977 26.6433 17.1037 24.1412 17.1037V17.1037ZM24.1412 31.2548C23.2083 31.2548 22.2963 30.9781 21.5206 30.4598C20.7449 29.9415 20.1403 29.2048 19.7833 28.3429C19.4262 27.481 19.3328 26.5325 19.5148 25.6175C19.6969 24.7025 20.1461 23.862 20.8058 23.2023C21.4655 22.5426 22.306 22.0934 23.221 21.9114C24.136 21.7294 25.0844 21.8228 25.9463 22.1798C26.8083 22.5368 27.545 23.1414 28.0633 23.9171C28.5816 24.6928 28.8582 25.6048 28.8582 26.5378C28.8582 27.7888 28.3613 28.9886 27.4767 29.8732C26.592 30.7578 25.3923 31.2548 24.1412 31.2548ZM50.0848 5.31119H47.7263V2.95268C47.7263 2.32717 47.4778 1.72727 47.0355 1.28497C46.5932 0.842662 45.9933 0.594177 45.3678 0.594177C44.7423 0.594177 44.1424 0.842662 43.7001 1.28497C43.2578 1.72727 43.0093 2.32717 43.0093 2.95268V5.31119H40.6508C40.0253 5.31119 39.4254 5.55968 38.9831 6.00198C38.5407 6.44429 38.2923 7.04418 38.2923 7.6697C38.2923 8.29521 38.5407 8.89511 38.9831 9.33741C39.4254 9.77972 40.0253 10.0282 40.6508 10.0282H43.0093V12.3867C43.0093 13.0122 43.2578 13.6121 43.7001 14.0544C44.1424 14.4967 44.7423 14.7452 45.3678 14.7452C45.9933 14.7452 46.5932 14.4967 47.0355 14.0544C47.4778 13.6121 47.7263 13.0122 47.7263 12.3867V10.0282H50.0848C50.7103 10.0282 51.3102 9.77972 51.7525 9.33741C52.1948 8.89511 52.4433 8.29521 52.4433 7.6697C52.4433 7.04418 52.1948 6.44429 51.7525 6.00198C51.3102 5.55968 50.7103 5.31119 50.0848 5.31119Z"
                            fill="#132B2A" fill-opacity="0.55" />
                    </svg>
                    <p class="text-md text-gray-500 font-semibold mt-6">Set profile picture</p>
                </div>

                <div id="container_text" class="flex flex-col w-[70%] h-fit ps-16 mb-12">
                    <div id="nav-content" class="w-full px-4 flex flex-row space-x-12 ms-[-1rem] ">
                        <button id="btn1" type="button" onclick="changeModal(1)"
                            class="py-2 px-4 bg-white rounded-lg border-t-4 border-r-4 border-l-2 border-b-2 border-main_green font-semibold hover:bg-main_green hover:text-white">Identitas
                            diri</button>
                        <button id="btn2" type="button" onclick="changeModal(2)"
                            class="py-2 px-4 bg-white rounded-lg border-t-4 border-r-4 border-l-2 border-b-2 border-main_green font-semibold hover:bg-main_green hover:text-white">Tugas
                            Akhir</button>
                        <button id="btn3" type="button" onclick="changeModal(3)"
                            class="py-2 px-4 bg-white rounded-lg border-t-4 border-r-4 border-l-2 border-b-2 border-main_green font-semibold hover:bg-main_green hover:text-white">Berkas</button>
                        <button id="btn4" type="button" onclick="changeModal(4)"
                            class="py-2 px-4 bg-white rounded-lg border-t-4 border-r-4 border-l-2 border-b-2 border-main_green font-semibold hover:bg-main_green hover:text-white">Sidang</button>
                    </div>


                    <div id="modal_1" class="flex flex-col w-full h-fit hidden">
                        <p class="text-4xl font-semibold border-b-2 pb-2 border-black w-fit mt-12">Detail Profil</p>
                        <div class="flex flex-row w-full h-it">
                            <div class="flex flex-col w-[35%] h-auto space-y-14 font-semibold mt-12">
                                <p>Name</p>
                                <p>NIM</p>
                                <p>IPK</p>
                                <p>SKS</p>
                                <p>Pengalaman</p>
                                <p>Specialities</p>
                                <p>Phone</p>
                                <p>Email</p>
                            </div>

                            <div class="flex flex-col w-[60%] space-y-10 mt-12">
                                <p class="border-b-2 border-black pb-2">Shyra Athayya</p>
                                <p class="border-b-2 border-black pb-2">22/503872/SV/21827</p>
                                <p class="border-b-2 border-black pb-2">3.9</p>
                                <p class="border-b-2 border-black pb-2">90</p>
                                <p class="border-b-2 border-black pb-2">Software Engineering, Data Science, Machine
                                    Learning </p>
                                <p class="border-b-2 border-black pb-2">Software Engineering, Data Science, Machine
                                    Learning </p>
                                <p class="border-b-2 border-black pb-2">0893578345639636</p>
                                <p class="border-b-2 border-black pb-2">shyraathayya@ugm.ac.id</p>
                            </div>
                        </div>
                    </div>

                    <div id="modal_2" class="flex flex-col w-full h-fit hidden">
                        <p class="text-4xl font-semibold border-b-2 pb-2 border-black w-fit mt-12">Tugas Akhir</p>
                        <div class="flex flex-row w-full h-it">
                            <div class="flex flex-col w-[35%] space-y-10 font-semibold mt-12">
                                <p>Name</p>
                                <p>NIM</p>
                                <p>Dosen Pembimbing</p>
                                <p>Judul Proyek</p>
                            </div>

                            <div class="flex flex-col w-[60%] space-y-10 mt-12">
                                <p class="border-b-2 border-black pb-2">Shyra Athayya</p>
                                <p class="border-b-2 border-black pb-2">22/503872/SV/21827</p>
                                <p class="border-b-2 border-black pb-2">Divi Galih Prasetyo Putri</p>
                                <p class="border-b-2 border-black pb-2">SI Portofolio TA</p>
                            </div>
                        </div>
                    </div>

                    <div id="modal_3" class="flex flex-col w-full h-fit hidden">
                        <p class="text-4xl font-semibold border-b-2 pb-2 border-black w-fit mt-12">Berkas Sidang</p>
                        <div class="flex flex-row w-full h-it">
                            <div class="flex flex-col w-[35%] space-y-10 font-semibold mt-12">
                                <p>Name</p>
                                <p>NIM</p>
                                <p>Berkas Sidang</p>
                            </div>

                            <div class="flex flex-col w-[60%] space-y-10 mt-12">
                                <p class="border-b-2 border-black pb-2">Shyra Athayya</p>
                                <p class="border-b-2 border-black pb-2">121323435</p>
                                <p class="border-b-2 border-black pb-2">belum mendaftar sidang</p>
                            </div>
                        </div>
                    </div>

                    <div id="modal_4" class="flex flex-col w-full h-fit">
                        <p class="text-4xl font-semibold border-b-2 pb-2 border-black w-fit mt-12">Berkas Yudisium</p>
                        <div class="flex flex-row w-full h-it">
                            <div class="flex flex-col w-[35%] space-y-10 font-semibold mt-12">
                                <p>Name</p>
                                <p>NIM</p>
                                <p>Dosen Pembimbing</p>
                                <p>Judul Proyek</p>
                            </div>

                            <div class="flex flex-col w-[60%] space-y-10 mt-12">
                                <p class="border-b-2 border-black pb-2">Shyra Athayya</p>
                                <p class="border-b-2 border-black pb-2">121323435</p>
                                <p class="border-b-2 border-black pb-2">belum mendaftar yudisium</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </main>
    @stack('script')
@endsection
<script>
    const prevButton = document.getElementById('prev-page');
    const nextButton = document.getElementById('next-page');
    let data;
    let currentPage = 1;
    let totalPages = 1;
    let sortcounter = 0;

    function goToPrevPage() {
        // Kembali ke halaman sebelumnya
        window.history.back();
    }

    function goToDetailMahasiswa() {
        window.location.href = "{{ route('akademik.showUserDetail') }}";
    }

    function changeModal(index) {
        const modal_1 = document.getElementById('modal_1');
        const modal_2 = document.getElementById('modal_2');
        const modal_3 = document.getElementById('modal_3');
        const modal_4 = document.getElementById('modal_4');
        const listModal = [modal_1, modal_2, modal_3, modal_4];

        listModal.forEach(modal => {
            modal.style.display = "None";
        });

        if (index == 1) {
            modal_1.style.display = "flex";
        } else if (index == 2) {
            modal_2.style.display = "flex";
        } else if (index == 3) {
            modal_3.style.display = "flex";
        } else if (index == 4) {
            modal_4.style.display = "flex";
        }
    }

    async function fetchProjects(page = 1, filterName = '') {
        try {
            const response = await fetch(`http://127.0.0.1:8001/api/student?page=${page}&name=${filterName}`);
            data = await response.json();
            totalPages = data.data.last_page;
            displayProjects(data.data.data);
            updatePagination();
            setPageIndicator();
        } catch (error) {
            console.error('Error:', error);
        }
    }

    function sortProjectsChanger(sortField) {
        if (sortcounter == 0) {
            sortProjects(sortField, 'asc')
            sortcounter++;
        } else {
            sortProjects(sortField, 'desc')
            sortcounter--;
        }
        // console.log()
    }

    function sortProjects(sortField, sortDirection) {
        const projectsData = data.data.data;
        if (sortField == "lecturer") {
            projectsData.sort((a, b) => {
                if (a.lecturer.user['first_name'] < b.lecturer.user['first_name']) return sortDirection ===
                    'asc' ? -
                    1 : 1;
                if (a.lecturer.user['first_name'] > b.lecturer.user['first_name']) return sortDirection ===
                    'asc' ?
                    1 : -1;
                return 0;
            });
        } else {
            projectsData.sort((a, b) => {
                if (a[sortField] < b[sortField]) return sortDirection === 'asc' ? -1 : 1;
                if (a[sortField] > b[sortField]) return sortDirection === 'asc' ? 1 : -1;
                return 0;
            });
        }
        displayProjects(projectsData);
    }

    function displayProjects(projects) {
        const projectList = document.getElementById('project-list');
        projectList.innerHTML = ''; // Hapus semua project cards sebelumnya
        // console.log(projects)


        projects.forEach(project => {
            const newTableRow = document.createElement('tr');
            newTableRow.classList.add('mx-4', 'bg-grey-100', 'w-full', 'h-full', 'px-2', 'pb-2');

            const td1 = document.createElement('td');
            td1.classList.add('px-6', 'py-4');
            td1.textContent = project['NIM'];

            const td2 = document.createElement('td');
            td2.classList.add('px-6');
            td2.textContent = (project.user['first_name'] + project.user['last_name']);

            const td3 = document.createElement('td');
            td3.classList.add('px-6');
            td3.textContent = project['phone_number'];

            const td4 = document.createElement('td');
            td4.classList.add('px-6', 'flex', 'flex-row', 'h-full', 'bg-slate-300', 'w-full', 'items-center',
                'justify-center');
            let imgButton = document.createElement('div');
            imgButton.classList.add('bg-slate-900', 'p-2', 'px-2', 'rounded-lg', 'h-fit');
            let img = document.createElement('img');
            img.classList.add('w-2')
            if (project['judul'] == 0) {
                img.setAttribute('src', "{{ asset('icon/false.png') }}");
            } else {
                img.setAttribute('src', "{{ asset('icon/true.png') }}");
            }
            // imgButton.appendChild(img);
            // td4.appendChild(imgButton);


            const td5 = document.createElement('td');
            td5.classList.add('px-6', 'flex', 'flex-row', 'h-fit');
            imgButton.innerHTML = '';
            if (project['sidang'] == 0) {
                img.setAttribute('src', "{{ asset('icon/false.png') }}");
            } else {
                img.setAttribute('src', "{{ asset('icon/true.png') }}");
            }
            imgButton.appendChild(img);
            td5.appendChild(imgButton);

            const td6 = document.createElement('td');
            td6.classList.add('px-6', 'flex', 'flex-row', 'h-fit');
            imgButton.innerHTML = '';
            if (project['yudisium'] == 0) {
                img.setAttribute('src', "{{ asset('icon/false.png') }}");
            } else {
                img.setAttribute('src', "{{ asset('icon/true.png') }}");
            }
            imgButton.appendChild(img);
            td6.appendChild(imgButton);


            newTableRow.appendChild(td1);
            newTableRow.appendChild(td2);
            newTableRow.appendChild(td3);
            newTableRow.appendChild(td4);
            newTableRow.appendChild(td5);
            newTableRow.appendChild(td6);
            projectList.appendChild(newTableRow);

        });
        // }
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

    // fetchProjects();
</script>
