<style>
    .span{
        color: #ff0000;
    }
</style>

@extends('layouts.app')

@section('content')

    @include('commons.recipesSelect')
    
    <section style="margin-top:50px;">
        @if(Auth::check())
            @if (Auth::user()->already_been_favorite($recipe->id))
                {!! Form::open(['route' => ['favorites.unfavorite', $recipe->id], 'method' => 'delete']) !!}
                    {!! Form::submit('Remove From Favorites', ['class' => 'btn btn-danger btn-sm',"style" => "background-color: #ffa07a; border-color: #ffffff; color: #ffffff;"]) !!}
                {!! Form::close() !!}
            @else
                {!! Form::open(['route' => ['favorites.favorite', $recipe->id], 'method' => 'store']) !!}
                    {!! Form::submit('Add To Favorites', ['class' => 'btn btn-success btn-sm',"style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff;"]) !!}
                {!! Form::close() !!}
            @endif
        @endif
    </section>  
    
    <div class="text-center">
        <p><h1>{!! $recipe->title !!}</h1></p>
    </div>
    
    <section>
        <div class="row" id="order1543">
            <div class="col-sm-12">
                <div class="form-group">
                    <p style="border: 3px solid #ff4500; border-radius:3px; background-color:#ff4500; color:#ffffff;"><h2 style="background-color:#f5deb3; border-radius:3px; padding-left:10px;">{!! Form::label('title', 'Title') !!}</h2></p>
                    <p>{!! nl2br(e($recipe->title)) !!}</p>
               </div>
                    
                <div class="form-group">
                    <p style="border: 3px solid #ff4500; border-radius:3px; background-color:#ff4500; color:#ffffff;"><h2 style="background-color:#f5deb3; border-radius:3px; padding-left:10px;">{!! Form::label('portion', 'Portion') !!}</h2></p>
                    <p>{!! nl2br(e($recipe->portion)) !!}</p>
                </div>
        
                <div class="form-group">
                    <p style=" border: 3px solid #ff4500; border-radius:3px; background-color:#ff4500; color:#ffffff;"><h2 style="background-color:#f5deb3; border-radius:3px; padding-left:10px;">{!! Form::label('ingredient', 'Ingredient') !!}</h2></p>
                    <p>{!! nl2br(e($recipe->ingredient)) !!}</p>
                </div>
        
                <div class="form-group">
                    <p style="border: 3px solid #ff4500; border-radius:3px; background-color:#ff4500; color:#ffffff;"><h2 style="background-color:#f5deb3; border-radius:3px; padding-left:10px;">{!! Form::label('how_to_1', 'HOW  TO  COOK') !!}</h2></p>
                        
                    <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 1</p>
                    <p>{!! nl2br(e($recipe->how_to_1)) !!}</p>
                        
                    @if(!$recipe->how_to_2 == null)
                        <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 2</p>
                        <p>{!! nl2br(e($recipe->how_to_2)) !!}</p>
                    @endif
                    @if(!$recipe->how_to_3 == null)
                        <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 3</p>
                        <p>{!! nl2br(e($recipe->how_to_3)) !!}</p>
                    @endif
                    @if(!$recipe->how_to_4 == null)
                        <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 4</p>
                        <p>{!! nl2br(e($recipe->how_to_4)) !!}</p>
                    @endif
                    @if(!$recipe->how_to_5 == null)
                        <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 5</p>
                        <p>{!! nl2br(e($recipe->how_to_5)) !!}</p>
                    @endif
                    @if(!$recipe->how_to_6 == null)
                        <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 6</p>
                        <p>{!! nl2br(e($recipe->how_to_6)) !!}</p>
                    @endif
                    @if(!$recipe->how_to_7 == null)
                        <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 7</p>
                        <p>{!! nl2br(e($recipe->how_to_7)) !!}</p>
                    @endif
                    @if(!$recipe->how_to_8 == null)
                        <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 8</p>
                        <p>{!! nl2br(e($recipe->how_to_8)) !!}</p>
                    @endif
                    @if(!$recipe->how_to_9 == null)
                        <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 9</p>
                        <p>{!! nl2br(e($recipe->how_to_9)) !!}</p>
                    @endif
                    @if(!$recipe->how_to_10 == null)
                        <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 10</p>
                        <p>{!! nl2br(e($recipe->how_to_10)) !!}</p>
                    @endif
                    @if(!$recipe->how_to_11 == null)
                        <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 11</p>
                        <p>{!! nl2br(e($recipe->how_to_11)) !!}</p>
                    @endif
                    @if(!$recipe->how_to_12 == null)
                        <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 12</p>
                        <p>{!! nl2br(e($recipe->how_to_12)) !!}</p>
                    @endif
                        
                </div>
                @if(!$recipe->one_point == null) 
                    <div class="form-group">
                        <p style="border: 3px solid #ff4500; border-radius:3px; background-color:#ff4500; color:#ffffff;"><h2 style="background-color:#f5deb3; border-radius:3px; padding-left:10px;">{!! Form::label('one_point', 'One Point Advice') !!}</h2></p>
                        <p>{!! nl2br(e($recipe->one_point)) !!}</p>
                    </div>
                @endif
            </div>
        </div>
            
        <div class="row">
            <div class="offset-sm-4 col-sm-4">
                {!! link_to_route("recipeList.get", "BACK", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff;  width:100%;"]) !!}
            </div> 
        </div>
    </section>
@endsection