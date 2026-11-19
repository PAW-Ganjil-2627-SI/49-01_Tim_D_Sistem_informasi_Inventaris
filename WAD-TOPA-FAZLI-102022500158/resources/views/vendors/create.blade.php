@extends('layouts.app')

@section('content')
<div class="kepala">
    <div>
        <h1>Tambah vendor</h1>
        <p class="sub">Isi data supplier baru. Semua kolom wajib diisi.</p>
    </div>
</div>

<div class="kartu">
    <form class="kartu-isi form-vendor" action="{{ route('vendors.store') }}" method="POST">
        @csrf

        <div class="field">
            <label for="kode">Kode vendor</label>
            <input type="text" id="kode" name="kode" maxlength="10" placeholder="Contoh: V03" value="{{ old('kode') }}">
            @error('kode') <p style="color:#B3261E; font-size:13px">{{ $message }}</p> @enderror
        </div>

        <div class="field">
            <label for="status">Status</label>
            <select id="status" name="status">
                <option value="Aktif" {{ old('status') == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="Tidak Aktif" {{ old('status') == 'Tidak Aktif' ? 'selected' : '' }}>Tidak aktif</option>
            </select>
        </div>

        <div class="field penuh">
            <label for="nama">Nama vendor</label>
            <input type="text" id="nama" name="nama" maxlength="100" value="{{ old('nama') }}">
            @error('nama') <p style="color:#B3261E; font-size:13px">{{ $message }}</p> @enderror
        </div>

        <div class="field">
            <label for="kota">Kota</label>
            <input type="text" id="kota" name="kota" maxlength="50" value="{{ old('kota') }}">
            @error('kota') <p style="color:#B3261E; font-size:13px">{{ $message }}</p> @enderror
        </div>

        <div class="field">
            <label for="pic">Penanggung jawab (PIC)</label>
            <input type="text" id="pic" name="pic" maxlength="50" value="{{ old('pic') }}">
            @error('pic') <p style="color:#B3261E; font-size:13px">{{ $message }}</p> @enderror
        </div>

        <div class="aksi-form">
            <a href="{{ route('vendors.index') }}" class="btn btn-garis">Batal</a>
            <button type="submit" class="btn">Simpan vendor</button>
        </div>
    </form>
</div>
@endsection