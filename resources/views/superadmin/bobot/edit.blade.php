@extends('layouts.app')

@push('css')
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush
@section('title')
    NILAI BOBOT
@endsection
@section('content')
<br/>
<div class="row">
    <div class="col-12">
        <a href="/superadmin/bobot" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a><br/><br/>
<form method="post" action="/superadmin/bobot/{{$data->id}}/nilai">
    @csrf
    <div class="row">
        <div class="col-lg-12 col-12">
            <div class="card">
                <div class="card-body">                   

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama jurusan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" required value="{{$data->nama}}" >
                    </div>
                    </div>
                      

                    <div class="form-group row">
                    {{-- <label class="col-sm-2 col-form-label">Bobot Nilai</label> --}}
                        @foreach ($kategori as $item)
                        <div class="col-sm-6">
                        <input type="text" class="form-control" name="nama[]" required value="{{$item->nama}}" readonly>
                        <input type="hidden" class="form-control" name="kategori_id[]" required value="{{$item->id}}" readonly>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nilai[]" value="{{$nilai->where('kategori_id', $item->id)->first() == null ? 0 : $nilai->where('kategori_id', $item->id)->first()->nilai}}" required  onkeypress="return hanyaAngka(event)"/>
                        </div>
                        @endforeach
                    </div>
                    <div class="form-group row">
                    {{-- <label class="col-sm-2 col-form-label"></label> --}}
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-block btn-primary"><strong>UPDATE NILAI BOBOT</strong></button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
    </div>
</div>

@endsection

@push('js')
<script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
      return true;
    }
</script>
@endpush