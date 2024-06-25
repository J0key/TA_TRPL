@extends('Akademik.partial.layouts')

@section('main')
    <main class="w-[1139px] ml-[322px] min-h-screen flex flex-col ps-6">

        <form action="" method="POST">
            @csrf
            <div
                class="py-3 px-6 mt-10 bg-[#FBFFFC] flex item-center shadow-md rounded-xl shadow-slate-800 border-2 border-main_green">
                <ul class="ml-4 flex items-center">
                    <li class="mr-4">
                        <button type="button"
                            class="text-[#4C8F8B] ms-[-20px] rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                            <svg class="me-8" xmlns="http://www.w3.org/2000/svg" width="24" height="20"
                                viewBox="0 0 34 32" fill="none">
                                <path
                                    d="M32.9862 29.1261L26.8367 23.2994C29.2238 20.4564 30.3797 16.8478 30.067 13.2156C29.7542 9.58344 27.9965 6.20379 25.1552 3.77157C22.3139 1.33935 18.605 0.0394391 14.7912 0.139126C10.9773 0.238814 7.34843 1.73052 4.65063 4.30752C1.95283 6.88452 0.391198 10.3509 0.286838 13.994C0.182477 17.6371 1.54332 21.1799 4.08955 23.894C6.63578 26.608 10.1739 28.2871 13.9763 28.5858C17.7787 28.8846 21.5564 27.7804 24.5327 25.5002L30.6325 31.3269C30.7866 31.4753 30.9699 31.5931 31.1719 31.6735C31.3739 31.7538 31.5906 31.7952 31.8094 31.7952C32.0282 31.7952 32.2449 31.7538 32.4468 31.6735C32.6488 31.5931 32.8322 31.4753 32.9862 31.3269C33.285 31.0316 33.452 30.6371 33.452 30.2265C33.452 29.8158 33.285 29.4213 32.9862 29.1261ZM15.2339 25.5002C12.939 25.5002 10.6957 24.8502 8.78766 23.6323C6.87957 22.4145 5.39241 20.6835 4.51421 18.6583C3.63602 16.6331 3.40624 14.4046 3.85394 12.2546C4.30164 10.1047 5.40671 8.12981 7.0294 6.57978C8.65209 5.02975 10.7195 3.97416 12.9703 3.54651C15.221 3.11886 17.5539 3.33835 19.6741 4.17722C21.7942 5.01609 23.6064 6.43667 24.8813 8.25931C26.1562 10.082 26.8367 12.2248 26.8367 14.4169C26.8367 17.3564 25.6143 20.1755 23.4383 22.254C21.2624 24.3325 18.3111 25.5002 15.2339 25.5002Z"
                                    fill="#347677" />
                            </svg>
                            <input class=" border-none text-text-main_green" type="text" name="searchBar" id="searchBar"
                                placeholder="Search here...">
                        </button>
                    </li>

                </ul>
                <ul class="ml-auto flex items-center">
                    <li class="mr-1">
                        <button type="button"
                            class="text-[#4C8F8B] w-8 h-8 rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                            <i class="ri-sun-line"></i>
                        </button>
                    </li>
                    <li class="mr-1">
                        <button type="button"
                            class="text-[#4C8F8B] w-8 h-8 rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                            <i class="ri-notification-4-fill"></i>
                        </button>
                    </li>
                    <li class="mr-1">
                        <button type="button"
                            class="text-[#4C8F8B] w-8 h-8 rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                            <i class="ri-account-circle-line"></i>

                        </button>
                    </li>
                </ul>
            </div>
        </form>


        <div class=" w-full bg-white rounded-xl shadow-md shadow-slate-500 flex flex-col px-12 space-y-6 mt-10">
            <form class="space-y-6" action="" method="POST">
                @csrf
                <div class="form-group w-full">
                    <label class="w-full font-semibold mb-2" for="tittle">Judul</label>
                    <input type="text" id="tittle" name="tittle" required style=""
                        class="form-control rounded-lg mt-2 border-gray-500 w-full focus:border-semi_dark_green"
                        value="{{ old('tittle') }}">
                    @if ($errors->has('tittle'))
                        <span class="text-danger">{{ $errors->first('tittle') }}</span>
                    @endif
                </div>

                <div class="form-group flex flex-col">
                    <label class="mb-2 font-semibold" for="achievement level">Deskripsi</label>
                    <textarea type="text" id="desc" name="desc" required class="form-control rounded-lg border-gray-500 h-[8rem]"
                        value="{{ old('desc') }}">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid mollitia libero porro sapiente excepturi adipisci nam molestiae aliquam, dignissimos similique id saepe sed earum maxime vero corrupti! Cum, veritatis veniam?</textarea>
                    @if ($errors->has('desc'))
                        <span class="text-danger">{{ $errors->first('desc') }}</span>
                    @endif
                </div>

                <div class="form-group flex flex-col">
                    <label class="mb-2 font-semibold" for="achievement level">lampiran</label>
                    <div class="w-full h-fit flex flex-col items-center py-20 px-20 border-dashed border-4 border-sp border-slate-400 rounded-xl border-dash-spacing-[10px]"
                        style="border-dash-spacing: 10px;">


                        <div id="file_kosong" class="w-full h-fit flex flex-col items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46"
                                fill="none">
                                <path
                                    d="M14.2991 37.0685H10.619C4.984 36.666 2.4541 32.3343 2.4541 28.4818C2.4541 24.6293 4.98403 20.2785 10.5232 19.8951C11.309 19.8185 11.999 20.4318 12.0565 21.2368C12.114 22.0226 11.5199 22.7126 10.7149 22.7701C6.9966 23.0385 5.3291 25.8368 5.3291 28.501C5.3291 31.1651 6.9966 33.9635 10.7149 34.2318H14.2991C15.0849 34.2318 15.7366 34.8835 15.7366 35.6693C15.7366 36.4551 15.0849 37.0685 14.2991 37.0685Z"
                                    fill="#292D32" />
                                <path
                                    d="M31.9502 37.0682C31.9119 37.0682 31.8927 37.0682 31.8544 37.0682C31.0686 37.0682 30.3403 36.4166 30.3403 35.6307C30.3403 34.8066 30.9536 34.1932 31.7586 34.1932C34.1161 34.1932 36.2244 33.3691 37.8728 31.8933C40.8628 29.2866 41.0544 25.5299 40.2494 22.8849C39.4444 20.2591 37.2019 17.2499 33.2919 16.7708C32.6594 16.6941 32.161 16.2149 32.046 15.5824C31.2794 10.9824 28.8069 7.80076 25.0503 6.65076C21.1786 5.44326 16.6552 6.63159 13.8377 9.58326C11.0969 12.4391 10.4644 16.4449 12.0552 20.8533C12.3236 21.6008 11.9403 22.4249 11.1928 22.6932C10.4453 22.9616 9.6211 22.5783 9.35277 21.8308C7.41694 16.4258 8.29862 11.2508 11.7678 7.60909C15.3136 3.89076 21.0061 2.41491 25.8936 3.90991C30.3786 5.28991 33.541 8.98908 34.691 14.1257C38.601 15.0074 41.7444 17.9783 42.9902 22.0799C44.3511 26.5458 43.1244 31.1458 39.7703 34.0591C37.6428 35.9758 34.8636 37.0682 31.9502 37.0682Z"
                                    fill="#292D32" />
                                <path
                                    d="M23.0003 42.7033C19.1478 42.7033 15.5445 40.6524 13.5704 37.3366C13.3595 37.0108 13.1487 36.6275 12.9762 36.2058C12.3245 34.845 11.9795 33.2925 11.9795 31.6825C11.9795 25.6066 16.9245 20.6616 23.0003 20.6616C29.0762 20.6616 34.0212 25.6066 34.0212 31.6825C34.0212 33.3116 33.6762 34.845 32.9862 36.2633C32.8329 36.6275 32.622 37.0108 32.392 37.375C30.4562 40.6525 26.8528 42.7033 23.0003 42.7033ZM23.0003 23.5366C18.5153 23.5366 14.8545 27.1975 14.8545 31.6825C14.8545 32.8708 15.1037 33.9824 15.5828 34.9983C15.7362 35.3241 15.8703 35.5925 16.0236 35.8416C17.4803 38.3141 20.1445 39.8283 22.9811 39.8283C25.8178 39.8283 28.482 38.3141 29.9195 35.88C30.092 35.5925 30.2454 35.3241 30.3604 35.0558C30.8779 34.0016 31.127 32.8899 31.127 31.7016C31.1461 27.1974 27.4853 23.5366 23.0003 23.5366Z"
                                    fill="#292D32" />
                                <path
                                    d="M21.9074 35.0173C21.5432 35.0173 21.1791 34.8831 20.8916 34.5956L18.994 32.6981C18.4382 32.1423 18.4382 31.2223 18.994 30.6664C19.5499 30.1106 20.4699 30.1106 21.0257 30.6664L21.9458 31.5864L25.0124 28.7498C25.6066 28.2131 26.5074 28.2514 27.044 28.8264C27.5807 29.4014 27.5424 30.3215 26.9674 30.8581L22.8849 34.634C22.5974 34.8831 22.2524 35.0173 21.9074 35.0173Z"
                                    fill="#292D32" />
                            </svg>
                            <p class="text-xl mt-6 font-semibold">Choose a file or drag & drop it here</p>
                            <p class="text-xl mt-6 text-slate-500 font-semibold">JPG or PDF, up to 50mb</p>

                            <div class="file-upload-container mt-6 ms-32">
                                {{-- <label for="file-input"
                                    class="custom-file-input border-2 border-slate-500 py-2 px-6 rounded-xl hover:bg-slate-100">
                                    <i class="fas fa-cloud-upload-alt"></i> Cari File
                                </label> --}}
                                <input onchange="inputFile()" type="file" id="file-input" class="file-input"
                                    accept="*">
                                <div id="file-list" class="file-list"></div>
                            </div>
                        </div>

                        {{-- <div id="file_isi" class="w-full h-fit flex flex-col items-center hidden">
                            <img class="w-20 h-20" src="{{ asset('document.png') }}" alt="">
                            <p id="file_tittle" class="text-xl text-slate-600 mt-6">Judul File</p>
                            <button id="delete_file" onclick="deleteFile()"
                                class="bg-clifford text-white py-2 px-6 rounded-xl mt-6">Hapus file</button>
                        </div> --}}

                    </div>
                </div>



                <div class="w-full flex flex-row justify-end mt-10">
                    <button type="button" class="" onclick="uploadFile()">
                        <div class="px-20 py-2 bg-button_green rounded-md text-white flex flex-row items-center w-fit">
                            <p class="">SUBMIT</p>
                        </div>
                    </button>
                </div>
            </form>
        </div>

        </div>
    </main>

    <script src="{{ asset('js/grafik_dashboard_dosen.js') }}"></script>
    @stack('script')
