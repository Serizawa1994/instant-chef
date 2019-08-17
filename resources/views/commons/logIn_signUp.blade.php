<div class="row">
    @if(Auth::check())
        <div class="offset-sm-10 col-sm-2">
            {!! link_to_route("logout.get", "LOG OUT", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color:#f5deb3; border-style:none; color:#ff4500;  width:100%; font-weight:bold;"]) !!}   
        </div>
        
    @else
        <div class="offset-sm-8 col-sm-2">
            {!! link_to_route("signup.get", "SIGN UP", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color:#f5deb3; border:2px solid #ffffff; color:#ff4500;  width:100%; font-weight:bold;"]) !!}
        </div>
        <div class="col-sm-2">
            {!! link_to_route('login', 'LOG IN', [], ["class" => "btn btn-lg btn-primary", "style" => "background-color:#f5deb3; border:2px solid #ffffff; color:#ff4500;  width:100%; font-weight:bold;"]) !!}
        </div>
    @endif
</div>