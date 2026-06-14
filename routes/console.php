<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Question;
use App\Models\Quiz;

class DashboardController extends Controller
{
    public function index()
    {
        return view(
            'dashboard.index',
            [
                'totalArtikel' =>
                    Article::count(),

                'totalQuestion' =>
                    Question::count(),

                'totalQuiz' =>
                    Quiz::count()
            ]
        );
    }
}