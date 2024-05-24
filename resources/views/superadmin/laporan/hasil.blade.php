<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <table border=0 width="100%">
        <tr>
            <td width="15%" style="text-align: right; vertical-align:middle">
                <img src="/logo.jpg" width="50%">
            </td>
            <td style="text-align: center">
                <H2>SMK NEGERI 2 KANDANGAN</H2>
                Jl Gambah Dalam Walangku, No 77, RT 1, RW 1, Kel Kandangan Kota, <br/>
                Kabupaten Hulu Sungai Selatan, Kodepos 71211 Kalimantan Selatan<br/>
                website : smkn2kandangan.sch.id Telp : 0517-2032267
            </td>
            <td width="15%" style="text-align: right">
                
            </td>
        </tr>
        <tr>
            <hr>
            <td colspan=3 style="text-align:center"><br/><strong><u>LAPORAN HASIL QUIZ</u></strong></td>
        </tr>
    </table>
    <br/>
    <table style="border: 1px solid black; padding:25px 25px;" cellspacing="0" cellpadding="3" width="70%" align="center">
        <tr>
            <td>NIK</td>
            <td>:</td>
            <td>{{$data->nik}}</td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td>{{$data->nama}}</td>
        </tr>
        <tr>
            <td><br/></td>
            <td></td>
            <td></td>
        </tr>
        @php
            $sum = [];
        @endphp
        @foreach ($matpel as $item)
        @php
            array_push($sum, nilaiMatPel($item->id, $data->id))
        @endphp
        <tr>
            <td>Nilai Quiz {{$item->nama}}</td>
            <td>:</td>
            <td>{{nilaiMatPel($item->id, $data->id)}}</td>
        </tr>
        @endforeach
        <tr>
            <td><br/></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Nilai Rata-Rata</td>
            <td>:</td>
            <td>{{array_sum($sum)/5}}</td>
        </tr>
    </table>
    <br/>
    <table width="100%">
        <tr>
            <td width="60%"></td>
            <td>
                Mengetahui, {{\Carbon\Carbon::today()->translatedFormat('d F Y')}}, <br/>
                
                Wakil Kepala Kesiswaan SMKN 2 Kandangan,
                <br/><br/><br/><br/><br/>


                <b><u>Rahman</u></b><br/>
                NIP: 4564322
                

            </td>
        </tr>
    </table>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>

$(document).ready(function(){
    window.print();
});
</script>
</html>