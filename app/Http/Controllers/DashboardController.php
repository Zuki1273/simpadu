<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = ['nama' => "Zuki", 'foto' => 'avatar5.png'];
        return view('dashboard', compact('data'));
    }
}
