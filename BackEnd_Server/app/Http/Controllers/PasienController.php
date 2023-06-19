<?php

namespace App\Http\Controllers;

use App\Http\Resources\PasienResource;
use App\Models\Pasien;
use App\Models\Riwayat;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function viewAll()
    {
        $pasiens = Pasien::all();

        return response()->json([
            'status' => 'success',
            'data' => PasienResource::collection($pasiens),
        ]);
    }

    public function detail(String $parameter) {
        $pasien = Pasien::firstWhere('nik', $parameter);

        return response()->json([
            'status' => 'success',
            'data' => new PasienResource($pasien)
        ]);
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            'pasien_nama' => 'required',
            'pasien_nomor_bpjs' => 'required|unique:pasiens,nomor_bpjs',
            'pasien_nik' => 'required|unique:pasiens,nik',
            'pasien_tanggal_lahir' => 'required',
            'pasien_umur' => 'required',
            'pasien_jenis_kelamin' => 'required',
            'pasien_agama' => 'required',
            'pasien_alamat' => 'required',
            'pasien_telepon' => 'required',
        ]);

        Pasien::create([
            'nama' => $validateData['pasien_nama'],
            'nomor_bpjs' => $validateData['pasien_nomor_bpjs'],
            'nik' => $validateData['pasien_nik'],
            'tanggal_lahir' => $validateData['pasien_tanggal_lahir'],
            'umur' => $validateData['pasien_umur'],
            'jenis_kelamin' => $validateData['pasien_jenis_kelamin'],
            'agama' => $validateData['pasien_agama'],
            'alamat' => $validateData['pasien_alamat'],
            'telepon' => $validateData['pasien_telepon'],
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Pasien baru telah di daftarkan!'
        ]);
    }

    public function update(Request $request, String $parameter) {
        $pasien = Pasien::firstWhere('nik', $parameter);

        $body = [
            'pasien_nama' => 'required',
            // 'pasien_nomor_bpjs' => 'required|unique:pasiens,nomor_bpjs',
            // 'pasien_nik' => 'required|unique:pasiens,nik',
            'pasien_tanggal_lahir' => 'required',
            'pasien_umur' => 'required',
            'pasien_jenis_kelamin' => 'required',
            'pasien_agama' => 'required',
            'pasien_alamat' => 'required',
            'pasien_telepon' => 'required',
        ];

        if($request->pasien_nomor_bpjs != $pasien->nomor_bpjs) {
            $body['pasien_nomor_bpjs'] = 'required|unique:pasiens,nomor_bpjs';
        }

        if($request->pasien_nik != $pasien->nik) {
            $body['pasien_nik'] = 'required|unique:pasiens,nik';
        }

        $validateData = $request->validate($body);

        $updateBody = [
            'nama' => $validateData['pasien_nama'],
            // 'nomor_bpjs' => $validateData['pasien_nomor_bpjs'],
            // 'nik' => $validateData['pasien_nik'],
            'tanggal_lahir' => $validateData['pasien_tanggal_lahir'],
            'umur' => $validateData['pasien_umur'],
            'jenis_kelamin' => $validateData['pasien_jenis_kelamin'],
            'agama' => $validateData['pasien_agama'],
            'alamat' => $validateData['pasien_alamat'],
            'telepon' => $validateData['pasien_telepon'],
        ];

        if($request->pasien_nomor_bpjs != $pasien->nomor_bpjs) {
            $updateBody['nomor_bpjs'] = $validateData['pasien_nomor_bpjs'];
        }

        if($request->pasien_nik != $pasien->nik) {
            $updateBody['nik'] = $validateData['pasien_nik'];
        }

        Pasien::where('nik', $parameter)->update($updateBody);

        return response()->json([
            'status' => 'success',
            'message' => 'Data pasien berhasil diperbarui!'
        ]);
    }

    public function destroy(String $parameter) {
        $pasien = Pasien::firstWhere('nik', $parameter);
        $namaPasien = $pasien->nama;
        
        Riwayat::where('pasien_id', $pasien->id)->delete();
        Pasien::destroy($pasien->id);

        return response()->json([
            'status' => 'success',
            'message' => 'Pasien ' . $namaPasien . ' berhasil hapus!'
        ]);
    }
}
