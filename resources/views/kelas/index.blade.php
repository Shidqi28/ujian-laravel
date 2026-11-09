<h1>Halaman Kelas</h1>

@if(@session('succes'))
<h4 style="color: green">{{session('succes')}}</h4>   
@endif

@if(@session('error'))
<h4 style="color: red">{{session('error')}}</h4>   
@endif

<a href="{{ route('kelas.create')}}">Tambah Data</a>

<table border="1" cellpadding="8" cellspacing="2">
<thead>
    <tr>
        <th>No</th>
        <th>Kode Kelas</th>
        <th>Nama Kelas</th>
        <th>Tingkat</th>
        <th>Tahun Ajaran</th>
        <th>Wali Kelas</th>
        <th>Aksi</th>
    </tr>
</thead>
<tbody>
    @foreach ($kelas as $k)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$k->kode_kelas}}</td>
            <td>{{$k->nama_kelas}}</td>
            <td>{{$k->tingkat}}</td>
            <td>{{$k->tahun_ajaran}}</td>
            <td>{{$k->wali_kelas}}</td>
            <td>
                <div style="display: flex; gap: 5px">
                    <a href="{{ route('kelas.edit',['id'=>$k->id]) }}">Edit</a>
                    <a>|</a>
                    <form method="POST" action="{{route('kelas.delete',['id'=>$k->id])}}" onsubmit="return confirm ('Yakin Data Ini Akan Dihapus?')">
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