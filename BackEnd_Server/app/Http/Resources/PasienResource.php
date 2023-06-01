<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PasienResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'pasien_nama' => $this->nama,
            'pasien_nomor_bpjs' => $this->nomor_bpjs,
            'pasien_nik' => $this->nik,
            'pasien_tanggal_lahir' => $this->tanggal_lahir,
            'pasien_umur' => $this->umur,
            'pasien_jenis_kelamin' => $this->jenis_kelamin,
            'pasien_agama' => $this->agama,
            'pasien_alamat' => $this->alamat,
            'pasien_telepon' => $this->telepon
        ];
    }
}
