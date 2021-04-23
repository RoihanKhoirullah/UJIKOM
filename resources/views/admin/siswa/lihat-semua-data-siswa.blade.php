<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS ONLY -->

    <!-- CSS DATA TABLE -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- END CSS -->

</head>
<body>
<br>
<div class="row">
<div class="col-md-12">
<div class="card">
    <div class="card-header card-header-primary">
        <h3 class="card-title ">Data Siswa</h3>
    </div>
<div class="card-body">
<div class="table-responsive">
<table class="table" id="example"> 
<thead class=" text-primary">
    <th>No</th>
    <th>No Daftar</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Alamat</th>
    <th>Agama</th>
    <th>Asal SMP</th>
    <th>Jurusan</th>
    <th>Aksi</th>
</thead>
  <tbody>
@php
$no = 1;
@endphp
@foreach ($siswa as $item)
    <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $item->no_daftar }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->jk }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->agama }}</td>
            <td>{{ $item->asal_smp }}</td>
            <td>{{ $item->jurusan }}</td>
            <td>
                <a href="{{ route('print-siswa', $item->id) }}"><i style="color : grey" class="material-icons">Cetak Data</i> </a>
            </td>
    </tr>
@endforeach
</table>
</tbody>

<!-- JAVA SCRIPT ONLY -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- END JAVA SCRIPT -->

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

</body>
</html>