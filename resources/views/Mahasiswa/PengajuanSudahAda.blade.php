@extends('Mahasiswa.LayoutMahasiswa')

@section('main')
    <main class="w-full ml-[330px] mr-[50px] min-h-screen flex flex-col">

        <div class="flex items-center justify-between mt-4">

            <div class="text-[#404D61]">
                <p class="font-semibold text-2xl">Pengajuan Judul</p>
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

        <button
            class="bg-semi_dark_green my-12 text-white w-fit rounded-xl flex flex-row items-center justify-center px-4 py-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37" fill="none">
                <path
                    d="M14.8193 24.4045L15.1068 24.0692C15.2973 23.8469 15.2973 23.4865 15.1068 23.2642L11.6945 19.3062H26.977C27.2464 19.3062 27.4648 19.0513 27.4648 18.737V18.2627C27.4648 17.9483 27.2464 17.6935 26.977 17.6935H11.6945L15.1068 13.7355C15.2973 13.5132 15.2973 13.1528 15.1068 12.9305L14.8193 12.5951C14.6288 12.3729 14.3199 12.3729 14.1294 12.5951L9.39345 18.0974C9.20293 18.3196 9.20293 18.68 9.39345 18.9024L14.1294 24.4045C14.3199 24.6269 14.6288 24.6269 14.8193 24.4045Z"
                    fill="white" />
            </svg>
            <p>Back</p>
        </button>

        <div class="bg-white rounded-xl shadow-slate-500 shadow-lg p-10 flex flex-col w-full mb-20">
            <form action="" method="POST">
                @csrf

                <div class="form-group">
                    <label class=" block mb-2 font-semibold" for="title">Usulan Judul</label>
                    <input type="text" id="title" name="title" style="" placeholder="Judul Proyek" required
                        disabled
                        class="form-control min-h-12 rounded-lg border-gray-500 w-full focus:border-semi_dark_green"
                        value="">
                </div>

                <div class="form-group mt-12">
                    <label class=" block mb-2 font-semibold" for="agency">Nama Perusahaan Mitra</label>
                    <input type="text" id="agency" name="agency" style="" required disabled
                        placeholder="Nama Perusahaan / agensi"
                        class="form-control min-h-12 rounded-lg border-gray-500 w-full focus:border-semi_dark_green"
                        value="">
                </div>

                <div class="form-group mt-12">
                    <label class=" block mb-2 font-semibold" for="tools">Tools</label>
                    <input type="text" id="tools" name="tools" style="" placeholder="Tools yang di gunakan"
                        disabled
                        class="form-control min-h-12 rounded-lg border-gray-500 w-full focus:border-semi_dark_green"
                        onkeydown="saveData(event)" value="">
                </div>

                <div id="arrayTools" class="flex flex-row space-x-3 w-full flex-wrap">

                </div>

                <div class="form-group mt-12">
                    <label class=" block mb-2 font-semibold" for="description">Deskripsi</label>
                    <textarea type="text" id="description" name="description" style="" placeholder="Deskripsi projek" disabled
                        class="form-control min-h-32 rounded-lg border-gray-500 w-full focus:border-semi_dark_green"
                        onkeydown="saveData(event)" value=""></textarea>
                </div>

                <div class="w-full grid grid-flow-col justify-stretch space-x-12 mt-10">
                    <div class="">
                        <label class=" block mb-2 font-semibold" for="Dosen_1">Dosen Pembimbing 1</label>
                        <select id="Dosen_1" type="dropdown" name="Dosen_1" disabled
                            class="form-control rounded-lg border-gray-500 w-full py-4 px-4 mt-4" value="">
                        </select>
                    </div>

                    <div class="">
                        <label class=" block mb-2 font-semibold" for="Dosen_2">Dosen Pembimbing 2</label>
                        <select id="Dosen_2" type="dropdown" name="Dosen_2"
                            class="form-control rounded-lg border-gray-500 w-full py-4 px-4 mt-4" value="">
                        </select>
                    </div>
                </div>

                <p id="errorMessage" class="flex flex-row mt-8 text-red-500 hidden">Masih ada kolom yang kosong*</p>

                <div class="flex flex-row w-full justify-end">
                    <button id="btn_submit" type="button" onclick="submitForm()"
                        class="bg-semi_dark_green mt-12 text-white w-fit rounded-xl flex flex-row justify-self-center px-24 py-4 text-lg">
                        Submit
                    </button>
                </div>

            </form>
        </div>


    </main>
    @stack('script')
