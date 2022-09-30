<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   {{-- tambah data --}}
    <fieldset style="display: inline-block" >
        <legend>Tambah Data mahasiswa</legend>
        <form action="addData" method="post">
            @csrf
            Nama : <input type="text" name="nama" id="" autofocus><br><br>
            NRP : <input type="text" name="nrp" id=""><br><br>
            Prodi : <input type="text" name="prodi" id=""><br><br>
            <button type="submit">Simpan</button>
        </form>
    </fieldset>
    <br>
    <br>
    {{-- end tambah data --}}

    {{-- Pencarian --}}
    <form action="cari" method="GET">
        <input type="text" name="cari" placeholder="cari data..nama/nrp/prodi" value="{{ old('cari') }}">
        <button type="submit">Cari</button>
        <a href="/">Reset</a>
    </form>
    <br>
    {{-- end pencarian --}}

    {{-- flash message session --}}
    @if(session('tambah'))
    <div style="padding:1px; margin:1px; background-color:lime; display:inline-block;">
    <h3> {{ session('tambah') }}</h3>
    </div>
    <br>
    <br>
    @elseif(session('hapus'))
    <div style="padding:1px; margin:1px; background-color:red; color:aliceblue; display:inline-block;">
        <h3> {{ session('hapus') }}</h3>
        </div>
        <br>
        <br>
    @elseif(session('edit'))
        <div style="padding:1px; margin:1px; background-color:rgb(251, 255, 0); color:rgb(0, 0, 0); display:inline-block;">
        <h3> {{ session('edit') }}</h3>
        </div>
        <br>
        <br>
    @endif
    {{-- end flash message session --}}

    {{-- list data --}}
    <table border="1">
        <tr>
            <th>Nomor</th>
            <th>Nama</th>
            <th>NRP</th>
            <th>Prodi</th>
            <th colspan="2">Action</th>
        </tr>
        @foreach ($mahasiswa as $key => $item)
            <tr>
                <td>{{ $key +1 }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->nrp }}</td>
                <td>{{ $item->prodi }}</td>
                <td>
                    <form action="editData" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $item->id }}">
                    <button type="submit" style="border: none;">Edit</button>
                    </form>
                </td>
                <td>
                    <form action="delData/{{ $item->id }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" style="border: none;">Delete</button>
                </form>
            </td>
            </tr>
        @endforeach
    </table>
    {{-- end list data --}}
</body>

</html>