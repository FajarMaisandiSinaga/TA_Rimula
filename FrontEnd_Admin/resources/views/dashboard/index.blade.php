@extends('dashboard.layouts.main')

@section('content')    
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Pasien</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nomor BPJS</th>
                            <th>Nama Pasien</th>
                            <th>NIK</th>
                            <th>Umur</th>
                            <th>Jenis Kelamin</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pasiens as $pasien)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pasien->pasien_nomor_bpjs }}</td>
                                <td>{{ $pasien->pasien_nama }}</td>
                                <td><a href="{{ url('pasiens/' . $pasien->pasien_nik) }}">{{ $pasien->pasien_nik }}</a></td>
                                <td>{{ $pasien->pasien_umur }}</td>
                                <td>{{ $pasien->pasien_jenis_kelamin }}</td>
                                <td>$320,800</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection