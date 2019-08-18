<style>
    .span{
        color: #ff0000;
    }
</style>

@extends('layouts.app')

@section('content')

    @include('commons.provideSelect')

    <div>
        <img src="../Instant_Chef_img/pasta-1181189_1280.jpg" alt="台所" style="width:100%; height:440px; margin: 0 auto 25px; background-color:#dcdcdc;">
    </div>
    
    <section>
        <div class="text-center">
            <p><h2  style="margin-top:80px; margin-bottom:80px; border: 3px solid #ff4500; border-radius:3px;"><a href="#order1543" style="color:#ff4500; text-decoration:none;">PROVIDE</a></h2></p>
        </div>
    </section>
    
    <section>
        <a href="#confirm050" style="margin-bottom:50px;">To Page Buttom</a>
        {!! Form::open(["route" => ["recipeInputConfirm.post", $order->id]]) !!}
            <div class="row" id="order1543">
                <div class="col-sm-12">
                    <div class="form-group" id="title047">
                        <p style="border: 3px solid #ff4500; border-radius:3px; background-color:#ff4500; color:#ffffff;"><h2 style="background-color:#f5deb3; border-radius:3px; padding-left:10px;">{!! Form::label('title', 'Title') !!}</h2></p>
                        <p>料理名を入力してください<span style="color: #ff0000; padding-left:10px;"><必須></span></p>
                        {!! Form::text('title', old('title'), ['class' => 'form-control',
                        'placeholder' => "（例）誰でもカンタン！絶品豚汁"]) !!}
                    </div>
                    
                    <div class="form-group">
                        <p style="border: 3px solid #ff4500; border-radius:3px; background-color:#ff4500; color:#ffffff;"><h2 style="background-color:#f5deb3; border-radius:3px; padding-left:10px;">{!! Form::label('portion', 'Portion') !!}</h2></p>
                        <p>何人前の料理か入力してください<span style="color: #ff0000; padding-left:10px;"><必須></span></p>
                        {!! Form::text('portion', old('portion'), ['class' => 'form-control',
                        'placeholder' => "（例）１～２人前分"]) !!}
                    </div>
        
                    <div class="form-group">
                        <p style=" border: 3px solid #ff4500; border-radius:3px; background-color:#ff4500; color:#ffffff;"><h2 style="background-color:#f5deb3; border-radius:3px; padding-left:10px;">{!! Form::label('ingredient', 'Ingredient') !!}</h2></p>
                        <p>使用する材料を入力してください。その際、要望に沿った材料が含まれているかを確認してください<span style="color: #ff0000;  padding-left:10px;"><必須></span></p>
                        {!! Form::textarea('ingredient', old('ingredient'), ['class' => 'form-control',
                        'placeholder' => "（例）ゴボウ・・・1本　/　豚バラ肉・・・150g / 大根・・・1/2本 / 人参・・・1本"]) !!}
                    </div>
        
                    <div class="form-group">
                        <p style="border: 3px solid #ff4500; border-radius:3px; background-color:#ff4500; color:#ffffff;"><h2 style="background-color:#f5deb3; border-radius:3px; padding-left:10px;">{!! Form::label('how_to_1', 'HOW  TO  COOK') !!}</h2></p>
                        <p>料理の作り方を入力してください。最大12個まで STEP を分けられます</p>
                        <p>いまいちどオーダーした人の Capability に合っているか確認してください</p>
                        
                        <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 1<span style="color: #ff0000; font-size:15px; padding-left:10px;"><必須></span></p>
                        {!! Form::textarea('how_to_1',old('how_to_1'),  ['class' => 'form-control',
                        'placeholder' => "（例）最初にゴボウをゴマ油で炒め、焦げ目が少しついたら豚バラ肉を入れて一緒に炒める"]) !!}
                        
                        <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 2<span style="font-size:15px; padding-left:10px;"><任意></span></p>
                        {!! Form::textarea('how_to_2',old('how_to_2'),  ['class' => 'form-control',
                        'placeholder' => "（例）次に豚バラ肉とゴボウがしっかり炒めたら、塩コショウを振る"]) !!}
                        
                        <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 3<span style="font-size:15px; padding-left:10px;"><任意></span></p>
                        {!! Form::textarea('how_to_3',old('how_to_3'),  ['class' => 'form-control',
                        'placeholder' => "（例）次に大根を炒め、しっかり炒めたら人参を加えて炒める"]) !!}
                        
                        <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 4<span style="font-size:15px; padding-left:10px;"><任意></span></p>
                        {!! Form::textarea('how_to_4',old('how_to_4'),  ['class' => 'form-control',
                        'placeholder' => "（例）"]) !!}
                        
                        <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 5<span style="font-size:15px; padding-left:10px;"><任意></span></p>
                        {!! Form::textarea('how_to_5',old('how_to_5'),  ['class' => 'form-control',
                        'placeholder' => "（例）"]) !!}
                        
                        <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 6<span style="font-size:15px; padding-left:10px;"><任意></span></p>
                        {!! Form::textarea('how_to_6',old('how_to_6'),  ['class' => 'form-control',
                        'placeholder' => "（例）"]) !!}
                        
                        <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 7<span style="font-size:15px; padding-left:10px;"><任意></span></p>
                        {!! Form::textarea('how_to_7',old('how_to_7'),  ['class' => 'form-control',
                        'placeholder' => "（例）"]) !!}
                        
                        <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 8<span style="font-size:15px; padding-left:10px;"><任意></span></p>
                        {!! Form::textarea('how_to_8',old('how_to_8'),  ['class' => 'form-control',
                        'placeholder' => "（例）"]) !!}
                        
                        <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 9<span style="font-size:15px; padding-left:10px;"><任意></span></p>
                        {!! Form::textarea('how_to_9',old('how_to_9'),  ['class' => 'form-control',
                        'placeholder' => "（例）"]) !!}
                        
                        <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 10<span style="font-size:15px; padding-left:10px;"><任意></span></p>
                        {!! Form::textarea('how_to_10',old('how_to_10'),  ['class' => 'form-control',
                        'placeholder' => "（例）"]) !!}
                        
                        <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 11<span style="font-size:15px; padding-left:10px;"><任意></span></p>
                        {!! Form::textarea('how_to_11',old('how_to_11'),  ['class' => 'form-control',
                        'placeholder' => "（例）"]) !!}
                        
                        <p style="background-color:#ffe4c4; font-size:30px; padding-left:10px; margin-top:30px;">STEP 12<span style="font-size:15px; padding-left:10px;"><任意></span></p>
                        {!! Form::textarea('how_to_12',old('how_to_12'),  ['class' => 'form-control',
                        'placeholder' => "（例）"]) !!}
                    </div>
        
                    <div class="form-group">
                        <p style="border: 3px solid #ff4500; border-radius:3px; background-color:#ff4500; color:#ffffff;"><h2 style="background-color:#f5deb3; border-radius:3px; padding-left:10px;">{!! Form::label('one_point', 'One Point Advice') !!}</h2></p>
                        <p>レシピに関してワンポインタドバイスがあれば入力してください<span><任意></span></p>
                        {!! Form::textarea('one_point', old('one_point'),['class' => 'form-control',
                        'placeholder' => "（例）コンニャクはあらかじめ塩茹でしておくと臭みが取れます！"]) !!}
                    </div>
                </div>
            </div>
            <a href="#title047" style="margin-bottom:50px;">Return To "Title Input Form"</a>
            <div class="row">
                <div class="offset-sm-4 col-sm-4" id="confirm050">
                    {!! Form::submit('CONFIRM', ['class' => 'btn btn-primary btn-block', "style" => "background-color:#ff4500; border-style:none; color:#ffffff; margin-bottom:50px;"]) !!}
                </div> 
            </div>
        {!! Form::close() !!} 
    </section>
    
@endsection