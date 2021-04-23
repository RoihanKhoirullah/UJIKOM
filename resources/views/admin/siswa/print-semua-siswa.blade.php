<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-family: sans-serif" onload="window.print()">
    <div>
        <p align="center"><b>Laporan Daftar Siswa</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">

            <tr>
                <th>No</th>
                <th>No Daftar</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Agama</th>
                <th>Asal SMP</th>
                <th>Jurusan</th>
            </tr>

            @php
            $no = 1;
            @endphp
            @foreach ($printsemuasiswa as $item)
            <tr align="center">
                <td>{{ $no++ }}</td>
                <td>{{ $item->no_daftar }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->jk }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->agama }}</td>
                <td>{{ $item->asal_smp }}</td>
                <td>{{ $item->jurusan }}</td>
            </tr>
            @endforeach

        </table>
    </div>
</body>
</html>