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
            <h3 class="card-title">Laporan Hasil Quiz</h3>
            <div class="card-tools">
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive">
            <form method="get" target="_blank" action="/superadmin/laporan/hasil">
                @csrf
                <select class="form-control" name="id_peserta" required>
                    <option value="">-pilih-</option>
                    @foreach ($data as $item)
                    <option value="{{$item->id}}">{{$item->nama}}</option>
                    @endforeach
                </select>
                <br/>
                <button type="submit" class="btn btn-primary btn-block">CETAK</button>
            </form>
        </div>
        <!-- /.card-body -->
        </div>
        
    </div>
</div>

@endsection

@push('js')
@endpush