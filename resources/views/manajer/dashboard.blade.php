@extends('manajer.master')
@section('content')
    <div class="absolute start-72 w-[127%] rounded-xl  bg-[#1E201E] h-5/6 mt-20 text-white">
        <h2 class="text-center text-2xl font-bold mt-5">Approval Pengajuan Lembur</h2>
        <table class="text-white mx-auto mt-5 ">
            <thead>
                <tr class="flex gap-20 items-center justify-between border-b-2 border-[#ff9634]">
                    <th class="ms-5">No</th>
                    <th>Nama</th>
                    <th>Posisi</th>
                    <th>Hari</th>
                    <th>Pekerjaan</th>
                    <th>Tanggal Lembur</th>
                    <th>Jam Mulai</th>
                    <th>Jam Selesai</th>
                    <th>Durasi</th>
                    <th>Status Lembur</th>
                </tr>
            </thead>
            <tbody>
                <tr class="flex border-b-2 border-[#ff9634]">
                    @foreach ($datakar as $items)
                        <td class="ms-5 mt-5">{{ $items->id }}</td>
                        <td class="ms-32 mt-5">{{ $items->nama }}</td>
                        <td class="ms-20 mt-5">{{ $items->posisi }}</td>
                        <td class="ms-20 mt-5">{{ $items->hari }}</td>
                        <td class="ms-24 w-20 mt-5">{{ $items->pekerjaan }}</td>
                        <td class="ms-28 w-24 mt-5">{{ $items->tanggal }}</td>
                        <td class="ms-32 mt-5">{{ $items->jam_mulai }}</td>
                        <td class="ms-28 mt-5">{{ $items->jam_selesai }}</td>
                        <td class="ms-36 mt-5">{{ $items->durasi }}</td>
                        <td class="ms-28 mt-5">
                            <form action="{{ route('manajer.updateStatus', $items->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <select name="status" class="text-black" onchange="this.form.submit()">
                                    <option value="proses" {{ $items->status === 'proses' ? 'selected' : '' }}>Proses
                                    </option>
                                    <option value="disetujui" {{ $items->status === 'disetujui' ? 'selected' : '' }}>
                                        Disetujui</option>
                                    <option value="tidak disetujui"
                                        {{ $items->status === 'tidak disetujui' ? 'selected' : '' }}>Tidak Disetujui
                                    </option>
                                </select>
                            </form>
                        </td>
                    @endforeach
                </tr>
            </tbody>
        </table>

    </div>
