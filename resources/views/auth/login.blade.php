<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Form Pengajuan</title>
</head>

<body>
    <div class="fixed inset-0">
        <div class="h-full w-screen bg-[#3C3D37]">
            <div class="fixed inset-0 mx-auto my-auto lg:w-1/2 h-3/4 w-80  rounded-xl bg-white">
                <div class="flex justify-between">
                    <img src="{{ asset('assets/assets1.jpg') }}" alt=""
                        class="w-[50.9%] rounded-l-lg hidden lg:block">

                    <div class="flex flex-col items-end me-14">
                        <h2 class="mx-auto mt-20 font-bold text-4xl">Login</h2>
                        <form action="{{ route('login.process') }}" method="POST" class="mt-9">
                            @csrf
                            <div class="flex flex-col ms-5">
                                <label for="" class="font-semibold text-lg">Email</label>
                                <input required value="{{ old('email') }}" type="email" name="email"
                                    class="border-2 border-black rounded-md w-72 h-10 ">
                            </div>
                            <div class="flex flex-col ms-5">
                                <label for="" class="font-semibold text-lg">Password</label>
                                <input required type="password" name="password" value="{{ old('password') }}"
                                    class="border-2 border-black rounded-md w-72 h-10 ">
                            </div>
                            <button type="submit"
                                class="ms-5 mt-5 text-white bg-black hover:bg-slate-800 font-semibold text-lg border-2 border-black rounded-md w-72 h-10">Login</button>
                        </form>
                        <p class="mx-7 mt-3">Don't have an account?<a href="{{ route('register') }}"
                                class="font-semibold underline">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
