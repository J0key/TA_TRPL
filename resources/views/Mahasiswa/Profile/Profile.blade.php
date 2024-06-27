@extends('Mahasiswa.LayoutMahasiswa')

@section('main')
    <main class="w-[1139px] ml-[330px] min-h-screen my-10 flex flex-col">


        <div class="flex items-center justify-between">

            <div class="text-[#404D61]">
                <p class="font-semibold text-2xl">Profile</p>
            </div>

            <div class="flex items-center">
                <ul class="ml-auto flex flex-row">
                    <li class="mr-8">
                        <img src="{{ asset('icon/lonceng.png') }}" alt="">
                    </li>
                    <li class="mr-8">
                        <img src="{{ asset('icon/dosen.png') }}" alt="">
                    </li>
                    <li class="mr-4">
                        <p id="username_txt" class="text-xl font-semibold">Syra Athaya</p>
                    </li>
                </ul>
                <div class="px-6 py-3 bg-main_green text-white rounded-lg shadow-sm shadow-gray-700">
                    <button id="logout-button" type="button">logout</button>
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

                    <div class="bg-white w-auto shadow-lg shadow-slate rounded-3xl flex flex-col relative p-6">
                        <button type="button" onclick="toEditPrestasi()">
                            <img class="absolute top-0 right-0 mt-4 me-4"
                                src="{{ asset('icon/Mahasiswa/Profile/ic_baseline-edit.png') }}"></img>
                        </button>

                        <p class=" bg-semi_dark_green text-white p-2 px-6 rounded-full w-fit">Prestasi dan Keahlian</p>

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

            <div class="bg-white p-6 w-full relative flex flex-col shadow-lg shadow-slate rounded-3xl mt-10">
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
            // console.log(userData);
            const usernameObj = document.getElementById('username_txt');
            usernameObj.textContent = userData.username;


            response = await fetch(`http://127.0.0.1:8001/api/student`);
            const data = await response.json();
            data.data.data.forEach(Student => {
                if (Student.user_id == userData.id) {
                    idStudent = Student.id;
                    // console.log(idStudent);
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
            displayPengalaman(dataPengalaman.data);


            response = await fetch(`http://127.0.0.1:8001/api/skill`, {

                headers: {
                    'Authorization': `Bearer ${token}`
                }
            });
            const dataSkill = await response.json();
            displaySkill(dataSkill.data);


            // console.log(data.data.data);
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

        dataSkill.forEach(skill => {
            skill_txt.textContent = skill.skill;
            const achievementList = document.createElement("li");
            // skill_txt.classList.add();

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
