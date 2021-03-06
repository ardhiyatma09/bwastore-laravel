<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

class LocationController extends Controller
{
    public function provinces()
    {
        return Province::all();
    }
    public function regencies($provinces_id)
    {
        return Regency::where('province_id',$provinces_id)->get();
    }
}
