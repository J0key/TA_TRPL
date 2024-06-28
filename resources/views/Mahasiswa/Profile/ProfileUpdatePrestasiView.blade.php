@extends('Mahasiswa.LayoutMahasiswa')

@section('main')
    <main class="w-full ml-[330px] mr-[50px] min-h-screen  flex flex-col">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="flex flex-row items-center justify-between">

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

        <button type="button" onclick="">
            <div class="px-4 py-2 bg-semi_dark_green rounded-md text-white flex flex-row items-center w-fit my-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="13" viewBox="0 0 19 13" fill="none">
                    <path
                        d="M5.81932 12.4045L6.1068 12.0692C6.29732 11.8469 6.29732 11.4865 6.1068 11.2642L2.69455 7.3062L17.977 7.3062C18.2464 7.3062 18.4648 7.05135 18.4648 6.73701V6.26268C18.4648 5.94834 18.2464 5.69348 17.977 5.69348L2.69455 5.69348L6.1068 1.73547C6.29732 1.5132 6.29732 1.1528 6.1068 0.930486L5.81932 0.595136C5.6288 0.372864 5.31989 0.372864 5.12937 0.595136L0.393448 6.09737C0.20293 6.31964 0.20293 6.68004 0.393448 6.90236L5.12937 12.4045C5.31989 12.6269 5.6288 12.6269 5.81932 12.4045Z"
                        fill="white" />
                </svg>
                <p class="ms-4">Back</p>
            </div>
        </button>


        <div class="flex flex-col w-full bg-white shadow-md shadow-clifford rounded-xl mt-10 p-12">
            <form action="" method="POST">
                @csrf
                <p class=" bg-semi_dark_green text-white p-2 px-6 rounded-full w-fit">Keahlian</p>
                <p class=" text-gray-600 mt-6 font-semibold">Dianjurkan menambahkan minimal 3 keahlian untuk ditampilkan
                    pada profile.</p>

                <select type="dropdown" onchange="printIsi(this.value)"
                    class="form-control rounded-lg border-gray-500 w-full py-4 px-4 mt-4" value="">
                    <option value="">Pilih Opsi</option>
                    <option value="Front-End">Front-End</option>
                    <option value="Back-End">Back-End</option>
                    <option value="Full-Stack">Full-Stack</option>
                    <option value="Mobile Developer">Mobile Developer</option>
                    <option value="System Analyst">System Analyst</option>
                    <option value="Project Manager">Project Manager</option>
                    <option value="Data Analyst">Data Analyst</option>
                    <option value="Software Testing">Software Testing</option>
                    <option value="Artificial Inteligence">Artificial Inteligence</option>
                </select>

                <input type="text" id="skill" name="skill" required style=""
                    class="form-control rounded-lg border-gray-500 w-full focus:border-semi_dark_green" hidden
                    value="">

                <div id="container-keahlian" class="flex flex-row w-full my-6 items-center space-x-4 space flex-wrap">

                </div>

                <div class="w-full flex flex-row justify-end mt-10">
                    <button id="submitskill_btn" class="" type="button">
                        <div class="px-20 py-2 bg-button_green rounded-md text-white flex flex-row items-center w-fit">
                            <p class="">SUBMIT</p>
                        </div>
                    </button>
                </div>

                <p class=" bg-semi_dark_green text-white p-2 px-6 rounded-full w-fit mt-6">Prestasi</p>
                <p class=" text-gray-600 mt-6 font-semibold">Tambahkan prestasimu untuk ditampilkan pada profile..</p>
                <div class=" w-full relative flex flex-row items-center py-8 space-x-12">

                    <div class="flex flex-col basis-1/2 space-y-10">

                        <div class="form-group">
                            <label class=" block mb-2 font-semibold" for="achievement_name">Nama Prestasi</label>
                            <input type="text" id="achievement_name" name="achievement_name" required style=""
                                class="form-control rounded-lg border-gray-500 w-full focus:border-semi_dark_green ou"
                                value="{{ old('achievement_name') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2 font-semibold" for="achievement_level">Tingkat Kejuaraan</label>
                            <input type="text" id="achievement_level" name="achievement_level" required
                                class="form-control rounded-lg border-gray-500  w-full"
                                value="{{ old('achievement_level') }}">
                        </div>
                    </div>


                    <div class="flex flex-col basis-1/2 space-y-10">
                        <div class="form-group">
                            <label class=" block mb-2 font-semibold" for="achievement_type">Jenis Prestasi</label>
                            <input type="text" id="achievement_type" name="achievement_type" required
                                class="form-control rounded-lg border-gray-500 w-full"
                                value="{{ old('achievement_type') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2 font-semibold" for="achievement_year">Tahun Kejuaraan</label>
                            <input type="text" id="achievement_year" name="achievement_year"
                                class="form-control rounded-lg border-gray-500 w-full"
                                value="{{ old('achievement_year') }}">
                        </div>
                    </div>
                </div>

                <div class="form-group mt-2">
                    <label class=" block mb-2 font-semibold" for="description">Deskripsi (opsional)</label>
                    <textarea class="form-control @error('description') is-invalid @enderror w-full p-2" id="description"
                        name="description"></textarea>
                    @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
                </div>

                <div class="w-full flex flex-row justify-end mt-10 space-x-4">
                    <button id="delete_skill_button" class="" type="button">
                        <div class="px-20 py-2 bg-red-700 rounded-md text-white flex flex-row items-center w-fit">
                            <p class="">Hapus Semua Prestasi</p>
                        </div>
                    </button>
                    <button id="submit_btn" class="" type="button">
                        <div class="px-20 py-2 bg-button_green rounded-md text-white flex flex-row items-center w-fit">
                            <p class="">SUBMIT</p>
                        </div>
                    </button>
                </div>
            </form>
        </div>
    </main>

    @stack('script')

