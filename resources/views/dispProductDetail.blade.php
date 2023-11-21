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
            <div class="flex-container-detail">
                @foreach($resultDetail as $row)
                    <div class="pic-text">
                        <div class="flex-item-detail">
                            <img class="detail-pic-main" src="{{asset('images/' . $row->imgfile1 ,false)}}" />
                        </div>
                        <div class="text-intro">
                            <div class="intro">
                                <p class="item-title">{{$row->name}}</p> 
                                <p><span class="item-price-detail">¥ {{number_format($row->price)}}</span><span class="item-tax-detail">(税込)送料込み</span></p>
                                <div class="flex-button-container">
                                    <div class="buttonouter">
                                        <a href="{{ route('addCart', ['detailID'=>$row->id],false) }}"><p class="buttoninner">ツアーをかごへ追加</p></a>
                                    </div>
                                    <div class="buttonouter">
                                        <a href="{{ route('checkout',[],false) }}" > 
                                            <p class="buttoninner">購入手続きへ</p>
                                        </a>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="flex-item-detail">
                        <div class="flex-item-detail text-detail">
                            <div class=" text-detail-title">
                                <h2>ツアーの説明</h2>
                            </div>
                            <div class="text-detail-infor" style="width: 70%; align-self: center">
                                <p>{{$row->details}}</p>
                            </div>
                        </div>
                        <div class="flex-item-detail text-table">
                            <div>
                                <h2>ツアーの情報</h2>
                            </div>
                            <table style="width: 70%; align-self: center">
                                <tr>
                                    <td class="table-title-detail" rowspan=3>カテゴリ</td>
                                    <td>{{$row->cate1}}</td>
                                </tr>
                                <tr>
                                    <td>{{$row->cate2}}</td>
                                </tr>
                                <tr>
                                    <td>{{$row->cate3}}</td>
                                </tr>
                                <tr>
                                    <td class="table-title-detail">ツアーの日数</td>
                                    <td>{{$row->size}}</td>
                                </tr>
                                <tr>
                                    <td class="table-title-detail">ブランド</td>
                                    <td>{{$row->tiiki}}</td>
                                </tr>
                                <tr>
                                    <td class="table-title-detail">ツアーの状態</td>
                                    <td>{{$row->status}}</td>
                                </tr>
                                <tr>
                                    <td class="table-title-detail">お支払方法</td>
                                    <td>{{$row->haisou}}</td>
                                </tr>
                                <tr>
                                    <td class="table-title-detail">配送元の地域</td>
                                    <td>{{$row->tiiki}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>     
        @endsection

    </body>
</html>

