@extends('partials.master')

@section('main')
    <div class="navbar">
        <nav class="navbar navbar-expand-lg body-tertiary">
            <div class="container-fluid">
                <div class="header-logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('/assets/logo.png') }}" style="height: 100%; width:100%; object-fit:contain"
                            alt="logo">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                About Us
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/">Overview</a></li>
                                <li><a class="dropdown-item" href="/">History</a></li>
                                <li><a class="dropdown-item" href="/message">Message From Chairman</a></li>
                                <li><a class="dropdown-item" href="/board">Board Members</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/confrence">Confrence And Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Weedings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Offers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Contact
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Booking
                            </a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
    </div>

    <section class="hero">

        <div class="hero-content">

           <h1 class="hero-title">
                Book Hotels Anywhere Anytime
           </h1>

           <h2 class="hero-subtitle">
              with bedanshi's oline hotel booking web you can get any information
           </h2>

           <button type="button" class="hero-button" onclick="location.href='#'">
                Search for Hotels &raquo;
           </button>

        </div>

    </section>



@endsection
