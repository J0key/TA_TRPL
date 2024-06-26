@extends('Mahasiswa.LayoutMahasiswa')

@section('main')
    <main class="w-[1139px] ml-[330px] min-h-screen my-10 flex flex-col">


        <div class="flex flex-row w-full h-fit justify-between items-center">
            <form class="" action="">
                <div class="flex flex-row w-fit bg-semi_dark_green p-2 rounded-full items-center mt-4">
                    <button type="submit">
                        <img class="w-8 h-8 ms-2" src="{{ asset('icon/Mahasiswa/Tugas akhir/u_search (1).png') }}" alt="Search Icon">
                    </button>
                    <input class="h-fit bg-semi_dark_green border-semi_dark_green  text-white rounded-3xl" type="text" placeholder="Search here...">
                </div>
            </form>


            <div class="flex items-center">
                <ul class="ml-auto flex flex-row">
                    <li class="mr-8">
                        <img src="{{ asset('icon/lonceng.png') }}" alt="">
                    </li>
                    <li class="mr-8">
                        <img src="{{ asset('icon/dosen.png') }}" alt="">
                    </li>
                    <li class="mr-4">
                        <p class="text-xl font-semibold"></p>
                    </li>
                </ul>
            </div>
        </div>


        <div class="flex flex-row items-center w-full justify-between mt-8">
            <div class="text-[#404D61] mt-5">
                <p class="font-semibold  text-3xl">Tugas Akhir</p>
                <p class="font-regular text-xl">0 results found</p>
            </div>


            <div class="flex items-center ">
                <ul class="ml-auto flex flex-row mt-6 ">
                    <li class="mr-4">
                        <button type="button" onclick="sortProjectsChanger('title');"
                            class="text-[#4C8F8B] h-12 py-4 px-4 bg-[#FBFFFC] shadow-md shadow-black/15 flex items-center justify-center hover:bg-gray-50 hover:text-gray-600 rounded-xl">
                            <img src="{{ asset('icon/sort1.png') }}" class="w-6 h-6" alt="">
                            <span class="text-[15px] ml-2">Judul</span>
                        </button>
                    </li>
                    <li class="mr-4">
                        <button type="button" onclick="sortProjectsChanger('lecturer');"
                            class="text-[#4C8F8B] h-12 py-4 px-4 bg-[#FBFFFC] shadow-md shadow-black/15 flex items-center justify-center hover:bg-gray-50 hover:text-gray-600 rounded-xl">
                            <img src="{{ asset('icon/sort1.png') }}" class="w-6 h-6" alt="">
                            <span class="text-[15px] ml-2">Dosen</span>
                        </button>
                    </li>
                    <li class="mr-4">
                        <button type="button" onclick="sortProjectsChanger('tools');"
                            class="text-[#4C8F8B] h-12 py-4 px-4 bg-[#FBFFFC] shadow-md shadow-black/15 flex items-center justify-center hover:bg-gray-50 hover:text-gray-600 rounded-xl">
                            <img src="{{ asset('icon/sort1.png') }}" class="w-6 h-6" alt="">
                            <span class="text-[15px] ml-2">Tools</span>
                        </button>
                    </li>
                    <li class="mr-4">
                        <button type="button" onclick="sortProjectsChanger('created_at');"
                            class="text-[#4C8F8B] h-12 py-4 px-4 bg-[#FBFFFC] shadow-md shadow-black/15 flex items-center justify-center hover:bg-gray-50 hover:text-gray-600 rounded-xl">
                            <img src="{{ asset('icon/sort1.png') }}" class="w-6 h-6" alt="">
                            <span class="text-[15px] ml-2">Uploaded</span>
                        </button>
                    </li>
                </ul>
            </div>

        </div>

       {{-- table start --}}
       <div class="rounded-lg border border-gray-200 shadow-md mt-10 w-full overflow-scroll">
        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900" style="min-width: 200px;">Judul Proyek</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900" style="min-width: 180px;">Penanggung Jawab</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900" style="min-width: 300px;">Deskripsi</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900" style="min-width: 120px;">Tools</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900" style="min-width: 150px;">Tanggal Upload</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900" style="min-width: 100px;">Action</th>
                </tr>
            </thead>

            <tbody id="project-list" class="divide-y bg-white border-t border-gray-100">
                </tbody>
        </table>
    </div>

        {{-- table end --}}


        {{-- pagination start --}}
        <div class="w-fit h-fit flex flex-row self-center justify-center mt-12 ">
            <button type="button" onclick="prevpage()" id="prev-page"
                class="bg-semi_dark_green w-fit h-10 px-6 py-2 border-semi_dark_green border-2 rounded-s-xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
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
    const prevButton = document.getElementById('prev-page');
    const nextButton = document.getElementById('next-page');
    let data;
    let currentPage = 1;
    let totalPages = 1;
    let sortcounter = 0;

    async function fetchProjects(page = 1, filterName = '') {
        try {
            const response = await fetch(`http://127.0.0.1:8001/api/project?page=${page}&name=${filterName}`);
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
            console.log(project["title"]);
            const newTableRow = document.createElement('tr');
            newTableRow.classList.add('mx-4', 'bg-grey-100', 'w-full', 'h-full', 'px-2', 'pb-2');

            const td1 = document.createElement('td');
            td1.classList.add('px-6', 'py-4');
            td1.textContent = project['title'];

            const td2 = document.createElement('td');
            td2.classList.add('px-6', 'py-4');
            td2.textContent = (project.lecturer.user["first_name"] + project.lecturer.user["last_name"]);

            const td3 = document.createElement('td');
            td3.classList.add('px-6', 'py-4');
            td3.textContent = project['description'];

            const td4 = document.createElement('td');
            td4.classList.add('px-6', 'py-4');
            td4.textContent = project['tools'];

            const td5 = document.createElement('td');
            td5.classList.add('px-6', 'py-4');
            td5.textContent = project['created_at'];

            const td6 = document.createElement('td');
            td6.classList.add('px-6', 'py-4');

            const imgButton = document.createElement('button');
            imgButton.classList.add('bg-slate-900', 'p-2', 'px-4', 'rounded-xl');
            const img = document.createElement('img');
            imgButton.setAttribute('onclick', 'toProjectDetails(' + project["id"] + ')');
            imgButton.setAttribute('type', 'button');
            img.setAttribute('src', "{{ asset('icon/Mahasiswa/Tugas akhir/arrow.png') }}");

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
            console.log(buttonPage.textContent);
            buttonPage.style.backgroundColor = "#FFFFFF";
            buttonPage.style.borderColor = "#FFFFFF";

        }

        const buttonCurrentPage = document.getElementById("page" + currentPage);
        buttonCurrentPage.style.backgroundColor = "#D4DFDE";
        buttonCurrentPage.style.borderColor = "#025E5A";
    };

    fetchProjects();
</script>
