@extends('template.masterlimbad')

@section('judul')
<h1>MANAJEMEN KELAS</h1>
@endsection

@section('content')
<div class="col-md-12">
    <div class="card card-primary">
       <div class="card-header">
         <h3 class="card-title">ISI KELAS ANDA</h3>
       </div>
       <!-- /.card-header -->
       <!-- form start -->
       <form action="/kelas" method="POST">
           @csrf
         <div class="card-body">
           <div class="form-group" >
               <label for="Nisn">nama kelas</label>
               <input type="text" name="namakelas" class="form-control" id="kelas" placeholder="Masukan Kelas">
             </div>
             <div class="form-group">
               <label for="Nama">jurusan</label>
               <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Masukan Jurusan">
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