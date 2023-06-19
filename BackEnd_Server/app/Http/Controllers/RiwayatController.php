<?php

namespace App\Http\Controllers;

use App\Http\Resources\RiwayatResource;
use App\Models\Riwayat;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function index() {

        $riwayats = Riwayat::all();

        return response()->json([
            'status' => 'success',
            'data' => RiwayatResource::collection($riwayats)
        ]);
    }
}
