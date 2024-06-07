@extends('Dosen.LayoutsDosen')

@section('main')
    <main class="w-[1139px] ml-[322px] min-h-screen flex flex-col ps-4">

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

        <button type="button" onclick="goToUpdate()"
            class="bg-semi_dark_green px-4 py-2 w-fit h-fit mt-12 rounded-lg text-white text-lg">
            Update Profile</button>

        <div
            class="w-full h-fit flex flex-row mt-10 space-x-12 items-center bg-white rounded-lg shadow-md shadow-slate-500 px-16 py-12 mb-20">

            <div class="w-[25%] relative justify-center items-center shadow-none">

                <div id="container_photo_isi">
                    <button type="button" onclick="" class="absolute top-0 right-0">
                        <svg class="me-2 mt-4" xmlns="http://www.w3.org/2000/svg" width="16" height="20"
                            viewBox="0 0 16 20" fill="none">
                            <path
                                d="M15.2406 1.47491H11.6199L10.5854 0.44043H5.41298L4.3785 1.47491H0.757812V3.54388H15.2406M1.7923 16.9922C1.7923 17.5409 2.01027 18.0671 2.39828 18.4551C2.78629 18.8431 3.31254 19.0611 3.86126 19.0611H12.1371C12.6858 19.0611 13.2121 18.8431 13.6001 18.4551C13.9881 18.0671 14.2061 17.5409 14.2061 16.9922V4.57836H1.7923V16.9922Z"
                                fill="#757D8A" />
                        </svg>
                    </button>
                    <img src="{{ asset('icon/dosen2.png') }}" class="w-full h-auto shadow-none" alt="">
                </div>

                <div id="container_photo_kosong" hidden>
                    <button type="button" onclick="" class="absolute top-0 right-0 me-[-10px] mt-[-10px]">
                        <div class=" bg-slate-700 rounded-full px-3 py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12"
                                fill="none">
                                <path
                                    d="M15 10C15 10.2652 14.8946 10.5196 14.7071 10.7071C14.5196 10.8946 14.2652 11 14 11H2C1.73478 11 1.48043 10.8946 1.29289 10.7071C1.10536 10.5196 1 10.2652 1 10V4C1 3.73478 1.10536 3.48043 1.29289 3.29289C1.48043 3.10536 1.73478 3 2 3H3.172C3.96724 2.99956 4.72977 2.6834 5.292 2.121L6.122 1.293C6.309 1.10594 6.5625 1.00059 6.827 1H9.171C9.43619 1.00006 9.69051 1.10545 9.878 1.293L10.706 2.121C10.9846 2.39971 11.3154 2.6208 11.6795 2.77162C12.0436 2.92244 12.4339 3.00005 12.828 3H14C14.2652 3 14.5196 3.10536 14.7071 3.29289C14.8946 3.48043 15 3.73478 15 4V10ZM2 2C1.46957 2 0.960859 2.21071 0.585786 2.58579C0.210714 2.96086 0 3.46957 0 4L0 10C0 10.5304 0.210714 11.0391 0.585786 11.4142C0.960859 11.7893 1.46957 12 2 12H14C14.5304 12 15.0391 11.7893 15.4142 11.4142C15.7893 11.0391 16 10.5304 16 10V4C16 3.46957 15.7893 2.96086 15.4142 2.58579C15.0391 2.21071 14.5304 2 14 2H12.828C12.2976 1.99989 11.789 1.7891 11.414 1.414L10.586 0.586C10.211 0.210901 9.70239 0.000113275 9.172 0H6.828C6.29761 0.000113275 5.78899 0.210901 5.414 0.586L4.586 1.414C4.21101 1.7891 3.70239 1.99989 3.172 2H2Z"
                                    fill="white" />
                                <path
                                    d="M8 9C7.33696 9 6.70107 8.73661 6.23223 8.26777C5.76339 7.79893 5.5 7.16304 5.5 6.5C5.5 5.83696 5.76339 5.20107 6.23223 4.73223C6.70107 4.26339 7.33696 4 8 4C8.66304 4 9.29893 4.26339 9.76777 4.73223C10.2366 5.20107 10.5 5.83696 10.5 6.5C10.5 7.16304 10.2366 7.79893 9.76777 8.26777C9.29893 8.73661 8.66304 9 8 9ZM8 10C8.92826 10 9.8185 9.63125 10.4749 8.97487C11.1313 8.3185 11.5 7.42826 11.5 6.5C11.5 5.57174 11.1313 4.6815 10.4749 4.02513C9.8185 3.36875 8.92826 3 8 3C7.07174 3 6.1815 3.36875 5.52513 4.02513C4.86875 4.6815 4.5 5.57174 4.5 6.5C4.5 7.42826 4.86875 8.3185 5.52513 8.97487C6.1815 9.63125 7.07174 10 8 10ZM3 4.5C3 4.63261 2.94732 4.75979 2.85355 4.85355C2.75979 4.94732 2.63261 5 2.5 5C2.36739 5 2.24021 4.94732 2.14645 4.85355C2.05268 4.75979 2 4.63261 2 4.5C2 4.36739 2.05268 4.24021 2.14645 4.14645C2.24021 4.05268 2.36739 4 2.5 4C2.63261 4 2.75979 4.05268 2.85355 4.14645C2.94732 4.24021 3 4.36739 3 4.5Z"
                                    fill="white" />
                            </svg>
                        </div>
                    </button>
                    <div class="bg-gray-200 rounded-xl w-64 h-80 flex flex-col items-center justify-center">
                        <img class="w-16 h-16" src="{{ asset('icon/Mahasiswa/Profile/camera.png') }}" alt="">
                        <p class="text-gray-500 text-md font-semibold mt-4">Set Profile Picture</p>
                    </div>
                </div>

            </div>

            <div class="w-[75%] h-full p-8 px-1 flex flex-col justify-center">

                <div class="flex flex-row justify-between">
                    <p class="flex w-[50%] font-semibold">Name</p>
                    <div class="w-full h-fit flex flex-row border-b-2 border-gray-300 pb-2">
                        <p class="flex text-left">Dinar Nugroho Pratomo, S.Kom, M.IM., M. Cs.</p>
                    </div>
                </div>

                <div class="flex flex-row justify-between mt-10">
                    <p class="flex w-[50%] font-semibold">NIP/NIKA/NIDN</p>
                    <div class="w-full h-fit flex flex-row border-b-2 border-gray-300 pb-2">
                        <p class="flex text-left">111199209201605201</p>
                    </div>
                </div>

                <div class="flex flex-row justify-between mt-10">
                    <p class="flex w-[50%] font-semibold">Specialities</p>
                    <div class="w-full h-fit flex flex-row border-b-2 border-gray-300 pb-2">
                        <p class="flex text-left">Software Engineering, Data Science, Machine
                            Learning</p>
                    </div>
                </div>
                <div class="flex flex-row justify-between mt-10">
                    <p class="flex w-[50%] font-semibold">Number of Projects</p>
                    <div class="w-full h-fit flex flex-row border-b-2 border-gray-300 pb-2">
                        <p class="flex text-left">32 projects</p>
                    </div>
                </div>

                <div class="flex flex-row justify-between mt-10">
                    <p class="flex w-[50%] font-semibold">Phone</p>
                    <div class="w-full h-fit flex flex-row border-b-2 border-gray-300 pb-2">
                        <p class="flex text-left">0893578345639636</p>
                    </div>
                </div>


                <div class="flex flex-row justify-between mt-10">
                    <p class="flex w-[50%] font-semibold">Email</p>
                    <div class="w-full h-fit flex flex-row border-b-2 border-gray-300 pb-2">
                        <p class="flex text-left">dinar.nugroho.p@ugm.ac.id</p>
                    </div>
                </div>
            </div>
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


    function goToUpdate() {
        window.location.href = "{{ route('dosen.profileUpdate') }}";
    }
</script>
