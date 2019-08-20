<link href="{{ secure_asset('/css/commons_folder.css') }}" rel="stylesheet">

<section  class="not_login">
    <p><strong>ご利用されるにはログインが必要です</strong></p>
    <div>
        {!! link_to_route('login', 'LOG IN', [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff; border-style:none;  width:75%; margin-top:20px; margin-bottom:20px;"]) !!}
    </div>
</section>
