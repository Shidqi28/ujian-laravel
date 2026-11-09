<h1>Ini Halaman Create</h1>
<form method="POST" action="{{ route('kelas.store') }}">
    @csrf
    <table cellspacing="10">
        <tr>
            <td>Kode Kelas</td>
            <td><input type="text" name="kode_kelas"></td>
        </tr>
        <tr>
            <td>Nama Kelas</td>
            <td><input type="text" name="nama_kelas"></td>
        </tr>
        <tr>
            <td>Tingkat</td>
            <td><input type="text" name="tingkat"></td>
        </tr>
        <tr>
            <td>Tahun Ajaran</td>
            <td><input type="text" name="tahun_ajaran"></td>
        </tr>
        <tr>
            <td>Wali Kelas</td>
            <td><input type="text" name="wali_kelas"></td>
        </tr>
        <tr>
            <td><button type="submit">Submit</button></td>
            <td><button type="reset">Reset</button></td>
        </tr>
    </table>
</form>