<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\subcategories;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;

class CategoriesController extends Controller
{
    public function index(){
        try {
            $categories = Categories::all();

            return response()->json($categories);
            
    
        } catch (JWTException $e) {
            return response()->json(['error' => 'Token inválido'], 500);
        }
    }

    public function subCategories(){
        try {
            $categories = subcategories::all();

            return response()->json($categories);
            
    
        } catch (JWTException $e) {
            return response()->json(['error' => 'Token inválido'], 500);
        }
    }
}
