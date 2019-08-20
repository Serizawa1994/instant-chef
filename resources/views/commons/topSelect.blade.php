<link href="{{ secure_asset('/css/commons_folder.css') }}" rel="stylesheet">

<aside style="margin-top:30px;">
    <nav class="navbar navbar-expand-sm navbar-light">
            {!! link_to_route("top", "TOP", [], ["class" => "btn btn-lg btn-primary,navbar-brand","style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff;"]) !!}
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav">
                @if(Auth::check())
                    <li class="nav-item">{!! link_to_route("orderInputForm.get", "ORDER", [], ["class" => "btn btn-lg btn-primary,nav-link","style" => "background-color: #ffa07a; border-color: #ffffff; color: #ffffff;  width:100%;"]) !!}</li>
                    <li class="nav-item">{!! link_to_route("allOrderList.get", "PROVIDE", [], ["class" => "btn btn-lg btn-primary,nav-link","style" => "background-color: #ffa07a; border-color: #ffffff; color: #ffffff;  width:100%;"]) !!}</li>
                    <li class="nav-item">{!! link_to_route("myResipes.get", "MINE", [], ["class" => "btn btn-lg btn-primary,nav-link","style" => "background-color: #ffa07a; border-color: #ffffff; color: #ffffff;  width:100%;"]) !!}</li>
                @endif
                <li class="nav-item">{!! link_to_route("recipeList.get", "RECIPES", [], ["class" => "btn btn-lg btn-primary,nav-link","style" => "background-color: #ffa07a; border-color: #ffffff; color: #ffffff;  width:100%;"]) !!}</li>
                <li class="nav-item">{!! link_to_route("recipeList.get", "CONTACT", [], ["class" => "btn btn-lg btn-primary,nav-link","style" => "background-color: #ffa07a; border-color: #ffffff; color: #ffffff;  width:100%;"]) !!}</li>
            </ul>
        </div>
    </nav>
</aside>