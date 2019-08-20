@extends('layouts.app')

<link href="{{ secure_asset('/css/commons/show.css') }}" rel="stylesheet">

@section('content')

    @include('commons.provideSelect')

    <section class="top">
        <div class="text-center">
            <p><h1>CONFIRMATION</h1></p>
        </div>
    </section>
    
    <section class="show">
        {!! Form::open(["route" => [ "recipeInputStore.post",$order->id]]) !!}
            <div class="row" id="order1543">
                <div class="col-sm-12">
                    <div class="form-group">
                        <p class="item"><h2>{!! Form::label('title', 'Title') !!}</h2></p>
                       {!! nl2br(e($request->title)) !!}
                    </div>
                    
                    <div class="form-group">
                        <p class="item"><h2>{!! Form::label('portion', 'Portion') !!}</h2></p>
                        {!! nl2br(e($request->portion)) !!}
                    </div>
        
                    <div class="form-group">
                        <p class="item"><h2>{!! Form::label('ingredient', 'Ingredient') !!}</h2></p>
                        {!! nl2br(e($request->ingredient)) !!}
                    </div>
        
                    <div class="form-group">
                        <p class="item"><h2>{!! Form::label('how_to_1', 'HOW  TO  COOK') !!}</h2></p>
                        
                        <div class="step">
                            <p>STEP 1</p>
                            {!! nl2br(e($request->how_to_1)) !!}
                            
                            @if(!$request->how_to_2 == null)
                                <p>STEP 2</p>
                                {!! nl2br(e($request->how_to_2)) !!}
                            @endif
                            @if(!$request->how_to_3 == null)
                                <p>STEP 3</p>
                                {!! nl2br(e($request->how_to_3)) !!}
                            @endif
                            @if(!$request->how_to_4 == null)
                                <p>STEP 4</p>
                                {!! nl2br(e($request->how_to_4)) !!}
                            @endif
                            @if(!$request->how_to_5 == null)
                                <p>STEP 5</p>
                                {!! nl2br(e($request->how_to_5)) !!}
                            @endif
                            @if(!$request->how_to_6 == null)
                                <p>STEP 6</p>
                                {!! nl2br(e($request->how_to_6)) !!}
                            @endif
                            @if(!$request->how_to_7 == null)
                                <p>STEP 7</p>
                                {!! nl2br(e($request->how_to_7)) !!}
                            @endif
                            @if(!$request->how_to_8 == null)
                                <p>STEP 8</p>
                                {!! nl2br(e($request->how_to_8)) !!}
                            @endif
                            @if(!$request->how_to_9 == null)
                                <p>STEP 9</p>
                                {!! nl2br(e($request->how_to_9)) !!}
                            @endif
                            @if(!$request->how_to_10 == null)
                                <p>STEP 10</p>
                                {!! nl2br(e($request->how_to_10)) !!}
                            @endif
                            @if(!$request->how_to_11 == null)
                                <p>STEP 11</p>
                                {!! nl2br(e($request->how_to_11)) !!}
                            @endif
                            @if(!$request->how_to_12 == null)
                                <p>STEP 12</p>
                                {!! nl2br(e($request->how_to_12)) !!}
                            @endif
                        </div>
                    </div>
                    @if(!$request->one_point == null) 
                        <div class="form-group">
                            <p class="item"><h2>{!! Form::label('one_point', 'One Point Advice') !!}</h2></p>
                               <p>{!! nl2br(e($request->one_point)) !!}</p>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="offset-sm-4 col-sm-4">
                    {!! Form::submit('PROVIDE', ['class' => 'btn btn-primary btn-block', "style" => "background-color:#ff4500; border-style:none; color:#ffffff; margin-bottom:50px;"]) !!}
                </div> 
            </div>
            
            {{ Form::hidden('ingredient', $request->ingredient) }}
            {{ Form::hidden('title', $request->title) }}
            {{ Form::hidden('portion', $request->portion) }}
            {{ Form::hidden('how_to_1', $request->how_to_1) }}
            {{ Form::hidden('how_to_2', $request->how_to_2) }}
            {{ Form::hidden('how_to_3', $request->how_to_3) }}
            {{ Form::hidden('how_to_4', $request->how_to_4) }}
            {{ Form::hidden('how_to_5', $request->how_to_5) }}
            {{ Form::hidden('how_to_6', $request->how_to_6) }}
            {{ Form::hidden('how_to_7', $request->how_to_7) }}
            {{ Form::hidden('how_to_8', $request->how_to_8) }}
            {{ Form::hidden('how_to_9', $request->how_to_9) }}
            {{ Form::hidden('how_to_10', $request->how_to_10) }}
            {{ Form::hidden('how_to_11', $request->how_to_11) }}
            {{ Form::hidden('how_to_12', $request->how_to_12) }}
            {{ Form::hidden('one_point', $request->one_point) }}
            
        {!! Form::close() !!} 
    </section>
    
@endsection