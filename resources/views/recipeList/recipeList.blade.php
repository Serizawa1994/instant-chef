@extends('layouts.app')

@section('content')
    
    @include('commons.recipesSelect')
    
    
    <div>
        <img src="/Instant_Chef_img/platter-2009590_1920.jpg" alt="台所" style="width:100%; height:440px; margin: 0 auto 25px; background-color:#dcdcdc;">
    </div>
    
    <section>
        <p style="margin-top:5px; margin-bottom:0; padding:0; color: #696969;">このページでは、このサイトに寄せられたレシピを全て見ることができます。</p>
        <p style="margin-top:0; margin-bottom:50px; padding:0; color: #696969;">レシピタイトルをクリックして、レシピを見てみましょう。</p>
    </section>
    
    
    @if(count($recipes) > 0)
        <div class="row" id="top1738">
            <div class="col-sm-12">
                <table class="table table-striped">
                    <tr>
                        <th class="text-center" style="background-color:#f5deb3; border: 3px solid #ff4500;" colspan="2"><h1>RECIPE LIST</h1></th>
                    </tr>
                    @foreach($recipes as $recipe)
                        @if(!$recipe->user_id == null)
                            <tr>
                                @if(Auth::check())
                                    <td style="border-left: 3px solid #ff4500; border-bottom: 3px solid #ff4500;"><span style="font-size:20px;">{!! link_to_route("recipeListShow.get", "$recipe->title", ["id" => $recipe->id]); !!}</span></td>
                                    @if (Auth::user()->already_been_favorite($recipe->id))
                                        {!! Form::open(['route' => ['favorites.unfavorite', $recipe->id], 'method' => 'delete']) !!}
                                            <td class="text-right", style="border-right: 3px solid #ff4500; border-bottom: 3px solid #ff4500;">{!! Form::submit('Remove From Favorites', ['class' => 'btn btn-danger btn-sm',"style" => "background-color: #ffa07a; border-color: #ffffff; color: #ffffff;"]) !!}</td>
                                        {!! Form::close() !!}
                                    @else
                                        {!! Form::open(['route' => ['favorites.favorite', $recipe->id], 'method' => 'store']) !!}
                                            <td class="text-right", style="border-right: 3px solid #ff4500; border-bottom: 3px solid #ff4500;">{!! Form::submit('Add To Favorites', ['class' => 'btn btn-success btn-sm',"style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff;"]) !!}</td>
                                        {!! Form::close() !!}
                                    @endif
                                @else
                                    <td style="border-left: 3px solid #ff4500; border-bottom: 3px solid #ff4500; border-right: 3px solid #ff4500;"><span style="font-size:20px;">{!! link_to_route("recipeListShow.get", "$recipe->title", ["id" => $recipe->id]); !!}</span></td>   
                                @endif
                            </tr>
                        @endif
                    @endforeach
                </table>
            </div>
        </div>
        <a href="#top1738" style="margin-bottom:50px;">Top Of Recipe List</a>
    @else
        <div class="row  offset-sm-3 col-sm-6">
            <p style="color: #ff0000; margin-bottom:50px; font-size:30px; padding-left:25px;"><strong>まだレシピが1件もありません!!</strong></p>
            {!! link_to_route("allOrderList.get", "PROVIDE RECIPE NOW !", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff;  width:100%;"]) !!}
        </div>
    @endif 
@endsection