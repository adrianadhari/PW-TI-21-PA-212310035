<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return 'Welcome to Profile Page';
    }

    public function identity()
    {
        return 'Welcome to Profile Page Sub Menu Identity';
    }

    public function family()
    {
        return 'Welcome to Profile Page Sub Menu Family';
    }

    protected static $data = [
        ['Course' => 'Matematika', 'Type' => 'Diskrit', 'Rate' => 4],
        ['Course' => 'Matematika', 'Type' => 'Aljabar Linear', 'Rate' => 3],
        ['Course' => 'Basis Data', 'Type' => 'DLL', 'Rate' => 2],
        ['Course' => 'Bhs Inggris', 'Type' => 'Speaker', 'Rate' => 1]
    ];

    public function skillAcademic()
    {
        return view('profile', [
            'data' => self::$data
        ]);
    }
}
