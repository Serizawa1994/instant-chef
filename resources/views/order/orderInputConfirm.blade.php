@extends('layouts.app')

<link href="{{ secure_asset('/css/commons/show.css') }}" rel="stylesheet">

@section('content')

    @include('commons.orderSelect')
    
    <section  class="top">
        <div class="text-center">
            <p><h1>CONFIRMATION</h1></p>
        </div>
    </section>
    
    <section class="show">
        {!! Form::model($request,['route' => 'orderInputStore.post']) !!}
            <div class="row">
                <div class="col-sm-12">
                    <div>
                        <p class="item"><h2>Capability</h2></p>
                        {!! nl2br(e($request->capability)) !!}
                    </div>
        
                    <div>
                        <p class="item"><h2>Ingredient</h2></p>
                        {!! nl2br(e($request->ingredient)) !!}
                    </div>
        
                    <div>
                        <p class="item"><h2>Outline</h2></p>
                        {!! nl2br(e($request->outline)) !!}
                    </div>
        
                    <div>
                        <p class="item"><h2>Detail</h2></p>
                        {!! nl2br(e($request->details)) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-4 col-md-4">
                    {!! Form::submit('ORDER', ['class' => 'btn btn-primary btn-block', "style" => "background-color:#ff4500; border-style:none; color:#ffffff;"]) !!}
                </div> 
            </div>
            
            {{ Form::hidden('capability', $request->capability) }}
            {{ Form::hidden('ingredient', $request->ingredient) }}
            {{ Form::hidden('outline', $request->outline) }}
            {{ Form::hidden('details', $request->details) }}
            
        {!! Form::close() !!} 
        <div class="row" style="margin-top:30px;">
            <div class="offset-sm-4 col-sm-4">
                {!! link_to_route("orderInputForm.get", "MODIFY", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #f5deb3; border-style: none; color: #ff4500; width:100%;"]) !!}
            </div> 
        </div>
    </section>
    
@endsection