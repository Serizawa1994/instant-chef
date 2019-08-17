@extends('layouts.app')

@section('content')
    
    @include('commons.mineSelect')
    
    
    <div>
        <img src="/Instant_Chef_img/scale-1209837_1920.jpg" alt="台所" style="width:100%; height:440px; margin: 0 auto 25px; background-color:#dcdcdc;">
    </div>
    
    <section>
        <p style="margin-top:5px; margin-bottom:0; padding:0; color: #696969;">このページでは、あなたが以前にしたオーダーを見ることができるほか、オーダーに対して提供されたレシピを見ることができます。</p>
        <p style="margin-top:0; margin-bottom:50px; padding:0; color: #696969;">レシピタイトルをクリックして、レシピを見てみましょう。</p>
    </section>
    
    <section>
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
                <div class="row" id="top1738">
                    <div class="col-sm-12">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th class="text-center" style="background-color:#f5deb3; border: 3px solid #ff4500;"><h1>MY ORDER LIST</h1></th>
                            </tr>
                            @foreach($plural_order as $order)
                                <tr>
                                    <td style="border-left: 3px solid #ff4500; border-right: 3px solid #ff4500; border-bottom: 3px solid #ff4500;"><span style="font-size:20px;">{!! link_to_route("myOrderShow.get", "$order->outline", ["id" => $order->id]); !!}</span></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <p style="color: #ff0000; margin-bottom:50px; font-size:30px;"><strong>まだ ORDER が1件もありません!!</strong></p>
                            {!! link_to_route("orderInputForm.get", "ORDER NOW !", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff;  width:75%; margin-bottom:50px"]) !!}
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
                <div class="row" id="top1738">
                    <div class="col-sm-12">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th class="text-center" style="background-color:#f5deb3; border: 3px solid #ff4500;"><h1>MY RECIPES LIST</h1></th>
                            </tr>
                            @foreach($myRecipes as $myRecipe)
                                <tr>
                                    <td style="border-left: 3px solid #ff4500; border-right: 3px solid #ff4500; border-bottom: 3px solid #ff4500;"><span style="font-size:20px;">{!! link_to_route("myResipesShow.get", "$myRecipe->title", ["id" => $myRecipe->id]); !!}</span></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <p style="color: #ff0000; margin-bottom:50px; font-size:30px;"><strong>まだレシピが1件もありません!!</strong></p>
                            {!! link_to_route("allOrderList.get", "PROVIDE NOW!!", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff;  width:75%; margin-bottom:50px;"]) !!}
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
                <div class="row" id="top1738">
                    <div class="col-sm-12">
                        <table class="table table-striped">
                            <tr>
                                <th class="text-center" style="background-color:#f5deb3; border: 3px solid #ff4500;" colspan="2"><h1>MY FAVORITES LIST</h1></th>
                            </tr>
                            @foreach($favoriteRecipes as $recipe)
                                <tr>
                                    <td style="border-left: 3px solid #ff4500; border-bottom: 3px solid #ff4500;"><span style="font-size:20px;">{!! link_to_route("myFavoriteResipesShow.get", "$recipe->title", ["id" => $recipe->id]); !!}</span></td>
                                    @if (Auth::user()->already_been_favorite($recipe->id))
                                        {!! Form::open(['route' => ['favorites.unfavorite', $recipe->id], 'method' => 'delete']) !!}
                                            <td class="text-right", style="border-right: 3px solid #ff4500; border-bottom: 3px solid #ff4500;">{!! Form::submit('Remove From Favorites', ['class' => 'btn btn-danger btn-sm',"style" => "background-color: #ffa07a; border-color: #ffffff; color: #ffffff;"]) !!}</td>
                                        {!! Form::close() !!}
                                    @else
                                        {!! Form::open(['route' => ['favorites.favorite', $recipe->id], 'method' => 'store']) !!}
                                            <td class="text-right", style="border-right: 3px solid #ff4500; border-bottom: 3px solid #ff4500;">{!! Form::submit('Add To Favorites', ['class' => 'btn btn-success btn-sm',"style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff;"]) !!}</td>
                                        {!! Form::close() !!}
                                    @endif
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <p style="color: #ff0000; margin-bottom:50px; font-size:30px;"><strong>まだお気に入りが1件もありません!!</strong></p>
                            {!! link_to_route("recipeList.get", "ADD TO FAVORITES NOW!!", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff;  width:75%; margin-bottom:50px;"]) !!}
                        </div>
                    </div>
                </div>
            @endif
        @endif 
    </section>
    
@endsection
    
