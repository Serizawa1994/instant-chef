@extends('layouts.app')

<link href="{{ secure_asset('/css/commons/show.css') }}" rel="stylesheet">

@section('content')

    @include('commons.orderSelect')

    <div class="top">
        <img src="../Instant_Chef_img/order.jpg" alt="台所" class="img">
    </div>
    
    <section class="explain">
        <p>このページでは、好きな料理のジャンル・材料・調味料・アレルギーなどを入力して、レシピの作成を依頼することができます。</p>
        <p>より詳細に好みを入力することで、より自分に合ったレシピを手に入れることができるかもしれません。</p>
        <p>ただし、回答に時間がかかったり、回答が来なかったりと必ずしもご要望にお応えできない可能性がありますのでご了承ください。</p>
        <p>料理に慣れてきたら、次はレシピを作成する側に挑戦してみてはいかがですか。</p>
    </section>
    
    <section class="buttom">
        <div class="text-center">
            <p><h2 class="buttomName"><a href="#order1543">ORDER</a></h2></p>
        </div>
    </section>
    
    <section  class="show">
        {!! Form::open(['route' => 'orderInputConfirm.post']) !!}
            <div class="row" id="order1543">
                <div class="col-sm-12">
                    <div class="form-group">
                        <p class="item"><h2>{!! Form::label('capability', 'Capability') !!}</h2></p>
                        あなたの料理の実力をおおよそでいいので入力してください。レシピ作成の参考になります。
                        {!! Form::textarea('capability', old('capability'), ['class' => 'form-control',
                        'placeholder' => "（例）基本的な料理は作れるが、難しい料理はまだできない"]) !!}
                    </div>
        
                    <div class="form-group">
                        <p class="item"><h2>{!! Form::label('ingredient', 'Ingredient') !!}</h2></p>
                        料理に使いたい材料を入力してください。
                        {!! Form::textarea('ingredient', old('ingredient'), ['class' => 'form-control',
                        'placeholder' => "（例）冷蔵庫に残っている玉ねぎ"]) !!}
                    </div>
        
                    <div class="form-group">
                        <p class="item"><h2>{!! Form::label('outline', 'Outline') !!}</h2></p>
                        レシピに対する要望の概要を入力してください。オーダー時のタイトルになります。
                        {!! Form::textarea('outline',old('outline'),  ['class' => 'form-control',
                        'placeholder' => "（例）簡単にできる中華料理が食べたい"]) !!}
                    </div>
        
                    <div class="form-group">
                        <p class="item"><h2>{!! Form::label('details', 'Detail') !!}</h2></p>
                        レシピに対する要望の詳細を入力してください。
                        {!! Form::textarea('details', old('details'),['class' => 'form-control',
                        'placeholder' => "（例）小麦粉アレルギー・フライパンだけしか持っていない"]) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="offset-sm-4 col-sm-4">
                    {!! Form::submit('CONFIRM', ['class' => 'btn btn-primary btn-block', "style" => "background-color:#ff4500; border-style:none; color:#ffffff; margin-bottom:50px;"]) !!}
                </div> 
            </div>
        {!! Form::close() !!} 
    </section>
    
@endsection