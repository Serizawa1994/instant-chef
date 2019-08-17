<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function store(Request $request, $id){
        
        \Auth::user()->add_to_favorites($id);
        return back();
    }
    
    public function destroy($id){
        \Auth::user()->remove_from_favorites($id);
        return back();
    }
}
