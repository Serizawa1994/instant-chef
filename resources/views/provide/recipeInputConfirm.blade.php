<style>
    .span{
        color: #ff0000;
    }
</style>

@extends('layouts.app')

@section('content')

    @include('commons.provideSelect')

    <section>
        <div class="text-center">
            <p><h1  style="margin-top:80px; margin-bottom:80px; border: 3px solid #ff4500; border-radius:3px;">CONFIRMATION</h1></p>
        </div>
    </section>
    
    <section>
        {!! Form::open(["route" => [ "recipeInputStore.post",$order->id]]) !!}
            <div class="row" id="order1543">
                <div class="col-sm-12">
                    <div class="form-group">
                        <p style="border: 3px solid #ff4500; border-radius:3px; background-color:#ff4500; color:#ffffff;"><h2 style="background-color:#f5deb3; border-radius:3px; padding-left:10px;">{!! Form::label('title', 'Title') !!}</h2></p>
                        <p>{!! nl2br(e($request->title)) !!}</p>
                    </div>
                    
                    <div class="form-group">
                        <p style="border: 3px solid #ff4500; border-radius:3px; background-color:#ff4500; color:#ffffff;"><h2 style="background-color:#f5deb3; border-radius:3px; padding-left:10px;">{!! Form::label('portion', 'Portion') !!}</h2></p>
                        <p>{!! nl2br(e($request->portion)) !!}</p>
                    </div>
        
                    <div class="form-group">
                        <p style=" border: 3px solid #ff4500; border-radius:3px; background-color:#ff4500; color:#ffffff;"><h2 style="background-color:#f5deb3; border-radius:3px; padding-left:10px;">{!! Form::label('ingredient', 'Ingredient') !!}</h2></p>
                        <p>{!! nl2br(e($request->ingredient)) !!}</p>
                    </div>
        
                    <div class="form-group">
                        <p style="border: 3px solid #ff4500; border-radius:3px; background-color:#ff4500; color:#ffffff;"><h2 style="background-color:#f5deb3; border-radius:3px; padding-left:10px;">{!! Form::label('how_to_1', 'HOW  TO  COOK') !!}</h2></p>
                        
                        <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 1</p>
                        <p>{!! nl2br(e($request->how_to_1)) !!}</p>
                        
                        @if(!$request->how_to_2 == null)
                            <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 2</p>
                            <p>{!! nl2br(e($request->how_to_2)) !!}</p>
                        @endif
                        @if(!$request->how_to_3 == null)
                            <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 3</p>
                            <p>{!! nl2br(e($request->how_to_3)) !!}</p>
                        @endif
                        @if(!$request->how_to_4 == null)
                            <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 4</p>
                            <p>{!! nl2br(e($request->how_to_4)) !!}</p>
                        @endif
                        @if(!$request->how_to_5 == null)
                            <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 5</p>
                            <p>{!! nl2br(e($request->how_to_5)) !!}</p>
                        @endif
                        @if(!$request->how_to_6 == null)
                            <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 6</p>
                            <p>{!! nl2br(e($request->how_to_6)) !!}</p>
                        @endif
                        @if(!$request->how_to_7 == null)
                            <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 7</p>
                            <p>{!! nl2br(e($request->how_to_7)) !!}</p>
                        @endif
                        @if(!$request->how_to_8 == null)
                            <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 8</p>
                            <p>{!! nl2br(e($request->how_to_8)) !!}</p>
                        @endif
                        @if(!$request->how_to_9 == null)
                            <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 9</p>
                            <p>{!! nl2br(e($request->how_to_9)) !!}</p>
                        @endif
                        @if(!$request->how_to_10 == null)
                            <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 10</p>
                            <p>{!! nl2br(e($request->how_to_10)) !!}</p>
                        @endif
                        @if(!$request->how_to_11 == null)
                            <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 11</p>
                            <p>{!! nl2br(e($request->how_to_11)) !!}</p>
                        @endif
                        @if(!$request->how_to_12 == null)
                            <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 12</p>
                            <p>{!! nl2br(e($request->how_to_12)) !!}</p>
                        @endif
                        
                    </div>
                    @if(!$request->one_point == null) 
                        <div class="form-group">
                            <p style="border: 3px solid #ff4500; border-radius:3px; background-color:#ff4500; color:#ffffff;"><h2 style="background-color:#f5deb3; border-radius:3px; padding-left:10px;">{!! Form::label('one_point', 'One Point Advice') !!}</h2></p>
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