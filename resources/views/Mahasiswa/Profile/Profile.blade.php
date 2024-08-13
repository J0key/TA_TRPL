@extends('Mahasiswa.LayoutMahasiswa')

@section('main')
    <main class="w-full ml-[330px] mr-[50px] min-h-screen  flex flex-col">


        <div class="flex items-center justify-between mt-4">

            <div class="text-[#404D61]">
                <p class="font-semibold text-2xl">Profile</p>
            </div>

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
                            <div class="w-12 h-12 rounded-full overflow-hidden border-2 dark:border-white border-gray-900">
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

                                <li class="font-medium">
                                    <a href="#"
                                        class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-red-600">
                                        <div class="mr-3 text-red-600" id="logout-button">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                                </path>
                                            </svg>
                                        </div>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="flex flex-col w-full">

            <div class="flex flex-row justify-between items-center mt-8 space-x-6">

                <div class="w-80 basis-2/5 bg-white shadow-lg shadow-slate rounded-3xl flex flex-col relative">

                    <button type="button" onclick="toEditProfile()">
                        <img class="absolute top-0 right-0 mt-4 me-4"
                            src="{{ asset('icon/Mahasiswa/Profile/ic_baseline-edit.png') }}"></img>
                    </button>

                    <button class="self-center" onclick="saveImage()">
                        <div class="flex flex-row bg-slate-100 w-56 h-56 rounded-full mt-10 items-center justify-center">
                            <img id="profile_image" class="w-full h-full"
                                src="{{ asset('icon/Mahasiswa/Profile/camera.png') }}" alt="">
                        </div>
                    </button>


                    <div id="container_profile" class="mt-6 ms-8 space-y-4">
                        {{-- <p class="text-md">Nama : Syra Athayya</p>
                        <p class="text-md">NIM : 22/503872/SV/21552</p>
                        <p class="text-md">IPK : 3.90   </p>
                        <p class="text-md">SKS : 144</p> --}}
                    </div>

                    <div class="flex flex-row my-6 items-center">
                        <p class="text-md border-main_green border-2 w-fit px-4 rounded-xl ms-8">CV</p>
                        <img class="ms-10" src="{{ asset('icon/Mahasiswa/Profile/link.png') }}" alt="">
                        <p class="text-md ">Portofolio</p>
                    </div>

                </div>


                <div class="flex flex-col space-y-6 basis-4/5">
                    <div class="bg-white w-full shadow-lg shadow-slate rounded-3xl flex flex-col relative p-6">
                        <button id="edit_contact_btn" type="button" onclick="toEditContact()">
                            <img class="absolute top-0 right-0 mt-4 me-4"
                                src="{{ asset('icon/Mahasiswa/Profile/ic_baseline-edit.png') }}"></img>
                        </button>
                        <p class=" bg-semi_dark_green text-white p-2 px-6 rounded-full w-fit">Contact</p>

                        <div class="flex flex-row px-4 pe-8 space-x-20 mt-8 w-full justify-center">
                            <div class="basis-1/2 space-y-4">
                                <div id="container_email" class="flex flex-row items-center">
                                    <img src="{{ asset('icon/Mahasiswa/Profile/email.png') }}" alt="">
                                    {{-- <p class="text-md ms-6">shyraathayya@gmail.com</p> --}}
                                </div>

                                <div id="container_web" class="flex flex-row items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                        viewBox="0 0 26 26" fill="none">
                                        <circle cx="13.0013" cy="12.9998" r="11.3333" stroke="#344948"
                                            stroke-width="2.83333" />
                                        <ellipse cx="13" cy="12.9998" rx="4.25" ry="11.3333"
                                            stroke="#344948" stroke-width="2.83333" />
                                        <path d="M1.66797 13H24.3346" stroke="#344948" stroke-width="2.83333"
                                            stroke-linecap="round" />
                                    </svg> {{-- <p class="text-md ms-6">-</p> --}}
                                </div>

                                <div id="container_noHp" class="flex flex-row items-center">
                                    <img src="{{ asset('icon/Mahasiswa/Profile/phone.png') }}" alt="">
                                    {{-- <p class="text-md ms-6">+62 6894 890 890</p> --}}
                                </div>
                            </div>


                            <div class="basis-1/2 space-y-4">
                                <div id="container_linkedin" class="flex flex-row items-center">
                                    <img src="{{ asset('icon/Mahasiswa/Profile/Vector (6).png') }}" alt="">
                                    {{-- <p class="text-md ms-6">https://www.linkedin.com/in/shyrath3104</p> --}}
                                </div>

                                <div id="container_github" class="flex flex-row items-center">
                                    <img src="{{ asset('icon/Mahasiswa/Profile/Github.png') }}" alt="">
                                    {{-- <p class="text-md ms-6">https://github.com/username</p> --}}
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="bg-white w-auto shadow-lg shadow-slate rounded-3xl flex flex-col relative p-6 min-h-64">
                        <button type="button" onclick="toEditPrestasi()">
                            <img class="absolute top-0 right-0 mt-4 me-4"
                                src="{{ asset('icon/Mahasiswa/Profile/ic_baseline-edit.png') }}"></img>
                        </button>

                        <p class=" bg-semi_dark_green text-white p-2 px-6 rounded-full w-fit ">Prestasi dan Keahlian</p>

                        <div class="flex flex-row items-center mt-6">
                            <img src="{{ asset('icon/Mahasiswa/Profile/MortarBoard.png') }}" alt="">
                            <p id="skill_txt" class="text-md ms-6">
                            </p>
                        </div>

                        <div class="flex flex-row mt-6 items-start">
                            <img src="{{ asset('icon/Mahasiswa/Profile/Trophy (1).png') }}" alt="">
                            <ul id="container_skill" class="ms-8 list-disc ">

                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div class="bg-white p-6 w-full relative flex flex-col shadow-lg shadow-slate rounded-3xl mt-10 min-h-48">
                <button type="button" onclick="toEditPengalaman()">
                    <img class="absolute top-0 right-0 mt-4 me-4"
                        src="{{ asset('icon/Mahasiswa/Profile/ic_baseline-edit.png') }}"></img>
                </button>
                <p class=" bg-semi_dark_green text-white p-4 px-6 rounded-full w-fit mb-6">Pengalaman</p>
                {{-- <div class="flex flex-row mt-6 ms-4 w-fit">
                    <img class="w-10 h-10" src="{{ asset('icon/Mahasiswa/Profile/telkomsel.png') }}" alt="">
                    <div class="flex-col ms-6">
                        <p>PT. TELKOMSEL</p>
                        <p>3 bulan</p>
                    </div>
                </div> --}}

                <div class="flex-col ms-6 mt-4">
                    <ul id="container_pengalaman" class="list-disc space-y-6 mb-4">
                        {{-- <li>
                            <p>UI UX DESIGNER</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore
                                et dolore magna aliqua.</p>
                        </li>
                        <li>
                            <p>UI UX DESIGNER</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore
                                et dolore magna aliqua.</p>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>


    </main>
    @stack('script')
@endsection

<script>
    let idStudent = null;
    let skillData = null;

    const token = localStorage.getItem('token');
    if (token == null) {
        window.location.href = "{{ route('login') }}";
    }

    function toEditPrestasi() {
        window.location.href = "{{ route('mahasiswa.profilePrestasiUpdate') }}";
    }

    function toEditContact() {
        window.location.href = "{{ route('mahasiswa.profileUpdate') }}";
    }

    function toEditPengalaman() {
        window.location.href = "{{ route('mahasiswa.profilePengalamanUpdate') }}";
    }

    async function fetchProjects(page = 1) {

        try {
            const token = localStorage.getItem('token');
            console.log(token);
            let response = await fetch('http://127.0.0.1:8001/api/user', {
                headers: {
                    'Authorization': `Bearer ${token}`
                }
            });
            const userData = await response.json();
            console.log(userData);
            skillData = userData.profile_data[0].skill;
            const usernameObj = document.getElementById('username_txt');
            usernameObj.textContent = userData.user_data.username;


            response = await fetch(`http://127.0.0.1:8001/api/student`);
            const data = await response.json();
            data.data.data.forEach(Student => {
                if (Student.user_id == userData.user_data.id) {
                    idStudent = Student.id;
                    console.log(skillData);
                    displayProfile(Student);
                    displayContacts(Student);
                }
            });

            response = await fetch(`http://127.0.0.1:8001/api/experience`, {

                headers: {
                    'Authorization': `Bearer ${token}`
                }
            });
            const dataPengalaman = await response.json();
            // console.log("data pengalaman : ")
            // console.log(dataPengalaman);
            displayPengalaman(dataPengalaman.data);


            response = await fetch(`http://127.0.0.1:8001/api/skill`, {

                headers: {
                    'Authorization': `Bearer ${token}`
                }
            });
            const dataSkill = await response.json();
            console.log(dataSkill);
            displaySkill(dataSkill.data);


            console.log(dataSkill.data);
        } catch (error) {
            console.error('Error:', error);
        }
    }

    function displayProfile(projects) {

        const profile_image = document.getElementById("profile_image");
        profile_image.setAttribute('src', projects.user["profile_photo"]);
        profile_image.classList


        const container_profile = document.getElementById('container_profile');
        container_profile.innerHTML = '';
        // console.log(container_profile);

        const nama = document.createElement('p');
        nama.classList.add('text-md');
        nama.textContent = "Nama : " + projects.user["first_name"] + " " + projects.user["last_name"];

        const nim = document.createElement('p');
        nim.classList.add('text-md');
        nim.textContent = "NIM : " + projects["NIM"];

        const ipk = document.createElement('p');
        ipk.classList.add('text-md');
        ipk.textContent = "IPK : " + projects["IPK"];

        const sks = document.createElement('p');
        sks.classList.add('text-md');
        sks.textContent = "SKS : " + projects["SKS"];

        container_profile.appendChild(nama);
        container_profile.appendChild(nim);
        container_profile.appendChild(ipk);
        container_profile.appendChild(sks);

    }

    function displayContacts(projects) {
        const container_email = document.getElementById('container_email');
        const container_web = document.getElementById('container_web');
        const container_noHp = document.getElementById('container_noHp');
        const container_linkedin = document.getElementById('container_linkedin');
        const container_github = document.getElementById('container_github');

        const emailTxt = document.createElement('p');
        emailTxt.classList.add('text-md', 'ms-6');
        emailTxt.textContent = projects.user["email"];
        container_email.appendChild(emailTxt);

        const webTxt = document.createElement('p');
        webTxt.classList.add('text-md', 'ms-6');
        if (projects["link_porto"] == null) {
            webTxt.textContent = "Belum ada";
        } else {
            webTxt.textContent = projects["link_porto"];
        }
        container_web.appendChild(webTxt);

        const noHpTxt = document.createElement('p');
        noHpTxt.classList.add('text-md', 'ms-6');
        noHpTxt.textContent = projects["phone_number"];
        container_noHp.appendChild(noHpTxt);

        const linkedinTxt = document.createElement('p');
        linkedinTxt.classList.add('text-md', 'ms-6');
        if (projects["link_porto"] == null) {
            linkedinTxt.textContent = "Belum ada";
        } else {
            linkedinTxt.textContent = projects["link_linkedin"];
        }
        container_linkedin.appendChild(linkedinTxt);

        const githubTxt = document.createElement('p');
        githubTxt.classList.add('text-md', 'ms-6');
        if (projects["link_porto"] == null) {
            githubTxt.textContent = "Belum ada";
        } else {
            githubTxt.textContent = projects["link_github"];
        }
        container_github.appendChild(githubTxt);


    }

    function displayPengalaman(listDataPengalaman) {
        // console.log(listDataPengalaman);
        const container_pengalaman = document.getElementById("container_pengalaman");

        listDataPengalaman.forEach(pengalaman => {
            // console.log(pengalaman);
            const Pengalaman = document.createElement("li");
            Pengalaman.classList.add("ms-8", "list-disc", "space-y-4");

            const company_name = document.createElement("p")
            company_name.textContent = pengalaman.company_name;

            const duration = document.createElement("p")
            duration.textContent = "Durasi : " + pengalaman.duration;


            const position = document.createElement("p")
            position.textContent = "Role : " + pengalaman.position;

            const description = document.createElement("p")
            description.textContent = "Deskripsi pekerjaan : " + pengalaman.description;

            Pengalaman.appendChild(company_name);
            Pengalaman.appendChild(duration);
            Pengalaman.appendChild(position);
            Pengalaman.appendChild(description);
            container_pengalaman.appendChild(Pengalaman);

        });
    }

    function displaySkill(dataSkill) {
        let stringSkill = "";
        const skill_txt = document.getElementById("skill_txt");
        const container_skill = document.getElementById("container_skill");
        skill_txt.textContent = skillData;


        dataSkill.forEach(skill => {
            const achievementList = document.createElement("li");

            const achievement = document.createElement("p")
            achievement.textContent = skill.achievement_name + skill.achievement_level;

            const achievement_year = document.createElement("p")
            achievement_year.textContent = skill.achievement_year;

            achievementList.appendChild(achievement);
            achievementList.appendChild(achievement_year);
            container_skill.appendChild(achievementList);
        });
    }

    document.addEventListener("DOMContentLoaded", async () => {
        const logoutButton = document.getElementById('logout-button');
        const token = localStorage.getItem('token');

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
