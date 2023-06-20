@extends('dashboard.layouts.main')

@section('content')    
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Pasien</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            {{ $pasien->pasien_nama }}
        </div>
    </div>
@endsection