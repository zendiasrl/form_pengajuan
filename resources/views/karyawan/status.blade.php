@extends('karyawan.master')
@section('content')
    <div class="absolute start-72 w-3/4 rounded-xl bg-[#1E201E] h-5/6 mt-20 text-white">
        <table class="text-white mx-auto mt-5 ">
            <thead>
                <tr class="flex gap-20 items-center justify-between border-b-2 border-[#ff9634]">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Posisi</th>
                    <th>Pekerjaan</th>
                    <th>Tanggal Lembur</th>
                    <th>Durasi</th>
                    <th>Status Lembur</th>
                </tr>
            </thead>
            <tbody>
                <tr class="flex border-b-2 border-[#ff9634]">
                    @foreach ($data as $item)
                        <td>{{ $item->id }}</td>
                        <td class="ms-24">{{ $item->nama }}</td>
                        <td class="ms-16">{{ $item->posisi }}</td>
                        <td class="ms-14">{{ $item->pekerjaan }}</td>
                        <td class="ms-24">{{ $item->tanggal }}</td>
                        <td class="ms-32">{{ $item->durasi }}</td>
                        <td class="ms-28">{{ $item->status }}</td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
