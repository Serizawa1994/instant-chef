@extends('layouts.app')

<link href="{{ secure_asset('/css/commons/list.css') }}" rel="stylesheet">

@section('content')
    
    @include('commons.provideSelect')
    
    <section class="top">
        <div>
            <img src="../Instant_Chef_img/pasta-1181189_1280.jpg" alt="台所" class="img">
        </div>
    </section>
    
    <section class="explain">
        <p>このページでは、皆様から寄せられたすべてのオーダーを見ることができます。</p>
        <p>要望に応えられそうなオーダーがあればタイトルをクリックしてレシピを提供してみましょう。</p>
    </section>
    
    <section class="table">
        @if(count($all_order) > 0)
            <div class="row" id="top1738">
                <div class="col-sm-12">
                    <table class="table table-striped table-bordered">
                        <tr class="title">
                            <th class="text-center"><h1>ORDER LIST</h1></th>
                        </tr>
                        @if(!$plural_my_order == null)
                            @foreach($all_order as $order)
                                @foreach($plural_my_order as $myOrder)
                                    @if(!$order->id == $myOrder->id)
                                        <tr>
                                            <td class="item"><span>{!! link_to_route("allOrderShow.get", "$order->outline", ["id" => $order->id]); !!}</span></td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @else
                            @foreach($all_order as $order)
                                <tr>
                                    <td class="item"><span>{!! link_to_route("allOrderShow.get", "$order->outline", ["id" => $order->id]); !!}</span></td>
                                </tr>
                            @endforeach
                        @endif    
                    </table>
                </div>
            </div>
            <a href="#top1738">Top Of All Order List</a>
        @else
            <div class="not_anything">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <p><strong>まだ ORDER が1件もありません!!</strong></p>
                            {!! link_to_route("orderInputForm.get", "ORDER NOW !", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff;  width:75%; margin-bottom:50px;"]) !!}
                        </div>
                    </div>
                </div>
            </div>
        @endif    
    </section>
    
@endsection