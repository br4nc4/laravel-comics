@extends('layout.app')

@section('page_content')
<div>
    <div class="container-fluid comicsBg pb-1">
        <div class="container">
            <div class="pt-5 pb-3">
                <div class="row gy-5">
                    @foreach ($dcComic as $comic)
                        @include('partials.comicCard')
                    @endforeach
                </div>

                <div class="d-flex justify-content-center mt-5">
                    <button type="button" class="text-white myBlueButton">LOAD MORE</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid myBlueBg">
    <div class="container d-flex justify-content-between align-items-center py-5">
        <div>
            <img class="cardImgOne" src={{asset("images/buy-comics-digital-comics.png")}} alt="">
            <span class="text-white ps-2">DIGITAL COMICS</span>
        </div>
        <div>
            <img class="cardImgOne" src={{asset("images/buy-comics-merchandise.png")}} alt="">
            <span class="text-white ps-2">DC MERCHANDISE</span>
        </div>
        <div>
            <img class="cardImgOne" src={{asset("images/buy-comics-subscriptions.png")}} alt="">
            <span class="text-white ps-2">SUBSCRIPTION</span>
        </div>
        <div>
            <img class="cardImgTwo" src={{asset("images/buy-comics-shop-locator.png")}} alt="">
            <span class="text-white ps-2">COMIC SHOP LOCATOR</span>
        </div>
        <div>
            <img class="cardImgThree" src={{asset("images/buy-dc-power-visa.svg")}} alt="">
            <span class="text-white ps-2">DC POWER VISA</span>
        </div>
    </div>
</div>
@endsection