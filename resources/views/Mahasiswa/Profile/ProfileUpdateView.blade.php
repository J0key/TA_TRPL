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


        <div class="flex flex-col w-full bg-white shadow-md shadow-clifford rounded-xl mt-10">
            <form action="" method="POST">
                @csrf
                <div class=" w-full relative flex flex-row items-center p-16 pb-12 space-x-12">

                    <div class="flex flex-col basis-1/2 space-y-10">

                        <div class="form-group">
                            <label class=" block mb-2" for="f_name">Nama Depan</label>
                            <input type="text" id="f_name" name="f_name" required style=""
                                class="form-control rounded-lg border-gray-500 w-full focus:border-semi_dark_green ou"
                                value="{{ old('f_name') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="NIM">NIM</label>
                            <input type="text" id="NIM" name="NIM" required
                                class="form-control rounded-lg border-gray-500  w-full" value="{{ old('NIM') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="SKS">SKS</label>
                            <input type="text" id="SKS" name="SKS"
                                class="form-control rounded-lg border-gray-500  w-full" value="{{ old('SKS') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="email">Email</label>
                            <input type="text" id="email" name="email"
                                class="form-control rounded-lg border-gray-500 w-full" value="{{ old('email') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="github">Github</label>
                            <input type="text" id="github" name="github" placeholder="https://"
                                class="form-control rounded-lg border-gray-500 w-full" value="{{ old('github') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="CV">CV</label>
                            <input type="text" id="CV" name="CV" placeholder="https://"
                                class="form-control rounded-lg border-gray-500 w-full" value="{{ old('CV') }}">
                        </div>
                    </div>


                    <div class="flex flex-col basis-1/2 space-y-10">
                        <div class="form-group">
                            <label class=" block mb-2" for="b_name">Nama Belakang</label>
                            <input type="text" id="b_name" name="b_name" required
                                class="form-control rounded-lg border-gray-500 w-full" value="{{ old('b_name') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="IPK">IPK</label>
                            <input type="text" id="IPK" name="IPK"
                                class="form-control rounded-lg border-gray-500 w-full" value="{{ old('IPK') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="hp">No Hp</label>
                            <input type="text" id="hp" name="hp"
                                class="form-control rounded-lg border-gray-500 w-full" value="{{ old('hp') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="linkedin">Linkedin</label>
                            <input type="text" id="linkedin" name="linkedin" placeholder="https://"
                                class="form-control rounded-lg border-gray-500 w-full" value="{{ old('linkedin') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="website">Website</label>
                            <input type="text" id="website" name="website" placeholder="https://"
                                class="form-control rounded-lg border-gray-500 w-full" value="{{ old('website') }}">
                        </div>

                        <div class="form-group mt-6">
                            <label class=" block mb-2" for="porto">Portofolio</label>
                            <input type="text" id="porto" name="porto" placeholder="https://"
                                class="form-control rounded-lg border-gray-500 w-full" value="{{ old('porto') }}">
                        </div>
                    </div>

                </div>
                <div class="w-full flex flex-row justify-end">
                    <button class="" type="submit">
                        <div
                            class="px-20 py-2 bg-button_green rounded-md text-white flex flex-row items-center w-fit mb-12 me-16">
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
    function toProfilePage() {
        window.location.href = "{{ route('mahasiswa.profile') }}";
    }
</script>
