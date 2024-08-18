@extends('Akademik.partial.layouts')

@section('main')
    <main class="w-full ml-[330px] mr-[50px] min-h-screen flex flex-col">

        <div class="flex items-center justify-between mt-4">

            <div class="text-[#404D61]">
                <p class="font-semibold text-2xl">Persetujuan Tugas Akhir</p>
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


        <button class="bg-main_green px-4 py-2 w-fit h-fit mt-10 rounded-lg text-white text-lg">
            <i class="ri-arrow-left-s-line mr-2"
                style="
        transition: transform 0.3s ease,
            display 0.3s ease;
    "></i>Back</button>

        <div class="w-full h-fit flex flex-row mt-10 space-x-8">
            <div id="container_profile"
                class="w-[30%] h-full p-8 px-10 bg-white rounded-lg shadow-md shadow-slate-500 flex flex-col items-center justify-end">
                <div class="w-full h-full flex flex-row justify-center pt-8">
                    <div class="bg-gray-200 rounded-full w-64 h-64"></div>
                </div>

                <div id="container_dosen" class="flex-col w-full hidden">
                    <div class="flex flex-row justify-between text-sm">
                        <p class="flex w-[60%]">Name : </p>
                        <div class="w-full h-fit flex flex-row">
                            <p id="nameField1" class="flex text-left">Shyra Athaya</p>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between mt-4 text-sm">
                        <p class="flex w-[60%]">NID : </p>
                        <div class="w-full h-fit flex flex-row">
                            <p id="NIDField" class="flex text-left">22/3242134/SV/3123</p>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between mt-4 text-sm">
                        <p class="flex w-[60%]">Phone number : </p>
                        <div class="w-full h-fit flex flex-row">
                            <p id="phoneField" class="flex text-left">110</p>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between mt-4 text-sm">
                        <p class="flex w-[60%]">Max quota : </p>
                        <div class="w-full h-fit flex flex-row">
                            <p id="maxField" class="flex text-left">3.7</p>
                        </div>
                    </div>
                </div>

                <div id="container_mhs" class="flex-col w-full hidden">
                    <div class="flex flex-row justify-between text-sm">
                        <p class="flex w-[60%]">Name : </p>
                        <div class="w-full h-fit flex flex-row">
                            <p id="nameField2" class="flex text-left">Shyra Athaya2</p>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between mt-4 text-sm">
                        <p class="flex w-[60%]">NIM : </p>
                        <div class="w-full h-fit flex flex-row">
                            <p id="NIMField" class="flex text-left">22/3242134/SV/3123</p>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between mt-4 text-sm">
                        <p class="flex w-[60%]">SKS : </p>
                        <div class="w-full h-fit flex flex-row">
                            <p id="SKSField" class="flex text-left">110</p>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between mt-4 text-sm">
                        <p class="flex w-[60%]">IPK : </p>
                        <div class="w-full h-fit flex flex-row">
                            <p id="IPKField" class="flex text-left">3.7</p>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between mt-4 text-sm">
                        <p class="flex w-[60%]">TMT : </p>
                        <div class="w-full h-fit flex flex-row">
                            <p id="TMTField" class="flex text-left">2023/2024</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="w-[70%] h-fit p-8 px-10 bg-white rounded-lg shadow-md shadow-slate-500 flex flex-col">
                <form action="" method="POST">
                    @csrf

                    <div class="form-group">
                        <label class="text-sm block mb-2 font-semibold" for="title">Usulan Judul</label>
                        <input type="text" id="title" name="title" style="" placeholder="Judul Proyek"
                            required disabled
                            class="form-control text-sm min-h-12 rounded-lg border-gray-500 w-full focus:border-semi_dark_green"
                            value="">
                    </div>

                    <div class="form-group mt-6">
                        <label class="text-sm  block mb-2 font-semibold" for="agency">Nama Perusahaan Mitra</label>
                        <input type="text" id="agency" name="agency" style="" required disabled
                            placeholder="Nama Perusahaan / agensi"
                            class="form-control min-h-12 text-sm rounded-lg border-gray-500 w-full focus:border-semi_dark_green"
                            value="">
                    </div>

                    <div class="form-group mt-6">
                        <label class="text-sm  block mb-2 font-semibold" for="tools">Tools</label>
                        <input type="text" id="tools" name="tools" style=""
                            placeholder="Tools yang di gunakan" disabled
                            class="form-control min-h-12 text-sm rounded-lg border-gray-500 w-full focus:border-semi_dark_green"
                            onkeydown="saveData(event)" value="">
                    </div>

                    <div id="arrayTools" class="flex flex-row space-x-3 w-full flex-wrap">

                    </div>

                    <div class="form-group mt-6">
                        <label class="text-sm  block mb-2 font-semibold" for="description">Deskripsi</label>
                        <textarea type="text" id="description" name="description" style="" placeholder="Deskripsi projek" disabled
                            class="form-control min-h-32 text-sm rounded-lg border-gray-500 w-full focus:border-semi_dark_green"
                            onkeydown="saveData(event)" value=""></textarea>
                    </div>
                </form>
            </div>
        </div>

        <div class="w-full h-fit p-4 px-6 bg-white rounded-lg shadow-md shadow-slate-500 flex flex-row mt-10">

            <div class="w-[50%] h-fit p-8 flex flex-col space-y-4">
                <p class="font-semibold">Dosen Pembimbing 1</p>
                <input id="Dosen_1" type="text" name="Dosen_1" style="" placeholder="Nama Dosen" disabled
                    class="form-control min-h-12 text-sm rounded-lg border-gray-500 w-full focus:border-semi_dark_green"
                    value="">
            </div>

            <div class="w-[50%] h-fit p-8 flex flex-col space-y-4">
                <p class="font-semibold">Dosen Pembimbing 2</p>
                <input id="Dosen_2" type="text" name="Dosen_1" style="" placeholder="Nama Dosen" disabled
                    class="form-control min-h-12 text-sm rounded-lg border-gray-500 w-full focus:border-semi_dark_green"
                    value="">
            </div>
        </div>

        <div class="flex flex-row-reverse w-full h-fit space-x-6 mb-12">
            <button type="button" onclick="accProject()"
                class=" bg-main_green px-24 py-2 w-fit h-fit mt-10 rounded-lg text-white text-lg ms-10">
                Setujui</button>
            <button type="button" onclick="revisiProject()"
                class=" bg-red-600 px-24 py-2 w-fit h-fit mt-10 rounded-lg text-white text-lg">
                Revisi</button>
        </div>


    </main>
    @stack('script')
