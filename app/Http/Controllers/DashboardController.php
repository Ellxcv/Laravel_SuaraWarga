<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petisi;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPetisi = Petisi::count();
        return view('dashboard', compact('totalPetisi'));
    }
}
