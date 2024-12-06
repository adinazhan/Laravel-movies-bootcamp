<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MovieRequest;

class MovieRequestController extends Controller
{
    public function index()
    {
        $request = MovieRequest::all();
        return view('movie-requests.index', compact('request'));
    }
}
