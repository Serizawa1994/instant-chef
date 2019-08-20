@extends('layouts.app')

<link href="{{ secure_asset('/css/recipeList/recipeList.css') }}" rel="stylesheet">
<link href="{{ secure_asset('/css/commons/list.css') }}" rel="stylesheet">

@section('content')
    
    @include('commons.recipesSelect')
    
    <section class="top">
        <div>
            <img src="/Instant_Chef_img/platter-2009590_1920.jpg" alt="台所" class="img">
        </div>
    </section>
    
    <section class="explain">
        <p>このページでは、このサイトに寄せられたレシピを全て見ることができます。</p>
        <p>レシピタイトルをクリックして、レシピを見てみましょう。</p>
    </section>
    
    
    <section class="table">
        @if(count($recipes) > 0)
            <div class="row" id="top1738">
                <div class="col-sm-12">
                    <table class="table table-striped">
                        <tr class="title">
                            <th class="text-center"><h1>RECIPE LIST</h1></th>
                        </tr>
                        @foreach($recipes as $recipe)
                            @if(!$recipe->user_id == null)
                                @if(Auth::check())
                                    <tr>
                                        <td class="auth_title"><span>{!! link_to_route("recipeListShow.get", "$recipe->title", ["id" => $recipe->id]); !!}</span></td>
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
                                @else
                                    <tr>
                                        <td class="not_auth_title"><span>{!! link_to_route("recipeListShow.get", "$recipe->title", ["id" => $recipe->id]); !!}</span></td>   
                                    </tr>
                                @endif
                            @endif
                        @endforeach
                    </table>
                </div>
            </div>
            <a href="#top1738">Top Of Recipe List</a>
        @else
            <div class="not_anything">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <p><strong>まだレシピが1件もありません!!</strong></p>
                            {!! link_to_route("allOrderList.get", "PROVIDE RECIPE NOW !", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff;  width:75%; margin-bottom:50px;"]) !!}
                        </div>
                    </div>
                </div>
            </div>
        @endif 
    </section>
    
@endsection