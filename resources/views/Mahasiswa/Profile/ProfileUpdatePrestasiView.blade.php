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
                <p class=" bg-semi_dark_green text-white p-2 px-6 rounded-full w-fit">Keahlian</p>
                <p class=" text-gray-600 mt-6 font-semibold">Dianjurkan menambahkan minimal 3 keahlian untuk ditampilkan
                    pada profile.</p>

                <select type="dropdown" id="keahlian" name="keahlian" onchange="printIsi(this.value)"
                    class="form-control rounded-lg border-gray-500 w-full py-4 px-4 mt-4" value="">
                    <option value="">Pilih Opsi</option>
                    <option value="option1">Opsi 1</option>
                    <option value="option2">Opsi 2</option>
                    <option value="option3">Opsi 3</option>
                </select>

                <input type="text" id="skill" name="skill" required style=""
                    class="form-control rounded-lg border-gray-500 w-full focus:border-semi_dark_green" hidden
                    value="">

                <div id="container-keahlian" class="flex flex-row w-full my-6 items-center space-x-4">

                </div>

                <p class=" bg-semi_dark_green text-white p-2 px-6 rounded-full w-fit mt-6">Prestasi</p>
                <p class=" text-gray-600 mt-6 font-semibold">Tambahkan prestasimu untuk ditampilkan pada profile..</p>
                <div class=" w-full relative flex flex-row items-center py-8 space-x-12">

                    <div class="flex flex-col basis-1/2 space-y-10">

                        <div class="form-group">
                            <label class=" block mb-2 font-semibold" for="achievement name">Nama Prestasi</label>
                            <input type="text" id="achievement name" name="achievement name" required style=""
                                class="form-control rounded-lg border-gray-500 w-full focus:border-semi_dark_green ou"
                                value="{{ old('achievement name') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2 font-semibold" for="achievement level">Tingkat Kejuaraan</label>
                            <input type="text" id="achievement level" name="achievement level" required
                                class="form-control rounded-lg border-gray-500  w-full"
                                value="{{ old('achievement level') }}">
                        </div>
                    </div>


                    <div class="flex flex-col basis-1/2 space-y-10">
                        <div class="form-group">
                            <label class=" block mb-2 font-semibold" for="type of achievement">Jenis Prestasi</label>
                            <input type="text" id="type of achievement" name="type of achievement" required
                                class="form-control rounded-lg border-gray-500 w-full"
                                value="{{ old('type of achievement') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2 font-semibold" for="achievement year">Tahun Kejuaraan</label>
                            <input type="text" id="achievement year" name="achievement year"
                                class="form-control rounded-lg border-gray-500 w-full"
                                value="{{ old('achievement year') }}">
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

    ;
</script>
