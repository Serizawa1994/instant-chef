@extends('layouts.app')

@section('content')

    @include('commons.orderSelect')
    
    <section>
        <div class="text-center">
            <p><h1  style="margin-top:80px; margin-bottom:80px; border: 3px solid #ff4500; border-radius:3px;">CONFIRMATION</h1></p>
        </div>
    </section>
    
    <section>
        {!! Form::model($request,['route' => 'orderInputStore.post']) !!}
            <div class="row">
                <div class="col-sm-12">
                    <div>
                        <p style="border: 3px solid #ff4500; border-radius:3px; background-color:#ff4500; color:#ffffff;"><h2 style="background-color:#f5deb3; border-radius:3px; padding-left:10px;">Capability</h2></p>
                        <p>{!! nl2br(e($request->capability)) !!}</p>
                    </div>
        
                    <div>
                        <p style=" border: 3px solid #ff4500; border-radius:3px; background-color:#ff4500; color:#ffffff;"><h2 style="background-color:#f5deb3; border-radius:3px; padding-left:10px;">Ingredient</h2></p>
                        <p>{!! nl2br(e($request->ingredient)) !!}</p>
                    </div>
        
                    <div>
                        <p style="border: 3px solid #ff4500; border-radius:3px; background-color:#ff4500; color:#ffffff;"><h2 style="background-color:#f5deb3; border-radius:3px; padding-left:10px;">Outline</h2></p>
                        <p>{!! nl2br(e($request->outline)) !!}</p>
                    </div>
        
                    <div>
                        <p style="border: 3px solid #ff4500; border-radius:3px; background-color:#ff4500; color:#ffffff;"><h2 style="background-color:#f5deb3; border-radius:3px; padding-left:10px;">Detail</h2></p>
                        <p>{!! nl2br(e($request->details)) !!}</p>
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