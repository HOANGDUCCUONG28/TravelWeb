<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>SHOP</title>
    <link href="/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.x.x/css/swiper.min.css">
    

</head>

<body>
    @extends('layouts.App')
    @section('content')
        <header>
            <div class="main-picture"></div>
            {{-- start swiper------------------------------------------------------------------------ --}}
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background: url('{{ asset('images/1-001.png') }}')"></div>
                    <div class="swiper-slide" style="background: url('{{ asset('images/2-001.png') }}')"></div>
                    <div class="swiper-slide" style="background: url('{{ asset('images/3-001.png') }}')"></div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-scrollbar"></div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.x.x/js/swiper.min.js"></script>
            <script>
                var mySwiper = new Swiper ('.swiper-container', {
    // Các Parameters
                    direction: 'vertical',
                    loop: true,
                    effect: "fade",
                    speed: 4000,
                    autoplay: {
                        delay: 1000
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                        type: 'bullets',
                    }
                });
            </script>

            {{-- end swiper------------------------------------------------------------------------------ --}}
        </header>

        <main role="main">
            <div class="flex-container">
                @foreach ($result as $value)
                    <div class="flex-item">
                        <div class="img-price-container">
                            <a href="{{ route('ProductDetail', ['detailID' => $value->id], false) }}">
                                <img class="item-img" src="{{ asset('images/' . $value->imgfile1, false) }}" />
                                <p class="item-price"> 価格 ¥{{ number_format($value->price) }}</p>
                                <p class="item-nissu">観光日数 {{ $value->nissu }} 日</p>
                                <p class="item-yousai"> <button type="button" class="btn btn-danger">詳細を見る</button></p>
                            </a>
                        </div>
                        <p>{{ $value->name }}</p>
                    </div>
                @endforeach
            </div>
        </main>
    @endsection
</body>

</html>
