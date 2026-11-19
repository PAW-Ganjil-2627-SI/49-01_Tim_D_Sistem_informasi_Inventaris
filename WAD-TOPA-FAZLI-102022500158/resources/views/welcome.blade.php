
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vendoorz (Enter your company here) 2026</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="navbar">
        <div class="navbar-isi">
            <a href="{{ route('vendors.index') }}" class="logo">Vendoorz</a>
            <nav>
                <a href="{{ route('vendors.index') }}">Daftar vendor</a>
                <a href="{{ route('vendors.create') }}">Tambah vendor</a>
            </nav>
        </div>
    </header>

    @yield('content')


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
                            <tr>
                                <td class="kode">V01</td>
                                <td>PT. Meja Goyang .Tbk</td>
                                <td>Bandung</td>
                                <td>Bagus</td>
                                <td><span class="status status-aktif">Aktif</span></td>
                                <td class="aksi">
                                    <a href="#detail">Detail</a>
                                    <a href="#tambah">Edit</a>
                                    <a href="#daftar" class="hapus">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="kode">V02</td>
                                <td>CV. Jaya Abadi Selamanya Sampai Mati</td>
                                <td>Jakarta Utara</td>
                                <td>Bagas</td>
                                <td><span class="status status-nonaktif">Tidak aktif</span></td>
                                <td class="aksi">
                                    <a href="#detail">Detail</a>
                                    <a href="#tambah">Edit</a>
                                    <a href="#daftar" class="hapus">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>


            <div class="kartu">
               <form class="kartu-isi form-vendor" action="{{ route('vendors.store') }}" method="POST">
             @csrf
                        <label for="kode">Kode vendor</label>
                        <input type="text" id="kode" name="kode" maxlength="10" placeholder="Contoh: V03" required>
                    </div>

                    <div class="field">
                        <label for="status">Status</label>
                        <select id="status" name="status">
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak aktif</option>
                        </select>
                    </div>

                    <div class="field penuh">
                        <label for="nama">Nama vendor</label>
                        <input type="text" id="nama" name="nama" maxlength="100" required>
                    </div>

                    <div class="field">
                        <label for="kota">Kota</label>
                        <input type="text" id="kota" name="kota" maxlength="50" required>
                    </div>

                    <div class="field">
                        <label for="pic">Penanggung jawab (PIC)</label>
                        <input type="text" id="pic" name="pic" maxlength="50" required>
                    </div>

                    <div class="aksi-form">
                        <a href="#daftar" class="btn btn-garis">Batal</a>
                        <button type="submit" class="btn">Simpan vendor</button>
                    </div>
                </form>
            </div>
        </section>


            <div class="kartu">
                <div class="kartu-isi">
                    <dl class="rincian">
                        <div><dt>Kode</dt><dd>V01</dd></div>
                        <div><dt>Status</dt><dd>Aktif</dd></div>
                        <div class="penuh"><dt>Nama vendor</dt><dd>PT Meja Goyang Tbk</dd></div>
                        <div><dt>Kota</dt><dd>Bandung</dd></div>
                        <div><dt>Penanggung jawab (PIC)</dt><dd>Bagus</dd></div>
                    </dl>
                </div>
                <div class="kartu-isi aksi-form" style="border-top: 1px solid var(--line);">
                    <a href="#daftar" class="btn btn-garis">Kembali</a>
                    <a href="#tambah" class="btn">Edit vendor</a>
                </div>
            </div>
        </section>

    </main>

    <footer class="footer">&copy; Amirudin Fazli Andrian</footer>

</body>
</html>