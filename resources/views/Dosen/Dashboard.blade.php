@extends('Dosen.LayoutsDosen')

@section('main')
    <main class="w-full ml-[330px] mr-[50px] min-h-screen flex flex-col">

        <div class="flex items-center justify-between mt-4">

            <div class="text-[#404D61]">
                <p class="font-semibold text-2xl">Dashboard</p>
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

        <div class="flex flex-row">
            <p class="mt-8 text-3xl">Periode Semester</p>
            <p class="mt-8 text-3xl font-semibold ms-2">Ganjil 2023/2024</p>
        </div>
        <p class="mt-4 text-2xl"><?php echo date('d F Y'); ?></p>

        <div class="flex flex-row w-full mt-8 space-x-8">
            <div
                class="basis-1/4 bg-white p-4 py-8 flex flex-col justify-center items-center rounded-md shadow-md shadow-gray-700">
                <p class="text-xl font-bold text-main_green">Kuota Mahasiswa</p>
                <div class="flex flex-row items-center space-x-6 mt-4">
                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="83" height="83" viewBox="0 0 83 83"
                        fill="none">
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
                    <p id="kuota_mhs" class="text-4xl font-bold text-main_green">7/10</p>
                </div>
            </div>

            <div class="basis-1/4 bg-white p-4 py-8 flex flex-col ps-10 rounded-md shadow-md shadow-gray-700">
                <p class="text-xl font-bold text-main_green">Bimbingan</p>
                <div class="flex flex-row items-center space-x-6 my-4 mb-6">
                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="63" height="47" viewBox="0 0 63 47"
                        fill="none">
                        <path
                            d="M0.464844 3.75014C0.464844 3.00185 0.7621 2.28421 1.29122 1.75509C1.82034 1.22597 2.53798 0.928711 3.28627 0.928711H54.072C54.8203 0.928711 55.5379 1.22597 56.067 1.75509C56.5962 2.28421 56.8934 3.00185 56.8934 3.75014C56.8934 4.49843 56.5962 5.21607 56.067 5.74519C55.5379 6.27431 54.8203 6.57157 54.072 6.57157H3.28627C2.53798 6.57157 1.82034 6.27431 1.29122 5.74519C0.7621 5.21607 0.464844 4.49843 0.464844 3.75014ZM0.464844 43.2501C0.464844 42.5018 0.7621 41.7842 1.29122 41.2551C1.82034 40.726 2.53798 40.4287 3.28627 40.4287H48.4291C49.1774 40.4287 49.8951 40.726 50.4242 41.2551C50.9533 41.7842 51.2506 42.5018 51.2506 43.2501C51.2506 43.9984 50.9533 44.7161 50.4242 45.2452C49.8951 45.7743 49.1774 46.0716 48.4291 46.0716H3.28627C2.53798 46.0716 1.82034 45.7743 1.29122 45.2452C0.7621 44.7161 0.464844 43.9984 0.464844 43.2501ZM3.28627 20.6787C2.53798 20.6787 1.82034 20.976 1.29122 21.5051C0.7621 22.0342 0.464844 22.7518 0.464844 23.5001C0.464844 24.2484 0.7621 24.9661 1.29122 25.4952C1.82034 26.0243 2.53798 26.3216 3.28627 26.3216H59.7148C60.4631 26.3216 61.1808 26.0243 61.7099 25.4952C62.239 24.9661 62.5363 24.2484 62.5363 23.5001C62.5363 22.7518 62.239 22.0342 61.7099 21.5051C61.1808 20.976 60.4631 20.6787 59.7148 20.6787H3.28627Z"
                            fill="#344948" />
                    </svg>
                    <p id="kuota_mhs" class="text-5xl font-bold text-main_green">0</p>
                </div>
                <a class="text-main_green text-[12px]" href="">Cek mahasiswa bimbingan
                    <svg class="inline ms-2" xmlns="http://www.w3.org/2000/svg" width="15" height="18"
                        viewBox="0 0 15 18" fill="none">
                        <path
                            d="M10.414 5.26028L10.1772 5.49699C10.0203 5.65389 10.0203 5.90829 10.1772 6.06522L12.9873 8.8591H0.401786C0.1799 8.8591 0 9.039 0 9.26088V9.59571C0 9.81759 0.1799 9.99749 0.401786 9.99749H12.9873L10.1772 12.7914C10.0203 12.9483 10.0203 13.2027 10.1772 13.3596L10.414 13.5963C10.5708 13.7532 10.8252 13.7532 10.9821 13.5963L14.8823 9.71239C15.0392 9.55549 15.0392 9.3011 14.8823 9.14417L10.9821 5.26028C10.8252 5.10335 10.5708 5.10335 10.414 5.26028Z"
                            fill="#344948" />
                    </svg></a>
            </div>

            <div class="basis-1/4 bg-white p-4 flex flex-col ps-10 rounded-md shadow-md shadow-gray-700">
                <p class="text-xl font-bold text-main_green">Pendadaran</p>
                <div class="flex flex-row items-center space-x-6 my-2 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                        fill="none">
                        <path
                            d="M33.75 5.35714C33.75 3.93634 33.3549 2.57373 32.6516 1.56907C31.9484 0.564412 30.9946 0 30 0C29.0054 0 28.0516 0.564412 27.3484 1.56907C26.6451 2.57373 26.25 3.93634 26.25 5.35714C26.25 6.77795 26.6451 8.14056 27.3484 9.14522C28.0516 10.1499 29.0054 10.7143 30 10.7143C30.9946 10.7143 31.9484 10.1499 32.6516 9.14522C33.3549 8.14056 33.75 6.77795 33.75 5.35714ZM13.5 23.5714C14.4946 23.5714 15.4484 23.007 16.1516 22.0024C16.8549 20.9977 17.25 19.6351 17.25 18.2143C17.25 16.7935 16.8549 15.4309 16.1516 14.4262C15.4484 13.4216 14.4946 12.8571 13.5 12.8571C12.5054 12.8571 11.5516 13.4216 10.8483 14.4262C10.1451 15.4309 9.75 16.7935 9.75 18.2143C9.75 19.6351 10.1451 20.9977 10.8483 22.0024C11.5516 23.007 12.5054 23.5714 13.5 23.5714ZM3 51.4286C1.34062 51.4286 0 53.3437 0 55.7143C0 58.0848 1.34062 60 3 60H57C58.6594 60 60 58.0848 60 55.7143C60 53.3437 58.6594 51.4286 57 51.4286H3ZM46.5 23.5714C47.4946 23.5714 48.4484 23.007 49.1517 22.0024C49.8549 20.9977 50.25 19.6351 50.25 18.2143C50.25 16.7935 49.8549 15.4309 49.1517 14.4262C48.4484 13.4216 47.4946 12.8571 46.5 12.8571C45.5054 12.8571 44.5516 13.4216 43.8484 14.4262C43.1451 15.4309 42.75 16.7935 42.75 18.2143C42.75 19.6351 43.1451 20.9977 43.8484 22.0024C44.5516 23.007 45.5054 23.5714 46.5 23.5714ZM18.75 37.7009L21.2719 44.3839C21.8625 45.9509 23.2219 46.5268 24.3187 45.6964C25.4156 44.8661 25.8188 42.9107 25.2375 41.3438L21.8344 32.3036C21.9937 32.0759 22.1344 31.8214 22.2375 31.5268L24.75 24.8438V32.1429C24.75 34.5134 26.0906 36.4286 27.75 36.4286H32.25C33.9094 36.4286 35.25 34.5134 35.25 32.1429V24.8438L37.7719 31.5268C37.8844 31.8214 38.0156 32.0759 38.175 32.3036L34.7719 41.3438C34.1812 42.9107 34.5938 44.8527 35.6906 45.6964C36.7875 46.5402 38.1469 45.9509 38.7375 44.3839L41.25 37.7009V42.8571C41.25 45.2277 42.5906 47.1429 44.25 47.1429H48.75C50.4094 47.1429 51.75 45.2277 51.75 42.8571V37.7009L54.2719 44.3839C54.8625 45.9509 56.2219 46.5268 57.3188 45.6964C58.4156 44.8661 58.8188 42.9107 58.2375 41.3438L54.6844 31.9286C53.25 28.1116 50.4562 25.7277 47.4187 25.7277H45.5813C44.0531 25.7277 42.5906 26.3304 41.325 27.4152L38.175 19.0714C36.7406 15.2545 33.9469 12.8705 30.9094 12.8705H29.0813C26.0438 12.8705 23.2594 15.2545 21.8156 19.0714L18.6656 27.4152C17.4 26.3304 15.9375 25.7277 14.4094 25.7277H12.5812C9.54375 25.7277 6.75938 28.1116 5.31563 31.9286L1.77187 41.3304C1.18125 42.8973 1.59375 44.8393 2.69063 45.683C3.7875 46.5268 5.14688 45.9375 5.7375 44.3705L8.25 37.7009V42.8571C8.25 45.2277 9.59062 47.1429 11.25 47.1429H15.75C17.4094 47.1429 18.75 45.2277 18.75 42.8571V37.7009Z"
                            fill="#344948" />
                    </svg>
                    <p id="kuota_mhs" class="text-5xl font-bold text-main_green">0</p>
                </div>
                <div class="flex flex-row pe-6">
                    <a class="text-main_green text-[12px] inline" href="">Cek mahasiswa akan pendadaran</a>
                    <svg class="inline ms-2" xmlns="http://www.w3.org/2000/svg" width="15" height="18"
                        viewBox="0 0 15 18" fill="none">
                        <path
                            d="M10.414 5.26028L10.1772 5.49699C10.0203 5.65389 10.0203 5.90829 10.1772 6.06522L12.9873 8.8591H0.401786C0.1799 8.8591 0 9.039 0 9.26088V9.59571C0 9.81759 0.1799 9.99749 0.401786 9.99749H12.9873L10.1772 12.7914C10.0203 12.9483 10.0203 13.2027 10.1772 13.3596L10.414 13.5963C10.5708 13.7532 10.8252 13.7532 10.9821 13.5963L14.8823 9.71239C15.0392 9.55549 15.0392 9.3011 14.8823 9.14417L10.9821 5.26028C10.8252 5.10335 10.5708 5.10335 10.414 5.26028Z"
                            fill="#344948" />
                    </svg>
                </div>

            </div>

            <div class="basis-1/4 bg-white p-4 py-8 flex flex-col ps-10 rounded-md shadow-md shadow-gray-700">
                <p class="text-xl font-bold text-main_green">Proyek</p>
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
                    <p id="kuota_mhs" class="text-5xl font-bold text-main_green">0</p>
                </div>
                <a class="text-main_green text-[12px] mt-[-16px]" href="">Cek daftar proyek
                    <svg class="inline ms-2" xmlns="http://www.w3.org/2000/svg" width="15" height="18"
                        viewBox="0 0 15 18" fill="none">
                        <path
                            d="M10.414 5.26028L10.1772 5.49699C10.0203 5.65389 10.0203 5.90829 10.1772 6.06522L12.9873 8.8591H0.401786C0.1799 8.8591 0 9.039 0 9.26088V9.59571C0 9.81759 0.1799 9.99749 0.401786 9.99749H12.9873L10.1772 12.7914C10.0203 12.9483 10.0203 13.2027 10.1772 13.3596L10.414 13.5963C10.5708 13.7532 10.8252 13.7532 10.9821 13.5963L14.8823 9.71239C15.0392 9.55549 15.0392 9.3011 14.8823 9.14417L10.9821 5.26028C10.8252 5.10335 10.5708 5.10335 10.414 5.26028Z"
                            fill="#344948" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="flex flex-row w-full space-x-4 mt-12">
            <button onclick="tes()"
                class="py-3 px-6 font-semibold opacity-50 text-gray-500 hover:bg-semi_dark_green hover:text-white hover:opacity-100 rounded-2xl">Last
                7 days</button>
            <button
                class="py-3 px-6 font-semibold opacity-50 text-gray-500 hover:bg-semi_dark_green hover:text-white hover:opacity-100 rounded-2xl">Months</button>
            <button
                class="py-3 px-6 font-semibold opacity-50 text-gray-500 hover:bg-semi_dark_green hover:text-white hover:opacity-100 rounded-2xl">Years</button>
        </div>

        <!-- <div style="width: 500px;"><canvas id="dimensions"></canvas></div><br/> -->
        <div style="width: 800px;"><canvas id="acquisitions"></canvas></div>
    </main>
@endsection
<script>
    let userData = null;

    const token = localStorage.getItem('token');
    console.log(token);
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

    fetchUser();
</script>
