@extends('template.masterlimbad')

@section('judul')    
<h1>MENGEDIT DATA SISWA</h1>
@endsection

@section('isi')
<div class="col-md-12">
    <div class="card card-primary">
       <div class="card-header">
         <h3 class="card-title">DETAIL DIRI ANDA</h3>
       </div>
       <!-- /.card-header -->
       <!-- form start -->
       <form action="/student/{{ $showSiswaById->id  }}" method="POST">
           @csrf
           @method('PUT');
         <div class="card-body">
           <div class="form-group" >
               <label for="Nisn">NISN</label>
               <input type="text" name="nisn" class="form-control" id="Nis" placeholder="Masukan NISN" value="{{ $showSiswaById->nisn  }} " >
             @error('nisn')
                 <div class="alert alert-danger">
                        {{ $message }}
                 </div>
             @enderror
            </div>
             <div class="form-group">
               <label for="Nama">Nama</label>
               <input type="text" name="nama" class="form-control" id="Nama" placeholder="Masukan Nama" value="{{ $showSiswaById->nama  }} " >
               @error('nama')
               <div class="alert alert-danger">
                      {{ $message }}
               </div>
           @enderror
            </div>
           <div class="form-group">
               <label for="Alamat">Alamat</label>
               <input class="form-control" name="alamat" rows="3" id="Alamat" placeholder="Masukan Alamat Anda" value="{{ $showSiswaById->alamat  }} " ></input>
               @error('alamat')
               <div class="alert alert-danger">
                      {{ $message }}
               </div>
           @enderror 
            </div>
           <div class="form-group">
               <label>Jenis Kelamin</label>
               <select class="form-control" name="jenis_kelamin">
                 <option disabled selected>-- Pilih Salah Satu --</option>
                 <option value="L"  {{ $showSiswaById->jenis_kelamin == "L" ? "selected" : ""}}>Laki-laki</option>
                 <option value="P"  {{ $showSiswaById->jenis_kelamin == "P" ? "selected" : ""}}>Perempuan</option>
               </select>
               @error('jenis_kelamin')
                 <div class="alert alert-danger">
                        {{ $message }}
                 </div>
             @enderror
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