@extends('layouts.app')

<link href="{{ secure_asset('/css/recipeList/recipeList.css') }}" rel="stylesheet">
<link href="{{ secure_asset('/css/commons/list.css') }}" rel="stylesheet">

@section('content')
    
    @include('commons.mineSelect')
    
    <section class="top">
        <div>
            <img src="/Instant_Chef_img/scale-1209837_1920.jpg" alt="台所" class="img">
        </div>
    </section>
    
    <section class="explain">
        <p>このページでは、あなたが以前にしたオーダーを見ることができるほか、オーダーに対して提供されたレシピを見ることができます。</p>
        <p>レシピタイトルをクリックして、レシピを見てみましょう。</p>
    </section>
    
    <section class="table">
        @if($num == null)
            <div class="row" style="margin-bottom:50px;">
                <div class="col-sm-4">
                    {!! link_to_route("myResipes.get", "MY ORDER", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff;  width:100%;"]) !!}
                </div>
                <div class="col-sm-4">
                    {!! link_to_route("myResipes.get", "MY RECIPES", ["num" => "0"], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ffa07a; border-color: #ffffff; color: #ffffff;  width:100%;"]) !!}
                </div>
                <div class="col-sm-4">
                    {!! link_to_route("myResipes.get", "MY FAVORITES", ["num" => "1"], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ffa07a; border-color: #ffffff; color: #ffffff;  width:100%;"]) !!}
                </div>
            </div>
            
            @if(count($plural_order) > 0)
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped table-bordered">
                            <tr class="title">
                                <th class="text-center"><h1>MY ORDER LIST</h1></th>
                            </tr>
                            @foreach($plural_order as $order)
                                <tr>
                                    <td class="item"><span>{!! link_to_route("myOrderShow.get", "$order->outline", ["id" => $order->id]); !!}</span></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            @else
                <div class="not_anything">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center">
                                <p><strong>まだ ORDER が1件もありません!!</strong></p>
                                {!! link_to_route("orderInputForm.get", "ORDER NOW !", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff;  width:75%; margin-bottom:50px"]) !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            
        @elseif($num == 0)
            <div class="row" style="margin-bottom:50px;">
                <div class="col-sm-4">
                    {!! link_to_route("myResipes.get", "MY ORDER", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff7f50; border-color: #ffffff; color: #ffffff;  width:100%;"]) !!}
                </div>
                <div class="col-sm-4">
                    {!! link_to_route("myResipes.get", "MY RECIPES", ["num" => "0"], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff;  width:100%;"]) !!}
                </div>
                <div class="col-sm-4">
                    {!! link_to_route("myResipes.get", "MY FAVORITES", ["num" => "1"], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff7f50; border-color: #ffffff; color: #ffffff;  width:100%;"]) !!}
                </div>
            </div>
            @if(count($myRecipes) > 0)
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped table-bordered">
                            <tr class="title">
                                <th class="text-center"><h1>MY RECIPES LIST</h1></th>
                            </tr>
                            @foreach($myRecipes as $myRecipe)
                                <tr>
                                    <td class="item"><span>{!! link_to_route("myResipesShow.get", "$myRecipe->title", ["id" => $myRecipe->id]); !!}</span></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            @else
                <div class="not_anything">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center">
                                <p><strong>まだレシピが1件もありません!!</strong></p>
                                {!! link_to_route("allOrderList.get", "PROVIDE NOW!!", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff;  width:75%; margin-bottom:50px;"]) !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            
        
        @elseif($num == 1)
            <div class="row" style="margin-bottom:50px;">
                <div class="col-sm-4">
                    {!! link_to_route("myResipes.get", "MY ORDER", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff7f50; border-color: #ffffff; color: #ffffff;  width:100%;"]) !!}
                </div>
                <div class="col-sm-4">
                    {!! link_to_route("myResipes.get", "MY RECIPES", ["num" => "0"], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff7f50; border-color: #ffffff; color: #ffffff;  width:100%;"]) !!}
                </div>
                <div class="col-sm-4">
                    {!! link_to_route("myResipes.get", "MY FAVORITES", ["num" => "1"], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff;  width:100%;"]) !!}
                </div>
            </div>
            @if(count($favoriteRecipes) > 0)
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped">
                            <tr class="title">
                                <th class="text-center"><h1>MY FAVORITES LIST</h1></th>
                            </tr>
                            @foreach($favoriteRecipes as $recipe)
                                <tr>
                                    <td class="auth_title"><span>{!! link_to_route("myFavoriteResipesShow.get", "$recipe->title", ["id" => $recipe->id]); !!}</span></td>
                                </tr>
                                <tr class="favorite">
                                    @if (Auth::user()->already_been_favorite($recipe->id))
                                        {!! Form::open(['route' => ['favorites.unfavorite', $recipe->id], 'method' => 'delete']) !!}
                                            <td class="text-center">{!! Form::submit('Remove From Favorites', ['class' => 'btn btn-danger btn-sm',"style" => "background-color: #ffa07a; border-color: #ffffff; color: #ffffff;"]) !!}</td>
                                        {!! Form::close() !!}
                                    @else
                                        {!! Form::open(['route' => ['favorites.favorite', $recipe->id], 'method' => 'store']) !!}
                                            <td class="text-center">{!! Form::submit('Add To Favorites', ['class' => 'btn btn-success btn-sm',"style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff;"]) !!}</td>
                                        {!! Form::close() !!}
                                    @endif
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            @else
                <div class="not_anything">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center">
                                <p><strong>まだお気に入りが1件もありません!!</strong></p>
                                {!! link_to_route("recipeList.get", "ADD TO FAVORITES NOW!!", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff;  width:75%; margin-bottom:50px;"]) !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endif 
    </section>
    
@endsection
    
