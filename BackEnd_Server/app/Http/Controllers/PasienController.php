<?php

namespace App\Http\Controllers;

use App\Http\Resources\PasienResource;
use App\Models\Pasien;
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
}
