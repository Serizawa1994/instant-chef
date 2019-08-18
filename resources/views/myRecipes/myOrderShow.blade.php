<style>
    .p{
        color: #696969;
    }
</style>

@extends('layouts.app')

@section('content')

    @include('commons.mineSelect')
    
    <section>
        <div class="text-center">
            <p style="margin-top:50px;"><h1>{!! $order->outline !!}</h1></p>
        </div>
    </section>
    
    <section>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <p style="border: 3px solid #ff4500; border-radius:3px; background-color:#ff4500; color:#ffffff;"><h2 style="background-color:#f5deb3; border-radius:3px; padding-left:10px;">{!! Form::label('capability', 'Capability') !!}</h2></p>
                    <p>{!! $order->capability !!}</p>
                </div>
        
                <div class="form-group">
                    <p style=" border: 3px solid #ff4500; border-radius:3px; background-color:#ff4500; color:#ffffff;"><h2 style="background-color:#f5deb3; border-radius:3px; padding-left:10px;">{!! Form::label('ingredient', 'Ingredient') !!}</h2></p>
                    <p>{!! $order->ingredient !!}</p>
                </div>
        
                <div class="form-group">
                    <p style="border: 3px solid #ff4500; border-radius:3px; background-color:#ff4500; color:#ffffff;"><h2 style="background-color:#f5deb3; border-radius:3px; padding-left:10px;">{!! Form::label('outline', 'Outline') !!}</h2></p>
                    <p>{!! $order->outline !!}</p>
                </div>
        
                <div class="form-group">
                    <p style="border: 3px solid #ff4500; border-radius:3px; background-color:#ff4500; color:#ffffff;"><h2 style="background-color:#f5deb3; border-radius:3px; padding-left:10px;">{!! Form::label('details', 'Detail') !!}</h2></p>
                    <p>{!! $order->details !!}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="offset-sm-4 col-sm-4" style="margin-bottom:50px;">
                 {!! link_to_route("myRecipeList.get", "PROVIDED RECIPES", ["id" => $order->id], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff;  width:100%;"]) !!}
                {!! link_to_route("myResipes.get", "BACK", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff;  width:100%;"]) !!} 
            </div> 
        </div>
    </section>
@endsection