@extends('main')
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Pemain</th>
            <th>Nomor Punggung</th>
            <th>Posisi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $pemain)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$pemain->nama_pemain}}</td>
            <td>{{$pemain->nomor_punggung}}</td>
            <td>{{$pemain->posisi}}</td>
            <th>@include('button_beli')</th>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection