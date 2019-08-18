<style>
    .p{
        color: #696969;
    }
</style>

@extends('layouts.app')

@section('content')

    @include('commons.orderSelect')

    <div>
        <img src="../Instant_Chef_img/order.jpg" alt="台所" style="width:100%; height:440px; margin: 0 auto 25px; background-color:#dcdcdc;">
    </div>
    
    <section>
        <p style="margin-top:5px; margin-bottom:0; padding:0; color: #696969;">このページでは、好きな料理のジャンル・材料・調味料・アレルギーなどを入力して、レシピの作成を依頼することができます。</p>
        <p style="margin:0; padding:0; color: #696969;">より詳細に好みを入力することで、より自分に合ったレシピを手に入れることができるかもしれません。</p>
        <p style="margin:0; padding:0; color: #696969;">ただし、回答に時間がかかったり、回答が来なかったりと必ずしもご要望にお応えできない可能性がありますのでご了承ください。</p>
        <p style="margin:0; padding:0; color: #696969;">料理に慣れてきたら、次はレシピを作成する側に挑戦してみてはいかがですか。</p>
    </section>
    
    <section>
        <div class="text-center">
            <p><h2  style="margin-top:80px; margin-bottom:80px; border: 3px solid #ff4500; border-radius:3px;"><a href="#order1543" style="color:#ff4500; text-decoration:none;">ORDER</a></h2></p>
        </div>
    </section>
    
    <section>
        {!! Form::open(['route' => 'orderInputConfirm.post']) !!}
            <div class="row" id="order1543">
                <div class="col-sm-12">
                    <div class="form-group">
                        <p style="border: 3px solid #ff4500; border-radius:3px; background-color:#ff4500; color:#ffffff;"><h2 style="background-color:#f5deb3; border-radius:3px; padding-left:10px;">{!! Form::label('capability', 'Capability') !!}</h2></p>
                        <p>あなたの料理の実力をおおよそでいいので入力してください。レシピ作成の参考になります。</p>
                        {!! Form::textarea('capability', old('capability'), ['class' => 'form-control',
                        'placeholder' => "（例）基本的な料理は作れるが、難しい料理はまだできない"]) !!}
                    </div>
        
                    <div class="form-group">
                        <p style=" border: 3px solid #ff4500; border-radius:3px; background-color:#ff4500; color:#ffffff;"><h2 style="background-color:#f5deb3; border-radius:3px; padding-left:10px;">{!! Form::label('ingredient', 'Ingredient') !!}</h2></p>
                        <p>料理に使いたい材料を入力してください。</p>
                        {!! Form::textarea('ingredient', old('ingredient'), ['class' => 'form-control',
                        'placeholder' => "（例）冷蔵庫に残っている玉ねぎ"]) !!}
                    </div>
        
                    <div class="form-group">
                        <p style="border: 3px solid #ff4500; border-radius:3px; background-color:#ff4500; color:#ffffff;"><h2 style="background-color:#f5deb3; border-radius:3px; padding-left:10px;">{!! Form::label('outline', 'Outline') !!}</h2></p>
                        <p>レシピに対する要望の概要を入力してください。オーダー時のタイトルになります。</p>
                        {!! Form::textarea('outline',old('outline'),  ['class' => 'form-control',
                        'placeholder' => "（例）簡単にできる中華料理が食べたい"]) !!}
                    </div>
        
                    <div class="form-group">
                        <p style="border: 3px solid #ff4500; border-radius:3px; background-color:#ff4500; color:#ffffff;"><h2 style="background-color:#f5deb3; border-radius:3px; padding-left:10px;">{!! Form::label('details', 'Detail') !!}</h2></p>
                        <p>レシピに対する要望の詳細を入力してください。</p>
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