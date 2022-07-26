<?php
$dcComicLinks =
            [
                [
                    "link" => "Characters",
                ],
                [
                    "link" => "Comics",
                ],
                [
                    "link" => "Movies",
                ],
                [
                    "link" => "Tv",
                ],
                [
                    "link" => "Games",
                ],
                [
                    "link" => "Videos",
                ],
                [
                    "link" => "News",
                ],
];
$shopLinks =
            [
                [
                    "link" => "Shop DC",
                ],
                [
                    "link" => "Shop DC Collectibles",
                ],
];
$dcLinks =
            [
                [
                    "link" => "Terms Of Use",
                ],
                [
                    "link" => "Privacy policy (New)",
                ],
                [
                    "link" => "Ad Choices",
                ],
                [
                    "link" => "Advertising",
                ],
                [
                    "link" => "Jobs",
                ],
                [
                    "link" => "Subscriptions",
                ],
                [
                    "link" => "Talent Workshops",
                ],
                [
                    "link" => "CPSC Certificates",
                ],
                [
                    "link" => "Ratings",
                ],
                [
                    "link" => "Shop Help",
                ],
                [
                    "link" => "Contact Us",
                ],
];
$sitesLinks =
            [
                [
                    "link" => "DC",
                ],
                [
                    "link" => "MAD Magazine",
                ],
                [
                    "link" => "DC Kids",
                ],
                [
                    "link" => "DC Universe",
                ],
                [
                    "link" => "DC Power Visa",
                ],
];
?>
<div>
    <div class="container-fluid bgFooter">
        <div class="container myContainer">
            <div class="row pt-5">
                <div class="col-2 px-0 myCol">
                    <h5 class="text-white">DC COMICS</h5>
                    <ul class="list-unstyled">
                        @foreach ($dcComicLinks as $footerLink)
                        <li>
                            <a href="#" class="text-secondary text-decoration-none">
                                <small>{{$footerLink['link']}}</small>    
                            </a>
                        </li>
                        @endforeach
                    </ul>

                    <h5 class="text-white">SHOP</h5>
                    <ul class="list-unstyled">
                        @foreach ($shopLinks as $footerLink)
                        <li>
                            <a href="#" class="text-secondary text-decoration-none">
                                <small>{{$footerLink['link']}}</small>    
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-2 px-0 myCol">
                    <h5 class="text-white">DC</h5>
                    <ul class="list-unstyled">
                        @foreach ($dcLinks as $footerLink)
                        <li>
                            <a href="#" class="text-secondary text-decoration-none">
                                <small>{{$footerLink['link']}}</small>    
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-2 px-0 myCol">
                    <h5 class="text-white">SITES</h5>
                    <ul class="list-unstyled">
                        @foreach ($sitesLinks as $footerLink)
                        <li>
                            <a href="#" class="text-secondary text-decoration-none">
                                <small>{{$footerLink['link']}}</small>    
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <img src={{ asset("images/dc-logo-bg.png") }} alt="">
        </div>
    </div>
</div>

<div>
    <div class="conatiner-fluid bgBottomFooter">
        <div class="container d-flex justify-content-between align-items-center py-4">
            <div>
                <button type="button" class="myButton">SIGN-UP NOW!</button>
            </div>

            <div class="d-flex align-items-center gap-3">
                <div class="pe-2">
                    <h5 class="followColor mb-0">FOLLOW US</h5>
                </div>

                <div>
                    <img src="{{ asset('images/footer-facebook.png')}}" alt="">
                </div>
                <div>
                    <img src="{{ asset('images/footer-twitter.png')}}" alt="">
                </div>
                <div>
                    <img src="{{ asset('images/footer-youtube.png')}}" alt="">
                </div>
                <div>
                    <img src="{{ asset('images/footer-pinterest.png')}}" alt="">
                </div>
                <div>
                    <img src="{{ asset('images/footer-periscope.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<style scoped>
    .bgBottomFooter{
        background-color:#303030;
    }

    .myButton{
        background-color: #303030;
        border: 2px solid #0282f9;
        color: white;
        padding: 0.5rem 0.5rem;
    }

    .followColor{
        color: #1b69d9;
    }

    .bgFooter{
        background-image: url("/public/images/footer-bg.jpg");
        background-repeat: no-repeat;
        background-position: top center;
        background-size: cover;
    }

    .myContainer{
        height: 400px;
        position: relative;
        overflow: hidden;
    }

    .myContainer img{
        position: absolute;
        right: 0;
        top: -60px
    }

    .myCol{
        width: 160px !important; 
    }
</style>