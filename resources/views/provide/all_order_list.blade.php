@extends('layouts.app')

@section('content')
    
    @include('commons.provideSelect')
    
    
    <div>
        <img src="../Instant_Chef_img/pasta-1181189_1280.jpg" alt="台所" style="width:100%; height:440px; margin: 0 auto 25px; background-color:#dcdcdc;">
    </div>
    
    <section>
        <p style="margin-top:5px; margin-bottom:0; padding:0; color: #696969;">このページでは、皆様から寄せられたすべてのオーダーを見ることができます。</p>
        <p style="margin-top:0; margin-bottom:50px; padding:0; color: #696969;">要望に応えられそうなオーダーがあればタイトルをクリックしてレシピを提供してみましょう。</p>
    </section>
    
    
    @if(count($all_order) > 0)
        <div class="row" id="top1738">
            <div class="col-sm-12">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th class="text-center" colspan="2" style="background-color:#f5deb3; border: 3px solid #ff4500;"><h1>ORDER LIST</h1></th>
                    </tr>
                    @if(!$plural_my_order == null)
                        @foreach($all_order as $order)
                            @foreach($plural_my_order as $myOrder)
                                @if(!$order->id == $myOrder->id)
                                    <tr style="border-left: 3px solid #ff4500; border-right: 3px solid #ff4500; border-bottom: 3px solid #ff4500;">
                                        <td style="border-left: 3px solid #ff4500; border-right: 3px solid #ff4500; border-bottom: 3px solid #ff4500;"><span style="font-size:20px;">{!! link_to_route("allOrderShow.get", "$order->outline", ["id" => $order->id]); !!}</span></td>
                                    </tr>
                                @endif
                            @endforeach
                        @endforeach
                    @else
                        @foreach($all_order as $order)
                            <tr style="border-left: 3px solid #ff4500; border-right: 3px solid #ff4500; border-bottom: 3px solid #ff4500;">
                                <td style="border-left: 3px solid #ff4500; border-right: 3px solid #ff4500; border-bottom: 3px solid #ff4500;"><span style="font-size:20px;">{!! link_to_route("allOrderShow.get", "$order->outline", ["id" => $order->id]); !!}</span></td>
                            </tr>
                        @endforeach
                    @endif    
                </table>
            </div>
        </div>
        <a href="#top1738" style="margin-bottom:50px;">Top Of All Order List</a>
    @else
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <p style="color: #ff0000; margin-bottom:50px; font-size:30px"><strong>まだ ORDER が1件もありません!!</strong></p>
                    {!! link_to_route("orderInputForm.get", "ORDER NOW !", [], ["class" => "btn btn-lg btn-primary", "style" => "background-color: #ff4500; border-color: #ffffff; color: #ffffff;  width:75%; margin-bottom:50px;"]) !!}
                </div>
            </div>
        </div>
    @endif    
    
@endsection