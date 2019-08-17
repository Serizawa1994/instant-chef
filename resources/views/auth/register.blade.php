@extends('layouts.logIn_signUp')

@section('content')
    <div class="text-center">
        <h1>SIGN UP</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3" style="margin-top:50px;">

            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', 'Confirmation') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('Sign up', ['class' => 'btn btn-primary btn-block', "style" => "background-color:#ff4500; border-style:none; color:#ffffff;"]) !!}
            {!! Form::close() !!}
            
            <a class="btn btn-block" href="/" style="background-color: #ff4500; border-color: #ffffff; color: #ffffff; width: 100%; margin-top:10px;">BACK</a> 
        </div>
    </div>
@endsection