@extends('layouts.app')

@section('content')
    
    @include('commons.topSelect')

    <div>
        <img src="/Instant_Chef_img/top.jpg" alt="台所" style="width:100%; height:440px; margin: 0 auto 25px; background-color:#dcdcdc;">
    </div>
    
    <section>
        <p style="margin-top:5px; margin-bottom:0; padding:0; color: #696969;">料理にお困りの方、料理が大好きな方はいらっしゃいますか？</p>
        <p style="margin:0; padding:0; color: #696969;">このサイトでは ORDER  RECIPE・PROVIDE  RECIPE ・RECIPE  LIST・YOUR  RECIPES の4つのコンテンツを提供しており、</p>
        <p style="margin:0; padding:0; color: #696969;">あなたの料理生活を変えることができるかもしれません。</p>
        <p style="margin:0; padding:0; color: #696969;">また、このサイトではレシピの要望を書いて投稿し、要望に応えたレシピを考えてくれた方が回答するという質問形式を取っております</p>
        <p style="margin:0; padding:0; color: #696969;">万が一、ご要望・ご依頼・不明点等ございましたら、メニューバーの「CONTACT」から承っております。</p>
        <p style="margin:0; padding:0; color: #696969;">料理好きの方々にお役に立てることを願っております。</p>
    </section>
    
    <section>
        <div class="row">
            <div class="col-sm-6" style="margin-top:50px;">
                <div style="border:1px solid #ccc; padding:20px; border-radius:10px; background-color:#f5deb3;">
                    <div class="text-center">
                        {!! link_to_route("orderInputForm.get", "ORDER", [], ["class" => "btn btn-lg btn-primary", "style" => "width:300px; margin-top:30px; margin-bottom:20px; background-color:#ff4500; border-style: none; color: #ffffff;"]) !!}
                        <p><img src="/Instant_Chef_img/order.jpg" alt="料理道具" style="width:300px; height:150px; margin-top: 30px; background-color:#c0c0c0;"></p>   
                        <p style="margin-top:20px; margin-bottom:0; padding:0; color: #696969;">冷蔵庫に食材が残っていて困っている方はいませんか？</p>
                        <p style="margin:0; padding:0; color: #696969;">アレルギーのためレシピ探しに困っている方はいませんか？</p>
                        <p style="margin:0; padding:0; color: #696969;">そんなお困りのあなたはレシピを注文してみませんか？</p>
                        <p style="margin:0; padding:0; color: #696969;">好みに応えたレシピを作ってくれる方が現れるかも！</p>
                        @if(Auth::check())
                            {!! link_to_route("orderInputForm.get", "注文してみる", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-style: none; color: #ffffff; width:300px; margin-top:40px; margin-bottom:50px;"]) !!}
                        @else
                            @include("commons.auth_check_welcome")
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top:50px;">
                <div style="border:1px solid #ccc; padding:20px; border-radius:10px; background-color:#f5deb3;">
                    <div class="text-center">
                        {!! link_to_route("allOrderList.get", "PROVIDE", [], ["class" => "btn btn-lg btn-primary", "style" => "width:300px; margin-top:30px; margin-bottom:20px; background-color:#ff4500; border-style: none; color: #ffffff;"]) !!}
                        <p><img src="../Instant_Chef_img/pasta-1181189_1280.jpg" alt="料理道具" style="width:300px; height:150px; margin-top: 30px; background-color:#c0c0c0;"></p>     
                        <p style="margin-top:20px; margin-bottom:0; padding:0; color: #696969;">あなたは料理が好きですか？</p>
                        <p style="margin:0; padding:0; color: #696969;">おそらく大好きですよね？</p>
                        <p style="margin:0; padding:0; color: #696969;">そんな料理が大好きなあなたはレシピを提供してみては？？</p>
                        <p style="margin:0; padding:0; color: #696969;">腕がなること間違いなし！</p>
                        @if(Auth::check())
                            {!! link_to_route("allOrderList.get", "レシピを作ってみる", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-style: none; color: #ffffff; width:300px; margin-top:40px; margin-bottom:50px;"]) !!}
                        @else
                            @include("commons.auth_check_welcome")
                        @endif
                    </div>
                </div>
            </div>
        </div>    
    </section>
    
    <section>
        <div class="row">
            <div class="col-sm-6" style="margin-top:50px;">
                <div style="border:1px solid #ccc; padding:20px; border-radius:10px; background-color:#f5deb3;">
                    <div class="text-center">
                        {!! link_to_route("myResipes.get", "MINE", [], ["class" => "btn btn-lg btn-primary",  "style" => "width:300px; margin-top:30px; margin-bottom:20px; background-color:#ff4500; border-style: none; color: #ffffff;"]) !!} 
                        <p><img src="../Instant_Chef_img/scale-1209837_1920.jpg" alt="料理道具" style="width:300px; height:150px;  margin-top: 30px; background-color:#c0c0c0;"></p>     
                        <p style="margin-top:20px; margin-bottom:0; padding:0; color: #696969;">あなたがオーダーしたレシピを一覧から見ることができます</p>
                        <p style="margin:0; padding:0; color: #696969;">また、あなたがした過去の質問も見ることができます！</p>
                        <p style="margin:0; padding:0; color: #696969;">どんなレシピが出来上がったのか楽しみですね！</p>
                        <p style="margin:0; padding:0; color: #696969;">はやく料理してみましょう！</p>
                        
                        @if(Auth::check())
                            {!! link_to_route("myResipes.get", "オーダーしたレシピを見る", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff; border-style: none; width:300px; margin-top:40px; margin-bottom:50px;"]) !!}
                        @else
                            @include("commons.auth_check_welcome")
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top:50px; margin-bottom:50px;">
                <div style="border:1px solid #ccc; padding:20px; border-radius:10px; background-color:#f5deb3;">
                    <div class="text-center">
                        {!! link_to_route("recipeList.get", "RECIPES", [], ["class" => "btn btn-lg btn-primary",  "style" => "width:300px; margin-top:30px; margin-bottom:20px; background-color:#ff4500; border-style: none; color: #ffffff;"]) !!}
                        <p><img src="/Instant_Chef_img/platter-2009590_1920.jpg" alt="料理道具" style="width:300px; height:150px; margin-top: 30px; background-color:#c0c0c0;"></p>   
                        <p style="margin-top:20px; margin-bottom:0; padding:0; color: #696969;">もう献立は決まりましたか？</p>
                        <p style="margin:0; padding:0; color: #696969;">まだ決まってないんですか？</p>
                        <p style="margin:0; padding:0; color: #696969;">そんなお困りのあなたはレシピ一覧から探すのはいかが？？</p>
                        <p style="margin:0; padding:0; color: #696969;">気に入ったレシピがあればお気に入り登録を忘れずに！</p>
                        @if(Auth::check())
                            {!! link_to_route("recipeList.get", "レシピ一覧を見る", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-style: none; color: #ffffff; width:300px; margin-top:40px; margin-bottom:50px;"]) !!} 
                        @else
                            <p style="margin-top:20px; margin-bottom:0 ;padding:0; color: #ff0000;"><strong>ログインなしでご利用できます</strong></p>
                            {!! link_to_route("recipeList.get", "レシピ一覧を見る", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-style: none; color: #ffffff; width:300px; margin-top:20px; margin-bottom:50px;"]) !!} 
                        @endif
                    </div>
                </div>
            </div>
        </div>    
    </section>
@endsection