@endsection

<script>
    let keahlian = [];
    // Mendapatkan referensi ke dropdown
    var listuser = document.getElementById("keahlian");

    let userData = null;
    var keahlianCounter = 1;

    function deleteArray(id) {
        const pElement = document.querySelector('#' + id + ' p');
        const button = document.querySelector('#' + id);
        const textContent = pElement.textContent;
        let indexToRemove = keahlian.indexOf(textContent);
        if (indexToRemove !== -1) {
            keahlian.splice(indexToRemove, 1);
        }
        button.remove()

    }

    // Tambahkan event listener ke dropdown
    function printIsi(selectedValue) {

        if (selectedValue != "") {
            // Tambahkan nilai baru ke array cars
            keahlian.push(selectedValue);

            // keahlian.forEach(element => {
            //     console.log(element);
            // });


            // Dapatkan elemen container tempat tombol akan ditempatkan
            const container = document.getElementById('container-keahlian');

            // Buat elemen tombol baru
            const button = document.createElement('button');
            button.classList.add('border-2', 'w-fit', 'border-gray-600', 'rounded-3xl', 'flex',
                'flex-row', 'items-center', 'justify-center', 'px-2');
            button.id = 'deleteKeahlian' + keahlianCounter;
            keahlianCounter++;
            button.setAttribute('onclick', 'deleteArray(this.id)');
            button.setAttribute('type', 'button');


            // Tambahkan ikon SVG
            const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
            svg.setAttribute('width', '16');
            svg.setAttribute('height', '16');
            svg.setAttribute('viewBox', '0 0 16 16');
            svg.setAttribute('fill', 'none');
            const path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
            path.setAttribute('d', 'M11.25 4.75L4.75 11.25M4.75 4.75L11.25 11.25');
            path.setAttribute('stroke', 'black');
            path.setAttribute('stroke-width', '1.5');
            path.setAttribute('stroke-linecap', 'round');
            path.setAttribute('stroke-linejoin', 'round');
            svg.appendChild(path);
            button.appendChild(svg);

            // Tambahkan teks pada tombol
            const text = document.createElement('p');
            text.classList.add('py-2', 'px-4');
            text.textContent = selectedValue;
            button.appendChild(text);

            // Tambahkan tombol ke dalam container
            container.appendChild(button);

            const dropdown_keahlian = document.getElementById('skill');
            let keahlianJoin = keahlian.join(", ");
            dropdown_keahlian.setAttribute('value', keahlianJoin);
            console.log(dropdown_keahlian.value);
        }


    }

    function toProfilePage() {
        window.location.href = "{{ route('mahasiswa.profile') }}";
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

            userData = await response.json();
            // console.log(userData);
            const usernameObj = document.getElementById('username_txt');
            usernameObj.textContent = userData.user_data.username;


            response = await fetch(`http://127.0.0.1:8001/api/student`);
            const data = await response.json();
            data.data.data.forEach(Student => {
                if (Student.user_id == userData.user_data.id) {
                    // console.log(Student);
                    // displayProfile(Student);
                    // displayContacts(Student);
                }
            });
            // console.log(data.data.data);
        } catch (error) {
            console.error('Error:', error);
        }
    }


    document.addEventListener("DOMContentLoaded", async () => {
        const logoutButton = document.getElementById('logout-button');
        const token = localStorage.getItem('token');
        const submitButton = document.getElementById('submit_btn');
        const submitskill_btn = document.getElementById('submitskill_btn');
        const delete_skill_button = document.getElementById('delete_skill_button');

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


        submitButton.addEventListener('click', async () => {
            const achievement_name = document.getElementById('achievement_name');
            const achievement_level = document.getElementById('achievement_level');
            const achievement_type = document.getElementById('achievement_type');
            const achievement_year = document.getElementById('achievement_year');
            const description = document.getElementById('description');

            const data = {
                achievement_name: achievement_name.value,
                achievement_level: achievement_level.value,
                achievement_type: achievement_type.value,
                achievement_year: achievement_year.value,
                description: description.value,
            }
            // console.log(data);
            try {
                const response = await fetch('http://127.0.0.1:8001/api/skill', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': `Bearer ${token}`
                    },
                    body: JSON.stringify(data)
                });

                if (response.ok) {
                    alert('Berhasil mengupdate data');
                    window.location.href = "{{ route('mahasiswa.profile') }}";
                } else {
                    const data = await response.json();
                    alert(`Error: ${data.message}`);
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat mengupdate data. Silakan coba lagi.');
            }
        });


        submitskill_btn.addEventListener('click', async () => {
            const skill = document.getElementById('skill');
            // console.log(userData.profile_data[0]);
            const data = {
                skill: skill.value,
            }
            // console.log(data);
            try {
                const response = await fetch(
                    `http://127.0.0.1:8001/api/skill/updateSkill/${userData.profile_data[0].id}`, {
                        method: 'PUT',
                        headers: {
                            'Content-Type': 'application/json',
                            'Authorization': `Bearer ${token}`
                        },
                        body: JSON.stringify(data)
                    });

                if (response.ok) {
                    alert('Berhasil mengupdate data');
                    window.location.href = "{{ route('mahasiswa.profile') }}";
                } else {
                    const data = await response.json();
                    alert(`Error: ${data.message}`);
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat mengupdate data. Silakan coba lagi.');
            }
        });

        delete_skill_button.addEventListener('click', async () => {
            const skill = document.getElementById('skill');
            // console.log(userData.profile_data[0].id);
            // console.log(data);
            try {
                const response = await fetch(
                    `http://127.0.0.1:8001/api/skill/${userData.profile_data[0].id}`, {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'Authorization': `Bearer ${token}`
                        }
                    });

                if (response.ok) {
                    alert('Berhasil mengupdate data');
                    window.location.href = "{{ route('mahasiswa.profile') }}";
                } else {
                    const data = await response.json();
                    alert(`Error: ${data.message}`);
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat mengupdate data. Silakan coba lagi.');
            }
        });

    });

    fetchProjects();
    // console.log(userData);;
</script>
