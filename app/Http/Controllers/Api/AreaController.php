<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function search(Request $request)
    {
        $q = $request->query('q', '');
        if (!$q) return response()->json([]);

        $items = Area::where('desa', 'like', "%{$q}%")
            ->orWhere('kecamatan', 'like', "%{$q}%")
            ->orWhere('kabupaten', 'like', "%{$q}%")
            ->limit(50)
            ->get(['desa','kecamatan','kabupaten','provinsi']);

        return response()->json($items);
    }
}
