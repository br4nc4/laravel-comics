@extends('layout.app')

@section('page_title', $detailsComic['title'] . " - Deatails")

@section('page_content')
    <div class="pb-3">
        <div class="blueTopSection">
            <img style="margin-top: -240px; margin-left: 390px;" src="{{ $detailsComic['thumb']}}" alt="">
        </div>
    </div>

<div class="detailsContainer pb-5">
    {{-- PARTE SUPERIORE DEI DETTAGLI --}}
    <div class="d-flex justify-content-center mt-5">
        <div class="d-flex gap-5">
            {{-- BLOCCO DI SINISTRA --}}
            <div style="max-width: 600px">
                <div>
                    <h3 class="detailTitle text-uppercase">{{$detailsComic['title']}}</h3>
                </div>

                <div class="d-flex bgPrice border border-secondary">
                    <div class="d-flex justify-content-between align-items-center border-end border-secondary gapPrice py-2 ps-3">
                        <div class="pe-5">
                            <p style="color: #9df596" class="mb-0">U.S. Price: <span class="text-white">{{$detailsComic['price']}}</span></p>
                        </div>
                        
                        <div class="ps-5 pe-3">
                            <h6 class="mb-0" style="color: #9df596">AVAILABLE</h6>
                        </div>
                    </div>

                    <div class="m-auto">
                        <span class="text-white">Check Availability</span>
                    </div>
                </div>
                {{-- DESCRIZIONE --}}
                <div>
                    <small class="mb-0 text-muted fw-bold">{{$detailsComic['description']}}</small>
                </div>
            </div>

            {{-- BLOCCO DI DESTRA --}}
            <div>
                <div class="d-flex justify-content-end">
                    <h6 style="margin-top: -22px" class="text-secondary fw-bold mb-0">ADVERTISEMNT</h6>
                </div>

                <div>
                    <img class="adImg" src={{asset("images/adv.jpg")}} alt="">
                </div>
            </div>
        </div>
    </div>
</div>

{{-- PARTE INFERIORE DEI DETTAGLI --}}
<div class="detailsBg border-top pb-5">
    <div class="detailsContainer">
        <div class="row">
            <div class="col-6">
                <div>
                    <h5 class="detailTitle">Talent</h5>
                </div>

                <div class="row border-top">
                    <div class="col-2">
                        <small>Art By:</small>
                    </div>

                    <div class="col-10">
                        @foreach ($detailsComic['artists'] as $artist)
                        <small class="fw-bold" style="color: #18b2e0">{{$artist}}</small>
                        @endforeach
                    </div>
                </div>

                <div class="row border-top border-bottom">
                    <div class="col-2">
                        <small>Written By:</small>
                    </div>

                    <div class="col-10">
                        @foreach ($detailsComic['writers'] as $writer)
                        <small class="fw-bold" style="color: #18b2e0">{{$writer}}</small>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div>
                    <h5 class="detailTitle">Specs</h5>
                </div>

                <div class="row border-top">
                    <div class="col-4">
                        <small>Series:</small>
                    </div>

                    <div class="col-8">
                        <h6 style="color: #18b2e0" class="mb-0 text-uppercase">{{$detailsComic['series']}}</h6>
                    </div>
                </div>

                <div class="row border-top">
                    <div class="col-4">
                        <small>U.S. Price:</small>
                    </div>

                    <div class="col-8">
                        <small>{{$detailsComic['price']}}</small>
                    </div>
                </div>

                <div class="row border-top border-bottom">
                    <div class="col-4">
                        <small>On Sale Date:</small>
                    </div>

                    <div class="col-8">
                        <small>{{$detailsComic['sale_date']}}</small>
                    </div>
                </div>
            </div>
        </div>

    </div>    
</div>
@endsection