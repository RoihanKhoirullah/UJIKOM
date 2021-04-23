@extends('layouts.admin')
@section('content')

    <section>
            <div class="container">
                  <div class="row">
                        <div class="col-md-12">
                              <div class="main-card mb-3 card card-body">
                                    <h3>Edit Data Siswa</h3>
                                    <div class="table-responsive">
                                      <form action="{{ route('update-siswa', $siswa->id) }}" method="POST">
                                          @csrf
                                                
                                      <div class="modal-body">
                                            <div class="row">
                                                  <div class="mb-3 col-md-12">
                                                        <label for="no_daftar" class="form-label">No Daftar</label>
                                                        <input type="text" class="form-control" name="no_daftar" id="no_daftar" value="{{ $siswa->no_daftar}}" readonly>
                                                  </div>
                                            </div>
                                            <div class="row">
                                                  <div class="mb-3 col-md-12">
                                                        <label for="nama" class="form-label">Nama</label>
                                                        <input type="text" class="form-control" name="nama" id="nama" onkeypress="return event.charCode <48 || event.charCode >57" value="{{ $siswa->nama}}" required>
                                                  </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="jk">Jenis Kelamin</label>
                                                  <select name="jk" id="jk" class="form-control" required>
                                                  <option value="{{ $siswa->jk}}" >{{ $siswa->jk}}</option>
                                                      <option value="laki-laki">laki-laki</option>
                                                      <option value="perempuan">perempuan</option>
                                                  </select>
                                              </div>
                                              <div class="row">
                                                  <div class="mb-3 col-md-12">
                                                        <label for="alamat" class="form-label">Alamat</label>
                                                        <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $siswa->alamat}}" required>
                                                  </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="agama">Agama</label>
                                                  <select name="agama" id="agama" class="form-control" required>
                                                  <option value="{{ $siswa->agama}}" >{{ $siswa->agama}}</option>
                                                      <option value="islam">Islam</option>
                                                      <option value="kristen">Kristen</option>
                                                  </select>
                                              </div>
                                              <div class="row">
                                                  <div class="mb-3 col-md-12">
                                                        <label for="asal_smp" class="form-label">Asal SMP</label>
                                                        <input type="text" class="form-control" name="asal_smp" id="asal_smp" value="{{ $siswa->asal_smp}}" required>
                                                  </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="jurusan">Jurusan</label>
                                                  <select name="jurusan" id="jurusan" class="form-control" required>
                                                  <option value="{{ $siswa->jurusan}}" >{{ $siswa->jurusan}}</option>
                                                      <option value="rpl">RPL</option>
                                                      <option value="tkj">TKJ</option>
                                                      <option value="mmd">MMD</option>
                                                      <option value="tbg">TBG</option>
                                                      <option value="htl">HTL</option>
                                                      <option value="bdp">BDP</option>
                                                  </select>
                                              </div>
                                              <br>
                                            
                                      <br>
                                      <div class="modal-footer">
                                            <br>
                                            <br>
                                            <button type="submit" class="btn btn-success">Update</button>
                                      </div>
                                    </form>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
    </section>

  @endsection