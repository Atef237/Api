<?php

namespace App\Http\Controllers\Api;
use App\Models\categorie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class categoriesConcategoriesCon extends Controller
{
    public function index(){
            $categorie = categorie::select('id','name_'.app() -> getLocale() )->get();
            return response()->json($categorie);
    }
}
