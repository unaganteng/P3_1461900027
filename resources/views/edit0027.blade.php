<!DOCTYPE html>
<html>
<head>
<title>Kegiatan 3</title>
</head>
    <body>
        <h3>Edit Pelanggan</h3>
        <a href="/pelanggan"> Kembali</a>
    <br/>
    <br/>
@foreach($pelanggan as $use)
    <form action="/pelanggan/update" method="post">
    {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $use->id }}"> <br/>
    Nama <input type="text" required="required" name="nama" value="{{ $use->nama }}"> <br/>
    Alamat <textarea required="required" name="alamat">{{ $use->alamat }}</textarea> <br/>
        <input type="submit" value="Simpan Data">
</form>
@endforeach
</body>
</html>
