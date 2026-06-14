<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
        'totalArtikel' => 0,
        'totalQuestion' => 0,
        'totalQuiz' => 0,
        'totalForum' => 0,
        ]);
    }
}