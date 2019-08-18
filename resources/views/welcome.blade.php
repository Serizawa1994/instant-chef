

@extends('layouts.app')

<link href="{{ secure_asset('/css/welcome.css') }}" rel="stylesheet">

@section('content')
    
    @include('commons.topSelect')
    
    <body>
        <section class="top">
            <div>
                <img src="/Instant_Chef_img/top.jpg" alt="台所" class="img">
            </div>
        </section>
        
        <section class="explain">
            <p>料理にお困りの方、料理が大好きな方はいらっしゃいますか？</p>
            <p>このサイトでは ORDER  RECIPE・PROVIDE  RECIPE ・RECIPE  LIST・YOUR  RECIPES の4つのコンテンツを提供しており、</p>
            <p>あなたの料理生活を変えることができるかもしれません。</p>
            <p>また、このサイトではレシピの要望を書いて投稿し、要望に応えたレシピを考えてくれた方が回答するという質問形式を取っております</p>
            <p>万が一、ご要望・ご依頼・不明点等ございましたら、メニューバーの「CONTACT」から承っております。</p>
            <p>料理好きの方々にお役に立てることを願っております。</p>
        </section>
        
        <section class="wrapper">
            <div class="row">
                <div class="col-sm-6">
                    <div class="item">
                        <div class="col-sm-12">
                            <div class="text-center">
                                {!! link_to_route("orderInputForm.get", "ORDER", [], ["class" => "btn btn-lg btn-primary", "style" => "width:75%; margin-top:30px; margin-bottom:20px; background-color:#ff4500; border-style: none; color: #ffffff;"]) !!}
                                <img src="/Instant_Chef_img/order.jpg" alt="料理道具" class="img">  
                                <p class="topSentence">冷蔵庫に食材が残っていて困っている方はいませんか？</p>
                                <p>アレルギーのためレシピ探しに困っている方はいませんか？</p>
                                <p>そんなお困りのあなたはレシピを注文してみませんか？</p>
                                <p>好みに応えたレシピを作ってくれる方が現れるかも！</p>
                                @if(Auth::check())
                                    {!! link_to_route("orderInputForm.get", "注文してみる", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-style: none; color: #ffffff; width:75%; margin-top:40px; margin-bottom:50px;"]) !!}
                                @else
                                    @include("commons.auth_check_welcome")
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" style="margin-top:50px;">
                    <div class="item">
                        <div class="col-sm-12">
                            <div class="text-center">
                                {!! link_to_route("allOrderList.get", "PROVIDE", [], ["class" => "btn btn-lg btn-primary", "style" => "width:75%; margin-top:30px; margin-bottom:20px; background-color:#ff4500; border-style: none; color: #ffffff;"]) !!}
                                <p><img src="../Instant_Chef_img/pasta-1181189_1280.jpg" alt="料理道具" class="img"></p>     
                                <p class="topSentence">あなたは料理が好きですか？</p>
                                <p>おそらく大好きですよね？</p>
                                <p>そんな料理が大好きなあなたはレシピを提供してみては？？</p>
                                <p>腕がなること間違いなし！</p>
                                @if(Auth::check())
                                    {!! link_to_route("allOrderList.get", "レシピを作ってみる", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-style: none; color: #ffffff; width:75%; margin-top:40px; margin-bottom:50px;"]) !!}
                                @else
                                    @include("commons.auth_check_welcome")
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </section>
        
        <section class="wrapper">
            <div class="row">
                <div class="col-sm-6">
                    <div class="item">
                        <div class="col-sm-12">
                            <div class="text-center">
                                {!! link_to_route("myResipes.get", "MINE", [], ["class" => "btn btn-lg btn-primary",  "style" => "width:75%; margin-top:30px; margin-bottom:20px; background-color:#ff4500; border-style: none; color: #ffffff;"]) !!} 
                                <img src="../Instant_Chef_img/scale-1209837_1920.jpg" alt="料理道具" class="img">   
                                <p class="topSentence">あなたがオーダーしたレシピを一覧から見ることができます</p>
                                <p>また、あなたがした過去の質問も見ることができます！</p>
                                <p>どんなレシピが出来上がったのか楽しみですね！</p>
                                <p>はやく料理してみましょう！</p>
                                
                                @if(Auth::check())
                                    {!! link_to_route("myResipes.get", "オーダーしたレシピを見る", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff; border-style: none; width:75%; margin-top:40px; margin-bottom:50px;"]) !!}
                                @else
                                    @include("commons.auth_check_welcome")
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="item">
                        <div class="col-sm-12">
                            <div class="text-center">
                                {!! link_to_route("recipeList.get", "RECIPES", [], ["class" => "btn btn-lg btn-primary",  "style" => "width:75%; margin-top:30px; margin-bottom:20px; background-color:#ff4500; border-style: none; color: #ffffff;"]) !!}
                                <img src="/Instant_Chef_img/platter-2009590_1920.jpg" alt="料理道具" class="img">
                                <p class="topSentence">もう献立は決まりましたか？</p>
                                <p>まだ決まってないんですか？</p>
                                <p>そんなお困りのあなたはレシピ一覧から探すのはいかが？？</p>
                                <p>気に入ったレシピがあればお気に入り登録を忘れずに！</p>
                                @if(Auth::check())
                                    {!! link_to_route("recipeList.get", "レシピ一覧を見る", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-style: none; color: #ffffff;width:75%; margin-top:40px; margin-bottom:50px;"]) !!} 
                                @else
                                    <p class="not_login"><strong>ログインなしでご利用できます</strong></p>
                                    {!! link_to_route("recipeList.get", "レシピ一覧を見る", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-style: none; color: #ffffff; width:75%; margin-top:20px; margin-bottom:20px;"]) !!} 
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </section>
    </body>
@endsection