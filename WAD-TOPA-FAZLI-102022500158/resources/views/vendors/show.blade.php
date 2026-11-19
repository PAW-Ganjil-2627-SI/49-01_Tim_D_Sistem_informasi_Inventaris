@extends('layouts.app')

@section('content')
<div class="kepala">
    <div>
        <h1>{{ $vendor->nama }}</h1>
        <p class="sub">Kode vendor {{ $vendor->kode }}</p>
    </div>
    <span class="status {{ $vendor->status == 'Aktif' ? 'status-aktif' : 'status-nonaktif' }}">{{ $vendor->status }}</span>
</div>

<div class="kartu">
    <div class="kartu-isi">
        <dl class="rincian">
            <div><dt>Kode</dt><dd>{{ $vendor->kode }}</dd></div>
            <div><dt>Status</dt><dd>{{ $vendor->status }}</dd></div>
            <div class="penuh"><dt>Nama vendor</dt><dd>{{ $vendor->nama }}</dd></div>
            <div><dt>Kota</dt><dd>{{ $vendor->kota }}</dd></div>
            <div><dt>Penanggung jawab (PIC)</dt><dd>{{ $vendor->pic }}</dd></div>
        </dl>
    </div>
    <div class="kartu-isi aksi-form" style="border-top: 1px solid var(--line);">
        <a href="{{ route('vendors.index') }}" class="btn btn-garis">Kembali</a>
        <a href="{{ route('vendors.edit', $vendor) }}" class="btn">Edit vendor</a>
    </div>
</div>
@endsection