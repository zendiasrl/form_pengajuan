<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Manajer</title>
    @vite('resources/css/app.css')
</head>

<body>
    {{-- navbar --}}
    <nav class="fixed text-white start-56 w-screen h-14 top-0 bg-[#1E201E]">
        <div class="flex justify-end mt-2 me-[17%] font-semibold text-lg">
            <a href="{{ route('logout.manajer') }}"><button
                    class="w-20 h-9 rounded-lg bg-[#3C3D37] border-2 border-[#ff9634]">Logout</button></a>
        </div>
    </nav>
    {{-- end navbar --}}


    {{-- sidebar --}}
    <aside class="fixed left-0 bg-[#1E201E] rounded-br-lg w-1/6 h-full text-white">
        <h2 class="flex justify-center mt-4 font-semibold text-xl">Form Pengajuan</h2>
        <div class="flex flex-col mt-10 ms-8">
            <div class="flex items-center">
                <img src="{{ asset('assets/icon_fom.svg') }}" alt="" class="size-9">
                <a href="{{ route('dashboard.manajer') }}" id="pengajuan"
                    class="text-md ps-2 
                    {{ request()->routeIs('dashboard.manajer') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                    Approval Pengajuan Lembur
                </a>
            </div>

        </div>
    </aside>
    {{-- end sidebar --}}


    {{-- main content --}}
    <main>
        @yield('content')
    </main>
    {{-- end main content --}}



</body>

</html>
