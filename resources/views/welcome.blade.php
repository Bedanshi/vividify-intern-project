@include('partials.header')

@section('main')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="box">
        <h2 style="text-align: center !important;color:#d44fbc">Book Online:</h2>
        <form method="POST" action="/bookings/store" enctype="multipart/form-data">
            @csrf
            <div class="content">

                <div class="dropdown">

                    <label for="hotel">Book A Hotel:</label>
                    <span>
                        <select class="form-control" data-meta="0" id="hotel" name="hotel"
                            aria-labelledby="dropdownMenuButton">
                            <option value="" disabled selected>Select Hotel</option>
                            <option value="bedu's Hospitality">bedu's Hospitality</option>
                            <option value="Sidhartha Hospitality">Sidhartha Hospitality</option>
                            <option value="Yak an dyeti">Yak an dyeti</option>
                        </select>
                    </span>

                </div>

                <div class="check">
                    <label for="check_in">Check In:</label>
                    <input type="date" id="check_in" name="check_in" required>
                </div>

                <div class="check">
                    <label for="check_out">Check Out:</label>
                    <input type="date" id="check_out" name="check_out" required>
                </div>

                <div class="adult">
                    <label for="adult">Adult:</label>
                    <span>
                        <select class="form-control" data-meta="0" id="adult" name="adult"
                            aria-labelledby="dropdownMenuButton" required>
                            <option value="" disabled selected>Adult count</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </span>
                </div>

                <div class="children">
                    <label for="child">Children:</label>
                    <span>
                        <select class="form-control" data-meta="0" id="child" name="child"
                            aria-labelledby="dropdownMenuButton" required>
                            <option value="" disabled selected>Children Count</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </span>
                </div>

                <button type="submit" class="btn btn-dark" style="background-color: #474e5d">Book Now</button>
            </div>
        </form>
    </div>
    <div class="bimg">
        <div class="containeer">
            <div class="image">
                <img src="{{ asset('/assets/12.jpg') }}" style="margin-left: 10px;">
            </div>
            <div class="text">
                <h1>Nepal’s finest hotel
                </h1>
                <p style="color: black">Yak and Yeti is a heritage hotel located in Durbar Marg, the thriving city center of
                    Kathmandu Valley, in
                    a
                    prime location that is minutes walking distance from the former Royal Palace. Durbar marg is a
                    commercial
                    area with high-end shops and a variety of food options. Our 5 star deluxe luxury property is 6 KM away
                    from
                    the Tribhuvan International Airport, about 1 KM from the famous tourist hub of Nepal.
                </p>
                <li><a href="/"><i class="fa-solid fa-angles-right"></i> Read More</a></li>
            </div>
        </div>
    </div>

    <div class="contents">
        <div class="row">
            <div class="blog">
                <div class="column">
                    <div class="card">
                        <a href="{{ url('/message') }}">
                            <img src="{{ asset('/assets/11.jpeg') }}" alt="blog" style="width:100%">
                        </a>
                        <h2 style="text-align: center;"><a href="{{ url('/') }}">Suites & Rooms</a></h2>
                        <p
                            style="font-size: 17px;  line-height: 1.4; color: #5f666a;  font-family: 'Playfair Display'; text-align:center;">
                            Comfort, elegance and convenience</p>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <a href="{{ url('/message') }}">
                            <img src="{{ asset('/assets/111.jpeg') }}" alt="blog" style="width:100%">
                        </a>
                        <h2 style="text-align: center;"><a href="{{ url('/') }}">Culinary Delights</a>
                        </h2>
                        <p
                            style="font-size: 17px;  line-height: 1.4; color: #5f666a;  font-family: 'Playfair Display'; text-align:center;">
                            Exquisite dining surrounded by history</p>

                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <a href="{{ url('/message') }}">
                            <img src="{{ asset('/assets/77.jpeg') }}" alt="Jane" style="width:100%">
                        </a>
                        <h2 style="text-align: center;"><a href="{{ url('/') }}">Conference & Events</a></h2>
                        <p
                            style="font-size: 17px;  line-height: 1.4; color: #5f666a;  font-family: 'Playfair Display'; text-align:center;">
                            Unparallel venue for outstanding events</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blogs">
        <div class="background">
            <h2 style="text-align:center;padding-top:40px;padding-bottom:20px; color:#335479">~~Blogs~~</h2>
            <div class="row">
                <div class="blog">
                    <div class="column">
                        <div class="card">
                            <a href="{{ url('/message') }}">
                                <img src="{{ asset('/assets/0.jpg') }}" alt="blog" style="width:100%">
                            </a>
                            <h2 style="text-align: center;"><a href="{{ url('/') }}">Luxury Reimagined: The Durbar
                                    Deluxe
                                    Experience</a></h2>

                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <a href="{{ url('/message') }}">
                                <img src="{{ asset('/assets/00.jpg') }}" alt="blog" style="width:100%">
                            </a>
                            <h2 style="text-align: center;"><a href="{{ url('/') }}">Top 3 festivals in Kathmandu
                                    valley</a></h2>

                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <a href="{{ url('/message') }}">
                                <img src="{{ asset('/assets/000.jpg') }}" alt="Jane" style="width:100%">
                            </a>
                            <h2 style="text-align: center;"><a href="{{ url('/') }}">Mardi Himal Trek</a></h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('partials.footer')
