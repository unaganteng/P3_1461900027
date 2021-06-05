<!DOCTYPE html>
<html>
<head>
    <title>Kegiatan 3</title>
    </head>
        <body>
            <h3>Kegiatan 3 Menampilkan Data User</h3>
            <p>Kolom Pencarian</p>
            <form action="/pelanggan/cari" method="GET">
                <p> Cari Pelanggan  <input type="text" name="lihat" placeholder="isikan disini" value="{{ old('cari') }}">
                <input type="submit" value="CARI"></p>
            </form>
                <br>
                <form action="/pelanggan/ruang" method="GET">
                        <p> Cari Id Pelanggan <input type="text" name="lihat" placeholder="isikan disini" value="{{ old('cari') }}">
                        <input type="submit" value="CARI"></p>
                    </form>
                        <a href="/pelanggan/tambah"> + Pelanggan Baru </a>
                        <p></p>
                        <table border="1">
                            <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Pilihan</th>
                            </tr>
@foreach($pelanggan as $use)
                            <tr>
                                <td>{{ $use->id }}</td>
                                <td>{{ $use->nama }}</td>
                                <td>{{ $use->alamat }}</td>
                                <td>
                                    <a href="/pelanggan/edit/{{ $use->id }}">Edit</a>
                                    <a href="/pelanggan/hapus/{{ $use->id }}">Hapus</a>
                                </td>
                                    </tr>
@endforeach
</table>
</body>
</html>