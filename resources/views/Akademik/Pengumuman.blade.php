@extends('Akademik.partial.layouts')

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


        <button type="button" onclick="toBuatPengumuman()"
            class=" bg-dark_green flex flex-row items-center justify-center text-white px-6 py-4 rounded-xl w-fit mt-10">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="26" viewBox="0 0 25 26" fill="none">
                <path
                    d="M19.3377 12.0142H13.2811V5.95767C13.2811 5.68995 13.1748 5.4332 12.9855 5.2439C12.7962 5.05459 12.5394 4.94824 12.2717 4.94824C12.004 4.94824 11.7472 5.05459 11.5579 5.2439C11.3686 5.4332 11.2623 5.68995 11.2623 5.95767V12.0142H5.20571C4.938 12.0142 4.68125 12.1206 4.49194 12.3099C4.30264 12.4992 4.19629 12.7559 4.19629 13.0236C4.19629 13.2914 4.30264 13.5481 4.49194 13.7374C4.68125 13.9267 4.938 14.0331 5.20571 14.0331H11.2623V20.0896C11.2623 20.3573 11.3686 20.6141 11.5579 20.8034C11.7472 20.9927 12.004 21.099 12.2717 21.099C12.5394 21.099 12.7962 20.9927 12.9855 20.8034C13.1748 20.6141 13.2811 20.3573 13.2811 20.0896V14.0331H19.3377C19.6054 14.0331 19.8621 13.9267 20.0514 13.7374C20.2407 13.5481 20.3471 13.2914 20.3471 13.0236C20.3471 12.7559 20.2407 12.4992 20.0514 12.3099C19.8621 12.1206 19.6054 12.0142 19.3377 12.0142Z"
                    fill="white" />
            </svg>
            <p>Buat pengumuman</p>
        </button>


        <div class="flex items-center justify-between mt-6">

            <div class="text-[#404D61] mt-5">
                <p class="font-semibold  text-3xl">Pengumuman</p>
                <p id="jml_pengu" class="font-regular text-xl">10 results found</p>
            </div>

        </div>

        <div id="container_berita"
            class="flex flex-col rounded-lg border bg-white border-gray-200 shadow-lg mt-10 w-full p-10">

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
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
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

    const token = localStorage.getItem('token');
    if (token == null) {
        window.location.href = "{{ route('login') }}";
    }

    const prevButton = document.getElementById('prev-page');
    const nextButton = document.getElementById('next-page');
    let data;
    let currentPage = 1;
    let totalPages = 1;
    let totalAnouncement = 0;
    let sortcounter = 0;

    function toBuatPengumuman() {
        window.location.href = "{{ route('akademik.addPengumuman') }}";
    }

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

    async function fetchAnouncements(page = 1, filterName = '') {
        try {
            const response = await fetch(`http://127.0.0.1:8001/api/announcement?page=${page}&name=${filterName}`, {
                headers: {
                    'Authorization': `Bearer ${token}`
                }
            });
            data = await response.json();
            console.log(data);
            totalPages = data.meta.last_page;
            const jml_pengu = document.getElementById("jml_pengu");
            jml_pengu.textContent = data.meta.total + " results found";
            displayAnouncements(data.data);
            updatePagination();
            setPageIndicator();
        } catch (error) {
            console.error('Error:', error);
        }
    }


    function displayAnouncements(projects) {
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
                buttonAtc.setAttribute('onclick', 'toProjectDetails(' + project["id"] + ')');

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
            fetchAnouncements(currentPage);
        }
    };

    function nextpage() {
        if (currentPage < totalPages) {
            currentPage++;
            fetchAnouncements(currentPage);
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


    fetchUser();
    fetchAnouncements();
</script>
