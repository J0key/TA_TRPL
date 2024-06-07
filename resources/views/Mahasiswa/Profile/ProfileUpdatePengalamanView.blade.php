@extends('Mahasiswa.LayoutMahasiswa')

@section('main')
    <main class="w-[1139px] ml-[330px] min-h-screen my-10 flex flex-col">

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

            <div class="text-[#404D61] mt-5">
                <p class="font-semibold text-2xl">Update Profile</p>
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

            <form action="" method="POST">
                @csrf
                <div class=" w-full relative flex flex-row items-center pt-2 pb-8 space-x-12">

                    <div class="flex flex-col basis-1/2 space-y-10">

                        <div class="form-group">
                            <label class=" block mb-2 font-semibold" for="job position">Posisi</label>
                            <input type="text" id="job position" name="job position" required style=""
                                class="form-control rounded-lg border-gray-500 w-full focus:border-semi_dark_green ou"
                                value="{{ old('job position') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2 font-semibold" for="job type">Jenis Pekerjaan</label>
                            <input type="text" id="job type" name="job type" required
                                class="form-control rounded-lg border-gray-500  w-full" value="{{ old('job type') }}">
                        </div>
                    </div>


                    <div class="flex flex-col basis-1/2 space-y-10">
                        <div class="form-group">
                            <label class=" block mb-2 font-semibold" for="company name">Nama Perusahaan</label>
                            <input type="text" id="company name" name="company name" required
                                class="form-control rounded-lg border-gray-500 w-full" value="{{ old('company name') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2 font-semibold" for="work duration">Durasi Bekerja</label>
                            <input type="text" id="work duration" name="work duration"
                                class="form-control rounded-lg border-gray-500 w-full" value="{{ old('work duration') }}">
                        </div>
                    </div>
                </div>

                <div class="form-group mt-2">
                    <label class=" block mb-2 font-semibold" for="job description">Deskripsi (opsional)</label>
                    <textarea class="form-control @error('job description') is-invalid @enderror w-full rounded-lg p-2" id="job description"
                        name="job description"></textarea>
                    @if ($errors->has('job description'))
                        <span class="text-danger">{{ $errors->first('job description') }}</span>
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



                <div class="w-full flex flex-row justify-end mt-10">
                    <button class="" type="submit">
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

    ;
</script>
