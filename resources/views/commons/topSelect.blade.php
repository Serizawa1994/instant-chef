<style>
    #navbar2149 .col-sm-2{
        padding: 0;
    }
</style>
<nav class="navbar navbar-expand-sm navbar-light bg-light">
            <!-- ホームへ戻るリンク。ブランドロゴなどを置く。 -->
            <a href="#" class="navbar-brand">P&amp;K</a>
            
            <!-- 横幅が狭い時に出るハンバーガーボタン -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- メニュー項目 -->
            <div class="collapse navbar-collapse" id="nav-bar">
                <ul class="navbar-nav">
                    <li class="nav-item active"><a href="#" class="nav-link">子犬</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">子猫</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">会社情報</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">ビジョン</a>
                            <a class="dropdown-item" href="#">会社概要</a>
                            <a class="dropdown-item" href="#">地図</a>
                            <a class="dropdown-item" href="#">沿革</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">お問い合わせ</a></li>
                </ul>
            </div>
        </nav>

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