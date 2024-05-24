@extends('layouts.app')

@push('css')
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush
@section('title')
    ADMIN
@endsection
@section('content')
<br/>
<div class="row">
    <div class="col-12">
        
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Bobot</h3>
            <div class="card-tools">
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap table-sm">
            <thead>
                <tr>
                <th>#</th>
                <th>Nama jurusan</th>
                <th>Bobot Nilai</th>
                <th>Aksi</th>
                </tr>
            </thead>
            @php
                $no =1;
            @endphp
            <tbody>
            @foreach ($data as $key => $item)
                    <tr style="font-size:11px; font-family:Arial, Helvetica, sans-serif">
                    <td>{{$no++}}</td>
                    <td>{{$item->nama}}</td>
                    <td>
                        <table>
                        @foreach ($item->bobot as $key =>$item2)
                        <tr>
                            <td>{{$item2->kategori->nama}}</td>
                            <td>{{$item2->nilai}}</td>
                        </tr>
                        @endforeach
                        </table>
                    </td>
                    <td>
                        
                    <form action="/superadmin/bobot/{{$item->id}}" method="post">
                        <a href="/superadmin/bobot/{{$item->id}}/nilai" class="btn btn-xs btn-success"><i class="fas fa-edit"></i> Nilai Bobot</a>
                        @csrf
                        {{-- @method('delete')
                        <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('yakin DI Hapus?');"><i class="fas fa-trash"></i> Delete</button>      --}}
                    </form>

                    </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        </div>
        {{$data->links()}}
    </div>
</div>

@endsection

@push('js')
@endpush