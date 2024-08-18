@extends('Akademik.partial.layouts')

@section('main')
    <main class="w-full ml-[330px] mr-[50px] min-h-screen flex flex-col">


        <div class="flex items-center justify-between mt-4">


            <div class="text-[#404D61]">
                <p class="font-semibold text-2xl">Tambah Pengumuman</p>
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


        <div class=" w-full bg-white rounded-xl shadow-md shadow-slate-500 flex flex-col px-12 space-y-6 mt-4 pb-12 mb-12">
            <form class="space-y-12" action="" method="POST">
                @csrf
                <div class="form-group w-full">
                    <label class="w-full font-semibold mb-2" for="title">Judul</label>
                    <input type="text" id="title" name="title" required style=""
                        placeholder="Masukan judul pengumuman"
                        class="form-control rounded-lg mt-2 border-gray-500 w-full focus:border-semi_dark_green"
                        value="">
                    @if ($errors->has('tittle'))
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                </div>

                <div class="form-group flex flex-col">
                    <label class="mb-2 font-semibold" for="detail">Deskripsi</label>
                    <textarea type="text" id="detail" name="detail" required class="form-control rounded-lg border-gray-500 h-[8rem]"
                        placeholder="Masukan isi pengumuman" value=""></textarea>
                    @if ($errors->has('detail'))
                        <span class="text-danger">{{ $errors->first('detail') }}</span>
                    @endif
                </div>

                <div class="form-group flex flex-col">
                    <label class="mb-2 font-semibold" for="achievement level">Lampiran</label>
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
                                <input onchange="" type="file" id="file-input" class="file-input" accept="*">
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


                <p id="error_message" class="flex flex-row hidden">*Masih ada kolom yang kosong</p>

                <div class="w-full flex flex-row justify-end mt-10">
                    <button type="button" class="" onclick="submitData()">
                        <div class="px-20 py-2 bg-button_green rounded-md text-white flex flex-row items-center w-fit">
                            <p class="">SUBMIT</p>
                        </div>
                    </button>
                </div>
            </form>
        </div>

        </div>
    </main>
    @stack('script')
@endsection

<script>
    let userData = null;

    const token = localStorage.getItem('token');
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

    // async function uploadData(data) {
    //     // FETCH DATA USER
    //     let response = await fetch('http://127.0.0.1:8001/api/announcement', {
    //         method: 'POST',
    //         headers: {
    //             'Authorization': `Bearer ${token}`
    //         },
    //         body: JSON.stringify(data)
    //     });

    //     if (response.ok) {
    //         alert("BERHASIL UPLOAD PENGUMUMAN")
    //     }
    // }

    // function submitData() {
    //     const titleField = document.getElementById("title");
    //     const detailField = document.getElementById("detail");
    //     const error_message = document.getElementById("error_message");
    //     const input = document.getElementById('file-input');

    //     console.log(fieldNotEmpty());
    //     if (fieldNotEmpty()) {
    //         if (validateFile()) {
    //             const data = {
    //                 title: titleField.value,
    //                 detail: detailField.value,
    //                 attachment: input.files.length > 0 ? input.files[0] : null
    //             }
    //             uploadData(data);
    //         }
    //     } else {
    //         error_message.style.display = "flex";
    //     }
    // }

    function submitData() {
        const titleField = document.getElementById("title");
        const detailField = document.getElementById("detail");
        const error_message = document.getElementById("error_message");
        const input = document.getElementById('file-input');

        console.log(fieldNotEmpty());
        if (fieldNotEmpty()) {
            if (validateFile()) {
                const formData = new FormData();
                formData.append('title', titleField.value);
                formData.append('detail', detailField.value);

                if (input.files.length > 0) {
                    formData.append('attachment', input.files[0]);
                }

                uploadData(formData);
            }
        } else {
            error_message.style.display = "flex";
        }
    }

    function uploadData(formData) {
        fetch('http://127.0.0.1:8001/api/announcement', { // Ganti dengan URL endpoint Anda
                method: 'POST',
                headers: {
                    'Authorization': `Bearer ${token}`
                },
                body: formData,
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(err => {
                        throw err;
                    });
                }
                return response.json();
            })
            .then(data => {
                // console.log('Berhasil:', data);
                window.location.href = "{{ route('akademik.showpengumuman') }}";
            })
            .catch(error => {
                if (error.errors) {
                    console.error('Validation Errors:', error.errors);
                    for (const key in error.errors) {
                        if (error.errors.hasOwnProperty(key)) {
                            alert(`${key}: ${error.errors[key].join(', ')}`);
                        }
                    }
                } else {
                    console.error('Error:', error);
                }
            });
    }

    function cekIsiFile() {
        const input = document.getElementById('file-input');
        if (input.files.length > 0) {
            const file = input.files[0];
            console.log(`File Name: ${file.name}, Size: ${file.size} bytes`);
        } else {
            console.log('Tidak ada file yang dipilih.');
        }
    }

    function fieldNotEmpty() {
        const titleField = document.getElementById("title");
        const detailField = document.getElementById("detail");
        const input = document.getElementById('file-input');
        if (titleField.value != "" && detailField.value != "") {
            return true;
        } else {
            return false;
        }
    }

    function validateFile() {
        const input = document.getElementById('file-input');
        if (input.files.length > 0) {
            const file = input.files[0];
            if (file.size <= 500000) {
                return true;
            } else {
                return false;
            }
        } else {
            return true;
        }
    }
    fetchUser();
</script>
