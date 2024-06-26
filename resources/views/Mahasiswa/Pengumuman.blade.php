@extends('Mahasiswa.LayoutMahasiswa')

@section('main')
    <main class="w-[1139px] ml-[330px] min-h-screen my-10 flex flex-col">


        <div class="flex items-center justify-between">

            <div class="flex flex-row bg-semi_dark_green p-2 rounded-full items-center ">
                <img class="w-8 h-8 ms-2" src="{{ asset('icon/Mahasiswa/Tugas akhir/u_search (1).png') }}" alt="">
                <form action="">
                    <input class=" bg-semi_dark_green border-semi_dark_green text-white rounded-3xl" type="text"
                        value="Search here...">
                </form>
            </div>


            <div class="flex items-center">
                <ul class="ml-auto flex flex-row mt-6">
                    <li class="mr-8">
                        <img src="{{ asset('icon/lonceng.png') }}" alt="">
                    </li>
                    <li class="mr-8">
                        <img src="{{ asset('icon/dosen.png') }}" alt="">
                    </li>
                    <li class="mr-4">
                        <p class="text-xl font-semibold">Syra Athaya</p>
                    </li>
                </ul>
            </div>
        </div>


        <div class="flex items-center justify-between mt-8">

            <div class="text-[#404D61] mt-5">
                <p class="font-semibold  text-3xl">Pengumuman</p>
                <p class="font-regular text-xl">10 results found</p>
            </div>

        </div>

        <div id="container_berita"
            class="flex flex-col rounded-lg border bg-white border-gray-200 shadow-lg mt-10 w-full overflow-scroll p-10">
            {{-- <div class="flex flex-col">
                <p class="text-xl font-semibold">PENGISIAN SKRINING KESEHATAN MENTAL MAHASISWA UGM</p>
                <p class="text-sm mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                    qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.</p>

                <button>
                    <img class="bg-slate-900 rounded-xl p-2 w-8 h-8 mt-10"
                        src="{{ asset('icon/Mahasiswa/octicon_project-16.png') }}" alt="">
                </button>

                <div class="flex flex-row items-center text-xs mt-12 space-x-4 text-slate-500">
                    <p>22 - 04 -2024 </p>
                    <div class="w-1 h-1 bg-slate-500 rounded-full"></div>
                    <p>updated 12 - 04 - 2024 </p>
                </div>
                <div class="w-full h-1 bg-slate-300 my-10"></div>

            </div> --}}

        </div>

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
    const token = localStorage.getItem('token');

    async function fetchProjects(page = 1, filterName = '') {
        try {
            const response = await fetch(`http://127.0.0.1:8001/api/announcement?page=${page}&name=${filterName}`, {
                headers: {
                    'Authorization': `Bearer ${token}`
                }
            });
            data = await response.json();
            totalPages = data.data.last_page;
            displayProjects(data.data.data);
            updatePagination();
            setPageIndicator();
        } catch (error) {
            console.error('Error:', error);
        }
    }


    function displayProjects(projects) {
        const containerBerita = document.getElementById('container_berita');
        if (projects.length == 0) {
            const emptyText = document.createElement('p');
            emptyText.classList.add('text-lg', 'text-black', 'w-full', 'text-center');
            emptyText.textContent = "Tidak ada pengumuman"
            containerBerita.appendChild(emptyText);
        } else {
            projects.forEach(project => {
                const container_content = document.createElement('div');
                container_content.classList.add('flex', 'flex-col');

                const tittle = document.createElement('p');
                tittle.classList.add('text-xl', 'font-semibold');
                tittle.textContent = project.title;

                const detail = document.createElement('p');
                detail.classList.add('text-sm', 'mt-4');
                detail.textContent = project.detail;

                const buttonAtc = document.createElement('button');
                const logoAtc = document.createElement('img');
                logoAtc.classList.add('bg-slate-900', 'rounded-xl', 'p-2', 'w-8', 'h-8', 'mt-10');
                logoAtc.setAttribute('src', "{{ asset('icon/Mahasiswa/octicon_project-16.png') }}");
                buttonAtc.appendChild(logoAtc);

                const container_footer = document.createElement('div');
                container_footer.classList.add('flex', 'flex-row', 'items-center', 'text-xs', 'mt-12',
                    'space-x-4', 'text-black');
                const uploadDate = document.createElement('p');
                const projectCreatedAt = new Date(project.created_at);
                uploadDate.textContent = projectCreatedAt.toLocaleDateString();
                container_footer.appendChild(uploadDate);

                const pembatas = document.createElement('div');
                pembatas.classList.add('w-full', 'h-1', 'bg-slate-300', 'my-10');


                container_content.appendChild(tittle);
                container_content.appendChild(detail);
                container_content.appendChild(buttonAtc);
                container_content.appendChild(container_footer);
                container_content.appendChild(pembatas);

                containerBerita.appendChild(container_content);
            });
        }
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
