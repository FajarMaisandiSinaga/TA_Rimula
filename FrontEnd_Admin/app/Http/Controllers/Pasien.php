<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pasien extends Controller
{
   
    function index()
    {
        //Tampilan Halaman Data Pasien
        $url = env("API_URL")."view";
    }
}
