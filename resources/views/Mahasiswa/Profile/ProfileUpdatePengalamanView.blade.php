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
                        <p id="username_txt" class="text-xl font-semibold">Syra Athaya</p>
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


        <div class="flex flex-col w-full bg-white shadow-md shadow-clifford rounded-xl mt-10 p-12">

            <div id="container_data" class="flex flex-col w-full space-y-4">

                <div class="flex flex-col w-full">

                    <p class="font-semibold text-lg mb-6">Pekerjaan 1</p>

                    <div class=" w-full relative flex flex-row items-center pt-2 pb-8 space-x-12">

                        <div class="flex flex-col basis-1/2 space-y-10">

                            <div class="form-group">
                                <label class=" block mb-2 font-semibold" for="position">Posisi</label>
                                <input type="text" id="position" name="position" required style=""
                                    class="form-control rounded-lg border-gray-500 w-full focus:border-semi_dark_green ou"
                                    value="{{ old('position') }}">
                            </div>

                            <div class="form-group mt-6">
                                <label class=" block mb-2 font-semibold" for="field">Jenis Pekerjaan</label>
                                <input type="text" id="field" name="field" required
                                    class="form-control rounded-lg border-gray-500  w-full" value="{{ old('field') }}">
                            </div>
                        </div>


                        <div class="flex flex-col basis-1/2 space-y-10">
                            <div class="form-group">
                                <label class=" block mb-2 font-semibold" for="company_name">Nama Perusahaan</label>
                                <input type="text" id="company_name" name="company_name" required
                                    class="form-control rounded-lg border-gray-500 w-full"
                                    value="{{ old('company_name') }}">
                            </div>

                            <div class="form-group mt-6">
                                <label class=" block mb-2 font-semibold" for="duration">Durasi Bekerja</label>
                                <input type="text" id="duration" name="duration"
                                    class="form-control rounded-lg border-gray-500 w-full" value="{{ old('duration') }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-2">
                        <label class=" block mb-2 font-semibold" for="description">Deskripsi (opsional)</label>
                        <textarea class="form-control @error('description') is-invalid @enderror w-full rounded-lg p-2" id="description"
                            name="description"></textarea>
                        @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>

                    <div class=" w-full relative flex flex-row items-center py-8 space-x-12">

                        <div class="flex flex-col basis-1/2 space-y-10">

                            <div class="form-group">
                                <label class=" block mb-2 font-semibold" for="start date">Tanggal Mulai</label>
                                <input type="date" id="start date" name="start date" required style=""
                                    class="form-control rounded-lg border-gray-500 w-full focus:border-semi_dark_green ou"
                                    value="{{ old('start date') }}">
                            </div>
                        </div>


                        <div class="flex flex-col basis-1/2 space-y-10">
                            <div class="form-group">
                                <label class=" block mb-2 font-semibold" for="end date">Tanggal selesai</label>
                                <input type="date" id="end date" name="end date" required
                                    class="form-control rounded-lg border-gray-500 w-full" value="{{ old('end date') }}">
                            </div>
                        </div>
                    </div>
                    {{-- </form> --}}
                </div>
            </div>

            <div class="w-full flex flex-row mt-10">
                <button class="w-fit" type="button" onclick="tambahArray()" disabled>
                    <div class="px-4 py-2 bg-dark_green text-white flex flex-row items-center w-fit rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="12" viewBox="0 0 11 12"
                            fill="none">
                            <path
                                d="M9.625 4.625H6.875V1.875C6.875 1.51033 6.73013 1.16059 6.47227 0.902728C6.21441 0.644866 5.86467 0.5 5.5 0.5C5.13533 0.5 4.78559 0.644866 4.52773 0.902728C4.26987 1.16059 4.125 1.51033 4.125 1.875L4.17381 4.625H1.375C1.01033 4.625 0.660591 4.76987 0.402728 5.02773C0.144866 5.28559 0 5.63533 0 6C0 6.36467 0.144866 6.71441 0.402728 6.97227C0.660591 7.23013 1.01033 7.375 1.375 7.375L4.17381 7.32619L4.125 10.125C4.125 10.4897 4.26987 10.8394 4.52773 11.0973C4.78559 11.3551 5.13533 11.5 5.5 11.5C5.86467 11.5 6.21441 11.3551 6.47227 11.0973C6.73013 10.8394 6.875 10.4897 6.875 10.125V7.32619L9.625 7.375C9.98967 7.375 10.3394 7.23013 10.5973 6.97227C10.8551 6.71441 11 6.36467 11 6C11 5.63533 10.8551 5.28559 10.5973 5.02773C10.3394 4.76987 9.98967 4.625 9.625 4.625Z"
                                fill="white" />
                        </svg>
                        <p class="ms-2 text-sm">Tambah Posisi</p>
                    </div>
                </button>
            </div>

            <div class="w-full flex flex-row mt-10 justify-end">
                <button id="submit_btn" class="w-fit" type="button">
                    <div class="px-20 py-2 bg-button_green rounded-md text-white flex flex-row items-center w-fit">
                        <p class="">SUBMIT</p>
                    </div>
                </button>
            </div>

        </div>

    </main>

    @stack('script')

