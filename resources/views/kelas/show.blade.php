@extends('template.masterlimbad')

@section('judul')
<h1>DATABASE KELAS</h1>
@endsection

@section('isi')
<div class="col-md-12">
    <div class="card card-primary">
       <div class="card-header">
         <h3 class="card-title">PROFILE DATA KELAS</h3>
       </div>
       <!-- /.card-header -->
       <!-- form start -->
       <form action="/kelas" method="POST">
           @csrf
         <div class="card-body">
           <div class="form-group" >
               <label for="Nisn">nama kelas</label>
               <input type="text" name="namakelas" class="form-control" id="kelas" placeholder="Masukan Kelas" value="{{$showKelasById->nama_kelas}} " disabled>  
               
             </div>
             <div class="form-group">
               <label for="Nama">jurusan</label>
               <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Masukan Jurusan" value="{{$showKelasById->jurusan}}" disabled>
             </div>
         </div>
         <!-- /.card-body -->
       </form>
     </div>
   </div>
@endsection