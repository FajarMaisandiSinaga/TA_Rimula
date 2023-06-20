@extends('dashboard.layouts.main')

@section('content')    
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Pasien</h1>

    <!-- DataTales Example -->
    <div class="card shadow">
        <div class="card-body">

            <a href="{{ url('pasiens/print/' . $pasien->pasien_nik) }}" class="btn btn-secondary btn-block mb-3">
                Print Rekam Medis
            </a>


            <div class="row">

                <div class="col-md-6">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama Pasien</th>
                            <td>{{ $pasien->pasien_nama }}</td>
                        </tr>
                        
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td>{{ $pasien->pasien_tanggal_lahir }}</td>
                        </tr>
                        <tr>
                            <th>umur</th>
                            <td>{{ $pasien->pasien_umur }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>{{ $pasien->pasien_jenis_kelamin }}</td>
                        </tr>
                        
                        <tr>
                            <th>Agama</th>
                            <td>{{ $pasien->pasien_agama }}</td>
                        </tr>
                    </table>
                </div>

                <div class="col-md-6">
                    <table class="table table-bordered">
                        <tr>
                            <th>Telepon</th>
                            <td>{{ $pasien->pasien_telepon }}</td>
                        </tr>

                        <tr>
                            <th>Nomor KK</th>
                            <td>{{ $pasien->pasien_nik }}</td>
                        </tr>

                        <tr>
                            <th>Nomor BPJS</th>
                            <td>{{ $pasien->pasien_nomor_bpjs }}</td>
                        </tr>

                        <tr>
                            <th>Alamat</th>
                            <td>{{ $pasien->pasien_alamat }}</td>
                        </tr>
                    </table>
                </div>

                <div class="col-md-12">
                    <table class="table table-bordered">
                        <tr>
                            <th colspan="5" class="text-center">Daftar Riwayat Penyakit, Alergi, dan Faktor Resiko PTM</th>
                            <th class="text-center">
                                <a href="{{ url('pasiens/' . $pasien->pasien_nik . '/riwayat') }}" class="btn btn-primary btn-sm">
                                    Tambah
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>No</th>
                            <th>Penyakit</th>
                            <th>Merokok</th>
                            <th>Alergi</th>
                            <th>Operasi</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach ($pasien->pasien_riwayat as $riwayat)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $riwayat->penyakit }}</td>
                            <td>{{ $riwayat->merokok }}</td>
                            <td>{{ $riwayat->alergi }}</td>
                            <td>{{ $riwayat->operasi }}</td>
                            <td>
                                <a href="{{ url('pasiens/' . $pasien->pasien_nik . '/riwayat/hapus') }}" class="btn btn-danger btn-sm">
                                    Hapus
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection