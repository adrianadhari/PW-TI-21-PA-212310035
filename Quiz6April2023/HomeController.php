<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    static private $data = array(
        ['id' => 1, 'npm' => 21310035, 'name' => 'Adrian', 'gender' => 'Laki-Laki', 'alamat' => 'Bogor'],
        ['id' => 2, 'npm' => 21310034, 'name' => 'Rayan',  'gender' => 'Laki-Laki', 'alamat' => 'Bogor'],
        ['id' => 3, 'npm' => 21310017, 'name' => 'Alfan',  'gender' => 'Perempuan', 'alamat' => 'Bogor'],
        ['id' => 4, 'npm' => 21310069, 'name' => 'Rizki',  'gender' => 'Laki-Laki', 'alamat' => 'Bogor'],
        ['id' => 5, 'npm' => 21310025, 'name' => 'Aditya',  'gender' => 'Perempuan', 'alamat' => 'Bogor'],
        ['id' => 6, 'npm' => 21310001, 'name' => 'Paok',  'gender' => 'Laki-Laki', 'alamat' => 'Bogor'],
    );
    public  function index() {
        return view('home', [
            'data' => self::$data
        ]);
    }
}