@endsection

<script>
    const fileInput = document.getElementById('file-input');
    const uploadButton = document.getElementById('upload-button');
    const fileList = document.getElementById('file-list');
    const fileName = document.getElementById('file_tittle');
    const fileIsi = document.getElementById('file_isi');
    const fileKosong = document.getElementById('file_kosong');
    let fileEmpty = true;

    function deleteFile() {
        fileName = "";
        fileIsi.style.display = 'None';
        fileKosong.style.display = 'flex';
        fileInput.value = null;
    }

    function inputFile() {
        console.log(fileInput);
        if (fileInput && fileInput.files && fileInput.files.length > 0) {
            const file = fileInput.files[0];

            fileName.textContent = file.name;
            fileIsi.style.display = 'flex';
            fileKosong.style.display = 'None';
        } else {
            console.log("gagal")
        }
    }

    function uploadFile() {

    }
    // uploadButton.addEventListener('click', () => {
    //     const formData = new FormData();
    //     for (let i = 0; i < fileInput.files.length; i++) {
    //         const file = fileInput.files[i];
    //         formData.append('files[]', file);

    //         // Tampilkan nama file yang sedang diupload
    //         const fileElement = document.createElement('p');
    //         fileElement.textContent = `Uploading ${file.name}...`;
    //         fileList.appendChild(fileElement);
    //     }

    //     // Lakukan proses upload
    //     fetch('/upload', {
    //             method: 'POST',
    //             body: formData
    //         })
    //         .then(response => {
    //             // Setelah upload selesai, update tampilan file list
    //             fileList.innerHTML = '';
    //             for (let i = 0; i < fileInput.files.length; i++) {
    //                 const file = fileInput.files[i];
    //                 const fileElement = document.createElement('p');
    //                 fileElement.textContent = `${file.name} - Upload Selesai`;
    //                 fileList.appendChild(fileElement);
    //             }
    //         })
    //         .catch(error => {
    //             console.error('Error uploading files:', error);
    //         });
    // });
</script>
