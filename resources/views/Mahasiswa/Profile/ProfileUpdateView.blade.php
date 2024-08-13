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
                            class="absolute w-60 px-5 py-3 bg-white rounded-lg shadow border dark:border-transparent mt-5">
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


        <button type="button" onclick="toProfilePage()">
            <div class="px-4 py-2 bg-semi_dark_green rounded-md text-white flex flex-row items-center w-fit my-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="13" viewBox="0 0 19 13" fill="none">
                    <path
                        d="M5.81932 12.4045L6.1068 12.0692C6.29732 11.8469 6.29732 11.4865 6.1068 11.2642L2.69455 7.3062L17.977 7.3062C18.2464 7.3062 18.4648 7.05135 18.4648 6.73701V6.26268C18.4648 5.94834 18.2464 5.69348 17.977 5.69348L2.69455 5.69348L6.1068 1.73547C6.29732 1.5132 6.29732 1.1528 6.1068 0.930486L5.81932 0.595136C5.6288 0.372864 5.31989 0.372864 5.12937 0.595136L0.393448 6.09737C0.20293 6.31964 0.20293 6.68004 0.393448 6.90236L5.12937 12.4045C5.31989 12.6269 5.6288 12.6269 5.81932 12.4045Z"
                        fill="white" />
                </svg>
                <p class="ms-4">Back</p>
            </div>
        </button>


        <div class="flex flex-col w-full bg-white shadow-md shadow-clifford rounded-xl mt-10 mb-16">
            <form action="" method="POST">
                @csrf
                <div class=" w-full relative flex flex-row p-16 pb-12 space-x-12">

                    <div class="flex flex-col basis-1/2 space-y-10">

                        <div class="form-group">
                            <label class=" block mb-2" for="first_name">Nama Depan</label>
                            <input type="text" id="first_name" disabled name="first_name" style=""
                                class="form-control rounded-lg border-gray-500 w-full focus:border-semi_dark_green ou"
                                value="{{ old('first_name') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="NIM">NIM</label>
                            <input type="text" id="NIM" name="NIM" disabled
                                class="form-control rounded-lg border-gray-500  w-full" value="{{ old('NIM') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="SKS">SKS</label>
                            <input type="text" id="SKS" name="SKS"
                                class="form-control rounded-lg border-gray-500  w-full" value="{{ old('SKS') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="email">Email</label>
                            <input type="text" id="email" name="email" disabled
                                class="form-control rounded-lg border-gray-500 w-full" value="{{ old('email') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="link_github">Github</label>
                            <input type="text" id="link_github" name="link_github" placeholder="https://"
                                class="form-control rounded-lg border-gray-500 w-full" value="{{ old('link_github') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="CV">CV</label>
                            <input type="text" id="CV" name="CV" placeholder="https://"
                                class="form-control rounded-lg border-gray-500 w-full" value="{{ old('CV') }}">
                        </div>
                    </div>


                    <div class="flex flex-col basis-1/2 space-y-10">
                        <div class="form-group">
                            <label class=" block mb-2" for="last_name">Nama Belakang</label>
                            <input type="text" id="last_name" disabled name="last_name"
                                class="form-control rounded-lg border-gray-500 w-full" value="{{ old('last_name') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="semester">Semester</label>
                            <input type="text" id="semester" name="semester"
                                class="form-control rounded-lg border-gray-500 w-full" required=""
                                value="{{ old('semester') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="IPK">IPK</label>
                            <input type="text" id="IPK" name="IPK"
                                class="form-control rounded-lg border-gray-500 w-full" value="{{ old('IPK') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="phone_number">No Hp</label>
                            <input type="text" id="phone_number" name="phone_number"
                                class="form-control rounded-lg border-gray-500 w-full" value="{{ old('phone_number') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="link_linkedin">Linkedin</label>
                            <input type="text" id="link_linkedin" name="link_linkedin" placeholder="https://"
                                class="form-control rounded-lg border-gray-500 w-full"
                                value="{{ old('link_linkedin') }}">
                        </div>

                        {{-- <div class="form-group mt-6">
                            <label class=" block mb-2" for="website">Website</label>
                            <input type="text" id="website" name="website" placeholder="https://"
                                class="form-control rounded-lg border-gray-500 w-full" value="{{ old('website') }}">
                        </div> --}}

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="link_porto">Portofolio</label>
                            <input type="text" id="link_porto" name="link_porto" placeholder="https://"
                                class="form-control rounded-lg border-gray-500 w-full" value="{{ old('link_porto') }}">
                        </div>
                    </div>

                </div>
                <div class="w-full flex flex-row justify-end">
                    <button id="submit_btn" class="" type="button">
                        <div
                            class="px-20 py-2 bg-button_green rounded-md text-white flex flex-row items-center w-fit mb-12 me-16">
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
    let iduser = null;
    let idstudent = null;

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
            const userData = await response.json();
            console.log(userData);
            iduser = userData.user_data.id;
            const usernameObj = document.getElementById('username_txt');
            usernameObj.textContent = userData.user_data.username;


            response = await fetch(`http://127.0.0.1:8001/api/student`);
            const data = await response.json();
            data.data.data.forEach(Student => {
                if (Student.user_id == userData.user_data.id) {
                    // console.log(Student);
                    idstudent = Student.id;
                    // console.log(idmhs);
                    displayProfile(Student);
                }
            });
            // console.log(data.data.data);
        } catch (error) {
            console.error('Error:', error);
        }
    }


    function displayProfile(Student) {
        const first_name = document.getElementById('first_name');
        const NIM = document.getElementById('NIM');
        const SKS = document.getElementById('SKS');
        const email = document.getElementById('email');
        const link_github = document.getElementById('link_github');
        const last_name = document.getElementById('last_name');
        const semester = document.getElementById('semester');
        const IPK = document.getElementById('IPK');
        const phone_number = document.getElementById('phone_number');
        const link_linkedin = document.getElementById('link_linkedin');
        const link_porto = document.getElementById('link_porto');



        first_name.setAttribute('value', Student.user["first_name"]);
        NIM.setAttribute('value', Student["NIM"]);
        SKS.setAttribute('value', Student["SKS"]);
        email.setAttribute('value', Student.user["email"]);
        link_github.setAttribute('value', Student["link_github"]);
        last_name.setAttribute('value', Student.user["last_name"]);
        semester.setAttribute('value', Student["semester"]);
        IPK.setAttribute('value', Student["IPK"]);
        phone_number.setAttribute('value', Student["phone_number"]);
        link_linkedin.setAttribute('value', Student["link_linkedin"]);
        link_porto.setAttribute('value', Student["link_porto"]);
    }


    document.addEventListener("DOMContentLoaded", async () => {
        const logoutButton = document.getElementById('logout-button');
        const token = localStorage.getItem('token');
        const submitButton = document.getElementById('submit_btn');

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
            const data = {
                NIM: NIM.value,
                semester: semester.value,
                IPK: IPK.value,
                SKS: SKS.value,
                phone_number: phone_number.value,
                user_id: iduser,
                link_github: link_github.value,
                link_porto: link_porto.value,
                link_linkedin: link_linkedin.value
            }

            document.getElementById('submit_btn').addEventListener('click', function() {
                let isValid = true;

                // Ambil semua input yang diperlukan
                const requiredFields = [
                    'SKS',
                    'semester',
                    'IPK',
                    'phone_number',
                    'link_github',
                    'link_linkedin',
                    'link_porto'
                ];

                requiredFields.forEach(field => {
                    const input = document.getElementById(field);
                    if (input && input.value.trim() === '') {
                        isValid = false;
                        input.classList.add(
                            'border-red-500'
                            ); // Tambahkan kelas untuk menandai kesalahan
                    } else {
                        input.classList.remove(
                            'border-red-500'); // Hapus tanda kesalahan
                    }
                });

                if (isValid) {
                    try {
                        const response = await fetch(
                            `http://127.0.0.1:8001/api/student/${idstudent}`, {
                                method: 'PUT',
                                headers: {
                                    'Content-Type': 'application/json',
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
                        alert(
                            'Terjadi kesalahan saat mengupdate data. Silakan coba lagi.');
                    }
                } else {
                    alert("Harap isi semua kolom yang diperlukan.");
                }
            });

        });


    });
    fetchProjects();
</script>