@endsection

<script>
    let keahlian = [];
    // Mendapatkan referensi ke dropdown
    var listuser = document.getElementById("keahlian");

    var pekerjaanCounter = 1;

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
                    // console.log(Student);
                    displayProfile(Student);
                    displayContacts(Student);
                }
            });
            // console.log(data.data.data);
        } catch (error) {
            console.error('Error:', error);
        }
    }


    function tambahArray() {
        const container_pekerjaan = document.getElementById("container_data")
        pekerjaanCounter++;
        const container_1 = document.createElement('div');
        container_1.classList.add("flex", "flex-col", "w-full", "mt-6");

        const header = document.createElement('p');
        header.classList.add("font-semibold", "text-lg", "mb-6", "mt-6");
        header.textContent = "Pekerjaan " + pekerjaanCounter;

        const container_2 = document.createElement('div');
        container_2.classList.add("w-full", "relative", "flex", "flex-row", "items-center", "pt-2", "pb-8",
            "space-x-12");

        const container_2_1 = document.createElement('div');
        container_2_1.classList.add("flex", "flex-col", "basis-1/2", "space-y-10");

        const container_2_1_1 = document.createElement('div');
        container_2_1_1.classList.add("form-group");

        const label_posisi = document.createElement('label');
        label_posisi.classList.add("block", "mb-2", "font-semibold");
        label_posisi.setAttribute('for', 'position');
        label_posisi.textContent = "Posisi";
        const positionInput = document.createElement('input');
        positionInput.type = 'text';
        positionInput.id = 'position';
        positionInput.name = 'position';
        positionInput.required = true;
        positionInput.classList.add(
            'form-control',
            'rounded-lg',
            'border-gray-500',
            'w-full',
            'focus:border-semi_dark_green',
            'ou'
        );
        positionInput.value = '{{ old('position') }}';


        const container_2_1_2 = document.createElement('div');
        container_2_1_2.classList.add("form-group");

        const label_field = document.createElement('label');
        label_field.classList.add("block", "mb-2", "font-semibold");
        label_field.setAttribute('for', 'field');
        label_field.textContent = "Jenis Pekerjaan";
        const fieldInput = document.createElement('input');
        fieldInput.type = 'text';
        fieldInput.id = 'field';
        fieldInput.name = 'field';
        fieldInput.required = true;
        fieldInput.classList.add(
            'form-control',
            'rounded-lg',
            'border-gray-500',
            'w-full',
            'focus:border-semi_dark_green',
            'ou'
        );
        fieldInput.value = '{{ old('field') }}';

        container_2_1_1.appendChild(label_posisi);
        container_2_1_1.appendChild(positionInput);
        container_2_1_2.appendChild(label_field);
        container_2_1_2.appendChild(fieldInput);
        container_2_1.appendChild(container_2_1_1);
        container_2_1.appendChild(container_2_1_2);


        const container_2_2 = document.createElement('div');
        container_2_2.classList.add("flex", "flex-col", "basis-1/2", "space-y-10");

        const container_2_2_1 = document.createElement('div');
        container_2_2_1.classList.add("form-group");

        const label_company_name = document.createElement('label');
        label_company_name.classList.add("block", "mb-2", "font-semibold");
        label_company_name.setAttribute('for', 'company_name');
        label_company_name.textContent = "Nama Perusahaan";
        const company_name_Input = document.createElement('input');
        company_name_Input.type = 'text';
        company_name_Input.id = 'company_name';
        company_name_Input.name = 'company_name';
        company_name_Input.required = true;
        company_name_Input.classList.add(
            'form-control',
            'rounded-lg',
            'border-gray-500',
            'w-full',
            'focus:border-semi_dark_green',
            'ou'
        );
        company_name_Input.value = '{{ old('company_name') }}';


        const container_2_2_2 = document.createElement('div');
        container_2_2_2.classList.add("form-group");

        const label_duration = document.createElement('label');
        label_duration.classList.add("block", "mb-2", "font-semibold");
        label_duration.setAttribute('for', 'duration');
        label_duration.textContent = "Durasi Bekerja";
        const durationInput = document.createElement('input');
        durationInput.type = 'text';
        durationInput.id = 'duration';
        durationInput.name = 'duration';
        durationInput.required = true;
        durationInput.classList.add(
            'form-control',
            'rounded-lg',
            'border-gray-500',
            'w-full',
            'focus:border-semi_dark_green',
            'ou'
        );
        durationInput.value = '{{ old('duration') }}';

        container_2_2_1.appendChild(label_company_name);
        container_2_2_1.appendChild(company_name_Input);
        container_2_2_2.appendChild(label_duration);
        container_2_2_2.appendChild(durationInput);
        container_2_2.appendChild(container_2_2_1);
        container_2_2.appendChild(container_2_2_2);


        container_2.appendChild(container_2_1);
        container_2.appendChild(container_2_2);
        container_1.appendChild(header);
        container_1.appendChild(container_2);
        container_pekerjaan.appendChild(container_1);
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
            const position = document.getElementById('position');
            const field = document.getElementById('field');
            const company_name = document.getElementById('company_name');
            const duration = document.getElementById('duration');
            const description = document.getElementById('description');
            const start_date = document.getElementById('start date');
            const end_date = document.getElementById('end date');

            const data = {
                position: position.value,
                field: field.value,
                company_name: company_name.value,
                duration: duration.value,
                description: description.value,
                start_date: start_date.value,
                end_date: end_date.value,
            }
            // console.log(data);
            try {
                const response = await fetch('http://127.0.0.1:8001/api/experience', {
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

    });

    fetchProjects();

    // function deleteArray(id) {
    //     const pElement = document.querySelector('#' + id + ' p');
    //     const button = document.querySelector('#' + id);
    //     const textContent = pElement.textContent;
    //     let indexToRemove = keahlian.indexOf(textContent);
    //     if (indexToRemove !== -1) {
    //         keahlian.splice(indexToRemove, 1);
    //     }
    //     button.remove()

    // }


    // Tambahkan event listener ke dropdown
    // function printIsi(selectedValue) {

    //     if (selectedValue != "") {
    //         // Tambahkan nilai baru ke array cars
    //         keahlian.push(selectedValue);

    //         // keahlian.forEach(element => {
    //         //     console.log(element);
    //         // });


    //         // Dapatkan elemen container tempat tombol akan ditempatkan
    //         const container = document.getElementById('container-keahlian');

    //         // Buat elemen tombol baru

    //         button.classList.add('border-2', 'w-fit', 'border-gray-600', 'rounded-3xl', 'flex',
    //             'flex-row', 'items-center', 'justify-center', 'px-2');
    //         button.id = 'deleteKeahlian' + keahlianCounter;
    //         keahlianCounter++;
    //         button.setAttribute('onclick', 'deleteArray(this.id)');
    //         button.setAttribute('type', 'button');


    //         // Tambahkan ikon SVG
    //         const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
    //         svg.setAttribute('width', '16');
    //         svg.setAttribute('height', '16');
    //         svg.setAttribute('viewBox', '0 0 16 16');
    //         svg.setAttribute('fill', 'none');
    //         const path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
    //         path.setAttribute('d', 'M11.25 4.75L4.75 11.25M4.75 4.75L11.25 11.25');
    //         path.setAttribute('stroke', 'black');
    //         path.setAttribute('stroke-width', '1.5');
    //         path.setAttribute('stroke-linecap', 'round');
    //         path.setAttribute('stroke-linejoin', 'round');
    //         svg.appendChild(path);
    //         button.appendChild(svg);

    //         // Tambahkan teks pada tombol
    //         const text = document.createElement('p');
    //         text.classList.add('py-2', 'px-4');
    //         text.textContent = selectedValue;
    //         button.appendChild(text);

    //         // Tambahkan tombol ke dalam container
    //         container.appendChild(button);

    //         const dropdown_keahlian = document.getElementById('skill');
    //         let keahlianJoin = keahlian.join(", ");
    //         dropdown_keahlian.setAttribute('value', keahlianJoin);
    //         console.log(dropdown_keahlian.value);
    //     }


    // }

    function toProfilePage() {
        window.location.href = "{{ route('mahasiswa.profile') }}";
    }

    ;
</script>
