@extends('layouts.app')

@section('content')
    
    @include('commons.mineSelect')
    
    
    <div>
        <img src="/Instant_Chef_img/scale-1209837_1920.jpg" alt="台所" style="width:100%; height:440px; margin: 0 auto 25px; background-color:#dcdcdc;">
    </div>
    
    <section>
        <p style="margin-top:5px; margin-bottom:0; padding:0; color: #696969;">このページでは、自分のオーダーに対して提供されたレシピ一覧を見ることができます</p>
        <p style="margin-top:0; margin-bottom:50px; padding:0; color: #696969;">レシピタイトルをクリックして、レシピを見てみましょう。</p>
    </section>
    
    <section>
        @if(count($recipes) > 0)
            <div class="row" id="top1738">
                <div class="col-sm-12">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th class="text-center" style="background-color:#f5deb3; border: 3px solid #ff4500;"><h1>PROVIDED RECIPES LIST</h1></th>
                        </tr>
                        @foreach($recipes as $recipe)
                            <tr>
                                <td style="border-left: 3px solid #ff4500; border-right: 3px solid #ff4500; border-bottom: 3px solid #ff4500;"><span style="font-size:20px;">{!! link_to_route("myRecipeListShow.get", "$recipe->title", ["id" => $recipe->id]); !!}</span></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <a href="#top1738" style="margin-bottom:50px;">Top Of Recipe List</a>
        @else
            <div class="row  offset-sm-3 col-sm-9">
                <p style="color: #ff0000; margin-bottom:50px; font-size:30px; padding-left:20px;"><strong>まだ回答されたレシピが1件もありません!!</strong></p>
            </div>
        @endif
    </section>
    
    <section>
        <div class="row">
            <div class="offset-sm-4 col-sm-4" style="margin-bottom:50px;">
                 {!! link_to_route("myOrderShow.get", "BACK", ["id" => $order->id], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff; width:100%;"]) !!} 
            </div> 
        </div>
    </section>
@endsection