@endsection


<script>
    // BUAT ATUR ARRAY TOOLS
    function saveData(event) {
        if (event.key === 'Enter') {
            const tools = document.getElementById('tools');
            arrayTools.push(tools.value);
            console.log(arrayTools);
            updateArray();
            tools.value = "";
        }
    }

    function updateArray() {
        let arrayToolsElement = document.getElementById("arrayTools");
        arrayToolsElement.innerHTML = '';
        arrayTools.forEach(tool => {
            const container = document.createElement('div');
            container.classList.add("flex", "flex-row", "rounded-xl", "py-1", "px-2", "border-semi_dark_green",
                "items-center", "justify-center", "border-2", "w-fit", "h-fit", "mt-6");

            const svgNamespace = "http://www.w3.org/2000/svg";

            const buttonDel = document.createElement("button");
            buttonDel.setAttribute('type', 'button');
            buttonDel.setAttribute('id', tool);
            buttonDel.setAttribute('onclick', 'deleteArray(this.id)');


            const svg = document.createElementNS(svgNamespace, "svg");
            svg.setAttribute("width", "16");
            svg.setAttribute("height", "16");
            svg.setAttribute("viewBox", "0 0 16 16");
            svg.setAttribute("fill", "none");

            // Membuat elemen path
            const path = document.createElementNS(svgNamespace, "path");
            path.setAttribute("d", "M11.25 4.75L4.75 11.25M4.75 4.75L11.25 11.25");
            path.setAttribute("stroke", "black");
            path.setAttribute("stroke-width", "1.5");
            path.setAttribute("stroke-linecap", "round");
            path.setAttribute("stroke-linejoin", "round");

            svg.appendChild(path);
            buttonDel.appendChild(svg)
            container.appendChild(buttonDel);

            const text = document.createElement('p');
            text.textContent = tool;
            container.appendChild(text);

            arrayToolsElement.appendChild(container);
        });
    }

    function deleteArray(value) {
        arrayTools = arrayTools.filter(tool => tool !== value);
        updateArray();
    }

    async function fetchUser() {
        try {
            // FETCH DATA USER
            let response = await fetch('http://127.0.0.1:8001/api/user', {
                headers: {
                    'Authorization': `Bearer ${token}`
                }
            });

            if (response.ok) {
                userData = await response.json();
                const usernameObj = document.getElementById('username_txt');
                usernameObj.textContent = userData.user_data.username;
            }

        } catch (error) {
            console.error('Error:', error);
        }
    }

    async function fetchProject(id) {
        const url = `http://127.0.0.1:8001/api/project/${id}`;

        try {
            // FETCH DATA PROJECT
            let response = await fetch(url, {
                headers: {
                    'Authorization': `Bearer ${token}`
                }
            });

            if (response.ok) {
                const titleField = document.getElementById("title");
                const agencyField = document.getElementById("agency");
                const descriptionField = document.getElementById("description");
                const lecturer1_idField = document.getElementById("Dosen_1");
                const lecturer2_idField = document.getElementById("Dosen_2");

                data = await response.json();
                titleField.value = data.data.title;
                agencyField.value = data.data.agency;
                descriptionField.value = data.data.description;

                const strTools = data.data.tools;
                arrayTools = strTools.split(", ");
                updateArray();

                // console.log(data.data.Dosen_1.user["first_name"]);

                // lecturer1_idField.value = data.data.Dosen_1.user["first_name"] + " " + data.data.Dosen_1.user[
                //     "last_name"];

                const newOption = document.createElement("option");
                newOption.value = data.data.Dosen_1.id;
                newOption.textContent = data.data.Dosen_1.user["first_name"] + " " + data.data.Dosen_1.user[
                    "last_name"];
                lecturer1_idField.appendChild(newOption);

                if (data.data.Dosen_2 != null) {
                    lecturer2_idField.disabled = true;
                    const newOption2 = document.createElement("option");
                    newOption2.value = data.data.Dosen_2.id;
                    newOption2.textContent = data.data.Dosen_2.user["first_name"] + " " + data.data.Dosen_2.user[
                        "last_name"];
                    lecturer2_idField.appendChild(newOption2);
                } else {
                    fethDosenAll();
                }

            }

        } catch (error) {
            console.error('Error:', error);
        }
    }

    async function fethDosenAll() {

        let url = "http://127.0.0.1:8001/api/lecturer";

        while (url != null) {
            // FETCH GET DOSEN ALL
            response = await fetch(url, {
                headers: {
                    'Authorization': `Bearer ${token}`
                }
            });
            const dropdown1 = document.getElementById('Dosen_1');
            const dropdown2 = document.getElementById('Dosen_2');

            data = await response.json();
            url = data.data.links.next;
            console.log(url);
            data.data.data.forEach(dataDosen => {

                const option2 = document.createElement('option');
                option2.value = dataDosen.id;
                option2.textContent = dataDosen.user.first_name + " " + dataDosen.user.last_name;
                dropdown2.appendChild(option2);
            });
        }
    }

    function mergeArray() {
        let toolsString = "";
        let counter = 1;
        arrayTools.forEach(tool => {
            toolsString += tool;
            if (counter != arrayTools.length) {
                toolsString += ", ";
            }
        });
        return toolsString;
    }

    function validateInput() {
        const titleField = document.getElementById("title");
        const agencyField = document.getElementById("agency");
        const descriptionField = document.getElementById("description");
        const lecturer1_idField = document.getElementById("Dosen_1");
        const lecturer2_idField = document.getElementById("Dosen_2");

        if (titleField.value != "" && agencyField.value != "" && arrayTools.length != 0) {
            return true;
        } else {
            return false;
        }
    }

    async function submitForm() {
        const titleField = document.getElementById("title");
        const agencyField = document.getElementById("agency");
        const descriptionField = document.getElementById("description");
        const lecturer1_idField = document.getElementById("Dosen_1");
        const lecturer2_idField = document.getElementById("Dosen_2");

        const data = {
            title: titleField.value,
            agency: agencyField.value,
            description: descriptionField.value,
            tools: mergeArray(),
            status: "progress",
            instance: "University",
            lecturer1_id: lecturer1_idField.value,
            lecturer2_id: lecturer2_idField.value
        };

        if (validateInput()) {
            try {
                const response = await fetch('http://127.0.0.1:8001/api/project', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': `Bearer ${token}`
                    },
                    body: JSON.stringify(data)
                });

                if (response.ok) {
                    alert('Berhasil menambah data');
                    // console.log(data);
                    window.location.href = "{{ route('mahasiswa.tugasakhir') }}";
                } else {
                    alert(`Error: ${data.message}`);
                }

            } catch (error) {
                console.error('Error:', error);
                alert(
                    'Terjadi kesalahan saat mengupdate data. Silakan coba lagi.');
            }

        } else {
            const emptyMessage = document.getElementById("errorMessage");
            emptyMessage.style.display = "flex";
        }

    }


    const prevButton = document.getElementById('prev-page');
    const nextButton = document.getElementById('next-page');
    let data;
    let currentPage = 1;
    let totalPages = 1;
    let sortcounter = 0;
    let arrayTools = [];

    const currentUrl = window.location.href;
    const url = new URL(currentUrl);
    const id = url.searchParams.get('id');
    console.log(id);
    const token = localStorage.getItem('token');
    console.log(token);

    if (token == null) {
        window.location.href = "{{ route('login') }}";
    }

    fetchUser();
    fetchProject(id);
</script>
