@extends('layouts.logIn_signUp')

@section('content')
    <div class="row">
        <div class="col-sm-6 offset-sm-3" style="margin-top:50px;">
            <div class="text-center">
                <h1>LOG IN</h1>
            </div>
            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('LOG IN', ['class' => 'btn btn-primary btn-block',"style" => "background-color:#ff4500; border-style:none; color:#ffffff;"]) !!}
            {!! Form::close() !!}
            <a class="btn btn-block" href="/" style="background-color: #ff4500; border-color: #ffffff; color: #ffffff; width: 100%; margin-top:10px;">BACK</a> 
            <p class="mt-2">New user? {!! link_to_route('signup.get', 'Sign up now!') !!}</p>
        </div>
    </div>
@endsection