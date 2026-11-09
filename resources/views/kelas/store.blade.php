<h1>Data Kelas Berhasil Disimpan</h1>
<table border="1" cellspacing="5">
    <tr>
        <td>Kode Kelas</td>
        <td>:</td>
        <td>{{ $kode_kelas }}</td>
    </tr>
    <tr>
        <td>Nama Kelas</td>
        <td>:</td>
        <td>{{ $nama_kelas }}</td>
    </tr>
    <tr>
        <td>Tingkat</td>
        <td>:</td>
        <td>{{ $tingkat }}</td>
    </tr>
    <tr>
        <td>Tahun Ajaran</td>
        <td>:</td>
        <td>{{ $tahun_ajaran }}</td>
    </tr>
    <tr>
        <td>Wali Kelas</td>
        <td>:</td>
        <td>{{ $wali_kelas }}</td>
    </tr>
</table>
<a href="{{ route('kelas.create') }}">Kembali</a>