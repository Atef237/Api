<?php

namespace App\Http\Controllers\Api;
use App\Models\categorie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class categoriesConcategoriesCon extends Controller
{
    public function index(){
            $categorie = categorie::get();
            return response()->json($categorie);
    }
}
