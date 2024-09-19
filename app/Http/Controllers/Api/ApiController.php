<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\barang;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function product()
    {
        $data = barang::get();

        return response()->json($data);
    }
}
