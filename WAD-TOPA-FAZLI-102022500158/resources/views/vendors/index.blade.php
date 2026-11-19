@extends('layouts.app')

@section('content')
<div class="kepala">
    <div>
        <h1>Daftar supplier</h1>
        <p class="sub">Data vendor yang bekerja sama dengan perusahaan.</p>
    </div>
    <a href="{{ route('vendors.create') }}" class="btn">Tambah vendor</a>
</div>

<div class="kartu">
    <div class="tabel-bungkus">
        <table class="tabel-vendor">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama vendor</th>
                    <th>Kota</th>
                    <th>PIC</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vendors as $vendor)
                <tr>
                    <td class="kode">{{ $vendor->kode }}</td>
                    <td>{{ $vendor->nama }}</td>
                    <td>{{ $vendor->kota }}</td>
                    <td>{{ $vendor->pic }}</td>
                    <td>
                        <span class="status {{ $vendor->status == 'Aktif' ? 'status-aktif' : 'status-nonaktif' }}">{{ $vendor->status }}</span>
                    </td>
                    <td class="aksi">
                        <a href="{{ route('vendors.show', $vendor) }}">Detail</a>
                        <a href="{{ route('vendors.edit', $vendor) }}">Edit</a>
                        <form action="{{ route('vendors.destroy', $vendor) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="hapus">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection