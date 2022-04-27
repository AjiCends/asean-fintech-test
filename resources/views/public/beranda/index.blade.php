@extends('public.layout.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
@endsection

@section('content')
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('storage/images/background.png') }}" class="d-block w-100" alt="carousel-1">
            </div>
        </div>
    </div>
    <div class="game-verse d-flex flex-warp align-items-center">
        <div class="px-3 mx-auto">
            <img class="img-fluid" src="{{ asset('storage/images/game-verse/candy.png') }}" alt="candy">
        </div>
        <div class="px-3 mx-auto">
            <img class="img-fluid" src="{{ asset('storage/images/game-verse/lemon-sky.png') }}" alt="lemon-sky">
        </div>
        <div class="px-3 mx-auto">
            <img class="img-fluid" src="{{ asset('storage/images/game-verse/jericverse.png') }}" alt="jericverse">
        </div>
        <div class="px-3 mx-auto">
            <img class="img-fluid" src="{{ asset('storage/images/game-verse/gameconomy.png') }}" alt="gameconomy">
        </div>
    </div>

    <div class="container-fluid frame-3 py-5">
        <div class="row">
            <div class="col-12 d-flex">
                <img class="logo mx-auto" src="{{ asset('storage/images/navbar-logo.png') }}" alt="logo">
            </div>
            <div class="row play-background">
                <div class="frame-item col-lg-4 col-md-12 col-12 text-white">
                    <h5 class="fw-bolder mb-4">INTO THE METAVERSE</h5>
                    <p class="mt-4">Earn, trade, stake, farm and swap your game assets the way you want. Welcome
                        to a
                        metaverse that lets you truly decide how you want to play.</p>
                </div>
                <div class="col-lg-4 col-md-12 col-12 d-flex">
                    <img class="img-play img-fluid mx-auto my-auto" src="{{ asset('storage/images/play-button.png') }}" alt="play-btn">
                </div>
                <div class="frame-item col-lg-4 col-md-12 col-12 text-white">
                    <p>This is for all the gamers out there no matter who you are, whether you're a newbie or a whale. It's
                        time
                        to game on your own terms. Welcome to Joy Games - Metaverse gaming by true game makers.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-5 frame-4 mt-5">
        <div class="px-4 mb-5">
            <h2 class="text-center mb-5">Upcoming Games</h2>
            <div class="d-flex mt-5">
                <p class="text-center text-white mx-auto">Joy Games aims to not just create a platform but also will play an
                    active role in the development and curation of
                    gaming content on the platform, the upkeep of the codebase, and the development of new exciting ways to
                    implement gamified finance into existing or new games, via a mixture of of inhouse development or
                    co-development
                    with our strategic partners, who are experienced and successful game development studios.</p>
            </div>
        </div>
        <div class="d-flex flex-wrap justify-content-evenly mt-5">
            <button class="btn cs-btn-lg mx-3 my-3">Adventure</button>
            <button class="btn cs-btn-lg mx-3 my-3">Arcade</button>
            <button class="btn cs-btn-lg mx-3 my-3">Race</button>
            <button class="btn cs-btn-lg mx-3 my-3">Open World</button>
            <button class="btn cs-btn-lg mx-3 my-3">RPG</button>
            <button class="btn cs-btn-lg mx-3 my-3">MMORPG</button>
            <button class="btn cs-btn-lg mx-3 my-3">FPS</button>
            <button class="btn cs-btn-lg mx-3 my-3">MULTIPLAYER</button>
        </div>
    </div>

    <div class="container-fluid px-5 frame-5 mt-5">
        <div class="d-flex flex-wrap justify-content-evenly">
            <div class="game-card my-3 position-relative">
                <img class="img-fluid" src="{{ asset('storage/images/game-card/image-57.png') }}"
                    alt="game-image">
                <div class="descriptions p-3 position-absolute">
                    <p class="text-white">Enter the world of Masketeers where brave heroes empowered by mysterious masks take a stand against
                        the inner demons of society. Soon you will be able to adorn yourself with exclusive NFT Costumes
                        that can empower your Masketeers as they unleash their attacks on the manifestations of negativity.
                    </p>
                </div>
                <div class="title p-3 w-100 position-absolute">
                    <h4 class="fw-bold text-white">Claw Stars</h4>
                </div>
            </div>

            <div class="game-card my-3 position-relative">
                <img class="img-fluid" src="{{ asset('storage/images/game-card/image-58.png') }}"
                    alt="game-image">
                <div class="descriptions p-3 position-absolute">
                    <p class="text-white">Enter the world of Masketeers where brave heroes empowered by mysterious masks take a stand against
                        the inner demons of society. Soon you will be able to adorn yourself with exclusive NFT Costumes
                        that can empower your Masketeers as they unleash their attacks on the manifestations of negativity.
                    </p>
                </div>
                <div class="title p-3 w-100 position-absolute">
                    <h4 class="fw-bold text-white">The Last</h4>
                </div>
            </div>

            <div class="game-card my-3 position-relative">
                <img class="img-fluid" src="{{ asset('storage/images/game-card/image-59.png') }}"
                    alt="game-image">
                <div class="descriptions p-3 position-absolute">
                    <p class="text-white">Enter the world of Masketeers where brave heroes empowered by mysterious masks take a stand against
                        the inner demons of society. Soon you will be able to adorn yourself with exclusive NFT Costumes
                        that can empower your Masketeers as they unleash their attacks on the manifestations of negativity.
                    </p>
                </div>
                <div class="title p-3 w-100 position-absolute">
                    <h4 class="fw-bold text-white">Moon Land</h4>
                </div>
            </div>

            <div class="game-card my-3 position-relative">
                <img class="img-fluid" src="{{ asset('storage/images/game-card/image-57.png') }}"
                    alt="game-image">
                <div class="descriptions p-3 position-absolute">
                    <p class="text-white">Enter the world of Masketeers where brave heroes empowered by mysterious masks take a stand against
                        the inner demons of society. Soon you will be able to adorn yourself with exclusive NFT Costumes
                        that can empower your Masketeers as they unleash their attacks on the manifestations of negativity.
                    </p>
                </div>
                <div class="title p-3 w-100 position-absolute">
                    <h4 class="fw-bold text-white">Claw Stars</h4>
                </div>
            </div>

            <div class="game-card my-3 position-relative">
                <img class="img-fluid" src="{{ asset('storage/images/game-card/image-58.png') }}"
                    alt="game-image">
                <div class="descriptions p-3 position-absolute">
                    <p class="text-white">Enter the world of Masketeers where brave heroes empowered by mysterious masks take a stand against
                        the inner demons of society. Soon you will be able to adorn yourself with exclusive NFT Costumes
                        that can empower your Masketeers as they unleash their attacks on the manifestations of negativity.
                    </p>
                </div>
                <div class="title p-3 w-100 position-absolute">
                    <h4 class="fw-bold text-white">The Last</h4>
                </div>
            </div>

            <div class="game-card my-3 position-relative">
                <img class="img-fluid" src="{{ asset('storage/images/game-card/image-59.png') }}"
                    alt="game-image">
                <div class="descriptions p-3 position-absolute">
                    <p class="text-white">Enter the world of Masketeers where brave heroes empowered by mysterious masks take a stand against
                        the inner demons of society. Soon you will be able to adorn yourself with exclusive NFT Costumes
                        that can empower your Masketeers as they unleash their attacks on the manifestations of negativity.
                    </p>
                </div>
                <div class="title p-3 w-100 position-absolute">
                    <h4 class="fw-bold text-white">Moon Land</h4>
                </div>
            </div>
        </div>
    </div>
@endsection
