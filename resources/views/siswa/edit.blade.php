<h1>Ini Halaman Create</h1>
<form method="POST" action="{{ route('siswa.store',['id'=>$siswa->id])) }}">
    @csrf
    <table cellspacing="10">
        <tr>
            <td>Kelas</td>
            <td>
                <select name="kelas_id">
                    <option value="">-- Pilih Kelas --</option>
                    @foreach ($kelas as $k)
                        <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td>NIS</td>
            <td><input type="text" name="nis" value="{{ $siswa -> nis }}"></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td><input type="text" name="nama_lengkap" value="{{ $siswa -> nama_lengkap }}"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
        <td>
            <select name="jenis_kelamin" required>
                <option value="">-- Pilih --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><input type="text" name="tempat_lahir" value="{{ $siswa -> tempat_lahir }}"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="{{ $siswa -> alamat }}"></td>
        </tr>
        <tr>
            <td>No HP</td>
            <td><input type="text" name="no_hp" value="{{ $siswa -> no_hp }}"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="{{ $siswa -> email }}"></td>
        </tr>
        <tr>
            <td>Asal Sekolah</td>
            <td><input type="text" name="asal_sekolah" value="{{ $siswas -> asal_sekolah }}"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td><input type="text" name="jurusan" value="{{ $siswa -> jurusan }}"></td>
        </tr>
        <tr>
            <td>Nama Ayah</td>
            <td><input type="text" name="nama_ayah" value="{{ $siswa -> nama_ayah }}"></td>
        </tr>
        <tr>
            <td>Nama Ibu</td>
            <td><input type="text" name="nama_ibu" value="{{ $siswa -> nama_ibu }}"></td>
        </tr>
        <tr>
            <td>No HP Wali</td>
            <td><input type="text" name="no_hp_wali" value="{{ $siswa -> no_hp_wali }}"></td>
        </tr>
        <tr>
            <td>Status</td>
        <td>
            <select name="jenis_kelamin" required>
                <option value="">-- Pilih --</option>
                <option value="Aktif">Aktif</option>
                <option value="Tidak Aktif">Tidak Aktif</option>
            </select>
        </td>
        </tr>
        <tr>
            <td><button type="submit">Submit</button></td>
            <td><button type="reset">Reset</button></td>
        </tr>
    </table>
</form>