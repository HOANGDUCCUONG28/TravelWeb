<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>SHOP</title>
        <link href="/css/style.css" rel="stylesheet">
    </head>
    <body>     
        @extends('layouts.App')
        @section('content')
        <div class="flex-cart-main">   
            <!-- 左 購入商品情報 -->
            @php $total=0; @endphp
            <div class="flex-cart-detail1">
                @if (session()->has('cart_data'))
                    @foreach(session()->get('cart_data') as $i => $cart)
                        @php $total+=$cart['SessionProductPRICE']; @endphp
                    <div class="flex-container-cart">
                        <!-- 画像エリア -->
                        <div class="flex-item-cart-image">
                            <img src="{{asset('images/' . $cart['SessionProductIMGFILE1']  ,false)}}" width="400px" height="auto"  />
                        </div>  
                        <!-- 文字情報エリア -->
                        <div class="flex-item-cart-string" >
                            <p>{{$cart['SessionProductNAME']}}</p>
                            <p>
                                <span class="cartPrice">@php echo "¥" . number_format($cart['SessionProductPRICE']); @endphp</span>
                                <span>送料別</span> &nbsp;&nbsp; 
                                <a href="{{ route('delCartDetail',['detailID'=>$i],false) }}">
                                    <span class="delcart">削除</span>
                                </a>
                            </p>
                        </div>      
                    </div>
                    @endforeach
                @endif
            </div>
            <!-- 右 金額合計情報 -->
            <div class="flex-cart-detail2">
                <div class="buttonouter">
                    <a href="{{ route('ProductList',[],false) }}"><p class="buttoninner">ツアー 一覧へ</p></a>
                </div>    
                <div class="buttonouter">
                    <a href="{{ route('checkout',[],false) }}"><p class="buttoninner">購入手続きへ</p></a>
                </div> 
                <p class="buttonouter">
                    <span class="cartTotalTitle">小計</span>
                    <span class="cartTotalPrice">@php echo "¥" . number_format($total); @endphp</span>
                    <a href="{{ route('delCartAll',[],false) }}"><p class="delcart">全て削除する</p></a>
                </p>   
            </div>
        </div>
        @endsection
    </body>
</html>