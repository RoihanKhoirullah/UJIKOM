<br>

<body style="font-family: sans-serif" onload="window.print()">
<center>
    <table width="94%" border="0">
        <tr>
            <td rowspan="4" width="10%">
                <center><div><img src="{{ asset('print/img/sekolah.png') }}" width="100px"></div></center>
            </td>
            <td>
                <b>PANITIA PENERIMAAN PESERTA DIDIK BARU</b><br>
                <b>SMK Semangat 45</b><br>
                
            </td>
        </tr>

    </table>
</center>
<br>
    <center><b>TANDA BUKTI PENDAFTARAN</b></center>
    <br>
    
    <table width="55%" border="0" style="margin-left:3%;margin-right:2%;float:left">
        <tr>
            <td colspan="3" style="background-color: lightgray"><center><b>BIODATA CALON PESERTA DIDIK</b></center></td>
        </tr>
        
        <tr>
            <td width="30%"><b>No Daftar </b></td>
            <td width="3%">:</td>
            <td>{{$siswa->no_daftar}}</td>
        </tr>

        <tr>
            <td width="30%"><b>Nama </b></td>
            <td width="3%">:</td>
            <td>{{$siswa->nama}}</td>
        </tr>

        <tr>
            <td width="30%"><b>Jenis Kelamin </b></td>
            <td width="3%">:</td>
            <td>{{$siswa->jk}}</td>
        </tr>

        <tr>
            <td width="30%"><b>Alamat </b></td>
            <td width="3%">:</td>
            <td>{{$siswa->alamat}}</td>
        </tr>

        <tr>
            <td width="30%"><b>Agama </b></td>
            <td width="3%">:</td>
            <td>{{$siswa->agama}}</td>
        </tr>

        <tr>
            <td width="30%"><b>Asal SMP </b></td>
            <td width="3%">:</td>
            <td>{{$siswa->asal_smp}}</td>
        </tr>

        <tr>
            <td width="30%"><b>Jurusan </b></td>
            <td width="3%">:</td>
            <td>{{$siswa->jurusan}}</td>
        </tr>
        
    </table>
    <table width="37%" border="0">
        <tr>
            <!-- <td colspan="3" style="background-color: lightgray"><center><b>INFORMASI DAN PERSYARATAN</b></center></td> -->
        </tr>
    </table>

    <table width="37%" border="0">
        <!-- <tr>
            <td><b>A. Foto/Scan Dokumen yang Harus Dipersiapkan</b></td>
        </tr>

        <tr>
            <td>
                1. Raport Semester 1 s.d 5 yang telah dilegasir dalam bentuk pdf(satu file)<br>
                2. Akta Kelahiran dalam bentuk pdf/jpeg(satu file)<br>
                3. KTP Ayah dan ibu dipisah dalam bentuk pdf/jpeg<br>
                4. Kartu Keluarga dalam bentuk pdf/jpeg<br>
                5. Kartu NISN dalam bentuk pdf/jpeg
            </td>
        </tr> -->

    </table>
    <br>
   
</body>