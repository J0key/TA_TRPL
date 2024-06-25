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


        <div class="flex flex-row items-center w-full justify-between mt-8">

            <div class="text-[#404D61] mt-5">
                <p class="font-semibold  text-3xl">Bimbingan Mahasiswa</p>
                <p id="banyak-data" class="font-regular text-xl">0 results found</p>
            </div>

            <div class="flex items-center">

                <ul class="ml-auto flex flex-row mt-6">
                    <li class="mr-4">
                        <button type="button" onclick="sortProjectsChanger('angkatan');"
                            class="text-[#4C8F8B] h-12 py-4 px-4 bg-[#FBFFFC] shadow-md shadow-black/15 flex items-center justify-center hover:bg-gray-50 hover:text-gray-600 rounded-xl">
                            <img src="{{ asset('icon/sort1.png') }}" class="w-6 h-6" alt="">
                            <span class="text-[15px] ml-2">Angkatan</span>
                        </button>
                    </li>
                    <li class="mr-4">
                        <button type="button" onclick="exportToExcel()"
                            class="text-white h-12 py-4 px-4 bg-slate-800 shadow-md shadow-black/15 flex items-center justify-center rounded-xl">
                            <span class="text-[15px] ml-2">
                                <svg class="inline me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                    viewBox="0 0 16 17" fill="none">
                                    <g clip-path="url(#clip0_144_19339)">
                                        <path
                                            d="M9.66699 1.3678H4.00033C3.6467 1.3678 3.30756 1.50827 3.05752 1.75832C2.80747 2.00837 2.66699 2.34751 2.66699 2.70113V13.3678C2.66699 13.7214 2.80747 14.0606 3.05752 14.3106C3.30756 14.5607 3.6467 14.7011 4.00033 14.7011H12.0003C12.3539 14.7011 12.6931 14.5607 12.9431 14.3106C13.1932 14.0606 13.3337 13.7214 13.3337 13.3678V5.03446L9.66699 1.3678Z"
                                            stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9.33301 1.3678V5.3678H13.333" stroke="white" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M10.6663 8.70105H5.33301" stroke="white" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M10.6663 11.3678H5.33301" stroke="white" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M6.66634 6.03442H5.33301" stroke="white" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_144_19339">
                                            <rect width="16" height="16" fill="white"
                                                transform="translate(0 0.0344238)" />
                                        </clipPath>
                                    </defs>
                                </svg>Export to excel</span>
                        </button>
                    </li>


                </ul>


            </div>

        </div>

        <div class="rounded-lg border border-gray-200 shadow-md mt-10 w-full overflow-scroll">

            <table class="border-collapse w-full bg-white text-left text-sm text-gray-500">
                <thead class="bg-gray-50 w-full">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">NIM</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nama</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Projek</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Sidang</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nilai akhir</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Yudisium</th>
                    </tr>
                </thead>

                <tbody id="project-list" class="divide-y w-full bg-white border-t border-gray-100">


                    <tr class="mx-4 bg-grey-100 w-fit h-full px-2 pb-2">
                        <td class="px-6 py-4">22/503872/SV/21552</td>
                        <td class="px-6 py-4 "> Ikhwan Hanif Firdaus</td>
                        <td class="px-6 py-4 ">SI Portofolio TA</td>
                        <td class="px-6 py-4 ">-</td>
                        <td class="px-6 py-4 ">90</td>
                        <td class="px-6 py-4 ">-</td>
                    </tr>

                    <tr class="mx-4 bg-grey-100 w-fit h-full px-2 pb-2">
                        <td class="px-6 py-4">22/503872/SV/21552</td>
                        <td class="px-6 py-4 "> Ikhwan Hanif Firdaus</td>
                        <td class="px-6 py-4 ">SI Portofolio TA</td>
                        <td class="px-6 py-4 ">-</td>
                        <td class="px-6 py-4 ">90</td>
                        <td class="px-6 py-4 ">-</td>
                    </tr>


                    <tr class="mx-4 bg-grey-100 w-fit h-full px-2 pb-2">
                        <td class="px-6 py-4">22/503872/SV/21552</td>
                        <td class="px-6 py-4 "> Ikhwan Hanif Firdaus</td>
                        <td class="px-6 py-4 ">SI Portofolio TA</td>
                        <td class="px-6 py-4 ">-</td>
                        <td class="px-6 py-4 ">90</td>
                        <td class="px-6 py-4 ">-</td>
                    </tr>



                </tbody>
            </table>
        </div>

        <div class="w-fit h-fit flex flex-row self-center justify-center mt-12 shadow-md shadow-slate-500">
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

    function goToDetailMahasiswa() {
        window.location.href = "{{ route('akademik.showUserDetail') }}";
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
