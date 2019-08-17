<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Recipe;
use App\Order;

class OrderController extends Controller
{
    public function orderInputForm(){
        return view('order.orderInputForm');
    }
    
    public function orderInputConfirm(Request $request){
        $this->validate($request, [
            'capability' => 'required|max:191',
            'ingredient' => 'required|max:191',
            'outline' => 'required|max:191',
            'details' => 'required|max:191',
        ]);
        
        return view('order.orderInputConfirm',["request" => $request]);
    }
    
    public function store(Request $request){
        $request->user()->order()->create([
            "capability" => $request->capability,
            'ingredient' => $request->ingredient, 
            'outline' => $request->outline,
            'details' => $request->details]);
        return view("welcome");
    }
    
    public function index(Request $request){
        $data = [];
        $num = $request->get("num");
        if(\Auth::check()){
            $user=\Auth::user();
            $myRecipes = $user->provide()->get();
            $plural_order = $user->order()->get();
            $favoriteRecipes = $user->favorites()->get();
        }
        $data= ['plural_order' =>  $plural_order,'myRecipes' => $myRecipes,'favoriteRecipes' => $favoriteRecipes, 'num' => $num];
        return view("myRecipes.myRecipes",$data);
    }
    
    public function show($id){
        $order = Order::find($id);
        return view("myRecipes.myOrderShow", ["order" => $order]);
    } 
    
    public function orderIndex(){
        
        $all_order=Order::all();
        $user = \Auth::user();
        $exist = $user->order()->exists();
        
        if($exist){
            $plural_my_order = $user->order()->get();
        }else{
            $plural_my_order = null;
        }
        
        return view("provide.all_order_list", ['all_order' =>  $all_order ,'plural_my_order' =>  $plural_my_order]);
    }
    
    public function orderShow($id){
        
        $order=Order::find($id);
        
        return view("provide.all_order_show", ['order' =>  $order]);
    }
}
