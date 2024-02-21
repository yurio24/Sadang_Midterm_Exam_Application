<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $anime = [
            'name' => 'One Piece',
            'rating' => 4.5,
            'studio' => 'Toei',

            'name1' => 'Solo Leveling',
            'rating1' => 4.6,
            'studio1' => 'A-1 Pictures',
        ];

        return view('anime', $anime);
    }
}
