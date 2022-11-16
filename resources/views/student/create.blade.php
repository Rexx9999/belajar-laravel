@extends('template.masterlimbad')

@section('judul')    
<h1>MANAJEMEN SISWA</h1>
@endsection

@section('isi')
<div class="col-md-12">
 <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">ISI DATA DIRI ANDA</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/student" method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group" >
            <label for="Nisn">NISN</label>
            <input type="text" name="nisn" class="form-control" id="Nis" placeholder="Masukan NISN">
          </div>
          <div class="form-group">
            <label for="Nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="Nama" placeholder="Masukan Nama">
          </div>
        <div class="form-group">
            <label for="Alamat">Alamat</label>
            <textarea class="form-control" name="alamat" rows="3" id="Alamat" placeholder="Masukan Alamat Anda"></textarea>
          </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="jenis_kelamin">
              <option disabled selected>-- Pilih Salah Satu --</option>
              <option value="L">Laki-laki</option>
              <option value="P">Perempuan</option>
            </select>
          </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>
@endsection