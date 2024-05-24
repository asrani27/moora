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
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          DATA PERSENTASE PEMILIHAN JURUSAN BERDASARKAN NILAI DARI UJIAN / QUIZ MENGGUNAKAN METODE MOORA
        </div>
        <div class="card-body">
          <div class=" table-responsive">
            <table class="table table-hover table-striped table-bordered text-nowrap table-sm">
              <thead>
                <tr style="font-size:11px; font-family:Arial, Helvetica, sans-serif" class="bg-gradient-primary">
                  <th class="text-center">#</th>
                  <th>NIK</th>
                  <th class="text-center">Nama</th>
                  @foreach ($matpel as $item)
                  <th class="text-center">Nilai <br/>{{$item->nama}}</th>
                  @endforeach
                  @foreach ($jurusan as $item)
                  <th class="text-center"> {{$item->nama}} <br/>
                    Kecocokan 
                  </th>
                  @endforeach
                  {{-- <th class="text-center">Aksi</th> --}}
                </tr>
              </thead>
              @php
              $no =1;
              @endphp
            
              <tbody>
                @foreach ($data as $item)
                <tr style="font-size:11px; font-family:Arial, Helvetica, sans-serif">
                  <td>{{$no++}}</td>
                  <td>{{$item->nik}}</td>
                  <td>{{$item->nama}}</td>
                  @foreach ($matpel as $item2)
                  <td class="text-center">{{nilaiMatPel($item2->id, $item->id)}}</td>
                  @endforeach

                  @foreach ($jurusan as $item3)
                  <td class="text-center"> 
                    @php
                        
                    $nilai = [];
                    @endphp
                    @foreach ($matpel as $item2)
                    @php
                        
                        array_push($nilai,kecocokan(nilaiMatPel($item2->id, $item->id), $item3->bobot->where('kategori_id', $item2->id)->first()->nilai))
                    @endphp

                    @endforeach
                    {{number_format(array_sum($nilai)/5,2)}}
                    
                    

                  </td>
                  @endforeach
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@push('js')
@endpush