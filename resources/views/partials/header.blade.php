<?php
$navMenu =
            [
                [
                    "link" => "CHARACTERS",
                    "href" => "#",
                ],
                [
                    "link" => "COMICS",
                    "href" => "#",
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


<div class="container d-flex justify-content-between align-items-center py-3">
    <div>
        <img src={{asset("images/dc-logo.png")}} alt="">
    </div>

    {{-- <nav class="navbar">
        <ul class="navbar-nav myNav">
            <li class="nav-item">
                @foreach ($navMenu as $menuLink)
                <a class="nav-link position-relative" href="{{$menuLink['href']}}">
                    <h6 class="mb-0 myLink">{{$menuLink['link']}}</h6>
                </a>
                @endforeach
            </li>
        </ul>
    </nav> --}}
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