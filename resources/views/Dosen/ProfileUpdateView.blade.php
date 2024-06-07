@extends('Dosen.LayoutsDosen')

@section('main')
    <main class="w-[1139px] ml-[322px] min-h-screen flex flex-col ps-6">
        <form action="" method="POST">
            @csrf
            <div
                class="py-3 px-6 bg-[#FBFFFC] flex item-center shadow-md rounded-xl shadow-slate-800 border-2 border-main_green mt-10">
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
                            <input class=" border-none text-main_green" type="text" name="searchBar" id="searchBar"
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

            <div class="w-full flex flex-row justify-end">
                <button
                    class="bg-slate-900 px-8 py-4 w-fit h-fit mt-12 rounded-lg text-white text-md justify-self-end justify-end self-end">
                    <div class="flex flex-row">
                        <img class="me-4 w-4 h-5" src="{{ asset('icon/Property 1=icon, Property 2=berkas.png') }}"
                            alt="">
                        Upload Via File
                </button>
            </div>


            <div class="flex flex-col w-full bg-white shadow-md shadow-clifford rounded-xl mt-10">
                <div class=" w-full relative flex flex-row p-16 pb-12 space-x-12">

                    <div class="flex flex-col basis-1/2 space-y-10">

                        <div class="form-group">
                            <label class=" block mb-2" for="first_name">Nama Depan</label>
                            <input type="text" id="first_name" name="first_name" required style=""
                                class="form-control rounded-lg border-gray-500 w-full focus:border-semi_dark_green ou"
                                value="{{ old('first_name') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="numProj">Number of Projects</label>
                            <input type="text" id="numProj" name="numProj" required
                                class="form-control rounded-lg border-gray-500  w-full" value="{{ old('numProj') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="front_title">Gelar Depan</label>
                            <input type="text" id="front_title" name="front_title"
                                class="form-control rounded-lg border-gray-500  w-full" value="{{ old('front_title') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="phone_number">Phone</label>
                            <input type="text" id="phone_number" name="phone_number"
                                class="form-control rounded-lg border-gray-500 w-full" value="{{ old('phone_number') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="Specialities">Specialities</label>
                            <textarea name="Specialities" id="Specialities" cols="56" rows="4"></textarea>
                        </div>
                    </div>


                    <div class="flex flex-col basis-1/2 space-y-10">
                        <div class="form-group">
                            <label class=" block mb-2" for="back_name">Nama Belakang</label>
                            <input type="text" id="back_name" name="back_name" required
                                class="form-control rounded-lg border-gray-500 w-full" value="{{ old('back_name') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="NID">NIP/NIKA</label>
                            <input type="text" id="NID" name="NID"
                                class="form-control rounded-lg border-gray-500 w-full" value="{{ old('NID') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="back_title">Gelar Belakang</label>
                            <input type="text" id="back_title" name="back_title"
                                class="form-control rounded-lg border-gray-500 w-full" value="{{ old('back_title') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="email">Email</label>
                            <input type="text" id="email" name="email"
                                class="form-control rounded-lg border-gray-500 w-full" value="{{ old('email') }}">
                        </div>


                    </div>

                </div>
        </form>
        </div>

        <div class="w-full flex flex-row justify-end mt-12">
            <button class="" type="submit">
                <div class="px-8 py-2 bg-button_green rounded-md text-white flex flex-row items-center w-fit mb-12">
                    <p class="">Save</p>
                </div>
            </button>
        </div>

    </main>


    @stack('script')
@endsection

<script>
    function openModal() {
        const modal = document.getElementById('modal');
        // Ubah tampilan modal menjadi flex
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    function closeModal() {
        const modal = document.getElementById('modal');
        // Ubah tampilan modal menjadi flex
        modal.classList.remove('flex');
        modal.classList.add('hidden');
    }
</script>
