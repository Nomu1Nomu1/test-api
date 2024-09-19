<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\barang;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function product()
    {
        $data = barang::select('id', 'kode', 'nama', 'id_satuan', 'id_kategori', 'harga_jual')
            ->get()
            ->map(function ($item){
                return [
                    'id' => $item->id,
                    'kode' => $item->kode,
                    'nama' => $item->nama,
                    'id_satuan' => $item->id_satuan,
                    'id_kategori' => $item->id_kategori,
                    'harga_jual' => $item->harga_jual
                ];
            });

        return response()->json([
            'status' => 'success',
            'message' => 'Data berhasil diambil',
            'data' => $data
        ]);
    }
}
