@extends('Dosen.LayoutsDosen')

@section('main')
    <main class="w-[1139px] ml-[322px] min-h-screen flex flex-col">

        <div class="flex flez-col mt-10"></div>

        <div class="py-4 px-6 bg-[#FBFFFC] flex item-center shadow-md rounded-md shadow-slate-800">
            <ul class="ml-4 flex items-center">
                <li class="mr-4">
                    <button type="button"
                        class="text-[#4C8F8B] w-8 h-8 rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                        <i class="ri-search-line mr-4"></i>
                        Search
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

        <button class="bg-semi_dark_green px-4 py-2 w-fit h-fit mt-12 rounded-lg text-white text-lg">
            Update Profile</button>

        <div class="w-full h-fit flex flex-row mt-10 space-x-8 bg-white rounded-lg shadow-md shadow-slate-500 px-16 py-12">

            <div class="w-[25%] flex flex-col justify-center items-center">
                <img src="{{ asset('icon/dosen_kotak.png') }}" class="w-full h-auto" alt="">
            </div>

            <div class="w-[75%] h-full p-8 px-1 flex flex-col justify-center">

                <div class="flex flex-row justify-between">
                    <p class="flex w-[50%] font-semibold">Name</p>
                    <div class="w-full h-fit flex flex-row border-b-2 border-gray-400 pb-2">
                        <p class="flex text-left">Dinar Nugroho Pratomo, S.Kom, M.IM., M. Cs.</p>
                    </div>
                </div>

                <div class="flex flex-row justify-between mt-10">
                    <p class="flex w-[50%] font-semibold">NIP/NIKA/NIDN</p>
                    <div class="w-full h-fit flex flex-row border-b-2 border-gray-400 pb-2">
                        <p class="flex text-left">111199209201605201</p>
                    </div>
                </div>

                <div class="flex flex-row justify-between mt-10">
                    <p class="flex w-[50%] font-semibold">Specialities</p>
                    <div class="w-full h-fit flex flex-row border-b-2 border-gray-400 pb-2">
                        <p class="flex text-left">Software Engineering, Data Science, Machine
                            Learning</p>
                    </div>
                </div>
                <div class="flex flex-row justify-between mt-10">
                    <p class="flex w-[50%] font-semibold">Number of Projects</p>
                    <div class="w-full h-fit flex flex-row border-b-2 border-gray-400 pb-2xx">
                        <p class="flex text-left">32 projects</p>
                    </div>
                </div>

                <div class="flex flex-row justify-between mt-10">
                    <p class="flex w-[50%] font-semibold">Phone</p>
                    <div class="w-full h-fit flex flex-row border-b-2 border-gray-400">
                        <p class="flex text-left">0893578345639636</p>
                    </div>
                </div>


                <div class="flex flex-row justify-between mt-10">
                    <p class="flex w-[50%] font-semibold">Email</p>
                    <div class="w-full h-fit flex flex-row border-b-2 border-gray-400">
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
</script>
