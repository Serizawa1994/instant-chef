<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Recipe;
use App\Order;

class ProvideController extends Controller
{
    public function recipeInputForm($id){
        
        $order = Order::find($id);
        
        return view('provide.recipeInputForm',["order" => $order]);
    }
    
    public function recipeInputConfirm(Request $request,$id){
        $this->validate($request, [
            'ingredient' => 'required|max:191',
            'title' => 'required|max:191',
            'portion' => 'required|max:191',
            'how_to_1' => 'required|max:191',
        ]);
        
        $order = Order::find($id);
        
        return view('provide.recipeInputConfirm',["request" => $request,"order" => $order]);
    }
    
    public function store(Request $request,$id){

        $request->user()->provide()->create([
            "ingredient" => $request->ingredient,
            'title' => $request->title, 
            'portion' => $request->portion,
            'how_to_1' => $request->how_to_1,
            'how_to_2' => $request->how_to_2,
            'how_to_3' => $request->how_to_3,
            'how_to_4' => $request->how_to_4,
            'how_to_5' => $request->how_to_5,
            'how_to_6' => $request->how_to_6,
            'how_to_7' => $request->how_to_7,
            'how_to_8' => $request->how_to_8,
            'how_to_9' => $request->how_to_9,
            'how_to_10' => $request->how_to_10,
            'how_to_11' => $request->how_to_11,
            'how_to_12' => $request->how_to_12,
            'one_point' => $request->one_point,
            'order_id' => "1",
        ]);
    
        $order=Order::find($id);
        
        $order->recipes()->create([
            "ingredient" => $request->ingredient,
            'title' => $request->title, 
            'portion' => $request->portion,
            'how_to_1' => $request->how_to_1,
            'how_to_2' => $request->how_to_2,
            'how_to_3' => $request->how_to_3,
            'how_to_4' => $request->how_to_4,
            'how_to_5' => $request->how_to_5,
            'how_to_6' => $request->how_to_6,
            'how_to_7' => $request->how_to_7,
            'how_to_8' => $request->how_to_8,
            'how_to_9' => $request->how_to_9,
            'how_to_10' => $request->how_to_10,
            'how_to_11' => $request->how_to_11,
            'how_to_12' => $request->how_to_12,
            'one_point' => $request->one_point,
        ]);
        
        return view("welcome");
    }
    
    public function recipesIndex(){
        
        $recipes=Recipe::all();
        return view("recipeList.recipeList", ['recipes' =>  $recipes]);
    }
    
    public function recipeShow($id){
        
        $recipe=Recipe::find($id);
        return view("recipeList.recipeShow", ['recipe' =>  $recipe]);
    }
    
    public function myRecipesIndex($id){
        
        $order=Order::find($id);
        
        $recipes = $order->recipes()->get();
        return view("myRecipes.recipeList", ['recipes' =>  $recipes,"order" => $order]);
    }
    
    public function myRecipeShow($id){
        
        $recipe = Recipe::find($id);
        return view("myRecipes.recipeShow", ['recipe' =>  $recipe ]);
    }
    
    public function myResipesShow($id){
        $recipe = Recipe::find($id);
        return view("myRecipes.myRecipesShow", ['recipe' =>  $recipe ]);
    }
    
    public function myFavoriteResipesShow($id){
        $recipe = Recipe::find($id);
        return view("myRecipes.myFavoriteRecipeShow", ['recipe' =>  $recipe ]);
    }
}
