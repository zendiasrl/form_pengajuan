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
            <div class="fixed inset-0 mx-auto my-auto lg:w-1/2 h-3/4 w-72 rounded-xl bg-white">
                <div class="flex justify-between">
                    <img src="{{ asset('assets/assets1.jpg') }}" alt=""
                        class="lg:w-[50.9%] rounded-l-lg hidden lg:block md:block md:w-[70%]">

                    <div class="flex flex-col items-end me-14">
                        <h2 class="mx-auto mt-20 font-bold text-4xl">Register</h2>
                        <form action="{{ route('register.process') }}" method="POST" class="mt-9">
                            @csrf
                            <div class="flex flex-col ms-5">
                                <label for="" class="font-semibold text-lg">Name</label>
                                <input required type="text" name="name"
                                    class="border-2 border-black rounded-md lg:w-72 h-10 w-60 ">
                            </div>
                            <div class="flex flex-col ms-5">
                                <label for="" class="font-semibold text-lg">Email</label>
                                <input required type="email" name="email"
                                    class="border-2 border-black rounded-md lg:w-72 w-60 h-10 ">
                            </div>
                            <div class="flex flex-col ms-5">
                                <label for="" class="font-semibold text-lg">Password</label>
                                <input required type="password" name="password"
                                    class="border-2 border-black rounded-md lg:w-72 w-60 h-10 ">
                            </div>
                            <button type="submit"
                                class="ms-5 mt-5 text-white bg-black hover:bg-slate-800 font-semibold text-lg border-2 border-black rounded-md lg:w-72 w-60 h-10">Register</button>
                        </form>
                        <p class="lg:mx-16 mx-10 mt-3">have an account?<a href="{{ route('login.view') }}"
                                class="font-semibold underline">Login</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
