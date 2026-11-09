<h1>Data Siswa Berhasil Disimpan</h1>
<table border="1" cellspacing="5">
    <tr>
        <td>Nama Kelas</td>
        <td>:</td>
        <td>{{ $kelas_id }}</td>
    </tr>
    <tr>
        <td>NIS</td>
        <td>:</td>
        <td>{{ $nis }}</td>
    </tr>
    <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td>{{ $nama_lengkap }}</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>{{ $jenis_kelamin }}</td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td>{{ $tempat_lahir }}</td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td>{{ $tanggal_lahir }}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>{{ $alamat }}</td>
    </tr>
    <tr>
        <td>No HP</td>
        <td>:</td>
        <td>{{ $no_hp }}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:</td>
        <td>{{ $email }}</td>
    </tr>
    <tr>
        <td>Asal Sekolah</td>
        <td>:</td>
        <td>{{ $asal_sekolah }}</td>
    </tr>
    <tr>
        <td>Jurusan</td>
        <td>:</td>
        <td>{{ $jurusan }}</td>
    </tr>
    <tr>
        <td>Nama Ayah</td>
        <td>:</td>
        <td>{{ $nama_ayah }}</td>
    </tr>
    <tr>
        <td>Nama Ibu</td>
        <td>:</td>
        <td>{{ $nama_ibu }}</td>
    </tr>
    <tr>
        <td>No HP Wali</td>
        <td>:</td>
        <td>{{ $no_hp_wali }}</td>
    </tr>
    <tr>
        <td>Status</td>
        <td>:</td>
        <td>{{ $status }}</td>
    </tr>
</table>
<a href="{{ route('siswa.create') }}">Kembali</a>