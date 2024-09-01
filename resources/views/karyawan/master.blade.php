<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Karyawan</title>
    @vite('resources/css/app.css')
</head>

<body>
    {{-- navbar --}}
    <nav class="fixed text-white start-56 w-screen h-14 top-0 bg-[#1E201E]">
        <div class="flex justify-end mt-2 me-[17%] font-semibold text-lg">
            <a href="{{ route('logout') }}"><button
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
                <a href="{{ route('dashboard.karyawan') }}" id="pengajuan"
                    class="text-md ps-2 
                    {{ request()->routeIs('dashboard.karyawan') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                    Pengajuan Lembur
                </a>
            </div>
            <div class="flex items-center">
                <img src="{{ asset('assets/icon_status.svg') }}" alt="" class="size-9">
                <a href="{{ route('karyawan.status') }}" id="status"
                    class="text-md ps-2 
                    {{ request()->routeIs('karyawan.status') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                    Status
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

    <script>
        document.getElementById('jam_mulai').addEventListener('input', calculateDuration);
        document.getElementById('jam_selesai').addEventListener('input', calculateDuration);

        function calculateDuration() {
            const jamMulai = document.getElementById('jam_mulai').value;
            const jamSelesai = document.getElementById('jam_selesai').value;

            if (jamMulai && jamSelesai) {

                const [startHours, startMinutes] = jamMulai.split(':').map(Number);
                const [endHours, endMinutes] = jamSelesai.split(':').map(Number);

                const startTime = startHours * 60 + startMinutes;
                const endTime = endHours * 60 + endMinutes;

                let durationInMinutes = endTime - startTime;

                if (durationInMinutes < 0) {
                    durationInMinutes += 24 * 60;
                }

                const durationInHours = (durationInMinutes / 60).toFixed(2);


                document.getElementById('durasi').value = durationInHours;
            } else {
                document.getElementById('durasi').value = '';
            }
        }
    </script>


</body>

</html>
