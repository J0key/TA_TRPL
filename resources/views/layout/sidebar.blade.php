<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>testing</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body class="text-white bg-[#EFEFEF]">

    {{-- sidebar start --}}
    <div class="fixed w-64 bg-[#4C8F8B] left-0 top-0 h-full p-6">
        <a href="" class="flex items-center">
            <img src="https://placehold.co/40x40" alt="" class="w-10 h-10 rounded object-cover">
            <span class="font-bold text-lg ml-3">TA - TRPL</span>
        </a>
        <ul class="mt-10">
            <li class="group active">
                <a href="#" class="flex items-center px-2 py-2 hover:bg-[#5B9692] rounded-md">
                    <i class="ri-home-line pr-4"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center px-2 py-5">
                    <i class="ri-notification-2-line pr-4"></i>
                    <span>Pengumuman</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center px-2 py-5">
                    <i class="ri-group-fill pr-4"></i>
                    <span>User</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center px-2 py-5">
                    <i class="ri-user-line pr-4"></i>
                    <span>Account</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center px-2 py-5">
                    <i class="ri-file-chart-line pr-4"></i>
                    <span>Berkas</span>
                </a>
            </li>

        </ul>


    </div>
    {{-- sidebar end --}}

    {{-- main start --}}
    @yield('main')
    {{-- main end --}}


</body>

</html>

