<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WriterController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $articles = $user->articles()->orderBy('created_at', 'desc')->get();

        $acceptedArticles = $articles->where('is_accepted', true);
        $rejectedArticles = $articles->whereNotNull('is_accepted')->where('is_accepted', 0);
        $unrevisionedArticles = $articles->whereNull('is_accepted');

        return view('writer.dashboard', compact('acceptedArticles', 'rejectedArticles', 'unrevisionedArticles'));
    }
}
