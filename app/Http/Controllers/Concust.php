<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Concust extends Controller
{
    public function home()
    {
        $tasked = [
            'Go to the store',
            'Go to the Market',
            'Go to work'
        ];
    return view('welcome', [
        'tasks' => $tasked
        ]);
    }
}