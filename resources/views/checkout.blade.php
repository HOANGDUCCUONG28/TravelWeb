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
    <div class="guess-container">
        <div class="guess">
            <div class="">
                <form class="" name="" method="post" action="#">
                    <div class="">
                        <div class="">
                            <h4 class="mb-3">お客様</h4>
                            <div class="row">
                                <div class="">
                                    <label for="">名前</label>
                                    <input type="text" class="form-control" name="" id="" value=""
                                        readonly="">
                                </div>
                                <div class="">
                                    <label for="">性別</label>
                                    <input type="text" class="form-control" name="" id="" value=""
                                        readonly="">
                                </div>
                                <div class="">
                                    <label for="">住所</label>
                                    <input type="text" class="form-control" name="" id="" value=""
                                        readonly="">
                                </div>
                                <div class="">
                                    <label for="">電話番号</label>
                                    <input type="text" class="form-control" name="" id="" value=""
                                        readonly="">
                                </div>
                                <div class="">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" name="" id="" value=""
                                        readonly="">
                                </div>
                                <div class="">
                                    <label for="">生年月日</label>
                                    <input type="text" class="form-control" name="" id=""
                                        value="" readonly="">
                                </div>
                            </div>
                            <h4 class="">決済方法</h4>
                            <div class="">
                                <div class="">
                                    <input id="" name="" type="radio" class=""
                                        required="" value="1">
                                    <label class="custom-control-label" for="">コンビニエンスストア</label>
                                </div>
                                <div class="">
                                    <input id="" name="" type="radio" class=""
                                        required="" value="2">
                                    <label class="custom-control-label" for="">クレジットカード</label>
                                </div>
                                <div class="">
                                    <input id="" name="" type="radio" class=""
                                        required="" value="3">
                                    <label class="" for="">Ship COD</label>
                                </div>
                            </div>
                            <hr class="">
                            
                            <button class="buttoninner" type="submit" name="">購入</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="payment">
            <div class="payment-inner">
                @php $total=0; @endphp
                <!-- 右 金額合計情報 -->
            <div class="">
                <div class="">
                    <a href="{{ route('ProductList',[],false) }}"><p class="">ツアー数</p></a>
                </div>    
                <div class="">
                    <a href="{{ route('checkout',[],false) }}"><p class=""></p></a>
                </div> 
                <p class="">
                    <span class="">小計</span>
                    <span class="">@php echo "¥" . number_format($total); @endphp</span>
                    <a href="{{ route('delCartAll',[],false) }}"><p class="">全て削除する</p></a>
                </p>   
            </div>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>