@endsection
<script>
    let userData = null;
    let arrayTools = [];
    const token = localStorage.getItem('token');
    console.log(token);
    if (token == null) {
        window.location.href = "{{ route('login') }}";
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

                if (data.data.uploadedBy == "Mahasiswa") {
                    const container_mhs = document.getElementById("container_mhs");
                    // container_MHS
                    container_mhs.style.display = "flex";
                    console.log(data.data.Mahasiswa);

                    if (data.data.Mahasiswa != null) {
                        const nameField = document.getElementById("nameField2");
                        const NIMField = document.getElementById("NIMField");
                        const SKSField = document.getElementById("SKSField");
                        const IPKField = document.getElementById("IPKField");
                        const TMTField = document.getElementById("TMTField");

                        nameField.innerHTML = "";
                        console.log(nameField);
                        nameField.textContent = data.data.Mahasiswa.user.first_name + " " + data.data.Mahasiswa.user
                            .last_name;
                        NIMField.textContent = data.data.Mahasiswa.NIM;
                        SKSField.textContent = data.data.Mahasiswa.SKS;
                        IPKField.textContent = data.data.Mahasiswa.IPK;
                        const currentYear = new Date().getFullYear();
                        const nexYear = currentYear + 1;
                        TMTField.textContent = currentYear + "/" + nexYear;

                    }

                } else if (data.data.uploadedBy == "Dosen") {
                    const container_dosen = document.getElementById("container_dosen");
                    container_dosen.style.display = "flex";
                    // container_dosen
                    const nameField = document.getElementById("nameField1");
                    const NIDField = document.getElementById("NIDField");
                    const phoneField = document.getElementById("phoneField");
                    const maxField = document.getElementById("maxField");
                    
                    if (data.data.Dosen_1 != null) {
                        nameField.textContent = data.data.Dosen_1.user.first_name + " " + data.data.Dosen_1.user
                            .last_name + " " + data.data.Dosen_1.back_title;

                        NIDField.textContent = data.data.Dosen_1.NID;
                        phoneField.textContent = data.data.Dosen_1.phone_number;
                        maxField.textContent = data.data.Dosen_1.max_quota;
                    }
                }


                titleField.value = data.data.title;
                agencyField.value = data.data.agency;
                descriptionField.value = data.data.description;

                const strTools = data.data.tools;
                arrayTools = strTools.split(", ");
                updateArray();

                if (data.data.Dosen_1 != null) {
                    const Dosen_1 = document.getElementById("Dosen_1");
                    Dosen_1.value = data.data.Dosen_1.user.first_name + " " + data.data.Dosen_1.user.last_name;
                } else {
                    const Dosen_2 = document.getElementById("Dosen_1");
                    Dosen_1.value = "Tidak ada data"
                }


                if (data.data.Dosen_2 != null) {
                    const Dosen_2 = document.getElementById("Dosen_2");
                    Dosen_2.value = data.data.Dosen_2.user.first_name + " " + data.data.Dosen_2.user.last_name;
                } else {
                    const Dosen_2 = document.getElementById("Dosen_2");
                    Dosen_2.value = "Tidak ada data"
                }
            }

        } catch (error) {
            console.error('Error:', error);
        }
    }

    async function accProject() {
        const data = {
            Approval: "Approved"
        };

        try {
            let response = await fetch(`http://127.0.0.1:8001/api/lecturer/Approval/Kaprodi/${id}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${token}`
                },
                body: JSON.stringify(data)
            });

            if (response.ok) {
                alert("berhasil acc projek");
                window.location.href = "{{ route('akademik.showPersetujuan') }}";
            } else {
                alert(`Error: ${data.message}`);
            }

        } catch (error) {
            console.error('Error:', error);
            alert(
                'Terjadi kesalahan saat mengupdate data. Silakan coba lagi.');
        }
    }

    async function revisiProject() {
        const data = {
            Approval: "Not Approved"
        };

        try {
            let response = await fetch(`http://127.0.0.1:8001/api/lecturer/Approval/Kaprodi/${id}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${token}`
                },
                body: JSON.stringify(data)
            });

            if (response.ok) {
                alert("berhasil, projek tidak di acc");
                window.location.href = "{{ route('akademik.showPersetujuan') }}";
            } else {
                alert(`Error: ${data.message}`);
            }

        } catch (error) {
            console.error('Error:', error);
            alert(
                'Terjadi kesalahan saat mengupdate data. Silakan coba lagi.');
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
    // function setContainerProfile() {
    //     const container_profile = document.getElementById("container_profile");
    //     const height = parseFloat(container_profile.style.height);
    //     if (!isNaN(height)) {
    //         container_profile.style.width = (height * 3 / 4) + 'px';
    //     }
    // }

    // setContainerProfile();
    const currentUrl = window.location.href;
    const url = new URL(currentUrl);
    let id = url.searchParams.get('id');
    fetchUser();
    fetchProject(id);
</script>
