<h1>Halaman Siswa</h1>

@if(@session('succes'))
<h4 style="color: green">{{session('succes')}}</h4>
@endif

@if(@session('error'))
<h4 style="color: red">{{session('error')}}</h4>
@endif

<a href="{{ route('siswa.create')}}">Tambah Data</a>

<table border="1" cellpadding="8" cellspacing="2">
<thead>
    <tr>
        <th>No</th>
        <th>Kelas</th>
        <th>NIS</th>
        <th>Nama Lengkap</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Email</th>
        <th>Asal Sekolah</th>
        <th>Jurusan</th>
        <th>Nama Ayah</th>
        <th>Nama Ibu</th>
        <th>No HP Wali</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
</thead>
<tbody>
    @foreach ($siswa as $s)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$s->kelas_id}}</td>
        <td>{{$s->nis}}</td>
        <td>{{$s->nama_lengkap}}</td>
        <td>{{$s->jenis_kelamin}}</td>
        <td>{{$s->tempat_lahir}}</td>
        <td>{{$s->tanggal_lahir}}</td>
        <td>{{$s->alamat}}</td>
        <td>{{$s->no_hp}}</td>
        <td>{{$s->email}}</td>
        <td>{{$s->asal_sekolah}}</td>
        <td>{{$s->jurusan}}</td>
        <td>{{$s->nama_ayah}}</td>
        <td>{{$s->nama_ibu}}</td>
        <td>{{$s->no_hp_wali}}</td>
        <td>{{$s->status}}</td>
        <td>
                <div style="display: flex; gap: 5px">
                    <a href="{{ route('siswa.edit',['id'=>$s->id]) }}">Edit</a>
                    <a>|</a>
                    <form method="POST" action="{{route('siswa.delete',['id'=>$s->id])}}" onsubmit="return confirm ('Yakin Data Ini Akan Dihapus?')">
                        @method('DELETE')
                        @csrf
                        <button type="submit" style="background: none; border: none; cursor: pointer">Hapus</button>
                    </form>
                </div>
        </td>
    </tr>
    @endforeach
</tbody>
</table>