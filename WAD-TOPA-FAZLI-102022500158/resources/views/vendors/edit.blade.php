@extends('layouts.app')

@section('content')
<div class="kepala">
    <div>
        <h1>Edit vendor</h1>
        <p class="sub">Ubah data supplier {{ $vendor->kode }}.</p>
    </div>
</div>

<div class="kartu">
    <form class="kartu-isi form-vendor" action="{{ route('vendors.update', $vendor) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="field">
            <label for="kode">Kode vendor</label>
            <input type="text" id="kode" name="kode" maxlength="10" value="{{ old('kode', $vendor->kode) }}">
            @error('kode') <p style="color:#B3261E; font-size:13px">{{ $message }}</p> @enderror
        </div>

        <div class="field">
            <label for="status">Status</label>
            <select id="status" name="status">
                <option value="Aktif" {{ old('status', $vendor->status) == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="Tidak Aktif" {{ old('status', $vendor->status) == 'Tidak Aktif' ? 'selected' : '' }}>Tidak aktif</option>
            </select>
        </div>

        <div class="field penuh">
            <label for="nama">Nama vendor</label>
            <input type="text" id="nama" name="nama" maxlength="100" value="{{ old('nama', $vendor->nama) }}">
            @error('nama') <p style="color:#B3261E; font-size:13px">{{ $message }}</p> @enderror
        </div>

        <div class="field">
            <label for="kota">Kota</label>
            <input type="text" id="kota" name="kota" maxlength="50" value="{{ old('kota', $vendor->kota) }}">
            @error('kota') <p style="color:#B3261E; font-size:13px">{{ $message }}</p> @enderror
        </div>

        <div class="field">
            <label for="pic">Penanggung jawab (PIC)</label>
            <input type="text" id="pic" name="pic" maxlength="50" value="{{ old('pic', $vendor->pic) }}">
            @error('pic') <p style="color:#B3261E; font-size:13px">{{ $message }}</p> @enderror
        </div>

        <div class="aksi-form">
            <a href="{{ route('vendors.index') }}" class="btn btn-garis">Batal</a>
            <button type="submit" class="btn">Update vendor</button>
        </div>
    </form>
</div>
@endsection