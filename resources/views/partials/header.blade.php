<?php
$navMenu =
            [
                [
                    "link" => "CHARACTERS",
                    "href" => "#",
                ],
                [
                    "link" => "COMICS",
                    "href" => route('comics'),
                ],
                [
                    "link" => "MOVIES",
                    "href" => "#",
                ],
                [
                    "link" => "TV",
                    "href" => "#",
                ],
                [
                    "link" => "GAMES",
                    "href" => "#",
                ],
                [
                    "link" => "COLLECTBLES",
                    "href" => "#",
                ],
                [
                    "link" => "VIDEOS",
                    "href" => "#",
                ],
                [
                    "link" => "FANS",
                    "href" => "#",
                ],
                [
                    "link" => "NEWS",
                    "href" => "#",
                ],
                [
                    "link" => "SHOP",
                    "href" => "#",
                ],
            ]
?>
<header>
    <div class="topHeader">
        <div class="container d-flex justify-content-end align-items-center myGap">
            <small class="text-white mySmall">DC POWER VISA</small>
            <small class="text-white mySmall">ADDITIONAL DC SITES</small>
        </div>
    </div>

    <div class="container d-flex justify-content-between align-items-center py-3">
        <div>
            <img src={{asset("images/dc-logo.png")}} alt="">
        </div>
    
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav myNav">
                        @foreach($navMenu as $menuLink)
                        <li class="nav-item">
                            <a class="nav-link position-relative" href="{{$menuLink['href']}}">
                                <h6 class="mb-0 myLink">{{$menuLink['link']}}</h6>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div>
        <img class="myImg" src={{asset("images/jumbotron.jpg")}} alt="">
    </div>
</header>