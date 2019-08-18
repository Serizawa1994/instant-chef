@extends('layouts.app')

<link href="{{ secure_asset('/css/commons/show.css') }}" rel="stylesheet">

@section('content')

    @include('commons.provideSelect')
    
    <section class="top">
        <div class="text-center">
            <p><h1>{!! $order->outline !!}</h1></p>
        </div>
    </section>
    
    <section class="show">
        <div class="row" id="order1543">
            <div class="col-sm-12">
                <div class="form-group">
                    <p class="item"><h2>{!! Form::label('capability', 'Capability') !!}</h2></p>
                    {!! $order->capability !!}
                </div>
        
                <div class="form-group">
                    <p class="item"><h2>{!! Form::label('ingredient', 'Ingredient') !!}</h2></p>
                    {!! $order->ingredient !!}
                </div>
        
                <div class="form-group">
                    <p class="item"><h2>{!! Form::label('outline', 'Outline') !!}</h2></p>
                    {!! $order->outline !!}
                </div>
        
                <div class="form-group">
                    <p class="item"><h2>{!! Form::label('details', 'Detail') !!}</h2></p>
                    {!! $order->details !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="offset-sm-4 col-sm-4">
                {!! link_to_route("recipeInputForm.get", "Provide Recipe Against This Order ", ["id" => $order->id], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff;  width:100%; margin-bottom:20px;"]) !!} 
                {!! link_to_route("allOrderList.get", "BACK", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff;  width:100%; margin-bottom:50px;"]) !!}
            </div> 
        </div>
    </section>
    
@endsection