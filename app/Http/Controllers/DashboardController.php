<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $tamus = Tamu::getAllTamu();

        return view('dashboard.main', compact('tamus'));
    }
}
