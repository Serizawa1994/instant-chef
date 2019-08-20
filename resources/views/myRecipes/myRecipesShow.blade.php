@extends('layouts.app')

<link href="{{ secure_asset('/css/commons/show.css') }}" rel="stylesheet">

@section('content')

    @include('commons.mineSelect')
    
    <section>
        <div class="text-center">
            <p><h1>{!! $recipe->title !!}</h1></p>
        </div>
    </section> 
    
    <section class="show">
        <div class="row" id="order1543">
            <div class="col-sm-12">
                <div class="form-group">
                    <p class="item"><h2>{!! Form::label('title', 'Title') !!}</h2></p>
                    {!! nl2br(e($recipe->title)) !!}
                </div>
                    
                <div class="form-group">
                    <p class="item"><h2>{!! Form::label('portion', 'Portion') !!}</h2></p>
                    {!! nl2br(e($recipe->portion)) !!}
                </div>
        
                <div class="form-group">
                    <p class="item"><h2>{!! Form::label('ingredient', 'Ingredient') !!}</h2></p>
                    {!! nl2br(e($recipe->ingredient)) !!}
                </div>
        
                <div class="form-group">
                    <p class="item"><h2>{!! Form::label('how_to_1', 'HOW  TO  COOK') !!}</h2></p>
                    
                    <div class="step">    
                    <p>STEP 1</p>
                    {!! nl2br(e($recipe->how_to_1)) !!}
                        
                    @if(!$recipe->how_to_2 == null)
                        <p>STEP 2</p>
                        {!! nl2br(e($recipe->how_to_2)) !!}
                    @endif
                    @if(!$recipe->how_to_3 == null)
                        <p>STEP 3</p>
                        {!! nl2br(e($recipe->how_to_3)) !!}
                    @endif
                    @if(!$recipe->how_to_4 == null)
                        <p>STEP 4</p>
                        {!! nl2br(e($recipe->how_to_4)) !!}
                    @endif
                    @if(!$recipe->how_to_5 == null)
                        <p>STEP 5</p>
                        {!! nl2br(e($recipe->how_to_5)) !!}
                    @endif
                    @if(!$recipe->how_to_6 == null)
                        <p>STEP 6</p>
                        {!! nl2br(e($recipe->how_to_6)) !!}
                    @endif
                    @if(!$recipe->how_to_7 == null)
                        <p>STEP 7</p>
                        {!! nl2br(e($recipe->how_to_7)) !!}
                    @endif
                    @if(!$recipe->how_to_8 == null)
                        <p>STEP 8</p>
                        {!! nl2br(e($recipe->how_to_8)) !!}
                    @endif
                    @if(!$recipe->how_to_9 == null)
                        <p>STEP 9</p>
                        {!! nl2br(e($recipe->how_to_9)) !!}
                    @endif
                    @if(!$recipe->how_to_10 == null)
                        <p>STEP 10</p>
                        {!! nl2br(e($recipe->how_to_10)) !!}
                    @endif
                    @if(!$recipe->how_to_11 == null)
                        <p>STEP 11</p>
                        {!! nl2br(e($recipe->how_to_11)) !!}
                    @endif
                    @if(!$recipe->how_to_12 == null)
                        <p>STEP 12</p>
                        {!! nl2br(e($recipe->how_to_12)) !!}
                    @endif
                    </div>    
                </div>
                
                @if(!$recipe->one_point == null) 
                    <div class="form-group">
                        <p class="item"><h2>{!! Form::label('one_point', 'One Point Advice') !!}</h2></p>
                        {!! nl2br(e($recipe->one_point)) !!}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="offset-sm-4 col-sm-4">
                {!! link_to_route("myResipes.get", "BACK", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff;  width:100%; margin-bottom:50px;"]) !!} 
            </div> 
        </div>
    </section>
    
@endsection