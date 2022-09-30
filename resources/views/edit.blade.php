<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset style="display:inline-block">
    <legend>Edit Data mahasiswa</legend>
    <form action="/updateData" method="post">
        @method('put')
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}">
        Nama : <input type="text" name="nama" value="{{ $user->nama }}"><br><br>
        NRP : <input type="text" name="nrp" value="{{ $user->nrp }}"><br><br>
        Prodi : <input type="text" name="prodi" value="{{ $user->prodi }}"><br><br>
        <button type="submit">Simpan</button>
    </form>
</fieldset>
</body>
</html>
