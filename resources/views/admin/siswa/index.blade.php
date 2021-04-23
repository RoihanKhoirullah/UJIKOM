@extends('layouts.admin')
@section('content')

<div class="col-md-12">

<a class="btn btn-secondary" href="{{ route('print-semua-siswa') }}" ><i class="fa fa-print"></i>Print Semua Siswa</a>
            <br>
            <br>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Siswa</h4>
                </div>
                <div class="card-body">
                <table class="table" id="example"> 
                <thead>
                  
                  <tr>
                    <th>No</th>
                    <th>Kode Daftar</th>
                    <th>Nama </th>
                    <th>Jenis Kelamin </th>
                    <th>Alamat </th>
                    <th>Agama</th>
                    <th>Nama Sekolah </th>
                    <th>Jurusan</th>
                    <th>Aksi </th>
                  </tr>
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
                          <a class="btn btn-warning" href="{{ route('edit-siswa', $item->id) }}"><i class="fa fa-edit"></i>Edit </a>                              
                                            
                          <a class="btn btn-secondary" href="{{ route('print-siswa', $item->id) }}" ><i class="fa fa-print"></i>Print</a>

                          <a href="#modalDelete" data-toggle="modal" onclick="$('#modalDelete #formDelete').attr('action' , '{{ route('delete-siswa', $item->id) }}')" class="btn btn-danger">
                            <i class="fa fa-trash"></i> delete 
                          </a>

                          
                      </td>
                  </tr>
                @endforeach
              </tbody>
              </table>
 <!-- /.col-md-6 -->
 </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection

<div class="modal fade" id="modalDelete">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true"></span>
        </button>
        <h4 class="modal-title">Yakin Ingin Menghapus ?</h4>
      </div>
      <div class="modal-footer">
        <form action="" id="formDelete" method="get">
          <button class="btn btn-default" data-dismiss="modal" >Tidak</button>
          <button class="btn btn-danger" type="submit">YA</button>
        </form>
      
      </div>  
    </div>
  </div>
</div>