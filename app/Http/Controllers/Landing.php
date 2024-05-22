<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class Landing extends Controller
{
    public function landing()
    {
        $pengumuman = Pengumuman::all();
        return view('landing.index', compact('pengumuman'));
    }
}
