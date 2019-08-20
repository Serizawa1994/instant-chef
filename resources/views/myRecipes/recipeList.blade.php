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
        <p>このページでは、自分のオーダーに対して提供されたレシピ一覧を見ることができます</p>
        <p>レシピタイトルをクリックして、レシピを見てみましょう。</p>
    </section>
    
    <section class="table">
        @if(count($recipes) > 0)
            <div class="row" id="top1738">
                <div class="col-sm-12">
                    <table class="table table-striped table-bordered">
                        <tr class="title">
                            <th class="text-center"><h1>PROVIDED RECIPES LIST</h1></th>
                        </tr>
                        @foreach($recipes as $recipe)
                            <tr>
                                <td class="auth_title"><span>{!! link_to_route("myRecipeListShow.get", "$recipe->title", ["id" => $recipe->id]); !!}</span></td>
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
            <a href="#top1738" style="margin-bottom:50px;">Top Of Recipe List</a>
        @else
            <div class="not_anything">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <p><strong>まだ回答されたレシピが1件もありません!!</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>
    
    <section>
        <div class="row">
            <div class="offset-sm-4 col-sm-4">
                 {!! link_to_route("myOrderShow.get", "BACK", ["id" => $order->id], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff; width:100%; margin-bottom:50px;"]) !!} 
            </div> 
        </div>
    </section>
    
@endsection