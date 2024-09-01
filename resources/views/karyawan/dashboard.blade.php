@extends('karyawan.master')
@section('content')
    <div class="absolute start-72 w-3/4 rounded-xl bg-[#1E201E] h-5/6 mt-20 text-white">
        <h2 class="text-center text-2xl font-bold mt-5">Form Pengajuan Lembur</h2>
        <form action="{{ route('karyawan.store') }}" method="POST" class="text-black">
            @csrf
            <div class="flex justify-between mx-20 mt-10">
                <div>
                    <div class="flex flex-col">
                        <label for="" class="text-white">Nama</label>
                        <input type="text" name="nama" value="{{ $data->nama ?? '' }}"
                            class="w-96 h-9 rounded-lg border-2 border-[#ff9634] ps-2">
                    </div>
                    <div class="flex flex-col">
                        <label for="" class="text-white">Posisi</label>
                        <input type="text" name="posisi" value="{{ $data->posisi ?? '' }}"
                            class="w-96 h-9 rounded-lg border-2 border-[#ff9634] ps-2">
                    </div>
                    <div class="flex flex-col">
                        <label for="" class="text-white">Hari</label>
                        <select class="w-96 h-9 rounded-lg border-2 border-[#ff9634] ps-2" name="hari" id="">
                            <option value="Senin" @if (($data->hari ?? '') == 'Senin') selected @endif>Senin</option>
                            <option value="Selasa" @if (($data->hari ?? '') == 'Selasa') selected @endif>Selasa</option>
                            <option value="Rabu" @if (($data->hari ?? '') == 'Rabu') selected @endif>Rabu</option>
                            <option value="Kamis" @if (($data->hari ?? '') == 'Kamis') selected @endif>Kamis</option>
                            <option value="Jumat" @if (($data->hari ?? '') == 'Jumat') selected @endif>Jumat</option>
                            <option value="Sabtu"@if (($data->hari ?? '') == 'Sabtu') selected @endif>Sabtu</option>
                            <option value="Minggu" @if (($data->hari ?? '') == 'Minggu') selected @endif>Minggu</option>
                        </select>
                    </div>
                    <div class="flex flex-col">
                        <label for="" class="text-white">Tanggal</label>
                        <input type="date" name="tanggal" value="{{ $data->tanggal ?? '' }}"
                            class="w-96 h-9 rounded-lg border-2 border-[#ff9634] ps-2">
                    </div>
                </div>
                <div>
                    <div class="flex flex-col">
                        <label for="" class="text-white">Jam Mulai</label>
                        <input type="time" id="jam_mulai" name="jam_mulai" value="{{ $data->jam_mulai ?? '' }}"
                            class="w-96 h-9 rounded-lg border-2 border-[#ff9634] ps-2">
                    </div>
                    <div class="flex flex-col">
                        <label for="" class="text-white">Jam Selesai</label>
                        <input type="time" id="jam_selesai" name="jam_selesai" value="{{ $data->jam_selesai ?? '' }}"
                            class="w-96 h-9 rounded-lg border-2 border-[#ff9634] ps-2">
                    </div>
                    <div class="flex flex-col">
                        <label for="" class="text-white">Durasi (Jam)</label>
                        <input type="text" id="durasi" readonly name="durasi" value="{{ $data->durasi ?? '' }}"
                            class="w-96 h-9 rounded-lg bg-white border-2 border-[#ff9634] ps-2">
                    </div>
                    <div class="flex flex-col">
                        <label for="" class="text-white">Pekerjaan</label>
                        <input type="text" name="pekerjaan" value="{{ $data->pekerjaan ?? '' }}"
                            class="w-96 h-9 rounded-lg border-2 border-[#ff9634] ps-2">
                    </div>
                </div>
            </div>
            <button type="submit"
                class="w-[84%] h-9 flex mx-auto items-center rounded-lg bg-white text-black border-2 border-[#ff9634] mt-5">
                <h5 class="mx-auto">Submit</h5>
            </button>
        </form>
    </div>
