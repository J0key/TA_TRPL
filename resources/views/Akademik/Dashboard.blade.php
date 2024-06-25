@extends('Akademik.partial.layouts')

@section('main')
    <main class="w-[100%] ml-[322px] min-h-screen flex flex-col px-6">

        <form action="" method="POST">
            @csrf
            <div class="flex flex-row w-full h-fit justify-between items-center mt-8">
                <form class="" action="">
                    <div class="flex flex-row w-fit bg-semi_dark_green p-2 rounded-full items-center mt-4">
                        <img class="w-8 h-8 ms-2" src="{{ asset('icon/Mahasiswa/Tugas akhir/u_search (1).png') }}"
                            alt="">
                        <input class="h-fit bg-semi_dark_green border-semi_dark_green text-white rounded-3xl" type="text"
                            placeholder="Search here...">
                    </div>
                </form>


                <div class="flex items-center">
                    <ul class="ml-auto flex flex-row">
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
                    <div class="px-6 py-3 bg-main_green text-white rounded-lg shadow-sm shadow-gray-700">
                        <button id="logout-button" type="button">logout</button>
                    </div>
                </div>
            </div>
        </form>

        <div class="flex flex-row">
            <p class="mt-8 text-3xl">Periode Semester</p>
            <p class="mt-8 text-3xl font-semibold ms-2">Ganjil 2023/2024</p>
        </div>
        <p class="mt-4 text-2xl"><?php echo date('d F Y'); ?></p>

        <div class="flex flex-row w-full justify-center space-x-8 mb-16">

            <div class="flex flex-col w-[70%] pe-10">

                <div class="flex flex-row w-full space-x-4 mt-10 ">
                    <button onclick="tes()"
                        class="py-3 px-6 font-semibold opacity-50 text-gray-500 hover:bg-semi_dark_green hover:text-white hover:opacity-100 rounded-2xl">Last
                        7 days</button>
                    <button
                        class="py-3 px-6 font-semibold opacity-50 text-gray-500 hover:bg-semi_dark_green hover:text-white hover:opacity-100 rounded-2xl">Months</button>
                    <button
                        class="py-3 px-6 font-semibold opacity-50 text-gray-500 hover:bg-semi_dark_green hover:text-white hover:opacity-100 rounded-2xl">Years</button>
                </div>

                <canvas id="myChart"></canvas>


                <p class="text-xl font-semibold">Recents Projects</p>

                {{-- LIST PROJECT --}}
                <div id="rec_project" class="flex flex-col w-full justify-center mt-8 space-y-4">

                    <div class="flex flex-row items-center mt-2 p-4 rounded-xl">
                        <div class="flex flex-row w-[5%]">
                            <img class="w-full rounded-full border-main_green border-2" src="{{ asset('icon/dosen.png') }}"
                                alt="">
                        </div>

                        <div class="flex flex-row w-[70%]">
                            <p class="text-lg font-semibold px-10">Dinar Nugroho Pratomo, S.Kom, M.IM., M. Cs.</p>
                        </div>

                        <div class="flex flex-row w-[25%] px-6">
                            <p class="text-lg w-full text-end font-semibold px-4">Projek A</p>
                        </div>
                    </div>


                    <div class="flex flex-row items-center mt-2 bg-slate-300 p-4 rounded-xl">
                        <div class="flex flex-row w-[5%]">
                            <img class="w-full rounded-full border-main_green border-2" src="{{ asset('icon/dosen.png') }}"
                                alt="">
                        </div>

                        <div class="flex flex-row w-[70%]">
                            <p class="text-lg font-semibold px-10">Dinar Nugroho Pratomo, S.Kom, M.IM., M. Cs.</p>
                        </div>

                        <div class="flex flex-row w-[25%] px-6">
                            <p class="text-lg w-full text-end font-semibold px-4">Projek A</p>
                        </div>
                    </div>


                    <div class="flex flex-row items-center mt-2 p-4 rounded-xl">
                        <div class="flex flex-row w-[5%]">
                            <img class="w-full rounded-full border-main_green border-2" src="{{ asset('icon/dosen.png') }}"
                                alt="">
                        </div>

                        <div class="flex flex-row w-[70%]">
                            <p class="text-lg font-semibold px-10">Dinar Nugroho Pratomo, S.Kom, M.IM., M. Cs.</p>
                        </div>

                        <div class="flex flex-row w-[25%] px-6">
                            <p class="text-lg w-full text-end font-semibold px-4">Projek A</p>
                        </div>
                    </div>

                </div>


            </div>

            <div class="flex flex-col space-y-12 items-center">
                <div class="basis-1/4 bg-white p-4 py-8 flex flex-col px-12 rounded-md shadow-md shadow-gray-700">
                    <p class="text-xl font-bold text-main_green">Judul Proyek</p>
                    <div class="flex flex-row items-center space-x-6 my-4 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="66" height="66" viewBox="0 0 66 66"
                            fill="none">
                            <g clip-path="url(#clip0_70_7518)" filter="url(#filter0_d_70_7518)">
                                <path
                                    d="M10.3438 0H55.6562C59.158 0 62 2.842 62 6.34375V51.6562C62 53.3387 61.3316 54.9523 60.142 56.142C58.9523 57.3316 57.3387 58 55.6562 58H10.3438C8.66128 58 7.04773 57.3316 5.85804 56.142C4.66836 54.9523 4 53.3387 4 51.6562V6.34375C4 2.842 6.842 0 10.3438 0ZM9.4375 6.34375V51.6562C9.4375 52.1565 9.8435 52.5625 10.3438 52.5625H55.6562C55.8966 52.5625 56.1271 52.467 56.2971 52.2971C56.467 52.1271 56.5625 51.8966 56.5625 51.6562V6.34375C56.5625 6.1034 56.467 5.87289 56.2971 5.70293C56.1271 5.53298 55.8966 5.4375 55.6562 5.4375H10.3438C10.1034 5.4375 9.87289 5.53298 9.70293 5.70293C9.53298 5.87289 9.4375 6.1034 9.4375 6.34375ZM46.5938 10.875C47.3148 10.875 48.0063 11.1614 48.5162 11.6713C49.0261 12.1812 49.3125 12.8727 49.3125 13.5938V40.7812C49.3125 41.5023 49.0261 42.1938 48.5162 42.7037C48.0063 43.2136 47.3148 43.5 46.5938 43.5C45.8727 43.5 45.1812 43.2136 44.6713 42.7037C44.1614 42.1938 43.875 41.5023 43.875 40.7812V13.5938C43.875 12.8727 44.1614 12.1812 44.6713 11.6713C45.1812 11.1614 45.8727 10.875 46.5938 10.875ZM16.6875 13.5938C16.6875 12.8727 16.9739 12.1812 17.4838 11.6713C17.9937 11.1614 18.6852 10.875 19.4062 10.875C20.1273 10.875 20.8188 11.1614 21.3287 11.6713C21.8386 12.1812 22.125 12.8727 22.125 13.5938V33.5312C22.125 34.2523 21.8386 34.9438 21.3287 35.4537C20.8188 35.9636 20.1273 36.25 19.4062 36.25C18.6852 36.25 17.9937 35.9636 17.4838 35.4537C16.9739 34.9438 16.6875 34.2523 16.6875 33.5312V13.5938ZM33 10.875C33.7211 10.875 34.4126 11.1614 34.9224 11.6713C35.4323 12.1812 35.7188 12.8727 35.7188 13.5938V26.2812C35.7188 27.0023 35.4323 27.6938 34.9224 28.2037C34.4126 28.7136 33.7211 29 33 29C32.2789 29 31.5874 28.7136 31.0776 28.2037C30.5677 27.6938 30.2812 27.0023 30.2812 26.2812V13.5938C30.2812 12.8727 30.5677 12.1812 31.0776 11.6713C31.5874 11.1614 32.2789 10.875 33 10.875Z"
                                    fill="#344948" />
                            </g>
                            <defs>
                                <filter id="filter0_d_70_7518" x="0" y="0" width="66" height="66"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="4" />
                                    <feGaussianBlur stdDeviation="2" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_70_7518" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_70_7518"
                                        result="shape" />
                                </filter>
                                <clipPath id="clip0_70_7518">
                                    <rect width="58" height="58" fill="white" transform="translate(4)" />
                                </clipPath>
                            </defs>
                        </svg>
                        <p id="kuota_mhs" class="text-5xl font-bold text-main_green ms-8">0</p>
                    </div>
                    <a class="text-main_green text-[12px] mt-[-16px]" href="">Cek list judul proyek
                        <svg class="inline ms-2" xmlns="http://www.w3.org/2000/svg" width="15" height="18"
                            viewBox="0 0 15 18" fill="none">
                            <path
                                d="M10.414 5.26028L10.1772 5.49699C10.0203 5.65389 10.0203 5.90829 10.1772 6.06522L12.9873 8.8591H0.401786C0.1799 8.8591 0 9.039 0 9.26088V9.59571C0 9.81759 0.1799 9.99749 0.401786 9.99749H12.9873L10.1772 12.7914C10.0203 12.9483 10.0203 13.2027 10.1772 13.3596L10.414 13.5963C10.5708 13.7532 10.8252 13.7532 10.9821 13.5963L14.8823 9.71239C15.0392 9.55549 15.0392 9.3011 14.8823 9.14417L10.9821 5.26028C10.8252 5.10335 10.5708 5.10335 10.414 5.26028Z"
                                fill="#344948" />
                        </svg>
                    </a>
                </div>


                <div
                    class="basis-1/4 bg-white p-4 py-8 flex flex-col justify-center px-12 rounded-md shadow-md shadow-gray-700">
                    <p class="text-xl font-bold text-main_green">Sidang</p>
                    <div class="flex flex-row items-center space-x-6 mt-2">
                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="83" height="83"
                            viewBox="0 0 83 83" fill="none">
                            <g clip-path="url(#clip0_70_7527)">
                                <path
                                    d="M29.3971 41.5003C36.0838 41.5003 41.5013 36.0828 41.5013 29.3962C41.5013 22.7095 36.0838 17.292 29.3971 17.292C22.7104 17.292 17.293 22.7095 17.293 29.3962C17.293 36.0828 22.7104 41.5003 29.3971 41.5003ZM67.4388 35.4482C67.4388 40.7032 63.1833 44.9587 57.9284 44.9587C56.6794 44.9589 55.4426 44.713 54.2886 44.2352C53.1347 43.7573 52.0862 43.0568 51.203 42.1736C50.3198 41.2905 49.6193 40.2419 49.1414 39.088C48.6636 37.934 48.4177 36.6972 48.418 35.4482C48.418 30.1933 52.6734 25.9378 57.9284 25.9378C63.1833 25.9378 67.4388 30.1933 67.4388 35.4482ZM29.3971 44.9587C34.1247 44.9587 41.8177 46.4302 46.8634 49.3594C48.9246 51.4569 50.1471 53.7446 50.1471 56.0253V65.7087H6.91797V56.0253C6.91797 48.666 21.8943 44.9587 29.3971 44.9587ZM76.0846 65.7087H53.6055V56.0253C53.6055 53.5768 52.7219 51.322 51.3161 49.311C53.9807 48.7161 56.6038 48.417 58.6079 48.417C65.0526 48.417 76.0846 51.507 76.0846 57.6386V65.7087Z"
                                    fill="#344948" />
                            </g>
                            <defs>
                                <clipPath id="clip0_70_7527">
                                    <rect width="83" height="83" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <p id="sidang" class="text-5xl font-bold text-main_green ms-8">0</p>
                    </div>
                    <a class="text-main_green text-[12px]" href="">Cek list sidang

                        <svg class="inline ms-2" xmlns="http://www.w3.org/2000/svg" width="15" height="18"
                            viewBox="0 0 15 18" fill="none">
                            <path
                                d="M10.414 5.26028L10.1772 5.49699C10.0203 5.65389 10.0203 5.90829 10.1772 6.06522L12.9873 8.8591H0.401786C0.1799 8.8591 0 9.039 0 9.26088V9.59571C0 9.81759 0.1799 9.99749 0.401786 9.99749H12.9873L10.1772 12.7914C10.0203 12.9483 10.0203 13.2027 10.1772 13.3596L10.414 13.5963C10.5708 13.7532 10.8252 13.7532 10.9821 13.5963L14.8823 9.71239C15.0392 9.55549 15.0392 9.3011 14.8823 9.14417L10.9821 5.26028C10.8252 5.10335 10.5708 5.10335 10.414 5.26028Z"
                                fill="#344948" />
                        </svg>
                    </a>

                </div>


                {{-- <div
                    class="basis-1/4 bg-white p-4 py-8 flex flex-col justify-center px-12 rounded-md shadow-md shadow-gray-700">
                    <p class="text-xl font-bold text-main_green">Yudisium</p>
                    <div class="flex flex-row items-center space-x-6 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="83" height="83" viewBox="0 0 83 83"
                            fill="none">
                            <path
                                d="M41.4993 14.5269L3.64453 28.7228L41.4993 47.6502L59.5291 38.6353L42.6151 33.464C42.2668 33.631 41.8856 33.7181 41.4993 33.719C40.8114 33.719 40.1517 33.4457 39.6653 32.9593C39.1789 32.4729 38.9056 31.8131 38.9056 31.1252C38.9056 30.4373 39.1789 29.7776 39.6653 29.2912C40.1517 28.8048 40.8114 28.5315 41.4993 28.5315L41.0704 29.926L44.0754 30.8505C44.0759 30.8535 44.0763 30.8565 44.0767 30.8595L48.5111 32.2156L73.7591 39.9837V41.9527C73.4099 42.1903 73.124 42.5095 72.9262 42.8827C72.7285 43.2559 72.6248 43.6718 72.6243 44.0941C72.6248 44.5262 72.7332 44.9513 72.9397 45.3308C73.1461 45.7103 73.4441 46.0323 73.8066 46.2674C72.626 50.7294 72.6243 60.8533 72.6243 64.844C75.2181 66.5291 75.2181 66.5907 77.8118 64.844C77.8118 60.8538 77.8105 50.7319 76.6301 46.2688C76.9927 46.0335 77.2907 45.7113 77.4971 45.3315C77.7035 44.9517 77.8117 44.5263 77.8118 44.094C77.8118 43.6712 77.7084 43.2547 77.5106 42.881C77.3128 42.5073 77.0267 42.1876 76.6771 41.9498V37.8289L67.0601 34.87L79.3541 28.7228L41.4993 14.5269ZM19.3913 40.3655L17.264 53.13C21.5072 53.6849 26.583 56.1512 31.2492 59.0675C33.9029 60.7262 36.3885 62.5469 38.4073 64.3134C39.6412 65.3931 40.6731 66.4289 41.4993 67.4481C42.3256 66.4288 43.3574 65.3931 44.5914 64.3134C46.6102 62.5469 49.0956 60.7262 51.7495 59.0675C56.4157 56.1512 61.4915 53.6849 65.7347 53.13L63.607 40.3655H62.5938L41.4993 50.9128L20.4045 40.3655H19.3913Z"
                                fill="#344948" />
                        </svg>
                        <p id="yudisium" class="text-5xl font-bold text-main_green ms-8">0</p>
                    </div>
                    <a class="text-main_green text-[12px]" href="">Cek list yudisium

                        <svg class="inline ms-2" xmlns="http://www.w3.org/2000/svg" width="15" height="18"
                            viewBox="0 0 15 18" fill="none">
                            <path
                                d="M10.414 5.26028L10.1772 5.49699C10.0203 5.65389 10.0203 5.90829 10.1772 6.06522L12.9873 8.8591H0.401786C0.1799 8.8591 0 9.039 0 9.26088V9.59571C0 9.81759 0.1799 9.99749 0.401786 9.99749H12.9873L10.1772 12.7914C10.0203 12.9483 10.0203 13.2027 10.1772 13.3596L10.414 13.5963C10.5708 13.7532 10.8252 13.7532 10.9821 13.5963L14.8823 9.71239C15.0392 9.55549 15.0392 9.3011 14.8823 9.14417L10.9821 5.26028C10.8252 5.10335 10.5708 5.10335 10.414 5.26028Z"
                                fill="#344948" />
                        </svg>
                    </a>

                </div> --}}

                {{-- <div class="basis-1/4 bg-white p-4 py-8 flex flex-col px-12 rounded-md shadow-md shadow-gray-700">
                    <p class="text-xl font-bold text-main_green">Yudisium</p>
                    <div class="flex flex-row items-center space-x-6 my-2 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="83" height="83" viewBox="0 0 83 83"
                            fill="none">
                            <path
                                d="M41.4993 14.5269L3.64453 28.7228L41.4993 47.6502L59.5291 38.6353L42.6151 33.464C42.2668 33.631 41.8856 33.7181 41.4993 33.719C40.8114 33.719 40.1517 33.4457 39.6653 32.9593C39.1789 32.4729 38.9056 31.8131 38.9056 31.1252C38.9056 30.4373 39.1789 29.7776 39.6653 29.2912C40.1517 28.8048 40.8114 28.5315 41.4993 28.5315L41.0704 29.926L44.0754 30.8505C44.0759 30.8535 44.0763 30.8565 44.0767 30.8595L48.5111 32.2156L73.7591 39.9837V41.9527C73.4099 42.1903 73.124 42.5095 72.9262 42.8827C72.7285 43.2559 72.6248 43.6718 72.6243 44.0941C72.6248 44.5262 72.7332 44.9513 72.9397 45.3308C73.1461 45.7103 73.4441 46.0323 73.8066 46.2674C72.626 50.7294 72.6243 60.8533 72.6243 64.844C75.2181 66.5291 75.2181 66.5907 77.8118 64.844C77.8118 60.8538 77.8105 50.7319 76.6301 46.2688C76.9927 46.0335 77.2907 45.7113 77.4971 45.3315C77.7035 44.9517 77.8117 44.5263 77.8118 44.094C77.8118 43.6712 77.7084 43.2547 77.5106 42.881C77.3128 42.5073 77.0267 42.1876 76.6771 41.9498V37.8289L67.0601 34.87L79.3541 28.7228L41.4993 14.5269ZM19.3913 40.3655L17.264 53.13C21.5072 53.6849 26.583 56.1512 31.2492 59.0675C33.9029 60.7262 36.3885 62.5469 38.4073 64.3134C39.6412 65.3931 40.6731 66.4289 41.4993 67.4481C42.3256 66.4288 43.3574 65.3931 44.5914 64.3134C46.6102 62.5469 49.0956 60.7262 51.7495 59.0675C56.4157 56.1512 61.4915 53.6849 65.7347 53.13L63.607 40.3655H62.5938L41.4993 50.9128L20.4045 40.3655H19.3913Z"
                                fill="#344948" />
                        </svg>
                        <p id="yudisium" class="text-5xl font-bold text-main_green">0</p>
                    </div>
                    <a class="text-main_green text-[12px]" href="">Cek mahasiswa bimbingan
                        <svg class="inline ms-2" xmlns="http://www.w3.org/2000/svg" width="15" height="18"
                            viewBox="0 0 15 18" fill="none">
                            <path
                                d="M10.414 5.26028L10.1772 5.49699C10.0203 5.65389 10.0203 5.90829 10.1772 6.06522L12.9873 8.8591H0.401786C0.1799 8.8591 0 9.039 0 9.26088V9.59571C0 9.81759 0.1799 9.99749 0.401786 9.99749H12.9873L10.1772 12.7914C10.0203 12.9483 10.0203 13.2027 10.1772 13.3596L10.414 13.5963C10.5708 13.7532 10.8252 13.7532 10.9821 13.5963L14.8823 9.71239C15.0392 9.55549 15.0392 9.3011 14.8823 9.14417L10.9821 5.26028C10.8252 5.10335 10.5708 5.10335 10.414 5.26028Z"
                                fill="#344948" />
                        </svg></a>
                </div> --}}


            </div>

        </div>
    </main>

    <script src="{{ asset('js/grafik_dashboard_dosen.js') }}"></script>
    @stack('script')
@endsection
<script>
    async function fetchProjects(page = 1, filterName = '') {
        try {
            let totalSlotDosen = 0;
            let totalSlotKosong = 0;
            const url = `http://127.0.0.1:8001/api/lecturer`;
            while (url != null) {
                const response = await fetch(url);
                data = await response.json();
                url = data.data.next_page_url;
                data.data.data.forEach(detailDosen => {
                    console.log(detailDosen);
                });
            }

            const token = localStorage.getItem('token');
            const response = await fetch('http://127.0.0.1:8001/api/user', {
                headers: {
                    'Authorization': `Bearer ${token}`
                }
            });
            const userData = await response.json();
            console.log(userData);
        } catch (error) {
            console.error('Error:', error);
        }
    }

    function sortProjectsChanger(sortField) {
        if (sortcounter == 0) {
            sortProjects(sortField, 'asc')
            sortcounter++;
        } else {
            sortProjects(sortField, 'desc')
            sortcounter--;
        }
    }

    document.addEventListener("DOMContentLoaded", async () => {

        const logoutButton = document.getElementById('logout-button');
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
    });
</script>
