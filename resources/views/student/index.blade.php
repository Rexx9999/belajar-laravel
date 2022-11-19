@extends('template.masterlimbad')

@section('judul')
    <h1>Data Siswa</h1>
@endsection

@section('isi')
{{-- {{ var_dump($dataSiswa); }} --}}
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Database Kelas </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>NO</th>
          <th>NISN</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          @forelse ($dataSiswa as $item=>$value)
              <tr>
                <td>{{ $item + 1 }}</td>
                <td>{{ $value->nisn }}</td>
                <td>{{ $value->nama }}</td>
                <td>{{ $value->jenis_kelamin}}</td>
                <td>
                    <a class="btn btn-info mr-3" href="student/{{$value->id}}">Detail</a>
                    <a class="btn btn-warning mr-3" href="{{$value->id}}/edit">Edit</a>
                    <button class="btn btn-danger">Delete</button>
                </td>
              </tr>
          @empty
              <tr>
                <td>Data Masih Kosong</td>
              </tr>
          @endforelse
        </tr>
        </tbody>
        </table>
    </div>
    <!-- /.card-body -->
  
@endsection

@push('scripts')
<script src="{{ asset ('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset ('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

<script>
    $(function () {
     $('#data-table').DataTable();
        
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
      });
    });
  </script>
@endpush
