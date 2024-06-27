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


        <div class="flex items-center justify-between">

            <div class="text-[#404D61]">
                <p class="font-semibold text-2xl">Update Profile</p>
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
                        <p id="username_txt" class="text-xl font-semibold"></p>
                    </li>
                </ul>
                <div class="px-6 py-3 bg-main_green text-white rounded-lg shadow-sm shadow-gray-700">
                    <button id="logout-button" type="button">logout</button>
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


        <div class="flex flex-col w-full bg-white shadow-md shadow-clifford rounded-xl mt-10">
            <form action="" method="POST">
                @csrf
                <div class=" w-full relative flex flex-row p-16 pb-12 space-x-12">

                    <div class="flex flex-col basis-1/2 space-y-10">

                        <div class="form-group">
                            <label class=" block mb-2" for="first_name">Nama Depan</label>
                            <input type="text" id="first_name" name="first_name" required style=""
                                class="form-control rounded-lg border-gray-500 w-full focus:border-semi_dark_green ou"
                                value="{{ old('first_name') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="NIM">NIM</label>
                            <input type="text" id="NIM" name="NIM" required
                                class="form-control rounded-lg border-gray-500  w-full" value="{{ old('NIM') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="SKS">SKS</label>
                            <input type="text" id="SKS" name="SKS"
                                class="form-control rounded-lg border-gray-500  w-full" value="{{ old('SKS') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="email">Email</label>
                            <input type="text" id="email" name="email"
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
                            <input type="text" id="last_name" name="last_name" required
                                class="form-control rounded-lg border-gray-500 w-full" value="{{ old('last_name') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="semester">Semester</label>
                            <input type="text" id="semester" name="semester"
                                class="form-control rounded-lg border-gray-500 w-full" value="{{ old('semester') }}">
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
            // console.log(userData.id);
            iduser = userData.id;
            const usernameObj = document.getElementById('username_txt');
            usernameObj.textContent = userData.username;


            response = await fetch(`http://127.0.0.1:8001/api/student`);
            const data = await response.json();
            data.data.data.forEach(Student => {
                if (Student.user_id == userData.id) {
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
            // console.log(data);
            try {
                const response = await fetch(`http://127.0.0.1:8001/api/student/${idstudent}`, {
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
                alert('Terjadi kesalahan saat mengupdate data. Silakan coba lagi.');
            }
        });


    });

    fetchProjects();
</script>
